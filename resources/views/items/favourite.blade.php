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
                                    <li><a href="{{route('buyer.dashboard')}}"><i class="lnr lnr-chart-bars"></i> ダッシュボード </a></li>
                                    <li><a href="message.html"><i class="lnr lnr-bubble"></i> メッセージ </a></li>
                                    <li><a href="job-alerts.html"><i class="lnr lnr-envelope"></i> 商品に関する通知 </a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Items</h3>
                                <ul>
                                    <li><a href="applications.html"><i class="lnr lnr-briefcase"></i> 申請した商品 </a></li>
                                    <li><a class="active" href="{{route('items.favourite')}}"><i class="lnr lnr-bookmark"></i> お気に入りの商品 </a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Account</h3>
                                <ul>
                                    <li><a href="{{route('buyer.view')}}}}"><i class="lnr lnr-user"></i> プロフィール </a></li>
                                    <li><a href="login-register.html"><i class="lnr lnr-exit-up"></i> ログアウト </a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            @if(Auth::user()->user_type == 'buyer')
            <div class="col-xl-10 col-lg-9">

                <div class="dashboard-main-inner">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-breadcrumb-content mb-40">
                                <h1>お気に入りの商品</h1>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-overview">
                        <div class="row">
                            <div class="col-xl-12 col-12">
                                <div class="job-applications mb-50">
                                    <div class="bookmark-main-block">
                                        <div class="bookmark-table">
                                            <table class="table">
                                                <tbody>
                                                    @foreach($items as $item)
                                                    <tr class="bookmark-item">
                                                        <td class="bookmark-job">
                                                            <!-- Single Job Start  -->
                                                            <div class="single-job style-two border-0 p-0 bg-transparent">
                                                                <div class="info-top">
                                                                    <div class="job-image ml-0 mr-10 mr-xs-0">
                                                                        <a href="{{route('items.show',[$item->id,$item->slug])}}">
                                                                            <img src="{{asset('upload/logo')}}/{{$item->logo}}}}" alt="logo">
                                                                        </a>
                                                                    </div>
                                                                    <div class="job-info">
                                                                        <div class="job-info-inner">
                                                                            <div class="job-info-top">
                                                                                <div class="title-name">
                                                                                    <h5 class="job-title">
                                                                                        <a href="{{route('items.show',[$item->id,$item->slug])}}">{{str_limit($item->title)}}</a>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-meta-two flex-wrap">
                                                                                <div class="field-salary_from">
                                                                                    <i class="gj-icon gj-icon-money"></i>
                                                                                    {{$item->price}}円 / {{$item->lot_number}}{{$item->lot}}
                                                                                </div>
                                                                                <div class="field-datetime"><i class="lnr lnr-clock"></i>{{$item->created_at->diffForHumans()}}</div>
                                                                                <div class="field-map"><i class="lnr lnr-hourglass"></i>{{$item->last_date}}</div>
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
            @endif
        </div>
    </div>
</div>
<!-- Dashboard Content Section End -->
@endsection
