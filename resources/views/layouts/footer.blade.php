   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 offset-lg-3 col-12">
                                <h4 style="margin-top:100px;font-size:14px; font-weight:500; color:#F7941D; display:block; margin-bottom:5px;">Eshop Free Lite</h4>
                                <h3 style="font-size:30px;color:#333;">Currently You are using free lite Version of Eshop.<h3>
                                <p style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;">Please, purchase full version of the template to get all pages, features and commercial license</p>
                                <div class="button" style="margin-top:30px;">
                                    <a href="https://wpthemesgrid.com/downloads/eshop-ecommerce-html5-template/" target="_blank" class="btn" style="color:#fff;">Buy Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal end -->
    
    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Footer Top -->
       
        <!-- End Footer Top -->
        <div class="copyright">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        
                            <div class="col-lg-5">
                                <p>Copyright © 2022 <a href="http://www.wpthemesgrid.com" target="_blank">{{$setting->company}}</a>  -  All Rights Reserved.</p>
                            </div>
                            <div class="single-footer social" style="margin-top:-20px;!important">
                            
                            <!-- Single Widget -->
                            
                            <!-- End Single Widget -->
                            <ul>
                                <li><a href="{{$setting->facebook}}"><i class="ti-facebook"></i></a></li>
                                <li><a href="{{$setting->twitter}}"><i class="ti-twitter"></i></a></li>
                                <li><a href="{{$setting->youtube}}"><i class="ti-youtube"></i></a></li>
                                <li><a href="{{$setting->instagram}}"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                            
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /End Footer Area -->
 
    <!-- Jquery -->
    <script src="{{asset('front/')}}/js/jquery.min.js"></script>
    <script src="{{asset('front/')}}/js/jquery-migrate-3.0.0.js"></script>
    <script src="{{asset('front/')}}/js/jquery-ui.min.js"></script>
    <!-- Popper JS -->
    <script src="{{asset('front/')}}/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('front/')}}/js/bootstrap.min.js"></script>
    <!-- Color JS -->
    <script src="{{asset('front/')}}/js/colors.js"></script>
    <!-- Slicknav JS -->
    <script src="{{asset('front/')}}/js/slicknav.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="{{asset('front/')}}/js/owl-carousel.js"></script>
    <!-- Magnific Popup JS -->
    <script src="{{asset('front/')}}/js/magnific-popup.js"></script>
    <!-- Waypoints JS -->
    <script src="{{asset('front/')}}/js/waypoints.min.js"></script>
    <!-- Countdown JS -->
    <script src="{{asset('front/')}}/js/finalcountdown.min.js"></script>
    <!-- Nice Select JS -->
    <script src="{{asset('front/')}}/js/nicesellect.js"></script>
    <!-- Flex Slider JS -->
    <script src="{{asset('front/')}}/js/flex-slider.js"></script>
    <!-- ScrollUp{{asset('front/')}}/ JS -->
    <script src="{{asset('front/')}}/js/scrollup.js"></script>
    <!-- Onepage Nav JS -->
    <script src="{{asset('front/')}}/js/onepage-nav.min.js"></script>
    <!-- Easing JS -->
    <script src="{{asset('front/')}}/js/easing.js"></script>
    <!-- Active JS -->
    <script src="{{asset('front/')}}/js/active.js"></script>
   @yield('js')
</body>
</html>