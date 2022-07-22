@extends('layouts.lower')

@section('content')
        <!-- Breadcrumb Section Start -->
        <div class="breadcrumb-section section bg_color--5 pt-60 pt-sm-50 pt-xs-40 pb-60 pb-sm-50 pb-xs-40">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-breadcrumb-content">
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>すべての商品</li>
                            </ul>
                            <h1>すべての商品</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section Start -->

        <!-- Job Listing Section Start -->
        <div class="job-listing-section section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row g-0">

                    <div class="col-lg-3 order-lg-1 order-2 pr-55 pr-md-15 pr-sm-15 pr-xs-15">
                        <div class="sidebar-wrapper-two mt-sm-40 mt-xs-40">
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">商品を検索する</h2>
                                <div class="sidebar-search-form-two">
                                    <form action="{{route('items.allitems')}}" method="GET">
                                        <div class="input-group">
                                            <input type="text" name="search" placeholder="Search...">
                                            <i class="lnr lnr-magnifier"></i>
                                        </div>
                                        <button type="submit" class="ht-btn theme-btn theme-btn-two w-100">Search</button>
                                    </form>
                                </div>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">所在地</h2>
                                <div class="sidebar-location-form">
                                    <form action="{{route('items.allitems')}}" method="GET">
                                        <div class="input-group">
                                            <input type="text" name="search" placeholder="Enter location">
                                            <i class="far fa-dot-circle"></i>
                                        </div>
                                    </form>
                                </div>
                                <div class="sidebar-location-range mt-10">
                                    <div class="location-range">
                                        <label for="amount">Radius:</label>
                                        <input type="text" id="amount" readonly>
                                    </div>
                                    <div id="slider-range-min"></div>
                                </div>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">価格</h2>
                                <div class="sidebar-salary">
                                    <div id="salary-range" class="mb-20"></div>
                                    <div class="salary-range-group">
                                        <label for="salary-amount-txt">価格帯:</label>
                                        <input type="text" id="salary-amount-txt" class="salary-amount" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">商品カテゴリー</h2>
                                <ul class="sidebar-cbx-list">
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="type-cbx">
                                            <label for="type-cbx">Contract (0)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="type-cbx-two">
                                            <label for="type-cbx-two"> Freelancer (3)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="type-cbx-three">
                                            <label for="type-cbx-three">Full Time (13)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="type-cbx-four">
                                            <label for="type-cbx-four">Internship (1)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="type-cbx-five">
                                            <label for="type-cbx-five">Part Time (2)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="type-cbx-six">
                                            <label for="type-cbx-six">Remote (2)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="type-cbx-seven">
                                            <label for="type-cbx-seven">Temporary (2)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">Level</h2>
                                <ul class="sidebar-cbx-list">
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="level-cbx">
                                            <label for="level-cbx">Junior (1)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="level-cbx-two">
                                            <label for="level-cbx-two"> Manager (6)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="level-cbx-three">
                                            <label for="level-cbx-three">Professional (3)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="filter-name-item">
                                            <input type="checkbox" name="expericence" id="level-cbx-four">
                                            <label for="level-cbx-four">Senior (3)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">Skills</h2>
                                <ul class="sidebar-tag">
                                    <li><a href="#">Account Manager</a></li>
                                    <li><a href="#">Administrative</a></li>
                                    <li><a href="#">Android</a></li>
                                    <li><a href="#">Angular</a></li>
                                    <li><a href="#">app</a></li>
                                    <li><a href="#">ASP.NET</a></li>
                                    <li><a href="#">Automotive</a></li>
                                    <li><a href="#">Banner</a></li>
                                </ul>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <h2 class="sidebar-title">Company Spotlight</h2>
                                <div class="sidebar-emp-slider">
                                    <div class="col-lg-4 d-flex flex-column">
                                        <!-- Single Employer Item Start -->
                                        <div class="single-employer-item">
                                            <div class="image-featured">
                                                <img src="assets/images/employer/cover-image-employer-2.jpg" alt="">
                                            </div>
                                            <div class="item-content">
                                                <div class="avatar">
                                                    <img src="assets/images/companies_logo/logo-100/logo2.jpg" alt="">
                                                </div>
                                                <h4 class="title"><a href="#">Digital Asset</a></h4>
                                                <div class="meta">
                                                    <div class="star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="location"><i class="lnr lnr-map-marker"></i>Beijing, China </span>
                                                    <span class="count-job theme-color">1 Jobs </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Employer Item End -->
                                    </div>



                                </div>
                            </div>
                            <div class="common-sidebar-widget sidebar-two">
                                <div class="sidbar-image">
                                    <a href="#">
                                        <img src="assets/images/banner/ads.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 order-lg-2 order-1">
                        <div class="filter-form">
                            <div class="result-sorting">
                                <div class="total-result">
                                    <span class="total">(22)</span>
                                    Jobs &amp; Vacancies
                                </div>
                                <div class="job-alert-form">
                                    <span class="btn-open-form">
                                    <i class="lnr lnr-envelope"></i>
                                    Email me jobs like these
                                </span>
                                    <div class="job-alert-form-box">
                                        <h3 class="title"> Email me items like these</h3>
                                        <div class="btn-close-form"><i class="lnr lnr-cross-circle"></i></div>
                                        <form action="#">
                                            <div class="newsletter">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <input type="text" name="alert-name" placeholder="Item alert name..." class="alert-name">
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="email" class="alert-email" placeholder="example@email.com" name="alert-email">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button class="ht-btn">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="form-left">
                                    <div class="sort-by">
                                        <form action="#">
                                            <label class="text-sortby">Sort by:</label>
                                            <select class="nice-select">
                                                <option value="1">Title</option>
                                                <option value="2">Date</option>
                                                <option value="3">Salary</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="layout-switcher">
                                        <ul class="nav">
                                            <li><a class="active show" data-bs-toggle="tab" href="#grid"><i class="fa fa-th"></i></a></li>
                                            <li><a data-bs-toggle="tab" href="#list"><i class="fa fa-list"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="grid" class="tab-pane fade show active">
                                <div class="row">
                                    @foreach($items as $item)
                                    <div class="col-md-4 mb-10">
                                        <!-- Single Job Start  -->
                                        <div class="single-job-grid-two">
                                            <div class="saveJob-grid">
                                                <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                                    <i class="far fa-heart"></i>Save </a>
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
                                                        {{$item->price}}円 /  {{$item->lot_number}}{{$item->lot}}
                                                    </div>
                                                    <div class="field-datetime"><i class="lnr lnr-clock"></i>{{$item->created_at->diffForHumans()}}</div>
                                                </div>
                                                <div class="field-descriptions">
                                                    <p>{{str_limit($item->description,20)}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Job End -->
                                    </div>

                                    @endforeach
                                </div>
                                {{$items->appends(Illuminate\Support\Facades\Request::except('page'))->links('pagination::bootstrap-5')}}
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Job Listing Section End -->
@endsection
