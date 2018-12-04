<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Category;
class ProductController extends Controller
{
    public function index()
    {
        $suppliers = [];
        $categories = [];
        $count = 0;
        $products = Product::select("id","name","author","price","sales_price","supplier_id","category_id")->get();
        foreach ($products as $product) {
            $suppliers[] = Supplier::select('name')->where('id', $product->supplier_id)->first();
        }
        foreach ($products as $product)
        {
            $categories[] = Category::select('name')->where('id', $product->category_id)->first();
        }

        return view('admin.product.index', [
            'products' => $products,
            'suppliers' => $suppliers,
            'categories' => $categories,
            'count' => $count
        ]);
    }
}