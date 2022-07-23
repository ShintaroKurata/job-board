@extends('layouts.lower')

@section('content')
<div class="employers-listing-section  job-head-content section bg_color--5 pb-120 pb-lg-100 pb-md-75 pb-sm-60 pb-xs-50">
    <div class="container">
        <h1 class="title pb-50 pb-lg-50 pb-md-30 pb-sm-30 pb-xs-30 pt-50 pt-lg-50 pt-md-30 pt-sm-30 pt-xs-30">すべてのブランド</h1>
        <div class="container">
            <div class="col-lg-12 order-lg-3 order-1">
                <div class="row">
                    @foreach($brands as $brand)
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 mb-10">
                        <!-- Single Employer Item Start -->
                        <div class="employer-item border">
                            <div class="saveJob for-grid">
                                <span class="featured-label mr-20">featured</span>
                                <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                    <i class="far fa-heart"></i>
                                </a>
                            </div>
                            <div class="employer-image">
                                <a href="{{route('brand.index',[$brand->id,$brand->slug])}}"><img src="{{asset('uploads/logo')}}/{{$brand->logo}}" alt="brand_logo"></a>
                            </div>
                            <div class="employer-info-top">
                                <span class="employer-location"><i class="lnr lnr-map-marker"></i>  {{$brand->address}}</span>
                                <h3 class="employer-name"><a href="{{route('brand.index',[$brand->id,$brand->slug])}}">{{$brand->brand_name}}</a></h3>
                                <a href="{{route('brand.index',[$brand->id,$brand->slug])}}" class="link-openjobs">2 Jobs</a>
                            </div>
                        </div>
                        <!-- Single Employer Item End -->
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
