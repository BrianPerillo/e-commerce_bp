<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\Gender;

class ProductosController extends Controller
{
    
    //ESTE MÉTODO QUEDA COMENTADO PORQUE AHORA SE ENCARGA DE ESTO EL COMPONENTE FILTER DE LIVEWIRE.
    // public function index(Category $category, Gender $gender){ 

    //     // $products = $category->products;
    //     $products = Product::where('category_id', '=', "$category->id")->where('gender_id', '=', "$gender->id")->paginate(9);
    //     $name = $category->name;

    //     //Guardo subcategorias (para los filtros):
    //     $subcategories = Category::find("$category->id")->subcategories;

    //     return view('productos.category')->with(compact('name', 'products', 'subcategories'));

    // }

    public function show(Category $category, Product $product){

        $product = $product;
        $name = $category->name;

        return view('productos.show')->with(compact('name', 'product'));

    }


}
