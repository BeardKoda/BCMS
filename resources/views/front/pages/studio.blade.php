@extends('front.layout.app2')
@section('title') Studio @endsection
@section('content')
<div>
        <div class="bc_container">
            <div class="bc_col_6 bc_col_content">
                <div class="container_wrap">
                    <div class="bc_log">
                        <a href="#"><img src="front/img/logo.png" alt=""></a>
                    </div>
                    <div class="bc_content">
                        <h2>We'll Be Here Shortly..</h2>
                        <h1 class="f_robot_c f_50 f_700">We're working on<br> this section.<br> Please, have some coffee and biscuit</h1>
                        <div style="width:100%;height:0;padding-bottom:100%;position:relative;"><a href="{{url()->previous()}}" class="btn btn_hover agency_banner_btn">Back</a>
                        <iframe src="front/https://giphy.com/embed/26ybxiiIxi4NQfiJG" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/coffee-cup-pencil-26ybxiiIxi4NQfiJG">via GIPHY</a></p>
                        <a href="#" class="btn btn_hover agency_banner_btn">Notify Us</a>
                    </div>
                    <div class="bc_bottom">
                        Copyright © <span id="copyrightDate">2019</span> Brindocorp
                    </div>
                </div>
            </div>
            <div class="bc_col_6 bc_col_screen">
                <div class="bc_bg"></div>
                <div id="clockdiv" class="clock">
                    <div class="timer">
                        <span class="days"></span>
                        <div class="smalltext">Days</div>
                    </div>
                    <div class="timer">
                        <span class="hours"></span>
                        <div class="smalltext">Hours</div>
                    </div>
                    <div class="timer">
                        <span class="minutes"></span>
                        <div class="smalltext">Minutes</div>
                    </div>
                    <div class="timer">
                        <span class="seconds"></span>
                        <div class="smalltext">Seconds</div>
                    </div>
                </div>
                <div class="bc_social">
                    <p>Stay in Touch :</p>
                    <ul class="list_style">
                        <li><a href="#"><i class="social_facebook"></i></a></li>
                        <li><a href="#"><i class="social_twitter"></i></a></li>
                        <li><a href="#"><i class="social_linkedin"></i></a></li>
                        <li><a href="#"><i class="social_pinterest"></i></a></li>
                        <li><a href="#"><i class="social_youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('front/js/comming-soon.js')}}"></script>
@endsection