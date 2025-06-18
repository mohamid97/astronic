@extends('front.layout.master')

@section('content')

        <div class="sub-banner pt-80 pb-80" style="background-image: url({{ asset('uploads/images/setting/' . $settings->services_breadcrumb_background) }})">
            <div class="container">
                <div class="col-md-8 m-auto">
                    <div class="text-center text-line">
                        <h1>Applications</h1>
                        <ul class="text-c">
                            <li>Home</li>
                            <li>|</li>
                            <li class="color-t">Applications</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <section class="clients-section">
    <div class="st-height-b90 st-height-lg-b50"></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <!--<h2>Our Partners </h2>-->
                <div class="separate"></div>
            </div>
            <div class="sponsors-outer">


 @foreach($services as $service)
                                  <div class="card mb-3"  id="{{$service->id}}">
                    <div class="row g-0">
                          <div class="st-height-b90 st-height-lg-b50"></div>
                      <div class="col-md-4 d-flex">
                        <img src="{{ $service->image ? asset('uploads/images/service/'.$service->image):asset('assets/images/noimage.png') }}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                            <a href="{{ route('service_details' , ['slug'=>$service->slug]) }}">
                          <h5 class="card-title"> 
                              
                            {{ $service->name }}              
                               </h5>
                            </a>
                          <p class="card-text">                  
                            {{ $service->small_des }}
                              </p>
                              
                          </div>


                      </div>
                    </div>
                  </div>
  @endforeach


                
            </div>
        </div>
    </section>










               


@endsection


