<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.products.index', [
            'title' => 'Produk',
            'heading' => 'Daftar Semua Produk',
            'products' => Product::all()
        ]);
    }

    public function create()
    {
        return view('pages.products.create', [
            'title' => 'Tambah Produk',
            'heading' => 'Form Tambah Produk'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'image|file|max:2048'
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('product-images');
        }

        Product::create($validated);
        return redirect('/dashboard/products')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit($id)
    {
        return view('pages.products.edit', [
            'title' => 'Edit Produk',
            'heading' => 'Form Edit Produk',
            'product' => Product::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'image|file|max:2048'
        ]);

        if ($request->file('image')) {
            if ($product->image) {
                Storage::delete($product->image);
            }
            $validated['image'] = $request->file('image')->store('product-images');
        }

        $product->update($validated);
        return redirect('/dashboard/products')->with('success', 'Produk berhasil diupdate');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image) {
            Storage::delete($product->image);
        }
        $product->delete();
        return redirect('/dashboard/products')->with('success', 'Produk berhasil dihapus');
    }
}
