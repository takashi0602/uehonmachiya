<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Collection;

class TopController extends Controller
{
    public function index(Request $request)
    {
        $categories =  [];
        $count = 0;
        $flag = false;
        if($request->category) {
            if($request->search) {
                $products = Product::where('category_id', '=', $request->category)->where(function($query) use ($request) {
                        $query->orWhere('name', 'like', '%' . $request->search . '%')
                            ->orWhere('isbn', 'like', '%' . $request->search . '%')
                            ->orWhere('author', 'like', '%' . $request->search . '%')
                            ->orWhere('company', 'like', '%' . $request->search . '%');
                })->orderby('id', 'desc')->paginate(15);
            } else {
                $products = Product::where('category_id', $request->category)
                    ->orderby('id', 'desc')->paginate(15);
            }
            $flag = true;
        } else {
            if($request->search) {
                $products = Product::where(function($query) use ($request) {
                    $query->orWhere('name', 'like', '%' . $request->search . '%')
                        ->orWhere('isbn', 'like', '%' . $request->search . '%')
                        ->orWhere('author', 'like', '%' . $request->search . '%')
                        ->orWhere('company', 'like', '%' . $request->search . '%');
                })->orderby('id', 'desc')->paginate(15);
                $flag = true;
            } else {
                $products = Product::orderby('id', 'desc')->paginate(15);
            }
        }
        $products->withPath('/?category=' . urlencode($request->category) . '&search=' . urlencode($request->search));
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
