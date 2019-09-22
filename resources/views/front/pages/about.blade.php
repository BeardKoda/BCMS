@extends('front.layout.app')
@section('title') About @endsection
@section('content')
<div>
    <section class="agency_service_area_about bg_color app_service_area_three" style="padding-top:150px">
        <div class="container">
            <div class="sec_title text-center mb_70">
                <h2 class="f_p f_size_30 l_height30 f_700 t_color3 mb_20">About Us</h2>
                <p class="f_400 f_size_16">Hey there, and welcome. We are Brindocorp and  <br/> We believe that every development starts with You. You are unique, <br/> which is why what we do here is purposed by You and for You.</p>
            </div>
            <div class="features_info">
                <img class="dot_img" src="front/img/home4/dot.png" alt="">
                <div class="row agency_featured_item flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="agency_featured_img text-right wow fadeInRight" data-wow-delay="0.4s">
                            <img src="front/img/home4/work1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="agency_featured_content pr_70 pl_70 wow fadeInLeft" data-wow-delay="0.6s">
                            <div class="dot"><span class="dot1"></span><span class="dot2"></span></div>
                            <img class="number" src="front/img/home4/icon01.png" alt="">
                            <h3>GLOBALLY DIVERSE PERSPECTIVE</h3>
                            <p>We have developed diverse products and services that have impacted individuals and organizations all over the world while maintaining a seamless connection. Over the years, our expansive experience over diverse audiences working with new age technologies, has enabled us to  be able to craft a fit-for-purpose solution regardless of your target market.</p>
                            <a href="#" class="icon mt_30"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row agency_featured_item agency_featured_item_two">
                    <div class="col-lg-6">
                        <div class="agency_featured_img text-right wow fadeInLeft" data-wow-delay="0.3s">
                            <img src="front/img/home4/work2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="agency_featured_content pl_100 wow fadeInRight" data-wow-delay="0.5s">
                            <div class="dot"><span class="dot1"></span><span class="dot2"></span></div>
                            <img class="number" src="front/img/home4/icon02.png" alt="">
                            <h3>SOFTWARE DEVELOPMENT</h3>
                            <p>A new paradigm in software development that empowers the client and emboldens the blueprint for success. We specialize in research, new development, prototyping, modification, re-engineering and maintenance of applications, and other software products for you.</p>
                            <a href="#" class="icon mt_30"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row agency_featured_item flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="agency_featured_img text-right wow fadeInRight" data-wow-delay="0.3s">
                            <img src="front/img/home4/work3.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="agency_featured_content pr_70 pl_70 wow fadeInLeft" data-wow-delay="0.5s">
                            <div class="dot"><span class="dot1"></span><span class="dot2"></span></div>
                            <img class="number" src="front/img/home4/icon3.png" alt="">
                            <h3>VISIBILITY AND CONTROL</h3>
                            <p>Never feel lost or in the dark about your product. With proprietary tools and processes, take full control of the delivery process and see the progress of your product, on-demand. Monitor project output through our Project Pulse tool and experience better involvement in your product's lifecycle.</p>
                            <a href="#" class="btn_hover agency_banner_btn mt_30">Get in Touch</a>
                        </div>
                    </div>
                </div>
                <div class="dot middle_dot"><span class="dot1"></span><span class="dot2"></span></div>
            </div>
        </div>
    </section>

    <section class="agency_about_area d-flex bg_color">
        <div class="col-lg-6 about_content_left ">
            <div class="about_content mb_30">
                <h2 class="f_size_30 f_700 l_height45 mb_20">We craft solutions that set a blueprint for success.</h2>
                <p class="f_size_15 f_400">Meet the team of young and creative professionals in their various fields of discipline, they have contributed with diverse experiences, while creating different solutions to cater your needs.</p>
                <a href="#" class="about_btn btn_hover mt_40">Meet the team</a>
            </div>
        </div>
        <div class="col-lg-6 about_img">
            <!-- <a href="#" class="pluse_icon"><i class="ti-plus"></i></a> -->
            <div class="about_img_slider owl-carousel">
                <div class="item">
                    <div class="about_item w45">
                        <img src="front/img/home4/team1.jpg" alt="">
                        <!-- <div class="about_text">
                            <span class="br"></span>
                            <h5 class="f_size_18 l_height28 mb-0">Why I say old chap that is spiffing bodge, blag pardon.</h5>
                        </div> -->
                    </div>
                    <div class="about_item w55">
                        <img src="front/img/home4/team2.jpg" alt="">
                        <!-- <div class="about_text text_two">
                            <span class="br"></span>
                            <h5 class="f_size_18 l_height28 mb-0">Oxford butty bubble and squeak wind up, brown bread the full monty.</h5>
                        </div> -->
                    </div>
                    <div class="about_item w55">
                        <img src="front/img/home4/team2.jpg" alt="">
                        <!-- <div class="about_text text_two">
                            <span class="br"></span>
                            <h5 class="f_size_18 l_height28 mb-0">Starkers dropped a clanger lurgy is cack excuse my French what.</h5>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection