<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Cart_Product;


class CartController extends Controller
{
    
    public function index(User $user){
        

        return view('user.cart');
    }

    public function agregar_al_carrito(Product $product){

        $user_id = auth()->user()->id;

        $user = User::find($user_id);

        $tiene_cart = $user->cart;

        //Pregunto si el usuario no tiene un carrito y de ser así que se lo cree:
        if(sizeof($tiene_cart)==0){  
            
            $cart = new Cart();

            $cart->user_id = $user_id;
            $cart->save();

            $cart_product = new Cart_Product();
            $cart_product->product_id = $product->id;
            $cart_product->cart_id = $cart->id;
            $cart_product->quantity = 1;
            $cart_product->total_price = 1*$product->price;
            $cart_product->save();
        }

        //En caso que ya tenga un carrito, que agregue el producto al cart_product sin crearle otro carrito:
        else{
            //Recupero el carrito del usuario:
            $cart_id = auth()->user()->cart[0]->id;

            $cart_product = new Cart_Product();

            $cart_product->product_id = $product->id;
            $cart_product->cart_id = $cart_id;
            $cart_product->quantity = 1;
            $cart_product->total_price = 1*$product->price;
            $cart_product->save();
        }

        return Redirect::back()->with('message', 'Producto Agregado!');
    }

}
