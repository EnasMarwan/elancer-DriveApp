<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
   

<link rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/css/style2.css')}}">

<header>
    <!-- Header Start -->
   <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2">
                        <h3 style="color:#666">Library</h3>
                    </div>
                   

                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <!-- Main-menu -->
                        

                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>  
                                <ul id="navigation">  
                                @if (Route::has('login'))
                                    @auth
                                    <li><a href="{{ url('/upload') }}"> upload File</a></li>
                                    {{-- <li><a href="{{ url('/create') }}"> create Folder</a></li>
                                    <li><a href="{{ url('/createe') }}"> Add To Folder</a></li> --}}
                                    <li><a href="{{ url('/files') }}"> Files</a></li>
                                    <li >
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">Logout</a>
                                        <form action="{{ route('logout') }}" method="post" style="display: none;" id="logout">
                                            @csrf
                                        </form>
                                    </li>
                                       
                                    @else
                                    <li><a href="{{ route('login') }}"> Log in</a></li>
                
                                        @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}"> Register</a></li>
                                        @endif
                                    @endauth
                            @endif                            
                                </ul>
                            </nav>
                        </div>
                    </div> 
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
   </div>
    <!-- Header End -->
</header>

@yield('content')  


{{-- <!-- All JS Custom Plugins Link Here here -->
<script src="{{ asset('assets/front/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('assets/front/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/front/js/popper.min.js')}}"></script>
<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('assets/front/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/front/js/slick.min.js')}}"></script>
<!-- Date Picker -->
<script src="{{asset('assets/front/js/gijgo.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
<script src="{{asset('assets/front/js/animated.headline.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.magnific-popup.js')}}"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{asset('assets/front/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.sticky.js')}}"></script>

<!-- contact js -->
<script src="{{asset('assets/front/js/contact.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.form.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/front/js/mail-script.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{asset('assets/front/js/plugins.js')}}"></script> --}}


</html>
