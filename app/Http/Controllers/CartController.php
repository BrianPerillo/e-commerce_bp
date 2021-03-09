<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Cart_Product;
use Illuminate\Support\Facades\URL;

class CartController extends Controller
{
    
    public function index(User $user){
        
        // Esta manera quedó descartada porque no podía usar el paginate por eso los trigo abajo con la típica consulta de eloquent. 
        // $cart = $user->cart;
        // $cart_products = $cart[0]->products;

        $cart = Cart::where('user_id', "=", "$user->id")->get()->first();
        $cart_id = $cart->id;

        $cart_products = Cart_Product::where('cart_id', "$cart_id")->paginate(5);

        return view('user.cart')->with(compact('cart_products'));

    }

    public function agregar_al_carrito(Product $product, Request $request){
        
        //Pregunto si el usuario NO tiene un carrito y de ser así se lo creo y agrego el producto:
        //IMPORTANTE: ACÁ HABÍA UN IF QUE PREGUNTABA SI YA TENÍA CARRITO ESO AHORA NO ES NECESARIO YA QUE SIEMPRE VA A TENER CARRITO UN USUARIO REGISTRADO,
        //YA QUE SE LE CREA AUTOMÁTICAMENTE AL MOMENTO DE REGISRARSE.


        //Primero me aseguro que el producto que quiere agregar no exista en el carrito.

            //Recupero el carrito del usuario:
            $cart = auth()->user()->cart[0];

            //Recupero los productos de ese carrito:
            $cart_products = $cart->products;
            
            //Hago un foreach en el que consulto coincidencias
            foreach($cart_products as $cart_product){

                $product_id = $cart_product->product_id;
                $color_id = $cart_product->color_id;
                $size_id = $cart_product->size_id;

                
                //Si el producto que está queriendo agregar ya existe en el carrito (Hay coincidencia):
                if($product_id == $product->id && $color_id == $request->color && $size_id == $request->size){


                    $message = "Este producto ya existe en tu carrito con el mismo talle y color. Podés editar la cantidad desde tu carrito!";
                    $type = "warning";

                    session()->forget('message'); 
                    session()->forget('type'); 

                    session()->put('message', "$message");
                    session()->put('type', "$type");

                    return Redirect::back();

                }

            }


                $cart_product = new Cart_Product();

                $cart_product->product_id = $product->id;
                $cart_product->cart_id = $cart->id;
                $cart_product->quantity = $request->quantity;
                $cart_product->total_price = $request->quantity*$product->price;
                $cart_product->color_id = $request->color;
                $cart_product->size_id = $request->size;
                $cart_product->save();
            

                $message = "Producto Agregado al carrito!";
                $type = "success";

                session()->forget('message'); 
                session()->forget('type'); 
                session()->put('message', "$message");
                session()->put('type', "$type");


                return Redirect::back();
           
    }



}
