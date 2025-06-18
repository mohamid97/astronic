@extends('front.layout.master')

@section('content')

   <!-- banner-section -->
   <div class="sub-banner pt-80 pb-80">
    <div class="container">
        <div class="col-md-8 m-auto">
            <div class="text-center text-line">
                <h1>Application details</h1>
                <ul class="text-c">
                    <li>Home</li>
                    <li>|</li>
                    <li class="color-t"> Application details</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- banner-section end -->

<section class="services-de mt-100 mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="single-product-info">
                    <div class="col-md-12">
                        <h3 class="text-black-1">    
                            {{ $service->name }}
                            <span></span> </h3>

                        <div class="clearfix"></div>
                        <!-- <h3 class="pro-price f-right" style="font-size: 21px;color: #000;">السعر: 869.00 EGP</h3> -->

                        <div class="clearfix"></div>

                    </div>
                    <div class="clearfix"></div>



                    <hr>
                   

                    <div class="list-style">
                          {!! $service->des !!}
                      


                </div>
            </div>
            <div class="col-lg-6 col-md-12 mt-md-5">
                <img src="{{ asset('uploads/images/service/' . $service->image) }}" alt="{{ $service->alt_image }}" title="{{ $service->title_image }}" class="img-fluid">
            </div>


        </div>
    </div>
</section>

@endsection