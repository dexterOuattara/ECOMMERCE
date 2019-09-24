@extends('layouts.landing')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8 col-md-offset-2">
            <div class="register_wrapper_box">
                <div class="register_left_form">

                    <div class="jp_regiter_top_heading">
                    </div>
                    <div class="row clearfix">
                        <!--Form Group-->
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="field-name" value="" placeholder="Petite desctiption*">
                        </div>
                        <!--Form Group-->
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="field-name" value="" placeholder="Description*">
                        </div>
                        <!--Form Group-->
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">

                            <input type="text" name="field-name" value="" placeholder="Type de bien*">
                        </div>
                        <!--Form Group-->
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">

                            <input type="text" name="field-name" value="" placeholder="Prix*">
                        </div>

                        <!--Form Group-->
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">

                            <input type="text" name="field-name" value="" placeholder="Nombre de piece">
                        </div>

                        <!--Form Group-->
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">

                            <input type="text" name="field-name" value="" placeholder="Tag">

                        </div>

                        <!--Form Group-->
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">

                            <input type="text" name="field-name" value="" placeholder="website">

                        </div>
                        <!--Form Group-->
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">

                            <input type="text" name="field-name" value="" placeholder="address line">
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="check-box text-center">
                                <input type="checkbox" name="shipping-option" id="account-option_2"> &ensp;
                            </div>
                        </div>
                    </div>

                    <div class="login_btn_wrapper register_btn_wrapper login_wrapper register_wrapper_btn">
                        <a href="#" class="btn btn-primary login_btn"> register </a>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection