<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    
    public function categories()
    {
        $categories = Category::all();
        return view('frontend.categories', compact('categories'));
    }

    public function productsByCategory(Category $category)
    {
        $products = $category->products()->latest()->paginate(12); // Assuming relationship exists
        return view('frontend.products', compact('category', 'products'));
    }
}
