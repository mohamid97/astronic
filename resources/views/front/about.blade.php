@extends('front.layout.master')

@section('content')
   <!-- banner-section -->
   <div class="sub-banner pt-80 pb-80" style="background-image: url({{ asset('uploads/images/setting/' . $settings->about_breadcrumb_background) }})">
    <div class="container">
        <div class="col-md-8 m-auto">
            <div class="text-center text-line">
                <h1>{{ ucfirst('about us') }}</h1>

                <ul class="text-c">
                    <li>Home</li>
                    <li>|</li>
                    <li class="color-t">about us </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- banner-section end -->

            <!-- about-section -->
            <section class="about-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image_block_1">
                                <div class="image-box">
                                    <div class="shape-box">
                                        <div class="line line-1"
                                            style="background-image: url(assets/images/icons/line-1.png);"></div>
                                        <div class="line line-2"
                                            style="background-image: url(assets/images/icons/line-2.png);"></div>
                                        <div class="line line-3"
                                            style="background-image: url(assets/images/icons/line-3.png);"></div>
                                        <div class="line line-4"
                                            style="background-image: url(assets/images/icons/line-4.png);"></div>
                                        <div class="circle"></div>
                                    </div>
                                    <figure class="image"><img src="{{ asset('uploads/images/about/' . $about->photo) }}" alt=""></figure>
                                    <div class="content-box">
                                        <figure class="curve-text"><img src="assets/images/icons/curve-text.png" alt="">
                                        </figure>
                                        <div class="text">
                                            <h2>since 2008
<span></span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_1">
                                <div class="content-box">
                                    <div class="sec-title">
                                        <div class="top-title">
                                            <div class="shape">
                                                <div class="line line-1"></div>
                                                <div class="line line-2"></div>
                                                <div class="line line-3"></div>
                                                <div class="line line-4"></div>
                                                <div class="bg-shape"
                                                    style="background-image: url(assets/images/icons/bg-shape.png);"></div>
                                            </div>
                                            <p>About Us</p>
                                        </div>
                                        <h2>About Us </h2>
                                    </div>
                                    <div class="text">
                                        <h4><img src="assets/images/icons/icon-8.png" alt="">Tronic</h4>
                                        <p>
                                           {!! $about->des !!}
                                        </p>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-section end -->


            
@endsection
