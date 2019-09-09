@extends('front.layout.app2')
@section('title') 404 @endsection
@section('content')
<div>
        <section class="error_area">
            <img class="error_shap" src="img/breadcrumb/banner_bg.png" alt="">
            <div class="container flex">
                <div class="error_contain text-center">
                    <div class="b_text">
                        <h1 class="f_p b_color f_700">404</h1>
                    </div>
                    <h2 class="f_p f_400 b_color f_size_40">page not found</h2>
                    <p class="b_color f_400">We’re sorry, the page you have looked for does not exist in our database! Maybe<br> go to our home page or try to use a search?</p>
                    <a href="/" class="btn btn_hover agency_banner_btn mt_40">Go Back to home Page</a>
                </div>
            </div>
        </section>
</div>
@endsection