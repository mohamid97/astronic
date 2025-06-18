@extends('front.layout.master')

@section('content')

   <div class="sub-banner pt-80 pb-80">
    <div class="container">
        <div class="col-md-8 m-auto">
            <div class="text-center text-line">
                <h1>Request a quote</h1>
                <ul class="text-c">
                    <li>Home</li>
                    <li>|</li>
                    <li class="color-t">Request a quote</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- banner-section end -->

<section class="contact-page-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Column -->
            <div class="form-column-2 col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <h2>Request a quote</h2>
                        <div class="separate"></div>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form">

                        <!-- Contact Form -->
                        <form method="post"  novalidate="novalidate" action=" {{ route('send.contact') }} ">
                            @csrf
                            <div class="row clearfix">

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="Product Name"> Name</label>

                                    <input type="text" name="name" placeholder="Name" required="" value="{{ old('name') }}">
                                    <div class="error-message">
                                        @error('addresse')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="Product Name">Address </label>

                                    <input type="text" name="addresse" placeholder="Address" required="" value="{{ old('addresse') }}">
                                    <div class="error-message">
                                        @error('addresse')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label for="Product Name">Email</label>

                                    <input type="email" name="email" placeholder="Email"
                                        required=""     value="{{ old('email') }}">

                                   <div class="error-message">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="Product Name">Product Name</label>
                                    <input  type="text" name="product_name" placeholder="Product Name" value="{{$product->name ? strip_tags($product->name): ''}}">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                      <label for="Phone Number">Phone Number</label>
                                    <input type="tel" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                                    <div class="error-message">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    
                                  <label for="Product Name">Company </label>

                                    <input type="text" name="subject" placeholder="Company" required="" value="{{ old('subject') }}">
                                      <div class="error-message">
                                        @error('subject')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                     <label for="Comment">Comment</label>

                                    <textarea class="darma" name="message" placeholder="Comment..."> {{old('message')}}</textarea>
                                    <div class="error-message">
                                       @error('subject')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button class="theme-btn submit-btn" type="submit"
                                        name="submit-form">Send</button>
                                </div>

                            </div>
                        </form>

                    </div>
                    <!-- End Contact Form -->

                </div>
            </div>

        </div>
    </div>
</section>



@endsection