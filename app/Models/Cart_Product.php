<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Cart;

class Cart_Product extends Model
{
    public $table = "cart_product";

    use HasFactory;

    public function cart(){

        return $this->belongsTo(Cart::class);

    }


    
}
