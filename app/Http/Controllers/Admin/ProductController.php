<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Category;
use App\Models\Stock;
use App\Http\Requests\ProductCreatePost;
use App\Http\Requests\ProductEditPost;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $flag = false;
        $suppliers = $categories = [];
        $count = 0;
        $genre = Category::all();
        if($request->category) {
            if($request->search) {
                $products = Product::where('category_id', '=', $request->category)->where(function($query) use ($request) {
                    $query->orWhere('name', 'like', '%' . $request->search . '%')
                        ->orWhere('isbn', 'like', '%' . $request->search . '%')
                        ->orWhere('author', 'like', '%' . $request->search . '%')
                        ->orWhere('company', 'like', '%' . $request->search . '%');
                })->paginate(20);
            } else {
                $products = Product::where('category_id', $request->category)
                    ->paginate(20);
            }
            $flag = true;
        } else {
            if($request->search) {
                $products = Product::where(function($query) use ($request) {
                    $query->orWhere('name', 'like', '%' . $request->search . '%')
                        ->orWhere('isbn', 'like', '%' . $request->search . '%')
                        ->orWhere('author', 'like', '%' . $request->search . '%')
                        ->orWhere('company', 'like', '%' . $request->search . '%');
                })->paginate(20);
                $flag = true;
            } else {
                $products = Product::paginate(20);
            }
        }
        $products->withPath('/admin/product?category=' . urlencode($request->category) . '&search=' . urlencode($request->search));
        foreach ($products as $product) {
            $suppliers[] = Supplier::select('name')->where('id', $product->supplier_id)->first();
            $categories[] = Category::select('name')->where('id', $product->category_id)->first();
        }
        return view('admin.product.index', [
            'products' => $products,
            'suppliers' => $suppliers,
            'categories' => $categories,
            'count' => $count,
            'flag' => $flag,
            'genre' => $genre
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

    public function create(ProductCreatePost $request)
    {
      $number = Product::orderBy('id', 'desc')->first()->id + 1;
      $filename = $request->file('img')->getClientOriginalName();
      $path = $request->file('img')->storeAs('public',$number . $filename);
      if($request->category_name) {
        Category::create([
          'name' => $request->category_name
        ]);
        Product::create([
          'category_id' => Category::orderBy('id', 'desc')->first()->id,
          'supplier_id' => $request->supplier_id,
          'name' => $request->name,
          'author' => $request->author,
          'company' => $request->company,
          'isbn' => $request->isbn,
          'img' => $number . $filename,
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
          'isbn' => $request->isbn,
          'img' => $number . $filename,
          'description' => $request->description,
          'price' => $request->price,
          'sales_price' => $request->sales_price,
        ]);
      }

      Stock::create([
        'product_id' => Product::orderBy('id', 'desc')->first()->id,
        'amount' => 0,
        'safety' => $request->safety
      ]);

      return redirect('/admin/product');
    }

    public function edit($id)
    {
      $product = Product::where('id', $id)->first();
      $categories = Category::all();
      $category = Category::where('id', $product->category_id)->first();
      $stock = Stock::where('product_id', $id)->first();
      return view('admin.product.edit', [
        'product' => $product,
        'categories' => $categories,
        'category' => $category,
        'stock' => $stock
      ]);
    }

    public function post(ProductEditPost $request)
    {
      Product::where('id', $request->id)->update([
        'name' => $request->product_name,
        'author' => $request->author,
        'company' => $request->company,
        'isbn' => $request->isbn,
        'description' => $request->description,
        'price' => $request->price,
        'sales_price' => $request->sales_price
      ]);
      if($request->img) {
        $filename = $request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs('public', $request->id . $filename);
        Product::where('id', $request->id)->update([
          'img' => $request->id . $filename
        ]);
      }
      if($request->category_name) {
        Category::create([
          'name' => $request->category_name
        ]);
        Product::where('id', $request->id)->update([
          'category_id' => Category::where('name', $request->category_name)->first()->id
        ]);
      } else {
        Product::where('id', $request->id)->update([
          'category_id' => $request->category_id
        ]);
      }
      Stock::where('product_id', $request->id)->update([
        'safety' => $request->safety
      ]);

      return redirect('/admin/product/edit/' . $request->id);
    }
}