<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function homepageProducts() {
        $newProducts = Product::latest()->take(8)->get();
        return view('home', compact('newProducts'));
    }

    public function index($filter = null)
    {
        $products = Product::paginate(12);
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function filter($filter) {
        // simple filter placeholder
        $products = Product::paginate(12);
        return view('products.index', compact('products'));
    }

    public function brandFilter($brand) {
        $products = Product::where('name','like','%'. $brand .'%')->paginate(12);
        return view('products.index', compact('products'));
    }
}
