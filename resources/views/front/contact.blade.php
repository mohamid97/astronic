@extends('front.layout.master')

@section('content')



        <!-- banner-section -->
        <div class="sub-banner pt-80 pb-80" style="background-image: url({{ asset('uploads/images/setting/' . $settings->contact_breadcrumb_background) }})">
            <div class="container">
                <div class="col-md-8 m-auto">
                    <div class="text-center text-line">
                        <h1>contact us</h1>
                        <ul class="text-c">
                            <li>Home</li>
                            <li>|</li>
                            <li class="color-t">contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-section end -->
        <!-- contact-page-section -->
        <section class="contact-page-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <div class="top-title">
                        <div class="shape">
                            <div class="line line-1"></div>
                            <div class="line line-2"></div>
                            <div class="line line-3"></div>
                            <div class="line line-4"></div>
                            <div class="bg-shape" style="background-image: url(assets/images/icons/bg-shape.png);">
                            </div>
                        </div>
                        <p>contact us</p>
                    </div>
                    <h2>We are always here for you providing <br> the best service</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <form  method="POST" id="contact-form" class="default-form"
                                novalidate="novalidate" action="{{ route('send.contact') }}">

                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Name*" required=""
                                            aria-required="true">

    
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email*" required=""
                                            aria-required="true">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="tel" name="phone" placeholder="phone" required=""
                                            aria-required="true">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" required="" placeholder="Address"
                                            aria-required="true">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Massage"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                        <button class="theme-btn style-one" type="submit" name="submit-form">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-column">
                        <div class="sidebar-content"
                            style="background-image: url(assets/images/resource/contact-1.jpg);">
                            <div class="inner-box centred">
                                <div class="icon-box"><i class="icon-call-back"></i></div>
                                <h3>request a call back</h3>
                                <p>Just leave your contact number, we will call you back.</p>
                                <a href="tel:{{($contact->phone1) ? $contact->phone1 : '+202 26700108'}} " class="btn-one">phone</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-page-section end -->

        <!-- contact-info-section -->
        <section class="contact-info-section centred">
            <div class="auto-container">
                <div class="inner-content clearfix">
                    <div class="single-item">
                        <div class="icon-box"><i class="icon-location"></i></div>
                        <h4>Address</h4>
                        <p>
                            {{($contact->address) ? $contact->address : '99 St., Taha El-Dinary, Abbas El-Akkad Extension, in front of Enppi, Nasr City, Cairo, Egypt'}} 
                             </p>
                    </div>
                    <div class="single-item">
                        <div class="icon-box"><i class="icon-call"></i></div>
                        <h4>contact us</h4>
                        <p>Mobile: <a href="tel:+202 26700108">{{($contact->phone1) ? $contact->phone1 : '+202 26700108'}} 

                        @if(isset($contact->phone2))
                         <p>Mobile: <a href="tel:+202 26700108">{{$contact->phone2}} 
                        @endif


                        @if(isset($contact->phone3))
                         <p>Mobile: <a href="tel:+202 26700108">{{$contact->phone3}} 
                        @endif

                        </a><br /></p>
                    </div>
                    <div class="single-item">
                        <div class="icon-box"><i class="icon-email-1"></i></div>
                        <h4>Call Us</h4>
                        <p><a href="mailto:{{($contact->email) ? $contact->email : 'astronic@astronic.org'}}"> {{($contact->email) ? $contact->email : 'astronic@astronic.org'}}

                        </a><br /></p>
                    </div>

                </div>
            </div>
        </section>
        <!-- contact-info-section end -->


        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="map-inner">
                {!! $contact->location !!}
            </div>
        </section>
        <!-- google-map-section end -->




@endsection







