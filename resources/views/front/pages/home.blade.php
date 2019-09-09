@extends('front.layout.app')
@section('title') Home @endsection
@section('content')
<div>
    <section class="agency_banner_area bg_color">   
        <img class="banner_shap" src="front/img/home4/banner_bg.png" alt="">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-5 d-flex align-items-center">
                    <div class="agency_content">
                        <h2 class="f_700 t_color3 mb_0 wow fadeInLeft" data-wow-delay="0.3s"><span class="t_color5">WE</span> <span class="t_color4">ENGINEER</span></h2>
                        <h2 class="f_700 t_color3 mb_40 wow fadeInLeft" data-wow-delay="0.5s"><span class="t_color5">TO</span> <span class="t_color4">INSPIRE</span></h2>
                        <p class="f_400 l_height28 wow fadeInLeft" data-wow-delay="0.4s">Innovative and Transformative Software Applications and Solutions Designed to Scale and Purpose for You!

                        </p>
                        <div class="action_btn d-flex align-items-center mt_60">
                            <a href="#" class="btn_hover agency_banner_btn wow fadeInLeft" data-wow-delay="0.5s">Get in Touch</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 text-right">
                    <img class="protype_img wow fadeInRight" data-wow-delay="0.3s" src="front/img/home4/banner_img.png" alt="">
                </div>
            </div>

        </div>
    </section>

    <section id="services" class="agency_service_area_home bg_color">
        <div class="container custom_container">
            <h2 class="f_size_40 f_600 t_color3 l_height40 text-center mb_20 wow fadeInUp" data-wow-delay="0.2s">Our Services</h2>
            <p class="text-center m-pr_0 m-pl_0 pl_70 pr_70 mb_50">Brindocorp is redefining software development and delivery by focusing on a data-oriented engineering framework that unearths value for the enterprise and de-risks the engagement process.</p>
            <!-- <p class="text-center m-pr_0 m-pl_0 pl_70 pr_70 mb_50">We offer a wide range of invaluable services which covers software development, blockchain development, cloud computing, training and consultancy</p> -->
            <div class="row mb_30">
                <div class="col-lg-3 col-sm-6">
                    <div class="p_service_item agency_service_item pr_70 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon">
                            <img src="front/img/home4/icon_shape1.png" alt="">
                            <i class="ti-package"></i>
                        </div>
                        <h5 class="f_600 f_p t_color3">Project Strategy</h5>
                        <p>Technical strategy for best-in-class execution and product success in the marketplace.</p>
                        <p class="mb-0"><a href="#">Read More</a><i class="ti-arrow-right"></i></p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="p_service_item agency_service_item pl_20 pr_70 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon">
                            <img src="front/img/home4/icon_shape2.png" alt="">
                            <i class="ti-layout-grid2"></i>
                        </div>
                        <h5 class="f_600 f_p t_color3">BlockChain Development</h5>
                        <p>Products built to extract maximum value, driven by the blockchain.</p>
                        <p class="mb-0"><a href="#">Read More</a><i class="ti-arrow-right"></i></p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="p_service_item agency_service_item pl_20 pr_70 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon">
                            <img src="front/img/home4/icon_shape3.png" alt="">
                            <i class="ti-layers"></i>
                        </div>
                        <h5 class="f_600 f_p t_color3">Application Development</h5>
                        <p>Enterprise-grade performance applications built for web and mobile consumption.</p>
                        <p class="mb-0"><a href="#">Read More</a><i class="ti-arrow-right"></i></p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="p_service_item agency_service_item pl_20 pr_70 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon">
                            <img src="front/img/home4/icon_shape4.png" alt="">
                            <i class="ti-infinite"></i>
                        </div>
                        <h5 class="f_600 f_p t_color3">AI & Machine Learning</h5>
                        <p>Build powerful applications that generate meaningful, actionable insights from your business data through machine learning and artificial intelligence.</p>
                        <p class="mb-0"><a href="#">Read More</a><i class="ti-arrow-right"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="agency_testimonial_area bg_color sec_pad">
        <div class="container">
            <h2 class="f_size_30 f_600 t_color3 l_height40 text-center mb_60">Here are Things we've heard...</h2>
            <div class="agency_testimonial_info">
                <div class="testimonial_slider owl-carousel">
                    <div class="testimonial_item text-center left">
                        <div class="author_img"><img src="front/img/home4/author_img.png" alt=""></div>
                        <div class="author_description">
                            <h4 class="f_500 t_color3 f_size_18">Lurch Schpellchek</h4>
                            <h6>UI/UX designer</h6>
                        </div>
                        <p>What a load of rubbish bits and bobs pear shaped owt to do with me bubble and squeak jolly good morish tinkety tonk old fruit, car boot my good sir buggered plastered cheeky David, haggle young delinquent say so I said bite your arm off easy peasy. Skive off it's all gone to pot buggered.</p>
                    </div>
                    <div class="testimonial_item text-center center">
                        <div class="author_img"><img src="front/img/home4/author_img.png" alt=""></div>
                        <div class="author_description">
                            <h4 class="f_500 t_color3 f_size_18">Lurch Schpellchek</h4>
                            <h6>UI/UX designer</h6>
                        </div>
                        <p>What a load of rubbish bits and bobs pear shaped owt to do with me bubble and squeak jolly good morish tinkety tonk old fruit, car boot my good sir buggered plastered cheeky David, haggle young delinquent say so I said bite your arm off easy peasy. Skive off it's all gone to pot buggered.</p>
                    </div>
                    <div class="testimonial_item text-center right">
                        <div class="author_img"><img src="front/img/home4/author_img.png" alt=""></div>
                        <div class="author_description">
                            <h4 class="f_500 t_color3 f_size_18">Lurch Schpellchek</h4>
                            <h6>UI/UX designer</h6>
                        </div>
                        <p>What a load of rubbish bits and bobs pear shaped owt to do with me bubble and squeak jolly good morish tinkety tonk old fruit, car boot my good sir buggered plastered cheeky David, haggle young delinquent say so I said bite your arm off easy peasy. Skive off it's all gone to pot buggered.</p>
                    </div>
                    <div class="testimonial_item text-center">
                        <div class="author_img"><img src="front/img/home4/author_img.png" alt=""></div>
                        <div class="author_description">
                            <h4 class="f_500 t_color3 f_size_18">Lurch Schpellchek</h4>
                            <h6>UI/UX designer</h6>
                        </div>
                        <p>What a load of rubbish bits and bobs pear shaped owt to do with me bubble and squeak jolly good morish tinkety tonk old fruit, car boot my good sir buggered plastered cheeky David, haggle young delinquent say so I said bite your arm off easy peasy. Skive off it's all gone to pot buggered.</p>
                    </div>
                </div>
            </div>
            
            <!-- Partner Logo Section -->
            <div class="partner_logo">
                    <div class="p_logo_item wow fadeInLeft" data-wow-delay="0.2s">
                        <a href="#"><img src="front/img/home3/logo_01.png" alt=""></a>
                    </div>
                    <div class="p_logo_item wow fadeInLeft" data-wow-delay="0.3s">
                        <a href="#"><img src="front/img/home3/logo_02.png" alt=""></a>
                    </div>
                    <div class="p_logo_item wow fadeInLeft" data-wow-delay="0.4s">
                        <a href="#"><img src="front/img/home3/logo_03.png" alt=""></a>
                    </div>
                    <div class="p_logo_item wow fadeInLeft" data-wow-delay="0.5s">
                        <a href="#"><img src="front/img/home3/logo_04.png" alt=""></a>
                    </div>
                    <div class="p_logo_item wow fadeInLeft" data-wow-delay="0.6s">
                        <a href="#"><img src="front/img/home3/logo_05.png" alt=""></a>
                    </div>
                </div>
        </div>
    </section>

    <section class="action_area_three sec_pad">
        <div class="curved"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="action_content text-center">
                        <h2 class="f_600 f_size_30 l_height45 mb_40">Ready to get your project started?</h2>
                        <a href="#" class="about_btn white_btn wow fadeInLeft" data-wow-delay="0.3s">Start Now</a>
                        <a href="#" class="about_btn wow fadeInRight" data-wow-delay="0.4s">Get Involved</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection