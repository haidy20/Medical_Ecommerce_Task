<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // ممكن تعرض هنا تصنيفات أو منتجات مميزة مثلاً
        $products = Product::all();  // تجيب كل المنتجات
        return view('customer.home', compact('products'));
    }


    public function categories()
    {
        $categories = Category::all();
        return view('customer.categories', compact('categories'));
    }

    public function productsByCategory(Category $category)
    {
        $products = $category->products()->latest()->paginate(12); // Assuming relationship exists
        return view('customer.products', compact('category', 'products'));
    }
}
