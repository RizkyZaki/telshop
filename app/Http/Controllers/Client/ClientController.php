<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.homepage', [
            'title' => 'Beranda',
            'category' => Category::all(),
            'products' => Product::latest()->take(8)->get(),
        ]);
    }
    public function products()
    {
        return view('client.products', [
            'title' => 'Semua Produk',
            'products' => Product::latest()->with('category')->get(),
        ]);
    }
    public function detailProduct(string $slug)
    {
        $prod = Product::where('slug', $slug)->with('user')->firstOrFail();
        return view('client.product', [
            'title' => $prod->name,
            'product' => $prod,
        ]);
    }
    public function detailCategory(string $slug)
    {
        $cat = Category::where('slug', $slug)->with('products')->firstOrFail();
        return view('client.category', [
            'title' => $cat->name,
            'category' => $cat,
        ]);
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = Product::where('name', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
            ->latest()
            ->with('category')
            ->get();

        return view('client.result', [
            'title' => $search,
            'result' => $products,
        ]);
    }
}
