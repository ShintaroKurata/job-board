@extends('layouts.lower')

@section('content')
{{-- <div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          ...
        </div>
        <!-- スライドさせる画像の設定 -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="..." alt="第1スライド" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
              <h5>第1スライド ラベル</h5>
              <p>1番目のスライドの代表的なプレースホルダコンテンツ。</p>
            </div><!-- /.carousel-caption -->
          </div><!-- /.carousel-item -->
          ...
        </div><!-- /.carousel-inner -->
        ...
      </div>
</div> --}}
<div class="job-listing-section section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
<div class="container">
    <div class="col-md-12">
        <search-component></search-component>
    </div>
    <div class="row g-0 job-head-content">
        <h1 class="title  pb-50 pb-lg-50 pb-md-30 pb-sm-30 pb-xs-30 pt-50 pt-lg-50 pt-md-30 pt-sm-30 pt-xs-30">最新の商品</h1>
        <div class="col-lg-12 order-lg-3 order-1">
            <div class="row">
                @foreach($items as $item)
                <div class="col-md-3 mb-10">
                    <div class="single-job-grid-two">
                        <div id="app" class="saveJob-grid">
                            {{-- <a class="job-type-label" href="#">{{$item->category->name}}</a> --}}
                            @if(Auth::check()&&Auth::user()->user_type=='buyer')
                            <favourite-component :itemid={{$item->id}} :favourited={{$item->checkSaved()?'true':'false'}}></favourite-component>
                            @endif
                        </div>
                        <div class="job-image">
                            <a href="#">
                                <img src="{{asset('uploads/logo')}}/{{$item->brand->logo}}" alt="brand_logo" width="80">
                            </a>
                            <span class="featured-label for-grid">featured</span>
                        </div>
                        <div class="job-info">
                            <div class="job-info-top">
                                <div class="title-name">
                                    <h3 class="job-title">
                                        <a href="{{route('items.show',[$item->id,$item->slug])}}">{{str_limit($item->title,25)}}y</a>
                                    </h3>
                                    <div class="employer-name">
                                        <a href="{{route('brand.index',[$item->brand->id,$item->brand->slug])}}">{{$item->brand->brand_name}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="job-meta-two">
                                <div class="field-salary_from">
                                    <i class="gj-icon gj-icon-money"></i>
                                    {{$item->price}}円&nbsp;（{{$item->lot_number}}{{$item->lot}}あたり）
                                </div>
                                <div class="field-datetime"><i class="lnr lnr-clock"></i>{{$item->last_date}}</div>
                                <div class="field-map"><i class="lnr lnr-map-marker"></i>{{$item->brand->address}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a href="{{route('items.allitems')}}"><button class="ht-btn">すべての商品を見る</button></a>
        </div>
    </div>
        <br><br>
    {{-- @if(Auth::user()->user_type === "buyer") --}}
    <div class="employers-listing-section  job-head-content section bg_color--5 pb-120 pb-lg-100 pb-md-75 pb-sm-60 pb-xs-50">
        <h1 class="title pb-50 pb-lg-50 pb-md-30 pb-sm-30 pb-xs-30 pt-50 pt-lg-50 pt-md-30 pt-sm-30 pt-xs-30">注目のブランド</h1>
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
     {{-- @endif --}}
</div>
</div>
@endsection
<style>
    .fa-solid{
        color: #4183D7;
    }
</style>
