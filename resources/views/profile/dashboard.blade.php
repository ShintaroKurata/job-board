@extends('layouts.lower')

@section('content')
<!-- Dashboard Content Section Start -->
<div class="dashboard-content-section section bg_color--5">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xl-2 col-lg-3">
                <div class="dashboard-sidebar">
                    <div class="dashboard-menu">
                        <ul class="nav">
                            <li>
                                <h3>Main</h3>
                                <ul>
                                    <li><a class="active" href="{{route('buyer.dashboard')}}"><i class="lnr lnr-chart-bars"></i> ダッシュボード </a></li>
                                    <li><a href="message.html"><i class="lnr lnr-bubble"></i> メッセージ </a></li>
                                    <li><a href="job-alerts.html"><i class="lnr lnr-envelope"></i> 商品に関する通知 </a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Items</h3>
                                <ul>
                                    <li><a href="{{route('items.favourite')}}"><i class="lnr lnr-bookmark"></i> お気に入りの商品 </a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Account</h3>
                                <ul>
                                    <li><a href="{{route('buyer.view')}}"><i class="lnr lnr-user"></i> プロフィール </a></li>
                                    <li><a href="login-register.html"><i class="lnr lnr-exit-up"></i> ログアウト </a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-10 col-lg-9">
                <div class="dashboard-main-inner">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-breadcrumb-content mb-40">
                                <h1>ダッシュボード</h1>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-overview">
                        <div class="row">
                            <div class="col-xl-12 col-12">
                                <div class="submited-applications mb-50">
                                    <div class="applications-heading">
                                        <h3>申請済みの商品</h3>
                                    </div>
                                    <div class="applications-main-block">
                                        <div class="applications-table">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="width-35">Applied Items</th>
                                                        <th class="width-15">Brand</th>
                                                        <th class="width-12">Status</th>
                                                        <th class="width-15">Applied Date</th>
                                                        <th class="width-23 text-right">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($items as $item)
                                                    <tr class="application-item">
                                                        <td class="application-job">
                                                            <h3><a href="{{route('items.show',[$item->id,$item->slug])}}">{{str_limit($item->title)}}</a></h3>
                                                        </td>

                                                        <td class="application-employer">
                                                            <a class="dotted" href="{{route('brand.index',[$item->brand->id,$item->brand->slug])}}">{{$item->brand->brand_name}}</a>
                                                        </td>

                                                        <td class="status">
                                                            <span class="pending">Pending</span>
                                                        </td>

                                                        <td class="application-created">
                                                            <span> {{$item->created_at}} </span>
                                                        </td>

                                                        <td class="view-application text-xl-right">
                                                            <a href="#" class="view-application">View Application</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="application-pagination mb-30">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="page-pagination justify-content-center">
                                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                                        <li class="active"><a href="#">1</a></li>
                                                        <li><a href="#">2</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bookmark-applications mb-50">
                                    <div class="bookmark-heading">
                                        <h3>お気に入りの商品</h3>
                                        <a href="{{route('items.favourite')}}">View All  <i class="lnr lnr-chevron-right"></i></a>
                                    </div>
                                    <div class="bookmark-main-block">
                                        <div class="bookmark-table">
                                            <table class="table">
                                                <tbody>
                                                    @foreach($fav_items as $fav_item)
                                                    <tr class="bookmark-item">
                                                        <td class="bookmark-job">
                                                            <!-- Single Job Start  -->
                                                            <div class="single-job style-two border-0 p-0 bg-transparent">
                                                                <div class="info-top">
                                                                    <div class="job-image ml-0 mr-10 mr-xs-0">
                                                                        <a href="{{route('items.show',[$fav_item->id,$fav_item->slug])}}">
                                                                            <img src="assets/images/companies_logo/logo-100/logo1.jpg" alt="logo">
                                                                        </a>
                                                                    </div>
                                                                    <div class="job-info">
                                                                        <div class="job-info-inner">
                                                                            <div class="job-info-top">
                                                                                <div class="title-name">
                                                                                    <h5 class="job-title">
                                                                                        <a href="{{route('items.show',[$fav_item->id,$fav_item->slug])}}">{{str_limit($fav_item->title)}}</a>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-meta-two flex-wrap">
                                                                                <div class="field-salary_from">
                                                                                    <i class="gj-icon gj-icon-money"></i>
                                                                                  {{$fav_item->price}} / {{$fav_item->lot_number}}{{$fav_item->lot}}
                                                                                </div>
                                                                                <div class="field-datetime"><i class="lnr lnr-clock"></i>{{$fav_item->created_at->diffForHumans()}}</div>
                                                                                <div class="field-map"><i class="lnr lnr-hourglass"></i>{{$fav_item->last_date}}</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Single Job End -->
                                                        </td>


                                                        <td class="delete-bookmark text-xl-right">
                                                            <a href="#"> <i class="lnr lnr-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard Content Section End -->
@endsection
