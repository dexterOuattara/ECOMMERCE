@extends('layouts.landing')

@section('content')

<div class="cc_ps_top_product_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="video_img_section_wrapper">

                    <div class="video_nav_img_2 hidden-xs">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a class="button secondary url owl_nav" href="#zero"><img src="images/shop_1.jpg" class="img-responsive" alt="nav_img"></a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cc_ps_tabs">
                            <a class="button secondary url owl_nav" href="#one"><img src="images/shop_1.jpg" class="img-responsive" alt="nav_img"></a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cc_ps_tabs">
                            <a class="button secondary url owl_nav" href="#two"><img src="images/shop_1.jpg" class="img-responsive" alt="nav_img"></a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cc_ps_tabs">
                            <a class="button secondary url owl_nav" href="#three"><img src="images/shop_1.jpg" class="img-responsive" alt="nav_img"></a>
                        </div>

                    </div>
                    <div class="cc_ps_top_slider_section_2">
                        <div class="owl-carousel owl-theme">
                            <div class="item" data-hash="zero">

                                <img class="small img-responsive" src="images/shop_1.jpg" alt="small_img" />

                            </div>
                            <div class="item" data-hash="one">

                                <img class="small img-responsive" src="images/shop_1.jpg" alt="small_img" />

                            </div>
                            <div class="item" data-hash="two">

                                <img class="small img-responsive" src="images/shop_1.jpg" alt="small_img" />
                            </div>
                            <div class="item" data-hash="three">
                                <img class="small img-responsive" src="images/shop_1.jpg" alt="small_img" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="video_nav_img_2 visible-xs">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-3 cc_ps_tabs">
                                            <a class="button secondary url owl_nav" href="#zero"><img src="images/shop_1.jpg" class="img-responsive" alt="nav_img"></a>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-3 cc_ps_tabs">
                                            <a class="button secondary url owl_nav" href="#one"><img src="images/shop_1.jpg" class="img-responsive" alt="nav_img"></a>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-3 cc_ps_tabs">
                                            <a class="button secondary url owl_nav" href="#two"><img src="images/shop_1.jpg" class="img-responsive" alt="nav_img"></a>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-3 cc_ps_tabs">
                                            <a class="button secondary url owl_nav" href="#three"><img src="images/shop_1.jpg" class="img-responsive" alt="nav_img"></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="btc_shop_single_prod_right_section">
                    <h1>101/9 Oliva Street</h1>
                    <div class="btc_shop_sin_pro_icon_wrapper">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <p>10 Reviews <span><a href="#">Add Your Review</a></span></p>
                        <h5>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. aks Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.</h5>
                        <ul>
                            <li><i class="fa fa-long-arrow-right"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</li>
                            <li><i class="fa fa-long-arrow-right"></i> Lorem quis bibendum auctor, nisi elit consequat ipsum.</li>
                        </ul>
                    </div>
                    <div class="btc_shop_prod_quanty_bar">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 full_width">
                                <div class="cc_ps_quantily_info">
                                    <div class="select_number">
                                        <button onclick="changeQty(1); return false;" class="increase"><i class="fa fa-plus"></i>
                                        </button>
                                        <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
                                        <button onclick="changeQty(0); return false;" class="decrease"><i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="hidden" name="product_id" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 full_width">
                                <div class="cc_ps_color_selectobx">
                                    <select>
                                        <option> type</option>
                                        <option> house</option>
                                        <option> flat</option>
                                        <option> villa</option>

                                    </select><i class="fa fa-caret-down"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 full_width">
                                <div class="cc_ps_color_selectobx">
                                    <select>
                                        <option> rooms</option>
                                        <option> 1</option>
                                        <option> 2</option>
                                        <option> 3</option>
                                        <option> 4</option>
                                    </select><i class="fa fa-caret-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btc_shop_product_price_wrapper">
                        <ul>
                            <li>$1990.00</li>
                            <li><del>$2500.00</del></li>
                            <li>(30% OFF)</li>
                        </ul>
                    </div>
                    <div class="cc_ps_cart_btn_wrapper">
                        <div class="cc_ps_cart_btn">
                            <ul>
                                <li>
                                    <a href="#"> <i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                </li>
                                <li><a href="#"><i class="fa fa-heart"></i> wishlist</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection