@extends('layouts.lower')

@section('content')
 <!-- Page Banner Section Start -->
 <div class="page-banner-section section bg_color--5 pt-120 pt-lg-100 pt-md-80 pt-sm-60 pt-xs-50">
    <div class="container p-0">
        <div class="row g-0">
            <div class="col-12">
                <div class="banner-image">
                    <img src="{{asset('uploads/coverphoto')}}/{{$brand->cover_photo}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Breadcrumb Section Start -->
  <div class="breadcrumb-section section bg_color--5">
    <div class="container job-content-box sb-border-two">
        <div class="row">
            <div class="col-12">
                <div class="page-breadcrumb-content mb-40">
                    <ul class="page-breadcrumb">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="job-listing.html">Brands</a></li>
                        <li>{{$brand->brand_name}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="employer-head-info">
                    <div class="employer-logo logo-two">
                        <img src="{{asset('uploads/logo')}}/{{$brand->logo}}" alt="brand_logo">
                    </div>
                    <div class="employer-content">
                        <h1 class="employer-name">{{$brand->brand_name}} <i class="fas fa-check-circle"></i></h1>
                        <ul class="employer-meta">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="far fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="sidebar-wrapper-three">
                    <div class="common-sidebar-widget sidebar-three mb-0 pb-0">
                        <div class="sidebar-job-share">
                            <div class="job-share candidate-action">
                                <ul>
                                    <li><a href="#"><i class="lnr lnr-bubble"></i> <span class="text">共有 </span></a>
                                        <ul class="social-share candidate-share">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-social mt-20">
                            <div class="social-all justify-content-lg-end">
                                <a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
                                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="employer-meta-box mt-30">
            <div class="row g-0">

                <div class="col-lg-3 col-md-6 col-sm-6 pb-15 pb-lg-15 pb-md-12 pb-sm-8 pb-xs-8">
                    <!-- Single Meta Field Start -->
                    <div class="single-meta-field meta-field-three">
                        <div class="field-label">
                            <i class="lnr lnr-tag"></i>
                            <span>Categories </span>
                        </div>
                        <div class="field-value">Teachers</div>
                    </div>
                    <!-- Single Meta Field Start -->
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 pb-15 pb-lg-15 pb-md-12 pb-sm-8 pb-xs-8">
                    <!-- Single Meta Field Start -->
                    <div class="single-meta-field meta-field-three">
                        <div class="field-label">
                            <i class="lnr lnr-users"></i>
                            <span>メンバー </span>
                        </div>
                        <div class="field-value"><a href="#">20-40</a></div>
                    </div>
                    <!-- Single Meta Field Start -->
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 pb-15 pb-lg-15 pb-md-12 pb-sm-8 pb-xs-8">
                    <!-- Single Meta Field Start -->
                    <div class="single-meta-field meta-field-three">
                        <div class="field-label">
                            <i class="lnr lnr-earth"></i>
                            <span>Webサイト </span>
                        </div>
                        <div class="field-value">{{$brand->home_page}}</div>
                    </div>
                    <!-- Single Meta Field Start -->
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 pb-15 pb-lg-15 pb-md-12 pb-sm-8 pb-xs-8">
                    <!-- Single Meta Field Start -->
                    <div class="single-meta-field meta-field-three border-0">
                        <div class="field-label">
                            <i class="lnr lnr-map-marker"></i>
                            <span>所在地 </span>
                        </div>
                        <div class="field-value"><a href="#">{{$brand->address}}</a></div>
                    </div>
                    <!-- Single Meta Field Start -->
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Single Meta Field Start -->
                    <div class="single-meta-field meta-field-three">
                        <div class="field-label">
                            <i class="lnr lnr-tag"></i>
                            <span>Twitter</span>
                        </div>
                        <a href="{{$brand->twitter_url}}"><button class="ht-btn">Twitter</button></a>
                    </div>
                    <!-- Single Meta Field Start -->
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Single Meta Field Start -->
                    <div class="single-meta-field meta-field-three">
                        <div class="field-label">
                            <i class="lnr lnr-tag"></i>
                            <span>Instagram </span>
                        </div>
                        <a href="{{$brand->instagram_url}}"><button class="ht-btn">Instagram</button></a>
                    </div>
                    <!-- Single Meta Field Start -->
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Single Meta Field Start -->
                    <div class="single-meta-field meta-field-three">
                        <div class="field-label">
                            <i class="lnr lnr-tag"></i>
                            <span>Tiktok</span>
                        </div>
                        <a href="{{$brand->tiktok_url}}"><button class="ht-btn">Tiktok</button></a>
                    </div>
                    <!-- Single Meta Field Start -->
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Single Meta Field Start -->
                    <div class="single-meta-field meta-field-three border-0">
                        <div class="field-label">
                            <i class="lnr lnr-map-marker"></i>
                            <span>YouTube </span>
                        </div>
                        <a href="{{$brand->youtube_url}}"><button class="ht-btn">YouTube</button></a>
                    </div>
                    <!-- Single Meta Field Start -->
                </div>


            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Start -->

<div class="employer-details-section section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
    <div class="container job-content-box">
        <div class="row">

            <div class="col-lg-12 order-lg-3 order-3 pr-55 pr-md-15 pr-sm-15 pr-xs-15">

                <div class="employer-main-content">
                    <div class="field-description">
                        <h2>{{$brand->catch_copy}}</h2>
                        <p>{{$brand->description}}</p>
                        <br>
                        <hr>

                        <h3>Brand Story</h3>

                        <p>Upperside Group has been established as a marketing company in North and South America. Our traditional business model is based on the accomplishment of properties in the commercial markets in America. Based on the decision of the company to diversify our properties; we have now established this corporation in Toronto. The revenues of our company are expected to be nearly US$50,000 per month depending on the variables that are factored in with investments in the commercial industry. There is a great need for certified or official bank checks in the future to deal with some trading transactions.</p>

                        <p>In addition to marketing investments, the company has invested portions of its assets in the purchase and sale of securities such as stocks and bonds as well as Forex trading on global markets. Upperside Group conducts marketing as well as consulting. The company undertakes all maintenance duties for marketing facilities and organizations and conducts all the security and surveillance for the properties.</p>

                        <h3>What You Will Get</h3>

                        <p>While salary is a major deciding factor in accepting a job offer, employees experience job satisfaction beyond monetary value. Hiring managers need to know how to attract the best and most dedicated candidates, and having the right benefits package is sure to attract the right people. So, what benefits do employees value most?</p>

                        <ul>
                            <li>Extra Private health insurance coverage by the company to help you getting better focus on working</li>
                            <li>Flexible working time schedule and leave policy as we know the importance of work-life balance</li>
                            <li>CBe exposed to the latest technology and the most innovative ideas worldwide</li>
                            <li>Company trip, team-building events</li>
                            <li>13th salary and project bonus</li>
                            <li>Work-from-home policy</li>
                            <li>Support laptop</li>
                            <li>Extra healthcare package</li>
                        </ul>
                    </div>
                    <div class="field-Gallery">
                        <h3>Gallery</h3>
                        <ul class="portfolio-list">
                            <li><a href="#"><img src="assets/images/portfolio/portfolio1.jpg" alt=""></a></li>
                            <li><a href="#"><img src="assets/images/portfolio/portfolio2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="assets/images/portfolio/portfolio3.jpg" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="job-area mt-60">
                        <div class="job-container">
                            <h3 class="title">Opening Items</h3>
                            <div class="row">

                                    <!-- Single Job Start  -->
                                    @foreach($brand->items as $item)
                                    <div class="col-lg-12">
                                    <div class="single-job style-two">
                                        <div class="info-top">
                                            <div class="job-info">
                                                <div class="job-info-inner">
                                                    <div class="job-info-top">
                                                        <div class="saveJob for-listing">
                                                            {{-- <a class="job-type-label ml-20 mr-20">{{$item->category->name}}</a> --}}
                                                            <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </div>
                                                        <div class="title-name">
                                                            <h5 class="job-title">
                                                                <a href="{{route('items.show',[$item->id,$item->slug])}}">{{str_limit($item->title,20)}}</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div class="job-meta-two">
                                                        <div class="field-salary_from">
                                                            <i class="gj-icon gj-icon-money"></i>
                                                            {{$item->price}}円 / {{$item->lot_number}}{{$item->lot}}
                                                        </div>
                                                        <div class="field-datetime"><i class="lnr lnr-clock"></i>{{$item->created_at->diffForHumans()}}</div>
                                                        <div class="field-map"><i class="lnr lnr-map-marker"></i>Hanoi, Hanoi</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    @endforeach
                                    <!-- Single Job End -->


                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
