<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;

class ProductosController extends Controller
{
    
    public function index(Category $category){

        $products = $category->products;
        $name = $category->name;

        return view('productos.category')->with(compact('name', 'products'));

    }

    public function show(Category $category, Product $product){

        $product = $product;
        $name = $category->name;

        return view('productos.show')->with(compact('name', 'product'));

    }


}
