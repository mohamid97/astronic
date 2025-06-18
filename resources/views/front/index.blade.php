@extends('front.layout.master')

@section('content')



   <!-- banner-section -->
        <section class="banner-section style-three">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                @foreach ($sliders as $slider )
                    <div class="slide-item">
                        <div class="image-layer" style="background-image:url('{{ asset('uploads/images/sliders/' . $slider->image) }}')"></div>
                        <div class="auto-container">
                            
                        </div>
                    </div>
                @endforeach


            </div>

        </section>
<!-- banner-section end -->


 <section class="portfolio-section pt-3">
            <div class="container-fluid">
                <div class="sec-title text-center">
                    <div class="top-title">
                        <div class="shape">
                            <div class="line line-1"></div>
                            <div class="line line-2"></div>
                            <div class="line line-3"></div>
                            <div class="line line-4"></div>
                            <div class="bg-shape" style="background-image: url({{asset('assets/astronic/')}}/assets/images/icons/bg-shape.png);">
                            </div>
                        </div>
                        <p>Astronic's Categories</p>
                    </div>
                    <h2>Product Range </h2>
                </div>
                <br>
                <!--Sortable Galery-->
                <div class="sortable-masonry">
                    <!--Filter-->
                    <div class="items-container product-slide owl-carousel owl-theme">


                        @foreach($nestedCategories as $key=>$category)
                      
                        <!-- Case Block -->
                        <div class="case-block-one masonry-item all cat-1 item">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('uploads/images/category/'. $category->photo)}}" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="title"><span class="icon"><img src="{{asset('assets/images/icons/icon-8.png')}}"
                                                alt=""></span>tronic</div>
                                    <div class="link-btn"><a href="{{ route('category_details',['slug' => $category->slug]) }}"><i class="flaticon-right-arrow"></i></a></div>
                                    <div class="content">
                                        <h5></h5>
                                        <h4> 
                                        
                                           {{ $category->name }}
                                       </h4>
                                    </div>
                                </div>
                            </div>
                        </div>          
                          
               
                        @endforeach




                    </div>
                   
                </div>
            </div>
        </section>




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
                                        <h2>since 2008 <span></span></h2>
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
                                        {!! $about->des  !!}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->



                <section class="news-style-two sec-pad bg-color-3">
            <div class="auto-container">
               
				<div class="sec-title text-center">
                    <div class="top-title">
                        <div class="shape">
                            <div class="line line-1"></div>
                            <div class="line line-2"></div>
                            <div class="line line-3"></div>
                            <div class="line line-4"></div>
                            <div class="bg-shape" style="background-image: url(https://astronic.org/assets/astronic/assets/images/icons/bg-shape.png);">
                            </div>
                        </div>
                        <p>Astronic's Categories</p>
                    </div>
                    <h2>Our Apps</h2>
                </div>
                <div class="sortable-masonry">

                    <div class="items-container row clearfix">



                @foreach($services as $data)
                        <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column all alaram outdoor wireless">
                            <div class="news-block-two">
                                    <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <img src="{{ $data->image ? asset('uploads/images/service/'.$data->image):asset('assets/images/noimage.png') }}" alt="{{ $data->alt_image }}" title="{{ $data->title_image }}">
                                        </figure>
                                         <div class="content-box">
                                        <div class="link">
                                             <a href="{{ route('service_details' , ['slug'=>$data->slug]) }}"><i class="icon-right-arrow-1"></i></a>
                                            </div>
             
                                    </div>
                                    </div>
                                   
                                    <div class="content-box">
                                        <div class="text">
                                            <p><a href="{{ route('service_details' , ['slug'=>$data->slug]) }}">
                                               

                                                    {{$data->name}}

                                            </a></p>
       
                                        </div>
                                    </div>
                                </div>
                
                            </div>
                        </div>
                @endforeach



                    </div>
                </div>
            </div>
        </section>
        <!-- end our apps section -->





  <!-- start our project section -->

        <section class="news-style-two sec-pad bg-color-3">
			<div class="auto-container">
				<div class="sec-title text-center">
					<h2>Our Projects</h2>
					<div class="separate"></div>
				</div>
				<div class="sponsors-outer">
					<ul class="sponsors-carousel owl-carousel owl-theme">
                        @foreach($projects as $project)
                            <li class="slide-item news-block-two">
                            <div class="inner-box">
                                
        
                                    <div class="image-box">
                                    <figure class="image"><a href="{{ route('project_details', ['name'=>$project->name]) }}"><img src="{{asset('uploads/images/ourworks/'.$project->photo)}}" alt="{{ $project->alt_title }}" title="{{ $project->title_image }}"></a></figure>
                                                        <div class="content-box">
                                    <div class="link"><a href="{{ route('project_details', ['name'=>$project->name]) }}"><i class="icon-right-arrow-1"></i></a></div>

                                        </div>
                            </div>
                            
                                            <div class="content-box">
                                    <div class="text">
                                                <h4><a href="{{ route('project_details', ['name'=>$project->name]) }}"> {{ $project->name}}</a></h4>
                                                <span class="post-date"><a href="{{ route('project_details', ['name'=>$project->name]) }}"> {{$project->created_at->format('D M Y')}} </a></span>
                                            </div>
                                        </div>
                            </div>
                            </li>
                        @endforeach
					</ul>
				</div>
			</div>
		</section>
  <!-- end our project section -->

        <section class="news-style-two sec-pad bg-color-3">
            <div class="auto-container">
				<div class="sec-title text-center">
					<h2>News</h2>
					<div class="separate"></div>
				</div>
                <div class="row clearfix">

                    @foreach ($news as  $new)
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-two wow fadeInUp animated animated" data-wow-delay="00ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{ $new->image ? asset('uploads/images/cms/'. $new->image):asset('assets/images/noimage.png') }}" alt=""></figure>
                                        <div class="content-box">
                                            <div class="link"><a href="{{ route('blog_details' , ['slug' => $new->slug]) }}"><i
                                                        class="icon-right-arrow-1"></i></a></div>
                                            <div class="text">
                                                <h4><a href="{{ route('blog_details' , ['slug' => $new->slug]) }}">
                                                    {{$new->name}}
                                                </a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <figure class="admin-thumb"><img src="{{ $new->image ? asset('uploads/images/cms/'. $new->image):asset('assets/images/noimage.png') }}" alt="">
                                        </figure>
                                        <h5>{{$new->name}}</h5>
                                        <span class="post-date">{{$new->created_at->format('M D Y')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>




        <!-- end new section -->





<section class="clients-section">
    <div class="auto-container">
        <div class="sec-title text-center">
          <a href="{{ route('partners') }}">
                <h2>Our Partners</h2>
          </a>
            <div class="separate"></div>
        </div>
        <div class="sponsors-outer">
            <ul class="sponsors-carousel owl-carousel owl-theme">


                @foreach($partners as $partner)
                <li class="slide-item">
                    <figure class="image-box"><img src="{{ asset('uploads/images/parteners/' . $partner->icon) }}" alt=""></figure>
                </li>
                @endforeach
                
            </ul>
        </div>
    </div>
</section>





<!-- end partner -->






        
@endsection