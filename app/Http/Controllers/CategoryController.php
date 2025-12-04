<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
        public function index()
    {
        $categories = Category::all();
        return view('category', compact('categories'));
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
