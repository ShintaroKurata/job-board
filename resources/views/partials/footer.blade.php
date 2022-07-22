 <!--Footer section start-->
 <footer class="footer-section section">

    <!-- Footer Top Section Start -->
    <div class="footer-top-section section pt-115 pt-lg-95 pt-md-75 pt-sm-55 pt-xs-45 pb-90 pb-lg-70 pb-md-40 pb-sm-20 pb-xs-15">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-lg-3 col-md-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget mb-30">
                        <div class="logo">
                            <a href="/"><img src="{{asset('external/images/fashionate_logo.png')}}" style="width: 80%;" alt="logo"></a>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>

                <div class="col-xl-2 col-lg-2 col-md-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget mb-30">
                        <h6 class="title">Useful Links</h6>
                        <div class="footer-widget-link">
                            <ul>
                                <li><a href="#">利用規約</a></li>
                                <li><a href="#">プライバシーポリシー</a></li>
                                <li><a href="#">会社概要</a></li>
                                <li><a href="#">お問い合わせ</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>

                <div class="col-xl-2 col-lg-3 col-md-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget mb-30">
                        <h6 class="title">Featured Items</h6>
                        <div class="footer-widget-link">
                            <ul>
                                @foreach(App\Models\Category::all() as $cat)
                                       <li>{{$cat->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget mb-30">
                        <h6 class="title">News Letter</h6>
                        <div class="newsletter">
                            <p>Join our email subscription now to get updates on <strong>new jobs</strong> and <strong>notifications</strong>.</p>
                            <div class="newsletter-form">
                                <form id="mc-form" class="mc-form">
                                    <input type="email" placeholder="Enter Your email..." required="" name="EMAIL">
                                    <button class="ht-btn small-btn" type="submit" value="submit">Subscribe</button>
                                </form>
                            </div>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top Section End -->

    <!--Footer bottom start-->
    <div class="footer-bottom section fb-60">
        <div class="container">
            <div class="row g-0 st-border pt-35 pb-35 align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright">
                        <p>&copy;2022 <a href="">FASHIONATE</a>. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer bottom end-->

</footer>
<!--Footer section end-->


    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="{{asset('external/js/vendor/jquery-3.5.0.min.js')}}"></script>
    <script src="{{asset('external/js/vendor/jquery-migrate-3.1.0.min.js')}}"></script>
    <script src="{{asset('external/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('external/js/plugins/plugins.js')}}"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="{{asset('external/js/plugins/plugins.min.js')}}"></script>
    <script src="{{asset('external/js/main.js')}}"></script>
