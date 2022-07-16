@extends('layouts.app')

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
<div class="container">
    <div class="row">
        <h1>Latest Items</h1>
                @foreach($items as $item)
                        <div class="col-md-3">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{asset('uploads/logo')}}/{{$item->brand->logo}}" width="80">
                                        <div class="card-body">
                                        <h5 class="card-title">{{str_limit($item->title,25)}}</h5>
                                        <p class="card-text">{{str_limit($item->description,20)}}</p>
                                        <a href="{{route('items.show',[$item->id,$item->slug])}}" class="btn btn-primary">商品詳細を見る</a>
                                        </div>
                                    </div>
                        </div>
                @endforeach
    </div>

    <div>
        <a href="{{route('items.allitems')}}"><button class="btn btn-success btn-lg" style="width: 100%;">
            View all items
        </button></a>
    </div>
        <br><br>
      <div>
        <h1>Featured Brands</h1>
        <div class="container">
            <div class="row">
                 @foreach($brands as $brand)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('uploads/logo')}}/{{$brand->logo}}" width="80">
                        <div class="card-body">
                          <h5 class="card-title">{{$brand->brand_name}}</h5>
                          <p class="card-text">{{str_limit($brand->description,20)}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">An item</li>
                          <li class="list-group-item">A second item</li>
                          <li class="list-group-item">A third item</li>
                        </ul>
                        <div class="card-body">
                          <a href="{{route('brand.index',[$brand->id,$brand->slug])}}" class="card-link">ブランドプロフィールを見る</a>
                          <a href="#" class="card-link">Another link</a>
                        </div>
                      </div>
                </div>
                 @endforeach
            </div>
        </div>
     </div>
</div>
@endsection
<style>
    .fa-solid{
        color: #4183D7;
    }
</style>
