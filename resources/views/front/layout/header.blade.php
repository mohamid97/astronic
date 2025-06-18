    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>{{ ($seo && isset($seo['title'])) ? $seo['title'] : 'Astronic' }} </title>
<meta name="title" content="{{ ($seo && isset($seo['title'])) ? $seo['title'] : 'Astronic' }}">
<meta name="description" content="{{ ($seo && isset($seo['meta_des'])) ? $seo['meta_des'] : 'Welcome to Astronic – your trusted source for products and services.' }}">
<!-- Fav Icon -->
<link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">

<!-- Stylesheets -->
<link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

<style>
   *{
        text-transform: capitalize;
    }
</style>

</head>


<!-- page wrapper -->

<body>
    @include('sweetalert::alert')
    <div class="boxed_wrapper">
    

        <!-- main header -->
        <header class="main-header style-one">
            <!-- mobile-header-info -->
            <div class="page-header-mobile-info">
                <div class="page-header-mobile-info-content">
                    <div class="header-top">
                        <div class="auto-container">
                            <div class="top-inner clearfix">
                                <ul class="info clearfix pull-left">
                                    <!-- <li><i class="icon-hour"></i>9.00 to 7.00 (Mon_Sat)</li> -->
                            {{($contact->address) ? $contact->address : '99 St., Taha El-Dinary, Abbas El-Akkad Extension, in front of Enppi, Nasr City, Cairo, Egypt'}} 

                                    </li>
                                    <li><a
                                            href="https://www.google.com/maps/dir/30.0167883,31.1896432/30.0057874,31.380043/@30.0180265,31.146544,11z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0">عرض
                                            على الخريطة<i class="icon-right-arrow"></i></a></li>
                                </ul>
                                <ul class="info clearfix pull-right">

                                    <li class="search-box-outer">
                                        <div class="dropdown">
                                            <button class="search-box-btn" type="button" id="dropdownMenu3"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                    class="icon-search"></i>ابحث</button>
                                            <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                                                <div class="form-container">
                                                    <form method="post" action="#">
                                                        <div class="form-group">
                                                            <input type="search" name="search-field" value=""
                                                                placeholder="ابحث...." required="">
                                                            <button type="submit" class="search-btn"><span
                                                                    class="fas fa-search"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- header-top -->
            <div class="header-top auto-hidden">
                <div class="auto-container">
                    <div class="top-inner clearfix">
                        <ul class="info clearfix pull-left">
                            <!-- <li><i class="icon-hour"></i>9.00 to 7.00 (Mon_Sat)</li> -->

                            <li>                            {{($contact->address) ? $contact->address : '99 St., Taha El-Dinary, Abbas El-Akkad Extension, in front of Enppi, Nasr City, Cairo, Egypt'}} 
 </li>
                            <li><a
                                    href="https://www.google.com/maps/dir/30.0167883,31.1896432/30.0057874,31.380043/@30.0180265,31.146544,11z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0">عرض
                                    على الخريطة<i class="icon-right-arrow"></i></a></li>
                        </ul>
                        <ul class="info clearfix pull-right">

                            <li class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn" type="button" id="dropdownMenu4"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="icon-search"></i>ابحث</button>
                                    <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu4">
                                        <div class="form-container">
                                            <form method="post" action="
                                            3">
                                                <div class="form-group">
                                                    <input type="search" name="search-field" value=""
                                                        placeholder="ابحث..." required="">
                                                    <button type="submit" class="search-btn"><span
                                                            class="fas fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header-upper -->


            <!-- header-lower -->
            <div class="header-lower">
                <div class="container-fluid">
                    <div class="outer-box clearfix">
                        <div class="menu-area clearfix pull-right">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler pull-left">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>



                            <nav class="main-menu navbar-expand-md navbar-light">

                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="{{ route('home') }}">Home</a></li>




@php
    $renderCategories = function($categories) use (&$renderCategories) {
        $html = '';

        foreach ($categories as $category) {
            $hasChildren = $category->children->isNotEmpty();
            $html .= '<li' . ($hasChildren ? ' class="dropdown"' : '') . '>';
            $html .= '<a href="' . route('category_product', ['category' => $category->slug]) . '">' . e($category->name) . '</a>';

            if ($hasChildren) {
                $html .= '<ul>';
                $html .= $renderCategories($category->children);
                $html .= '</ul>';
            }

            $html .= '</li>';
        }

        return $html;
    };
@endphp

<li class="dropdown">
    <a href="{{ route('category_product') }}">Products</a>
    <ul>
        {!! $renderCategories($nestedCategories) !!}
    </ul>
</li>


                                    <li><a href="{{ route('about') }}">about us</a>

                                        </li>





                                        <li><a href="{{ route('services') }}">Applications
                                            </a>
                                        </li>
                                        <li><a href="{{ route('projects') }}">Projects
                                        </a>
                                    </li>
                                    <li><a href="{{ route('partners') }}">Partners
                                    </a>
                                </li>
                                <li><a href="{{ route('blog') }}">News
                                </a>
                            </li>
                                        <li><a href="{{ route('contact') }}">Contact us</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="nav-logo pull-left">
                            <a href="{{ route('home') }}" class="navbar-brand">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" title=""></a>
                        </div>
                    </div>
                </div>
            </div>

          
          
            <!--sticky Header-->
            <div class="sticky-header">
                <div class="container-fluid">
                    <div class="outer-box clearfix">
                        <div class="menu-area pull-right">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="menu-right-content clearfix pull-left">
                            <ul class="social-style-one clearfix">
    @if($social['facebook_option'] === 'on')
        <li class="facebook"><a href="{{ $social['facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>
    @endif

    @if($social['youtube_option'] === 'on')
        <li class="youtube"><a href="{{ $social['youtube'] }}"><i class="fab fa-youtube"></i></a></li>
    @endif

    @if($social['linkedin_option'] === 'on')
        <li class="linkedin"><a href="{{ $social['linkedin'] }}"><i class="fab fa-linkedin"></i></a></li>
    @endif

    @if($social['twitter_option'] === 'on')
        <li class="twitter"><a href="{{ $social['twitter'] }}"><i class="fab fa-twitter"></i></a></li>
    @endif

    @if($social['instagram_option'] === 'on')
        <li class="instagram"><a href="{{ $social['instagram'] }}"><i class="fab fa-instagram"></i></a></li>
    @endif

    @if($social['snapchat_option'] === 'on')
        <li class="snapchat"><a href="{{ $social['snapchat'] }}"><i class="fab fa-snapchat"></i></a></li>
    @endif

    @if($social['skype_option'] === 'on')
        <li class="skype"><a href="{{ $social['skype'] }}"><i class="fab fa-skype"></i></a></li>
    @endif
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact us </h4>
                    <ul>
                        <li><i class="icon-placeholder"></i> شارع الميثاق، زهراء، مدينة نصر، شقة 2، الدور 99 St., Taha El-Dinary, Abbas El-Akkad Extension, in front of Enppi, Nasr City, Cairo, Egypt </li>
                        <li><a href="tel:+202 26700108

                            ">+202 26700108

                        </a></li>
                        <li><a href="mailto:astronic@astronic.org">astronic@astronic.org</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="http://astronic.org/www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="http://astronic.org/www.Youtube.com/"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="http://astronic.org/Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="http://astronic.org/Twitter"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


