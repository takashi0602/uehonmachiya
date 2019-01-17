<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class TopController extends Controller
{
    public function index(Request $request)
    {
        $categories = [];
        $count = 0;
        $flag = false;
        $products = Product::orderby('id', 'desc')->get();
        if($request->id) {
            if($request->search) {
                $products = Product::where('category_id', $request->id)
                    ->where(function($query) use ($request) {
                        $query->orWhere('name', 'like', '%' . $request->search . '%')
                            ->orWhere('isbn', 'like', '%' . $request->search . '%')
                            ->orWhere('author', 'like', '%' . $request->search . '%')
                            ->orWhere('company', 'like', '%' . $request->search . '%');
                })->get();
                $flag = true;
            } else {
                $products = Product::where('category_id', $request->id)->get();
                $flag = true;
            }
        } else {
            if($request->search) {
                $products = Product::where(function($query) use ($request) {
                    $query->orWhere('name', 'like', '%' . $request->search . '%')
                        ->orWhere('isbn', 'like', '%' . $request->search . '%')
                        ->orWhere('author', 'like', '%' . $request->search . '%')
                        ->orWhere('company', 'like', '%' . $request->search . '%');
                })->get();
                $flag = true;
            }
        }
        foreach ($products as $product) {
            $categories[] = Category::where('id', $product->category_id)->first();
        }
        $genre = Category::all();
        return view('user.top', [
            'products' => $products,
            'categories' => $categories,
            'count' => $count,
            'genre' => $genre,
            'flag' => $flag
        ]);
    }
}
