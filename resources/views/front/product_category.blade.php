@extends('front.layout.master')

@section('content')

    <div class="sub-banner pt-80 pb-80">
      <div class="container">
        <div class="col-md-8 m-auto">
          <div class="text-center text-line">
            <h1>All Products </h1>
            <ul class="text-c">
              <li>Home</li>
              <li>|</li>
              <li class="color-t">All Products </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- banner-section end -->

    <section class="portfolio-section-2 pt-80">
      <div class="container">
        <div class="sec-title text-center">
          <div class="top-title">
            <div class="shape">
              <div class="line line-1"></div>
              <div class="line line-2"></div>
              <div class="line line-3"></div>
              <div class="line line-4"></div>
              <div class="bg-shape" style="background-image: url(assets/images/icons/bg-shape.png);">
              </div>
            </div>
            <p>Astronic's Products</p>
          </div>
          <h2>Products </h2>
        </div>
        <br>
        <!--Sortable Galery-->
        <div class="sortable-masonry">

            <div class="row">
            <div class="col-md-3 mb-5">
                <div class="shop-sidebar">
                    <form id="filterForm" action="{{ isset($category) ? route('category_product', ['category' => $category->slug]) : route('category_product') }}" method="GET">
                        <!-- Search Field -->


                        <div class="sidebar-search mb-4">
                            <div class="form-group"  style="display: flex">

                             <input type="text" name="search" class="form-control" placeholder="Search products..." value="{{ request('search') }}">
                                <button type="submit" style="background: #091125;
    padding: 5px;
    color: #FFF;"><i class="icon-search" ></i></button>
                            </div>
                        </div>
                        
                        <!-- Category Filter -->
                        <div class="sidebar-widget category-widget mb-4 ">
                            <div class="widget-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="form-group">
                            <select class="form-select" name="category" id="categoryFilter">
                                
                                <option value="">All Categories</option>
                                @foreach($categories as $cat)
                                <option value="{{ $cat->slug }}" {{ $category?->id == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                                @endforeach
                            </select>
                            </div>

                       
                        </div>
                        
                        <!-- Partner Filter (will be populated via AJAX) -->
                        <div class="sidebar-widget partner-widget mb-4">
                            <div class="widget-title">
                                <h4>Partners</h4>
                            </div>

                             <div class="form-group">
                                <select class="form-select" name="partner_id" id="partnerFilter" {{ !request('category') ? 'disabled' : '' }}>
                                <option value="">All Partners</option>
                                @if(request('category') && isset($partners))
                                    @foreach($partners as $partner)
                                        <option value="{{ $partner->id }}" {{ request('partner_id') == $partner->id ? 'selected' : '' }}>
                                            {{ $partner->name }}
                                        </option> 
                                    @endforeach
                                @endif
                            </select>
                             </div>

                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100">Apply Filters</button>
                    </form>
                </div>
            </div>




            @foreach ($products as $product )
                            <div class="col-md-9">
                    <div class="card mb-3">
                        <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('uploads/images/gallery/' . $product->image) }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}
                            </h5>
                            <p class="small-text">

                                {!! $product->des !!}
                            </p>
                           



                                    <div class="link-btn text-center mb-30 d-flex justify-content-around">
                                        <a class="atomic-medium-button"
                                        href="{{ route('request' , ['product_id' => $product->id]) }}">
                                        <span>
                                        Request a quote </span>
                                    </a>
                                    <a class="atomic-medium-button bg-gray"
                                        href="service-details.html">
                                        <span>
                                        Load More </span>
                                    </a>
                                    </div>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
            @endforeach



            </div>
          <!--Filter-->


        </div>
      </div>
    </section>






@endsection