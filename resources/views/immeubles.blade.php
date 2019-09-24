@extends('layouts.landing')

@section('content')

    <div class="newest_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="tb_work_txt_wrapper">
                        <div class="abt_txt_box heading_left">
                            <div class="tb_left_heading_wraper heading_left_line">
                                <h3>newest properties</h3>
                            </div>
                        </div>

                    </div>
                </div>


                @foreach($houses as $house)

                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6 hidden-sm hidden-xs">
                    <div class="lp_cntnt">
                        <div class="project-inner project-head">

                            <div class="homes">
                                <!-- homes img -->
                                <a href="#" class="homes-img">
                                    <div class="homes-tag button alt featured">owner</div>
                                    <div class="home-tag-price">
                                        $ {{$house->pricing}}
                                    </div>
                                    <div class="homes-tag button alt sale">{{$house->type}}</div>

                                </a>

                            </div>
                            <div class="homes_img_wrapper">
                                <img src="images/lp3.jpg" alt="home" class="img-responsive">
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <div class="homes_cntnt_box">
                                <div class="homes_cntnt_left">
                                    <img src="images/lp_img_1.png" alt="home" class="img-responsive">
                                </div>
                                <div class="homes_cntnt_right">
                                    <h3><a href="#">{{$house->name_product}}</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="#">
                                            {{$house->description}}
                </a>
                                    </p>
                                </div>

                            </div>
                            <!-- homes hover -->

                            <!-- homes List -->
                            <div class="home_wrapper_list">
                                <ul class="homes-list clearfix">
                                    <li>
                                        type
                                        <span>{{$house->type}}</span>
                                    </li>
                                    <li>
                                        area
                                        <span>{{$house->description}}</span>
                                    </li>
                                    <li>
                                        rooms
                                        <span>{{$house->rooms}}</span>
                                    </li>

                                </ul>
                            </div>

                            <div class="footer">
                                <h3>view map</h3>
                                <div class="lp_deals_icon">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-shower"></i></a></li>
                                        <li><a href="#"><i class="flaticon-fan"></i></a></li>
                                        <li><a href="#"><i class="flaticon-television"></i></a></li>
                                        <li><a href="#"><i class="flaticon-garage"></i></a></li>
                                        <li><a href="#"><i class="flaticon-policeman"></i></a></li>
                                        <li><a href="#"><i class="flaticon-cctv"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @endforeach



            </div>
        </div>
    </div>

    <div class="newest_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="tb_work_txt_wrapper">
                        <div class="abt_txt_box heading_left">
                            <div class="tb_left_heading_wraper heading_left_line">
                                <h3>newest properties</h3>
                            </div>
                        </div>

                    </div>
                </div>


                @foreach($houses as $house)

                <div class="col-lg-4 col-md-6 col-xs-12 landscapes sale">
                    <div class="lp_cntnt lp_cntnt_2">
                        <div class="project-inner project-head">

                            <div class="homes">
                                <!-- homes img -->
                                <a href="#" class="homes-img bd_home">

                                    <div class="home-tag-price bd_price">
                                        $ {{$house->pricing}}
                                    </div>
                                    <div class="homes-tag button alt sale">{{$house->type}}</div>

                                </a>

                            </div>
                            <div class="homes_img_wrapper">
                                <img src="images/bd_img_1.jpg" alt="home" class="img-responsive">
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <div class="homes_cntnt_box">
                                <div class="homes_cntnt_left">
                                    <img src="images/lp_img_2.png" alt="home" class="img-responsive">
                                </div>
                                <div class="homes_cntnt_right">
                                    <h3><a href="#">{{$house->name_product}}</a></h3>
                                    <p class="homes-address mb-3">

                                        {{$house->description}}

                                    </p>
                                </div>

                            </div>
                            <!-- homes hover -->

                        </div>
                    </div>
                </div>


                @endforeach



            </div>
        </div>
    </div>

@endsection