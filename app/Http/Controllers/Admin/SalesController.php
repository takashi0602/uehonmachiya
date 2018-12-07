<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sales;
class SalesController extends Controller
{
    public function index()
    {
        $products = [];
        $count = 0;
        $sales = Sale::select("id","date","product_id","amount","total","money","flag","buyer")->get();
        foreach ($sales as $sale) {
            $products[] = Product::select('name')->where('id', $sales->product_id)->first();
        }
        return view('admin.sales', [
            'sales' => $sales,
            'products' => $products,
            'count' => $count
        ]);

    }

}
