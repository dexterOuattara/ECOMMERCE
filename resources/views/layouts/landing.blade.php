<!DOCTYPE html>
<!--
Template Name: City Infra
Version: 1.0.0
Author: 
Website: 
Purchase:
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="fr">
<!--[endif]-->


<head>
    <meta charset="utf-8" />
    <title> House </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="City Infra" />
    <meta name="keywords" content="City Infra" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--start theme style -->

    <link  rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/meanmenu.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slicknav.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('venobox/css/venobox.css') }}"  />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/camera.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"> 
            <img src="{{url('images/preloader.gif')}}"  id="preloader_image" alt="loader">
        </div>
    </div>

    <!-- tb header Start -->
    <header>
        <div class="serach-header">

            <div class="searchbox">
                <button class="close">×</button>
                <form>
                    <input type="search" placeholder="Search …">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="topheader_bg">
                        <div class="top_header_add hidden-xs hidden-sm">
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> + 1800. 12345. 67890</li>
                                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> mail@website.com</a></li>
                            </ul>
                        </div>

                        <!-- Social Icon -->
                      <div class="social_links_wrapper">
                            <div class="social_links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                    <li class="hidden-xs"><a href="#"><i class="fa fa-youtube-square"></i></a></li>
                                    <li class="hidden-xs"><a href="#"><i class="fa fa-pinterest-square"></i></a></li>

                                </ul>
                            </div>

                            <!-- /.Social Button -->
                            <div class="pst_btn_form hidden-xs hidden-sm">
                                <ul>
                                    @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('SE CONNECTER') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('INSCRIPTION') }}</a>
                                    </li>
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                                </ul>
                            </div>
							 <div class="header_btn header_btn_full visible-xs visible-sm response_add_property">

                              <a href="add_listing.html"><i class="fa fa-plus"></i> add listing</a>

                           </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--bottom header wrappper start-->
        <div class="transparent-menu header-area hidden-menu-bar stick">

            <div class="container">
                <div class="row">
                    <div class="bt_main_menu_wrapper">
                        <div class="main-menu-wrapper clear-fix">

                            <div class="logo float-left">
                                <a href="/"><img src="images/top_logo.png" alt="LOGO"></a>
                            </div>

                            <div class="serach-header bt_search_wrapper_respnsive hidden-lg hidden-md">
                                <button class="searchd"><i class="fa fa-search"></i></button>
                                <div class="searchbox">
                                    <button class="close">×</button>
                                    <form>
                                        <input type="search" placeholder="Search …">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="sc_navigation hidden-sm hidden-xs">
                            <!--search -->

                            <!-- search code end -->
                            <nav id="primary-nav" class="dropdown nav_right_margin">
                                <ul class="dropdown menu cart_dropdown_wrapper">
                                    <li><a href="#" title="">Acheter</a>
                                        <ul class="dropdown_header">
                                            <li><a href="/appartments" title=""> Appartements</a></li>
                                            <li><a href="/immeubles" title=""> Immeubles</a></li>
                                            <li><a href="/maisons" title=""> Maisons</a></li>
                                            <li><a href="/terrains" title=""> Terrains</a></li>
                                        </ul>
                                    </li>
                                   
                                    <li class="dropdown"><a href="#" title="">Louer</a>
                                        <ul class="dropdown_header">
                                            <li><a href="property_listing_map.html" title=""> Appartements</a>

                                            </li>
                                            <li><a href="property_listing_sidebar.html" title=""> Maisons</a>
                                        </ul>
                                    </li>

                                    <li><a href="#" title="">Deposer Une Annonce</a>
                                        
                                        <ul class="dropdown_header">

                                            <li><a href="#" title="">Particulier
                                                <span><i class="fa fa-caret-right"></i>
                                                         </span></a>

                                                   <ul class="dropdown-menu-right">
                                                       <li>
                                                           <a href="property_sell_1.html"> Menu 1</a>
                                                       </li>
                                                       <li>
                                                           <a href="property_sell_2.html">Menu 2</a>
                                                       </li>
                                                       <li>
                                                           <a href="property_rent_1.html">Menu 3</a>
                                                       </li>
                                                       <li>
                                                           <a href="property_rent_2.html">Menu 4</a>
                                                       </li>
   
                                                   </ul>

                                               </li>
                                               <li><a href="property_listing_sidebar.html" title=""> Professionel</a>

                                        </ul>
                                    </li>

                                    <li>
                                        <button class="searchd"><i class="fa fa-search"></i></button>
                                    </li>
									<li class="caret_btn">
                                        <a href="#"><i class="fa fa-shopping-basket"></i><span>2</span></a>
                                        <ul>
                                            <li>
                                                <div class="cc_cart_wrapper1 menu-button">
                                                    <div class="cc_cart_img_wrapper">
                                                        <img src="images/insta_1.png" alt="cart_img" />
                                                    </div>
                                                    <div class="cc_cart_cont_wrapper">
                                                        <h4><a href="#">38/955 Kilda Road</a></h4>
                                                        <p>1 <span> $145 </span> </p>
                                                        <h5><i class="fa fa-times"></i></h5>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cc_cart_wrapper1 menu-button">
                                                    <div class="cc_cart_img_wrapper">
                                                        <img src="images/insta_2.png" alt="cart_img" />
                                                    </div>
                                                    <div class="cc_cart_cont_wrapper">
                                                        <h4><a href="#">30/11 Degves Street</a></h4>
                                                        <p>1 <span> $145 </span></p>
                                                        <h5><i class="fa fa-times"></i></h5>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cc_cart_wrapper1 menu-button">
                                                    <div class="cc_cart_img_wrapper">
                                                        <img src="images/insta_3.png" alt="cart_img" />
                                                    </div>
                                                    <div class="cc_cart_cont_wrapper">
                                                        <h4><a href="#">11/1 Oliva Stret</a></h4>
                                                        <p>1 <span> $145 </span></p>
                                                        <h5><i class="fa fa-times"></i></h5>
                                                    </div>
                                                </div>
                                                <div class="btm_cart_wrapper">
                                                    <h5>$450.00</h5>
                                                    <p>3 items</p>
                                                </div>
                                                <div class="cart_checkout_btn">

                                                    <a href="checkout.html">checkout</a>

                                                </div>
                                            </li>

                                        </ul>
                                    </li>
									<li>
										 <div class="header_btn">
											
													<a href="add_listing.html"><i class="fa fa-plus"></i> Mes Favoris</a>
												
										</div>
									</li>

                                </ul>
                            </nav>
 
                        </div>
                        <!-- /.main-menu-wrapper -->
                        <!-- mobile menu area start -->
                        <div class="mobile-menu-area visible-sm visible-xs">
                            <div class="container">
                                <div class="row">

                                    <div class="col-xs-12 cc_menu_top_margin">
                                        <!-- mobile menu start -->
                                        <div class="mobile-menu">
                                            <nav>
                                                <ul class="nav">
                                                    <li><a href="#" title="">home</a>
                                                        <ul>
                                                            <li><a href="home_slider.html" title=""> home slider</a></li>
                                                            <li><a href="home_map.html" title=""> home map</a></li>
                                                            <li><a href="home_vedio.html" title=""> home vedio</a></li>
                                                            <li><a href="home_parallax.html" title=""> home image</a></li>
                                                        </ul>
                                                    </li>
                                                   
                                                    <li><a href="#">properties</a>
                                                        <ul class="dropdown_header">

                                                            
                                                            <li><a href="property_listing_map.html" title=""> listing map</a>
                                                            </li>
                                                            <li><a href="property_listing_sidebar.html" title=""> listing sidebar</a>

                                                            </li>
                                                            <li><a href="full_grid.html" title=""> full grid</a>

                                                            </li>
                                                            <li><a href="full_list.html" title=""> full list</a>

                                                            </li>
                                                        </ul>
                                                    </li>
                                                  
                                                    <li><a href="#" title=""> more property</a>
                                                        <ul class="dropdown_header">
                                                            <li>
                                                                <a href="property_sell_1.html"> property for sale 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="property_sell_2.html">property for sale 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="property_rent_1.html">property on rent 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="property_rent_2.html">property on rent 2</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <li><a href="#">pages</a>
                                                        <ul class="dropdown_header">
                                                            <li><a href="404.html" title=""> 404 error</a></li>
                                                            <li><a href="about_us.html" title=""> about us</a></li>
                                                            <li><a href="login.html" title=""> login</a></li>

                                                            <li><a href="register.html" title=""> register</a></li>
                                                            <li>
                                                                <a href="pricing.html">pricing table</a>
                                                            </li>
                                                            <li>
                                                                <a href="comming_soon.html">comming soon</a>
                                                            </li>
                                                            <li>
                                                                <a href="checkout.html">checkout</a>
                                                            </li>
                                                            <li>
                                                                <a href="product_details.html">product details</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#" title="">blog</a>
                                                        <ul class="dropdown_header">
                                                            <li><a href="blog_single.html" title=""> blog single</a></li>
                                                            <li><a href="blog_category.html" title="">blog category</a></li>
                                                        </ul>
                                                    </li>
													 <li><a href="#" title="">shop</a>
                                                        <ul class="dropdown_header">
                                                            <li><a href="cart.html" title=""> cart page</a></li>
                                                            <li>
                                                                <a href="checkout.html">checkout</a>
                                                            </li>
                                                            <li>
                                                                <a href="product_details.html">product details</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact_us.html" title="">contact us</a>

                                                    </li>
                                                    <li>
                                                        <a href="login.html">
                                                            <i class="fa fa-sign-in"></i>login / register

                                                        </a>
                                                    </li>

                                                </ul>
                                            </nav>
                                        </div>
                                        <!-- mobile menu end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- mobile menu area end -->
                    </div>
                    <!-- /.main-menu-wrapper -->
                </div>
            </div>
        </div>

        <!--header section end-->
    </header>

    @yield('content')
    <div class="footer_wrapper">
        <div class="section3_wrapper_second">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                        <div class="wrapper_second_contact">
                            <h4>get in touch</h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>
                                    <p>PO Box 16122 Collins Street
                                        <br> West Victoria 8007
                                    </p>
                                </li>
                                <li><i class="fa fa-phone"></i>
                                    <p>+61 3 8376 6284</p>
                                    <li><i class="fa fa-mobile"></i>
                                        <p>+61 3 8876 1104</p>
                                    </li>
                                    <li><i class="fa fa-envelope"></i><a href="#">email@website.com</a>
                                    </li>
    
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                        <div class="wrapper_second_blog">
                            <h4>our agents</h4>
                            <div class="blog_wrapper1">
                                <div class="blog_image blog_image_2">
                                    <img src="images/client_3.jpg" class="img-responsive" alt="img" />
                                </div>
                                <div class="blog_text">
                                    <h5><a href="#">Rihanna Alexander</a></h5>
                                    <div class="blog_date"><i class="fa fa-phone" aria-hidden="true"></i>+91 12345 67890</div>
                                </div>
                            </div>
                            <div class="blog_wrapper2">
                                <div class="blog_image blog_image_2">
                                    <img src="images/client_2.jpg" class="img-responsive" alt="img" />
                                </div>
                                <div class="blog_text">
                                    <h5><a href="#"> Alex doe</a></h5>
                                    <div class="blog_date"><i class="fa fa-phone" aria-hidden="true"></i>+91 12345 63320</div>
                                </div>
                            </div>
                            <div class="blog_wrapper2">
                                <div class="blog_image blog_image_2">
                                    <img src="images/client_3.jpg" class="img-responsive" alt="img" />
                                </div>
                                <div class="blog_text">
                                    <h5><a href="#"> marine doe</a></h5>
                                    <div class="blog_date"><i class="fa fa-phone" aria-hidden="true"></i>+91 12345 63320</div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                        <div class="wrapper_second_useful">
                            <h4>usefull links</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> how to book</a>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> general leeting conditions </a>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>jobs and carrers</a>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> travel agent resources</a>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>our agents</a> </li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>about us </a> </li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>contact us</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                        <div class="wrapper_second_blog wrapper_second_blog_2">
                            <h4>recent post</h4>
                            <div class="blog_wrapper1">
                                <div class="blog_image">
                                    <img src="images/insta_1.png" class="img-responsive" alt="img" />
                                </div>
                                <div class="blog_text blog_text_2">
                                    <h5><a href="#">post with images</a></h5>
                                    <div class="blog_date"><i class="fa fa-calendar-o" aria-hidden="true"></i>Aug 28, 2018-19</div>
                                </div>
                            </div>
                            <div class="blog_wrapper2">
                                <div class="blog_image">
                                    <img src="images/insta_2.png" class="img-responsive" alt="img" />
                                </div>
                                <div class="blog_text blog_text_2">
                                    <h5><a href="#">hotel in madison</a></h5>
                                    <div class="blog_date"><i class="fa fa-calendar-o" aria-hidden="true"></i>Aug 28, 2018-19</div>
                                </div>
                            </div>
                            <div class="blog_wrapper2">
                                <div class="blog_image">
                                    <img src="images/insta_3.png" class="img-responsive" alt="img" />
                                </div>
                                <div class="blog_text blog_text_2">
                                    <h5><a href="#">hotel market indicators</a></h5>
                                    <div class="blog_date"><i class="fa fa-calendar-o" aria-hidden="true"></i>Aug 28, 2018-19</div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    
    <div class="section3_bottom_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="foter_left">
                        <ul class="aboutus_social_icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </li>
                            <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
                        </ul>
                    </div>
                    <div class="foter_right">
                        <div class="section3_copyright">
                            <p>Copyright 2018 <a href="#"> "webstrot"</a>. © <a href="#"> city infra template </a> </p>
                        </div>
                        <div class="top_wrapper">
                            <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="close_wrapper">
    </div>
    <!-- section-3 end -->
    
    <!--footer wrapper end-->
    
    <!--main js files--> 
    
    <script src="{{url('js/jquery_min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/jqu_menu.js')}}"></script> 
    <script src="{{url('js/jqu_slickmenu.js')}}"></script> 
    <script src="{{url('js/isotope.pkgd.min.js')}}"></script> 
    <script src="{{url('venobox/js/venobox.min.js')}}"></script> 
    <script src="{{url('js/jquery.inview.min.js')}}"></script> 
    <script src="{{url('js/jquery.mixitup.min.js')}}"></script>
    <script src="{{url('js/jquery.countTo.js')}}"></script>
    <script src="{{url('js/testimonial.min.js')}}"></script>
    <script src="{{url('js/jquery-ui.min.js')}}"></script>
    <script src="{{url('js/wow.min.js')}}"></script>
    <script src="{{url('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{url('js/owl.carousel.js')}}"></script>
    <script src="{{url('js/camera.min.js')}}"></script>
    <script src="{{url('js/Chart.bundle.js')}}"></script>
    <script src="{{url('js/datepicker.js')}}"></script>
    <script src="{{url('js/custom.js')}}"></script>
    <!--js code-->
    <script>
        $("#range-price").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [100, 9000],
            slide: function(event, ui) {
                $("#price").val("sq" + ui.values[0] + " - " + " sq" + ui.values[1]);
            }
        });
    
        $("#price").val("sq" + $("#range-price").slider("values", 0) +
            " - " + " sq" + $("#range-price").slider("values", 1));
    </script>
    <script>
        $("#range-price_2").slider({
            range: true,
            min: 0,
            max: 2000,
            values: [100, 2000],
            slide: function(event, ui) {
                $("#price_2").val("$" + ui.values[0] + " - " + " $" + ui.values[1]);
            }
        });
    
        $("#price_2").val("$" + $("#range-price_2").slider("values", 0) +
            " - " + " $" + $("#range-price_2").slider("values", 1));
    </script>
    <script>
        $("#range-price_5").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [100, 9000],
            slide: function(event, ui) {
                $("#price_5").val("sq" + ui.values[0] + " - " + " sq" + ui.values[1]);
            }
        });
    
        $("#price_5").val("sq" + $("#range-price_5").slider("values", 0) +
            " - " + " sq" + $("#range-price_5").slider("values", 1));
    </script>
    <script>
        $("#range-price_6").slider({
            range: true,
            min: 0,
            max: 2000,
            values: [100, 2000],
            slide: function(event, ui) {
                $("#price_6").val("$" + ui.values[0] + " - " + " $" + ui.values[1]);
            }
        });
    
        $("#price_6").val("$" + $("#range-price_6").slider("values", 0) +
            " - " + " $" + $("#range-price_6").slider("values", 1));
    </script>
    <script>
        var ctx = document.getElementById("logloss").getContext("2d");
        // Global Options:
        Chart.defaults.global.defaultFontColor = 'darkgrey';
        Chart.defaults.global.defaultFontSize = 12;
    
        // Data with datasets options
    
        //'indigo purple crimson tomato khaki teal'
        var data = {
            labels: [112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129],
            datasets: [
    
                {
                    steppedLine: false,
                    label: "elizabeth",
                    fill: true,
                    // borderColor: 'rgba(139,155,90,1)',
                    borderColor: "#b7b7b7",
                    borderWidth: 1,
                    pointStyle: 'circle',
                    pointRadius: 4,
                    pointBorderColor: '#b7b7b7',
                    pointBackgroundColor: '#b7b7b7',
                    data: [0.692317, 0.693087, 0.692808, 0.693024, 0.69354, 0.692314, 0.693095, 0.692827, 0.693513, 0.692313, 0.694447, 0.69375, 0.695148, 0.695035, 0.693672, 0.694544, 0.693816, 0.695199, 0.6926]
                }, {
                    steppedLine: false,
                    label: "ken",
                    fill: true,
                    // borderColor: 'rgba(139,155,90,1)',
                    borderColor: "#29abff",
                    borderWidth: 1,
                    pointStyle: 'circle',
                    pointRadius: 4,
                    pointBorderColor: '#29abff',
                    pointBackgroundColor: '#29abff',
                    data: [0.69503, 0.694704, 0.693785, 0.694081, 0.693271, 0.693703, 0.693931, 0.691942, 0.692283, 0.69303, 0.693626, 0.692787, 0.693439, 0.69341, 0.693436, 0.693006, 0.691057, 0.690571]
                }
            ]
        };
    
        var chart = new Chart(ctx, {
            type: 'line',
            data: data,
    
            options: {
                title: {
                    fontSize: 20,
                    display: false,
                    text: ''
                },
                elements: {
                    line: {
                        tension: 0.000001
                    }
                },
                legend: {
                    display: false
                },
                //   tooltips: {
                //     callbacks: {
                //        label: function(tooltipItem) {
                //               return tooltipItem.xLabel;
                //        }
                //     }
                // },
                annotation: {
                    annotations: [{
                        type: 'line',
                        mode: 'horizontal',
                        scaleID: 'y-axis-0',
                        value: 0.693,
                        borderColor: 'rgba(255, 255, 255, 1)',
                        borderWidth: 1
                    }]
                }
            }
        })
    </script>
    </body>
    
    
    </html>