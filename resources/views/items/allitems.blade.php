@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('items.allitems')}}" method="GET">
                <div class="form-inline">
                    <div class="col-md-3 form-group">
                        <label>キーワード</label>
                        <input type="text" name="title" class="form-control">&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="col-md-3 form-group">
                        <label>商品カテゴリー</label>
                        <select name="category_id"class="form-control">
                            <option value="">選択する</option>
                            @foreach(App\Models\Category::all() as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="col-md-3 form-group">
                        <label>所在地</label>
                        <input type="text" name="address" class="form-control">&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="col-md-3 form-group">
                        <label>価格</label>
                        <input type="text" name="price" class="form-control">&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="col-md-3 form-group">
                        <button type="submit" class="btn btn-outline-success">検索する</button>
                    </div>
                </div>
        </form>
    </div>
    <div class="row">
        <h1>All Items</h1>
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
    {{$items->appends(Illuminate\Support\Facades\Request::except('page'))->links('pagination::bootstrap-5')}}
@endsection
<style>
    .fa-solid{
        color: #4183D7;
    }
</style>
