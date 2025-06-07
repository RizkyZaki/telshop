<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('client.homepage', [
            'title' => 'Beranda',
            'category' => Category::all(),
            'products' => Product::latest()->take(8)->get(),
        ]);
    }
}
