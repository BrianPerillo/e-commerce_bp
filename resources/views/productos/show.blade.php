<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-white">

        <div class="container" style="overflow: hidden">
            <h1>{{$name}}</h1>

            <br>

            {{-- Detalle del Producto --}}

            <div class="row d-flex justify-content-center" style="">

                <div class="col-md-4 p-0 m-3 product_show">

                    <div class="div_img">
                        <img class="p-2" src="{{$product->photo}}" alt="Remera Negra" style="width:350px;height:350px;margin:auto"><br>
                    </div>

                    <div class="p-3 short_description">

                        <div>
                            <p>{{$product->name}}</p>
                        </div>
                        
                        {{-- Botón agregar al Carrito --}}
                        <div>
                            <form action="{{route('agregar_al_carrito', $product) }}">
                                <button class="btn btn-primary">Agregar al carrito</button>
                            </form>
                        </div>

                    </div>


                </div>

                <div class="col-md-7 m-3 p-5 long_description">

                    <p>Descripción:</p>
                    <p>{{$product->description}}</p><hr style="border: 1px solid rgba(4, 0, 255, 0.062);">
                    <p>Talles:@foreach($product->sizes as $size) 
                        {{$size->name}},
                        @endforeach
                    </p><hr style="border: 1px solid rgba(4, 0, 255, 0.115);">
                    <div>
                        <p class="float-left mr-2">Colores Disponibles: </p>
                            <div class="float-left" style="margin-top: 6px">
                                @foreach ($product->colors as $color)
                                    <div class="float-left mr-1" style="width:12px;height:12px;background-color:{{$color->color}};border:1px solid black;border-radius:15px"></div> 
                                @endforeach
                            </div>
                        <br>
                    </div><hr style="border: 1px solid rgba(4, 0, 255, 0.178);">
                    <br>
                    <div class="float-right p-3" style="background-color:rgba(0, 0, 255, 0.055);border-radius:10px">
                        <p style="padding: 0px; margin:0px">Precio: ${{$product->price}}</p>
                    </div>
            
                </div>




            </div>

            
            {{-- Mensaje agregado al carrito --}}

            <div class="m-3 p-1">
                <p>
                       {{ Session::get('message') }}
                </p>
            </div>

        </div>


    </div>
</x-app-layout>