<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12 bg-white">

        <div class="container" style="overflow: hidden">
            <h1>{{"Carrito"}}</h1>

            @if(sizeof($cart_products)>0)

            <div class="col mb-1" style="overflow:hidden">
            
                <div class="row mr-3">
                    <div class="col">
                        <p class="text-center"></p>
                    </div>

                    <div class="col">
                        <p class="text-center">Producto</p>
                    </div>
                    
                    <div class="col">
                        <p class="text-center">Cantidad</p>
                    </div>
                    
                    <div class="col">
                        <p class="text-center">Color</p>
                    </div>
                    
                    <div class="col">
                        <p class="text-center">Talle</p>
                    </div>

                    <div class="col mr-3">
                        <p class="text-center">Total</p>
                    </div>

                    <div class="" style="display:none">
                         <div class="mr-2 mt-1 mb-1">
                            <button class="btn btn-danger">
                                    <span><i class="fas fa-trash-alt"></i></span>
                             </button>
                            </div>
                        <div class="mr-2 mt-2 mb-1">
                            <button class="btn btn-primary">
                                <span class="fas fa-edit" style="font-size: 14px"></span>
                            </button>
                        </div>
                    </div>

                </div>

            </div>

            <hr>

                @foreach ($cart_products as $cart_product) 

                        <div class="col mb-1" style="overflow:hidden">

                            <div class="row">
                                <!-- Cover -->
                                    <div class="col" style="float:left;margin-right:30px">
                                        <img src="{{$cart_product->product_detail->photo}}" style="width:70px;">
                                    </div>

                                    <div class="col" style="float:left;margin-top:30px">
                                        <p>
                                            {{$cart_product->product_detail->name}}
                                        </p>
                                    </div>

                                    <div class="col">
                                        <p class="text-center" style="margin-top:30px">
                                            {{$cart_product->quantity}}
                                        </p>
                                    </div>

                                    <div class="col d-flex justify-content-center">
                                        <div style="margin-top:30px;background-color:{{$cart_product->color->color}};border-radius:20px;width:22px;height:22px"></div>
                                    </div>

                                    <div class="col">
                                        <p class="text-center" style="margin-top:30px">
                                            {{$cart_product->size->name}}
                                         </p>
                                    </div>

                                    <div class="col">
                                        <p class="text-center" style="margin-top:30px">
                                            {{$cart_product->total_price}}
                                        </p>
                                    </div>

                                    <div class="">
                                        <div class="mr-2 mt-1 mb-1">
                                            <button class="btn btn-danger">
                                                 <span><i class="fas fa-trash-alt"></i></span>
                                             </button>
                                           </div>
                                        <div class="mr-2 mt-2 mb-1">
                                            <button class="btn btn-primary">
                                                <span class="fas fa-edit" style="font-size: 14px"></span>
                                            </button>
                                        </div>
                                    </div>
                             </div>
                        </div>

                        <hr>

                @endforeach

            @else
            
            <div class="p-4">
                <p> - Aún no hay productos en el carrito </p>  
            </div>
                
            @endif

            <div class="p-2">
                {{$cart_products->links()}}
            </div>

        </div>

    </div>

</x-app-layout>