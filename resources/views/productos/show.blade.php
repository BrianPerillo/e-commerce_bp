<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4 bg-white">

        <div class="container" style="overflow: hidden">
            <h1>Detalle</h1>

            {{-- Mensaje agregado al carrito --}}

            @if(session()->has('message'))
                <div class="alert alert-{{session()->get('type')}} alert-dismissible fade show" role="alert">
                    <p>
                        {{ session()->get("message") }}
                    </p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @php session()->forget('message'); session()->forget('type'); @endphp

            {{-- Detalle del Producto --}}

            <div class="row d-flex justify-content-center">

                <div class="col-md-5 p-0 m-3" style="border-right: 1px solid rgb(196, 196, 196)">

                    <div class="">
                        <img class="p-2" src="{{$product->photo}}" alt="Remera Negra" style="width:350px;height:350px;margin:auto"><br>
                    </div>

                    <div class="p-3">

                        <div>
                            <p>{{$product->name}}</p>
                        </div>                  

                    </div>


                </div>

                {{-- Card Formulario Carrito --}}
                
                    <div id="add_cart_card" class="col-md-6 m-3 p-3">

                        <form class="col-md-12" action="{{route('agregar_al_carrito', $product) }}">
                            {{-- Color --}}
                            <div class="col mx-auto p-2 mb-3" style="border-radius:10px;" >
                                <label for="color">Seleccioná el color</label>
                                <div>
                                    @foreach($product->colors as $color) 
                                        <input id="{{$color->color}}" type="radio" name="color" value="{{$color->id}}" style="display: none">
                                        <label for="{{$color->color}}"><div style="background-color: {{$color->color}};border-radius:20px"></div></label>
                                    @endforeach
                                </div>
                            </div>
                            {{-- Talle --}}
                            <div class="col mx-auto p-2 mb-3" style="border-radius:10px;">
                                <label>Seleccioná el talle</label>
                                <select class="form-control" name="size">
                                    @foreach($product->sizes as $size) 
                                    <option value="{{$size->id}}">{{$size->name}}</option>
                                    {{-- <label class="mr-2 label_size" for="{{$size->name}}">{{$size->name}}<input hidden type="radio" name="size" id="{{$size->name}}" value="{{$size->name}}" style=""></label> --}}
                                    @endforeach
                                </select>
                            </div>
                            {{-- Cantidad --}}
                            <div class="col mx-auto p-2 mb-4" style="border-radius:10px;">
                                <label for="color">Elegí la cantidad</label>
                                <div>
                                    <input class="form-control" type="number" name="quantity" id="" value="1"  min="1"> 
                                </div>
                            </div>
                            <div class="float-right p-3 mb-3" style="">
                                <p style="padding: 0px; margin:0px;"><strong>Precio: ${{$product->price}}</strong></p>
                            </div>

                            <div class="col mx-auto">
                                <button type="submit" class="form-control btn btn-primary">Agregar al carrito</button>
                            </div>
                        </form>
                
                    </div>


            </div>

            {{-- Descripción del producto --}}

            <div class="m-3 mt-5 mb-5 p-3" style="border-radius:5px;background-color: rgba(241, 241, 241, 0.438)">
                <p><small>Descripción:</small></p>
                <p class="ml-3"><small>{{$product->description}}</small></p>
            </div>


        {{-- MENÚ PESTAÑAS CON DESCRIPCIÓN, MEDIOS DE PAGO ETC --}}


            <div class="">
                <!-- Tab items -->
                <div class="tabs">
                  <div class="tab-item active">
                    <i class="fas fa-shopping-bag"></i>
                    Medios de Pago
                  </div>
                  <div class="tab-item">
                    <i class="fas fa-paper-plane"></i>
                    Envíos
                  </div>
                  <div class="tab-item">
                    <i class="far fa-question-circle"></i>
                    Ayuda
                  </div>
                  <div class="line"></div>
                </div>
              
                <!-- Tab content -->
                <div class="tab-content">
                    <div class="tab-pane active">
                        <h2 style="display: none">Medios de Pago</h2>
                        <p><i class="fas fa-shopping-bag"></i>
                            Medios de Pago - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="tab-pane">
                        <h2 style="display: none">Envíos</h2>
                        <p><i class="fas fa-paper-plane"></i>
                            Envíos - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="tab-pane">
                        <h2 style="display: none">Ayuda</h2>
                        
                        <p><i class="far fa-question-circle"></i>
                            Ayuda - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>


        </div>


    </div>
</x-app-layout>

<script>
    
    // MENÚ DE PESTAÑAS SCRIPT:

    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const tabs = $$(".tab-item");
    const panes = $$(".tab-pane");

    const tabActive = $(".tab-item.active");
    const line = $(".tabs .line");

    line.style.left = tabActive.offsetLeft + "px";
    line.style.width = tabActive.offsetWidth + "px";

    tabs.forEach((tab, index) => {
    const pane = panes[index];

    tab.onclick = function () {


        line.style.left = this.offsetLeft + "px";
        line.style.width = this.offsetWidth + "px";

        $(".tab-item.active").classList.remove("active");
        $(".tab-pane.active").classList.remove("active");

        this.classList.add("active");
        pane.classList.add("active");
    };
    });

</script>