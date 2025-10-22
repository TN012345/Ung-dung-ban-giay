<?php
namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('blogs.index', compact('blogs'));
    }

    public function show($slug)
    {
        $post = Blog::where('slug', $slug)->firstOrFail();
        return view('blogs.show', compact('post'));
    }
}
