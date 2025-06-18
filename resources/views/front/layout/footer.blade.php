
        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top">
                <div class="bg-layer"></div>
                <div class="auto-container">
                    <div class="widget-section">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget logo-widget">
                                    <figure class="footer-logo"><a href="{{ route('home') }}"><img
                                                src="{{ asset('assets/images/footer-logo.png') }}" alt=""></a></figure>
                                    <div class="support-box">
                                        <h4><a href="tel:{{($contact->phone1) ? $contact->phone1 : '+202 26700108'}}">{{($contact->phone1) ? $contact->phone1 : '+202 26700108'}}</a></h4>
                                        <p>Call for a free consultation!</p>
                                    </div>
                                    <div class="text">
                                        <p>Right to find fault with a man who also chooses to enjoy the pleasures that
                                            unpleasant consequences.</p>
                                        <a href="{{ route('about') }}">Read More<i class="fas fa-angle-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                        <h3>Quik Links</h3>
                                    </div>
                                    <div class="widget-content clearfix">
                                        <ul class="links-list clearfix">
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('about') }}">about us</a></li>
                                            <li><a href="index.html">Products</a></li>
                                            <li><a href="{{ route('contact') }}">Contact us
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget contact-widget">
                                    <div class="widget-title">
                                        <h3>Contact us</h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="info clearfix">
                                            <li><a href="tel:{{($contact->phone1) ? $contact->phone1 : '+202 26700108'}}"> </a></li>
                                           
                                            <li>
                                                <h6>Address</h6>
                                                <p> {{($contact->address) ? $contact->address : '99 St., Taha El-Dinary, Abbas El-Akkad Extension, in front of Enppi, Nasr City, Cairo, Egypt'}} 

                                                </p>
                                            </li>
                                            <li>
                                                <h6>Call Us</h6>
                                                <p><a href="mailto:{{($contact->email) ? $contact->email : 'astronic@astronic.org'}}">{{($contact->email) ? $contact->email : 'astronic@astronic.org'}}
                                                    </a></p>
                                            </li>

                                        </ul>
                                        <ul class="social-style-two clearfix">
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
                    </div>
                    <div class="footer-info">
                        <ul class="info-list clearfix">
                            <li>
                                <i class="icon-location"></i>
                                <h6>Address</h6>
                              <p>{{($contact->address) ? $contact->address : '99 St., Taha El-Dinary, Abbas El-Akkad Extension, in front of Enppi, Nasr City, Cairo, Egypt'}} 
                            </p>
                            </li>
                            <li>
                                <i class="icon-email-1"></i>
                                <h6>Call Us</h6>
                                <p><a href="mailto:{{($contact->email) ? $contact->email : 'astronic@astronic.org'}}">{{($contact->email) ? $contact->email : 'astronic@astronic.org'}}</a></p>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner clearfix">
                        <div class="copyright pull-left">
                            <p>&copy; 2022 <a href="index.html">CanGrow</a>, All Rights Reserved.</p>
                        </div>
                        <ul class="footer-nav pull-right clearfix">
                            <li><a href="index.html">Privacy Policy</a></li>
                            <li><a href="index.html">Terms & Conditions</a></li>
                            <li><a href="index.html">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>


<script src="{{ asset('assets/js/jquery.js') }}" defer></script>
<script src="{{ asset('assets/js/popper.min.js') }}" defer></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('assets/js/owl.js') }}" defer></script>
<script src="{{ asset('assets/js/wow.js') }}" defer></script>
<script src="{{ asset('assets/js/validation.js') }}" defer></script>
<script src="{{ asset('assets/js/jquery.fancybox.js') }}" defer></script>
<script src="{{ asset('assets/js/appear.js') }}" defer></script>
<script src="{{ asset('assets/js/scrollbar.js') }}" defer></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}" defer></script>
<script src="{{ asset('assets/js/script.js') }}" defer></script>

</body>

</html>