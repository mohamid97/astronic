@extends('front.layout.master')

@section('content')


        <!-- banner-section -->
        <div class="sub-banner pt-80 pb-80">
            <div class="container">
                <div class="col-md-8 m-auto">
                    <div class="text-center text-line">
                        <h1>blog details</h1>
                        <ul class="text-c">
                            <li>Home</li>
                            <li>|</li>
                            <li class="color-t">blog details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-section end -->


        <!--============= Start blogs =============-->
        <div class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="blog_detaisl_area">
                            <div class="blog_full_content">
                                <img class="" data-src="assets/images/news/news-4.jpg"
                                    data-srcset="assets/images/news/news-4.jpg 2x" alt="I'm an image!"
                                    src="{{ $blog->image ? asset('uploads/images/cms/'. $blog->image):asset('assets/images/noimage.png') }}" srcset="assets/images/news/news-4.jpg 2x">
                                <h4> 
                                    {{ $blog->name }}
                                </h4>
                                <span>{{$blog->created_at->format('D M Y')}}</span>


                            </div>

                            <p class="text-left">
                                {!! $blog->des !!}
                            </p>

                        </div>
                    </div>


                </div>
                <div class="col-lg-12 col-md-12">


                </div>
            </div>
        </div>
        <!--============ End blogs ============-->

@endsection