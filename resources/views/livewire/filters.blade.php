<div>


            <div class="container" style="overflow: hidden">
                    <h1>{{$name}}</h1>
                    <br>

                    <div class="row">

                        {{-- Columna para Filtros --}}

                        <div class="col-md-3 p-3 pl-4" style="height:100%;border-right:1px solid rgb(224, 224, 224)">

                            <h2 class="mb-4 pl-3" style="font-size: 30px">Filtros</h2>

                            <div class="col-md-12 mb-5">
                                <h4 class="mb-3" style="font-size: 22px">Subcategoría</h4>
                                    @foreach($subcategories as $subcategory)
                                        <button class="filter_button mb-2" id="subcategory" wire:click="filterSubcategory({{$subcategory->id}})" type="submit">
                                            @if($subcategorySelected==$subcategory->id)
                                                <p class="m-0 ml-2"  style="font-size: 18px;font-weight: bold;">{{$subcategory->name}}<span class="ml-2" style="color:red">x</span></p>
                                            @else 
                                                <p class="m-0 ml-2">{{$subcategory->name}}</p>
                                            @endif
                                        </button>
                                        <br>
                                    @endforeach
                            </div>

                            <div class="col-md-12 mb-5">
                                <h4 class="mb-3" style="font-size: 22px">Talle</h4>
                                    @foreach($sizes as $size)
                                        <button class="filter_button mb-2" id="size" wire:click="filterSize({{$size->id}})" type="submit">
                                            @if($sizeSelected==$size->id) 
                                                <p class="m-0 ml-2" style="font-size: 18px;font-weight: bold;">{{$size->name}}<span class="ml-2" style="color:red">x</span></p>
                                            @else 
                                                <p class="m-0 ml-2">{{$size->name}}</p>
                                            @endif
                                            
                                        </button>
                                        <br>
                                    @endforeach
                            </div>

                        </div>

                        {{-- Columna para resultados --}}

                        <div class="col-md-9">
   
                            <div class="row mb-5">
                               
                                @foreach ($products as $product)
                                    <div class="col-md-4 p-2">
                                        <div class="col-md-12 p-2">
                                            {{-- <div id="">                     --}}
                                                <div class="product">
                                                        <div class="info-large">
                                                            <h4>PRINTED DRESS</h4>
                                                            <div class="sku">
                                                                PRODUCT SKU: <strong>89356</strong>
                                                            </div>
                                                            
                                                            <div class="price-big">
                                                                <span>$43</span> $39
                                                            </div>
                                                            
                                                            <h3>COLORES</h3>
                                                            <div class="colors-large">
                                                                <ul>
                                                                    <li><a href="" style="background:#222"><span></span></a></li>
                                                                    <li><a href="" style="background:#6e8cd5"><span></span></a></li>
                                                                    <li><a href="" style="background:#9b887b"><span></span></a></li>
                                                                    <li><a href="" style="background:#44c28d"><span></span></a></li>
                                                                </ul> 
                                                            </div>
                                                
                                                            <h3>TALLES</h3>
                                                            <div class="sizes-large">
                                                                <span>XS</span>
                                                                <span>S</span>
                                                                <span>M</span>
                                                                <span>L</span>
                                                                <span>XL</span>
                                                                <span>XXL</span>
                                                            </div>
                                                            
                                                            <button class="add-cart-large">Add To Cart</button>                          
                                                                        
                                                        </div>
                                                        
                                                        <div class="make3D">
                                                            <div class="p-3 product-front">
                                                                <div class="shadow"></div>
                                                                <img src="{{$product->photo}}"  style="width:200px;height:200px;margin:auto;"alt="" />
                                                                <div class="image_overlay"></div>
                                                                {{-- <div class="add_to_cart">Add to cart</div> --}}
                                                                <a href="{{route('productos.show', [$product->category, $product])}}" class="view_gallery">Detalle</a>
                                                                <div class="stats">        	
                                                                    <div class="p-3 stats-container">
                                                                        <span class="product_price">${{$product->price}}</span>
                                                                        <span class="product_name"></span>    
                                                                        <p style="width: 60%">{{$product->name}}</p>                                            
                                                                        
                                                                        <div class="product-options pt-2">
                                                                            <strong>TALLES</strong>
                                                                            <span>
                                                                                @foreach ($product->sizes as $size)
                                                                                    {{$size->name}}
                                                                                @endforeach
                                                                            </span>
                                                                            <strong>COLORES</strong>
                                                                            <div class="colors">
                                                                                @foreach ($product->colors as $color)
                                                                                    <div class="c float-left mr-1" style="width:14px;height:14px;background-color:{{$color->color}};border:1px solid #e2e2e2;border-radius:15px"></div> 
                                                                                @endforeach
                                                                            </div>
                                                                        </div>                
                                                                    </div>                         
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="product-back">
                                                                <div class="shadow"></div>
                                                                <div class="carousel">
                                                                    <ul class="carousel-container">
                                                                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/8.jpg" alt="" /></li>
                                                                        <li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/7.jpg" alt="" /></li>
                                                                    </ul>
                                                                    <div class="arrows-perspective">
                                                                        <div class="carouselPrev">
                                                                            <div class="y"></div>
                                                                            <div class="x"></div>
                                                                        </div>
                                                                        <div class="carouselNext">
                                                                            <div class="y"></div>
                                                                            <div class="x"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flip-back">
                                                                    <div class="cy"></div>
                                                                    <div class="cx"></div>
                                                                </div>
                                                            </div>	  
                                                        </div>	
                                                      
                                                </div>
                                                
                                            {{-- </div> --}}
                                        </div>
                                    </div>

                                    {{-- <div class="col-md-4 p-2">
                                        <div class="col-md-12 p-2 product_show">
                                                <a class="" href="{{route('productos.show', [$product->category, $product])}}" style="">
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
                                    </div> --}}
                                @endforeach
                            </div>

                        </div>

                    </div>
                    
                    <div>
                        {{$products->links()}}
                    </div>

                </div>


            </div>


<div>
