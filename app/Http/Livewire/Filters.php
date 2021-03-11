<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Category;
use App\Models\Gender;
use App\Models\Product;
use App\Models\Subcategory;
use Livewire\WithPagination;

class Filters extends Component
{
    
    use WithPagination;

    public $name;
    public $subcategories;
    public $products;


    public function index(){


    }

    


    public function render(Category $category, Gender $gender)
    {
        // $products = $category->products;
        $this->products = Product::where('category_id', '=', "$category->id")->where('gender_id', '=', "$gender->id")->paginate(9);
        $this->name = $category->name;
        
        //Guardo subcategorias (para los filtros):
        $category = Category::find("$category->id");
        
        $this->subcategories = Subcategory::where('category_id', '=', "$category->id")->get()->all();
        
        return view('livewire.filters', ['name'=>$this->name, 'subcategories'=> $this->subcategories, 'products'=> $this->products]);
    }
}
