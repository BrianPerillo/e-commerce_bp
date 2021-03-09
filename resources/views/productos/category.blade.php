<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-4 bg-white">

        <div class="container" style="overflow: hidden">
            <h1>{{$name}}</h1>
            <br>

            <div class="row">

                {{-- Columna para Filtros --}}

                <div class="col-md-3">

                    <div class="col-md-12">
                        <h2>Filtros</h2>

                        <form action="">
                            
                            @foreach($subcategories as $subcategory)
                                <input id="{{$subcategory->name}}" type="radio" name="subcategoria" value="{{$subcategory->id}}">
                                <label for="{{$subcategory->name}}">{{$subcategory->name}}</label>
                                <br>
                            @endforeach

                        </form>
                    </div>

                </div>

                 {{-- Columna para resultados --}}

                <div class="col-md-9">

                    <div class="row mb-5">
                        @foreach ($products as $product)
                            <div class="col-md-4 p-2">
                                <div class="col-md-12 p-2 product_show">
                                    <a class="" href="{{route('productos.show', [$product->category , $product])}}" style="" >
                                        <div>
                                            <div class="p-2 div_img">
                                                <img src="{{$product->photo}}" alt="Remera Negra" style="width:200px;height:200px;margin:auto;"><br>
                                            </div>
                                            <div class="p-2 short_description">
                                                <div>
                                                    <p>{{$product->name}}</p>
                                                </div>
                                                <div>
                                                    <p class="float-left mr-2">Colores Disponibles: </p>
                                                        <div class="float-left" style="margin-top: 6px">
                                                            @foreach ($product->colors as $color)
                                                                <div class="float-left mr-1" style="width:12px;height:12px;background-color:{{$color->color}};border:1px solid black;border-radius:15px"></div> 
                                                            @endforeach
                                                        </div>
                                                    <br><br>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>
            
            <div>
                {{$products->links()}}
            </div>

        </div>


    </div>
</x-app-layout>