<x-app-layout>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">

        <div hidden class="container">
            <h1>Brian Perillo</h1>
        </div>

        <!-- Slider Styles -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
        <link href="css/slider.css" rel="stylesheet" type="text/css">
        <!-- Card Styles -->
        <link rel="stylesheet" href="{{ asset('css/index_card_product.css') }}">
        <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">


          
        <!-- Slider -->

        <x-slider-home>

        </x-slider-home>

        <!-- Productos destacados -->

          <div class="container" style="margin:150px auto">
            <x-destacados :products="$products">

            </x-destacados>
        </div>

    </div>

</x-app-layout>

    <!-- Slider Scripts -->
          
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script type="text/javascript">
            
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);
                        
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
            
    </script>

<script src="{{ asset('js/index_card_product.js') }}"></script>



  
