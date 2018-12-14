<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Category;
use App\Models\Stock;

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

    public function add()
    {
      $categories = Category::select('id', 'name')->get();
      $suppliers = Supplier::select('id', 'name')->get();
      return view('admin.product.add', [
        'categories' => $categories,
        'suppliers' => $suppliers
      ]);
    }

    public function create(Request $request)
    {
      // TODO imgをstorageに追加する
      // TODO フォームリクエストでバリデーション
      if($request->category_name) {
        Category::create([
          'name' => $request->category_name
        ]);
        Product::create([
          'category_id' => Category::orderBy('created_at', 'desc')->first()->id,
          'supplier_id' => $request->supplier_id,
          'name' => $request->name,
          'author' => $request->author,
          'company' => $request->company,
          'img' => $request->img,
          'description' => $request->description,
          'price' => $request->price,
          'sales_price' => $request->sales_price,
        ]);
      } else {
        Product::create([
          'category_id' => $request->category_id,
          'supplier_id' => $request->supplier_id,
          'name' => $request->name,
          'author' => $request->author,
          'company' => $request->company,
          'img' => $request->img,
          'description' => $request->description,
          'price' => $request->price,
          'sales_price' => $request->sales_price,
        ]);
      }

      Stock::create([
        'product_id' => Product::orderBy('created_at', 'desc')->first()->id,
        'amount' => 0,
        'safety' => $request->safety
      ]);

      return redirect('/admin/product');
    }
}