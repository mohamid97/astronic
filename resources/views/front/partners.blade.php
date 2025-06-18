@extends('front.layout.master')

@section('content')



        <div class="sub-banner pt-80 pb-80" style="background-image: url({{ asset('uploads/images/setting/' . $settings->home_breadcrumb_background) }})">
            <div class="container">
                <div class="col-md-8 m-auto">
                    <div class="text-center text-line">
                        <h1>Partners</h1>
                        <ul class="text-c">
                            <li>Home</li>
                            <li>|</li>
                            <li class="color-t">Partners</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



    <section class="clients-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Our Partners </h2>
                <div class="separate"></div>
            </div>
            <div class="sponsors-outer">
                <div class="card mb-3">
                        @foreach ($partners as $partner )
                            <div class="row g-0">

                                <div class="col-md-4 d-flex">
                                    <img src="{{ asset('uploads/images/parteners/' . $partner->icon) }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <h5 class="card-title">{{$partner->name}}</h5>
                                    <p class="card-text">
                                      {{$partner->address}}    
                                    </p>
                                </div>
                            </div>
                        @endforeach

                  </div>





            </div>
        </div>
    </section>

@endsection 