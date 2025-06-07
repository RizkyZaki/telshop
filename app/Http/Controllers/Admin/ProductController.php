<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if ($user->role === 'seller') {
            $products = Product::with('category', 'user')->where('user_id', $user->id)->get();
        } else {
            $products = Product::with('category', 'user')->get();
        }

        return view('admin.pages.products.index', [
            'title' => 'Produk',
            'heading' => 'Daftar Semua Produk',
            'collection' => $products
        ]);
    }

    public function create()
    {
        return view('admin.pages.products.create', [
            'title' => 'Tambah Produk',
            'heading' => 'Form Tambah Produk',
            'category' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|file|max:2048',
            'status' => 'required|in:available,unavailable'
        ]);

        $validated['user_id'] = auth()->id();
        $validated['slug'] = Str::slug($request->name);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('product-images');
        }

        Product::create($validated);
        return redirect('/dashboard/products')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit($slug)
    {
        return view('admin.pages.products.update', [
            'title' => 'Edit Produk',
            'heading' => 'Form Edit Produk',
            'product' => Product::where('slug', $slug)->first(),
            'category' => Category::all()
        ]);
    }

    public function update(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->first();

        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|file|max:2048',
            'status' => 'required|in:available,unavailable'
        ]);

        $validated['slug'] = Str::slug($request->name);

        if ($request->file('image')) {
            if ($product->image) {
                Storage::delete($product->image);
            }
            $validated['image'] = $request->file('image')->store('product-images');
        }

        $product->update($validated);
        return redirect('/dashboard/products')->with('success', 'Produk berhasil diupdate');
    }

    public function destroy($slug)
    {
        $prod = Product::where('slug', $slug)->first();

        if ($prod) {
            $prod->delete();

            return response()->json([
                'status' => 'true',
                'title' => 'Success',
                'description' => 'Produk Berhasil Dihapus.',
                'icon' => 'success',
            ]);
        } else {
            return response()->json([
                'status' => 'false',
                'title' => 'Error',
                'description' => 'Kesalahan saat menghapus.',
                'icon' => 'error',
            ]);
        }
    }
}
