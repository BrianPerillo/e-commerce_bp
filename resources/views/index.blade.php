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
    
       
            </div>
                <!-- Slider -->
                <div class="slider-container">
                  <div class="slider-carousel">
                    <div class="slider">
                      <div class="slide-panel">
                        <img class="slide-img" src="https://cdn.citymapia.com/kottayam/puma-store/2758/businessbanner.jpg" alt="">
                        <div class="slide-box">
                          {{-- <h2 class="slide-text">Slide 1</h2> --}}
                        </div>
                        <div class="slide-overlay"></div>
                      </div>
                      <div class="slide-panel">
                        <img class="slide-img" src="https://www.wegotsoccer.com/mmwgs/team/landing/new/team-banner-nike.jpg" alt="">
                        <div class="slide-box">
                          {{-- <h2 class="slide-text">Slide 2</h2> --}}
                        </div>
                      </div>
                      <div class="slide-panel">
                        <img class="slide-img" src="https://www.rebelsport.co.nz/globalassets/2.-rebel-sport/002.-menu-pages/shop-by-brand-pages/under-armour/rock_digitalbanners_1470x560px2.jpg" alt="">
                        <div class="slide-box">
                          {{-- <h2 class="slide-text">Slide 3</h2> --}}
                        </div>
                      </div>
                      <div class="slide-panel">
                        <img class="slide-img" src="http://www.promotionalbridge.com/images/promotionalbridge/underarmourbanner.JPG" alt="">
                        <div class="slide-box">
                          {{-- <h2 class="slide-text">Slide 4</h2> --}}
                        </div>
                      </div>
                      <div class="slide-panel">
                        <img class="slide-img" src="https://i.pinimg.com/originals/ba/a8/7f/baa87fb210d26f7ea382506939d99acb.jpg" alt="">
                        <div class="slide-box">
                          {{-- <h2 class="slide-text">Slide 5</h2> --}}
                        </div>
                      </div>
                    </div>
    
                    <div class="slider-controls">
                      <span class="slider-arrow prev-slide">
                        <i class="material-icons">
                          keyboard_arrow_left
                        </i>
                      </span>
                      <span class="slider-arrow next-slide">
                        <i class="material-icons">
                          keyboard_arrow_right
                        </i>
                      </span>
                      <div class="slideshow-toggle">
                        <i class="material-icons play-slideshow">
                          play_arrow
                        </i>
                        <i class="material-icons pause-slideshow">
                          pause
                        </i>
                      </div>
                      <ul class="slide-selector">
                        <li class="slide-selected"></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                      </ul>
                    </div>
                  </div>
       
    
        <div class="slider-modal">
          <span class="slider-close">&times;</span>
          <div class="modal-slide"></div>
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


