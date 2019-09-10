@extends('front.layout.app')
@section('title') Services @endsection
@section('content')
<div>
    <section class="seo_service_area sec_pad app_service_area_three" style="padding-top:150px">
        <div class="container">
            <div class="sec_title text-center mb_70">
                <h2 class="f_p f_size_30 l_height30 f_700 t_color3 mb_20">What we offer</h2>
                <!-- <p class="f_400 f_size_16">Bender cobblers chap grub sloshed up the duff I fantastic<br> owt to do with me at public
                    school.!</p> -->
            </div>
            <div class="row seo_service_info">
                <div class="col-lg-4 col-md-6">
                    <div class="seo_service_item">
                        <img src="front/img/seo/icon1.png" alt="">
                        <a href="{{ route('contact') }}">
                            <h4>Project Strategy</h4>
                        </a>
                        <p>From helping you ideate on product concept to engineering strategies for execution and then market roll out, we stay with you all the way. Our Product Strategy offering helps synthesize your idea with a properly articulated roadmap of features based on a market-friendly release schedule.</p>
                        <a href="{{ route('contact') }}"><i class="arrow_right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="seo_service_item">
                        <img src="front/img/seo/icon2.png" alt="">
                        <a href="{{ route('contact') }}">
                            <h4>Application Development</h4>
                        </a>
                        <p>Brindocorp's products are placed on a design-led philosophy that thinks of the user first while leveraging proprietary and open source technology to deliver context-aware, adaptive experiences. Purpose built solutions for the cloud, mobile, web, IoT and virtual reality that exceed product objectives.</p>
                        <a href="{{ route('contact') }}"><i class="arrow_right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="seo_service_item">
                        <img src="front/img/seo/artificial-intelligence.png" alt="">
                        <a href="{{ route('contact') }}">
                            <h4>AI & Machine Learning</h4>
                        </a>
                        <p>Build powerful applications that generate meaningful, actionable insights from your business data through machine learning and artificial intelligence. Our suite of AI/ML offering focuses on algorithm development, data modeling, deep learning and Natural Language Processing (NLP).</p>
                        <a href="{{ route('contact') }}"><i class="arrow_right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                        <div class="seo_service_item">
                            <img src="front/img/seo/blockchain.png" alt="">
                            <a href="{{ route('contact') }}">
                                <h4>Blockchain Development</h4>
                            </a>
                            <p>From helping you ideate on product concept to engineering strategies for execution and then market roll out, we stay with you all the way. Our Product Strategy offering helps synthesize your idea with a properly articulated roadmap of features based on a market-friendly release schedule.</p>
                            <a href="{{ route('contact') }}"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="seo_service_item">
                            <img src="front/img/seo/icon2.png" alt="">
                            <a href="#">
                                <h4>Product Design</h4>
                            </a>
                            <p>Brindocorp's products are placed on a design-led philosophy that thinks of the user first while leveraging proprietary and open source technology to deliver context-aware, adaptive experiences. Purpose built solutions for the cloud, mobile, web, IoT and virtual reality that exceed product objectives.</p>
                            <a href="#"><i class="arrow_right"></i></a>
                        </div>
                    </div> -->
                    <div class="col-lg-4 col-md-6">
                        <div class="seo_service_item">
                            <img src="front/img/seo/puzzle-piece.png" alt="">
                            <a href="{{ route('contact') }}">
                                <h4>Enterprise Solutions</h4>
                            </a>
                            <p>We enable our customers to improve current IT processes and transform them into cost-efficient solutions. Our enterprise re-engineering and technology modernization solutions help enterprises stay competitive by giving them a basis to innovate.<br><br></p>
                            <a href="{{ route('contact') }}"><i class="arrow_right"></i></a>
                        </div>
                    </div>
            </div>

            <div class="row seo_service_info">
                    
                </div>
        </div>
    </section>

    <section class="service_details_area sec_pad">
        <div class="container">
            <div class="row service_details_item">
                <div class="col-lg-6">
                    <div class="service_details_img">
                        <img src="front/img/breadcrumb/service_details.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="service_details">
                        <h2 class="f_p f_600 f_size_30 t_color3 l_height40 mb-30">Become a Blockchain Developer through our Academy</h2>
                        <p class="f_400 mb_40">Become skilled. Join our immersive Blockchain Developer training Program and give a big push to you career as a Blockchain Developer.</p>
                        <a href="{{ route('academy') }}" class="learn_btn_two c_violet">View More<i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection