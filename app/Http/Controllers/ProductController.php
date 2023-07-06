<?php
namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function tersedia()
    {
        $products = Product::where('status', 'Tersedia')->get();

        return response()->json($products);
    }
    public function index(){
        $products = Product::where('status', 'Tersedia')->get();
        $data = [
            'products' => $products
        ];
        return view ('products.index', $data);
    }
}
