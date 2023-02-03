<?php

namespace App\Http\Controllers;

use App\Factory\Shop\IShopFactory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index($shop)
    {
        $factory = app(IShopFactory::class);
        $service = $factory->make($shop);
        $products = $service->getProducts();
        return response()->json($products);
    }
}
