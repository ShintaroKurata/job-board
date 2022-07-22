@extends('layouts.lower')

@section('content')


    <div id="main-wrapper">


        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg_color--5 pt-120 pt-lg-100 pt-md-80 pt-sm-60 pt-xs-50">
            <div class="container p-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="banner-image">
                            <img src="{{asset($item->brand->cover_photo)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!-- Breadcrumb Section Start -->
        <div class="breadcrumb-section section bg_color--5">
            <div class="container job-content-box">
                <div class="row">
                    <div class="col-12">
                        <div class="page-breadcrumb-content">
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="job-listing.html">Items</a></li>
                                <li>{{str_limit($item->title,30)}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="job-head-content">
                            <h1 class="title">{{str_limit($item->title,30)}}</h1>
                            <a href="{{route('brand.index',[$item->brand->id,$item->brand->slug])}}"><p class="employer-name">{{$item->brand->brand_name}}</p></a>
                            <div class="job-meta-detail">
                                <ul>
                                    <li class="posted">
                                        <i class="lnr lnr-clock"></i>
                                        <span class="text">投稿日</span>
                                        <span class="time">{{$item->created_at->diffForHumans()}}</span>
                                    </li>
                                    <li class="expries">
                                        <i class="lnr lnr-hourglass"></i>
                                        <span class="text">受付締切日</span>
                                        <span class="date theme-color">{{$item->last_date}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-sm-60 mt-xs-50">
                        <div class="sidebar-wrapper-three">
                            <div class="common-sidebar-widget sidebar-three mb-0 pb-0">
                                <div class="sidebar-job-apply">
                                    <div class="action-button">
                                        <a class="ht-btn text-center" href="#">連絡する <i class="ml-10 mr-0 fa fa-paper-plane"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="common-sidebar-widget sidebar-three">
                                <div class="sidebar-job-share">
                                    <div class="job-share">
                                        <ul>
                                            <li><a href="#"><i class="lnr lnr-heart"></i> <span class="text">お気に入り </span></a></li>
                                            <li><a href="#"><i class="lnr lnr-bubble"></i> <span class="text">共有 </span></a>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li><a href="#"><i class="far fa-envelope"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section Start -->

        <!-- Job Details Section Start -->
        <div class="job-details-section section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
            <div class="container job-content-box st-border">
                <div class="row">

                    <div class="col-lg-4 order-lg-2 order-2 mt-sm-60 mt-xs-50">
                        <div class="sidebar-wrapper-three">
                            <div class="common-sidebar-widget sidebar-three">
                                <h2 class="sidebar-title">商品情報</h2>
                                <div class="sidebar-meta">
                                    <div class="row g-0">

                                        <div class="col-lg-12">
                                            <!-- Single Meta Field Start -->
                                            <div class="single-meta-field">
                                                <div class="field-label">
                                                    <i class="lnr lnr-map-marker"></i>
                                                    <span>所在地</span>
                                                </div>
                                                <div class="field-value">{{$item->brand->address}}</div>
                                            </div>
                                            <!-- Single Meta Field Start -->
                                        </div>

                                        <div class="col-lg-12">
                                            <!-- Single Meta Field Start -->
                                            <div class="single-meta-field">
                                                <div class="field-label">
                                                    <i class="lnr lnr-thumbs-up"></i>
                                                    <span>商品価格</span>
                                                </div>
                                                <div class="field-value salary">{{$item->price}}円&nbsp;/&nbsp;{{$item->lot_number}}{{$item->lot}}</div>
                                            </div>
                                            <!-- Single Meta Field Start -->
                                        </div>

                                        <div class="col-lg-12">
                                            <!-- Single Meta Field Start -->
                                            <div class="single-meta-field">
                                                <div class="field-label">
                                                    <i class="lnr lnr-tag"></i>
                                                    <span>商品カテゴリー</span>
                                                </div>
                                                <div class="field-value"><a href="#">Accounting</a></div>
                                            </div>
                                            <!-- Single Meta Field Start -->
                                        </div>

                                        <div class="col-lg-12">
                                            <!-- Single Meta Field Start -->
                                            <div class="single-meta-field">
                                                <div class="field-label">
                                                    <i class="lnr lnr-graduation-hat"></i>
                                                    <span>Experience </span>
                                                </div>
                                                <div class="field-value"><a href="#">> 5 years</a></div>
                                            </div>
                                            <!-- Single Meta Field Start -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 order-lg-1 order-1 pr-55 pr-md-15 pr-sm-15 pr-xs-15">

                        <div class="job-detail-content">
                            <div class="field-descriptions mt-xs-20 mb-60 mb-sm-30 mb-xs-30">
                                <p>{{$item->description}}</p>

                                <h3>About Our Client</h3>

                                <p>Our client is a global company, serving millions of consumers all over the world. They are committed to deliver exceptional products to their consumers. A well-respected player with strong track record historically.</p>

                                <h3>Job Description</h3>

                                <p>As a Tax manager of this company, your will:</p>

                                <ul>
                                    <li>Manage tax reporting and compliance, ensuring compliance with tax regulation</li>
                                    <li>Develop and implement strategic tax planning</li>
                                    <li>Work closely with stakeholders across functions to understand the tax impact of business operations, monitor and advise on tax related matters, identify opportunities for process improvement, highlight potential non-compliance risks, tax saving opportunities, and provide recommendation for actions</li>
                                    <li>Maintain effective control procedures over all aspects of the tax process</li>
                                    <li>Proactively research, get-up-to-dated with tax regulation</li>
                                    <li>Manage Tax audits with close collaboration with finance and accounting teams</li>
                                </ul>


                                <h3>The Successful Applicant</h3>

                                <ul>
                                    <li>Bachelor’s degree in Finance / Banking / Accounting / Management</li>
                                    <li>At least 7 years of experience in Tax field</li>
                                    <li>Excellent communication skills</li>
                                    <li>Fluent in both written and spoken English</li>
                                    <li>A proactive attitude, good team player and good problem-solving skill</li>
                                </ul>

                                <h3>What’s on Offer</h3>

                                <p>The role offers excellent opportunities for top performers to further develop their competencies in tax and business partnering in a reputable company</p>

                            </div>
                            <div id="app" class="job-apply">
                                @if(Auth::check()&&Auth::user()->user_type=='buyer')
                                @if(!$item->checkApplication())
                                <apply-component :itemid={{$item->id}}></apply-component>
                                @endif
                                <br>
                                <favourite-component :itemid={{$item->id}} :favourited={{$item->checkSaved()?'true':'false'}}></favourite-component>
                                @endif
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Job Details Section End -->

        <!-- Job Grid Section Start -->
        <div class="job-grid-section section pt-120 pt-lg-100 pt-md-80 pt-sm-60 pt-xs-50 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-four mb-40">
                            <h3>関連商品</h3>
                        </div>
                    </div>
                </div>
                <div class="job-grid-slider">
                    @foreach($items as $item)
                    <div class="col-md-4">
                        <!-- Single Job Start  -->
                        <div class="single-job-grid-two">
                            <div class="saveJob-grid">
                                <button class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                    <i class="far fa-heart"></i>Save </button>
                            </div>
                            <div class="job-image">
                                <a href="{{route('items.show',[$item->id,$item->slug])}}">
                                    <img src="{{asset('uploads/logo')}}/{{$item->brand->logo}}" alt="logo">
                                </a>
                            </div>
                            <div class="job-info">
                                <div class="job-info-top">
                                    <div class="title-name">
                                        <h3 class="job-title">
                                            <a href="{{route('items.show',[$item->id,$item->slug])}}">{{str_limit($item->title,25)}}</a>
                                        </h3>
                                        <div class="employer-name">
                                            <a href="{{route('brand.index',[$item->brand->id,$item->brand->slug])}}">{{$item->brand->brand_name}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-meta-two">
                                    <div class="field-salary_from">
                                        <i class="gj-icon gj-icon-money"></i>
                                        {{$item->price}}円 / {{$item->lot_number}}{{$item->lot}}
                                    </div>
                                    <div class="field-datetime"><i class="lnr lnr-clock"></i>{{$item->created_at->diffForHumans()}}</div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Job End -->
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
        <!-- Job Grid Section End -->
</body>

</html>

@endsection
