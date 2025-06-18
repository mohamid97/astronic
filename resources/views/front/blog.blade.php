@extends('front.layout.master')
@section('content')
        <div class="sub-banner pt-80 pb-80">
            <div class="container">
                <div class="col-md-8 m-auto">
                    <div class="text-center text-line">
                        <h1>News</h1>
                        <ul class="text-c">
                            <li>Home</li>
                            <li>|</li>
                            <li class="color-t">News</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- banner-section end -->
<section class="clients-section">
    <div class="st-height-b90 st-height-lg-b50"></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <!--<h2>Our Partners </h2>-->
                <div class="separate"></div>
            </div>
            <div class="sponsors-outer">

 @foreach($blogs as $blog)
                           <div class="card mb-3"  id="{{$blog->id}}">
                    <div class="row g-0">
                          <div class="st-height-b90 st-height-lg-b50"></div>
                      <div class="col-md-4 d-flex">
                        <img src="{{ $blog->image ? asset('uploads/images/cms/'. $blog->image):asset('assets/images/noimage.png') }}" class="img-fluid rounded-start" alt="{{ $blog->alt_image }}" title="{{ $blog->title_image }}">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">          
                            {{ $blog->name }}
                               </h5>
                          <p class="card-text">                                 
                           {!! $blog->small_des !!}
                              </p>
                              
                                  
                              

                      </div>
                            <div class="link-btn text-center mb-30"><a href="{{ route('blog_details' , ['slug'=>$blog->slug]) }}" class="theme-btn btn-style-one"><span
                                class="btn-title">Read More</span></a></div>

                            </div>
                    </div>
                    
                  </div>
                  
@endforeach
                
            </div>
        </div>
    </section>




@endsection