@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">アイテム情報を投稿する</div>
                <form action="{{route('items.update',[$item->id])}}" method="POST">@csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">タイトル：</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $item->title }}">
                            @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">商品詳細：</label>
                            <textarea name="description" class="form-control @error('title') is-invalid @enderror" value="{{ $item->description }}">{{ $item->description }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                        </div>
                        <div class="form-group">
                            <label for="lot">販売最小単位</label>
                            <input type="number" name="lot_number" class="form-control @error('title') is-invalid @enderror" value="{{ $item->lot_number }}">
                            @error('lot_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <select name="lot" class="form-control">
                                <option  value="着" {{$item->lot=="着"?'selected':''}}>着</option>
                                <option  value="足" {{$item->lot=="足"?'selected':''}}>足</option>
                                <option  value="個" {{$item->lot=="個"?'selected':''}}>個</option>
                                <option  value="セット" {{$item->lot=="セット"?'selected':''}}>セット</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">最小販売単位あたりの金額：（円）</label>
                            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ $item->price }}"><p>円</p>
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category">商品カテゴリー：</label>
                            <select name="category_id"class="form-control">
                                @foreach(App\Models\Category::all() as $cat)
                                    <option value="{{$cat->id}}" {{$cat->id == $item->category_id ? 'selected' : ''}}>{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">会社所在地：</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ $item->address }}">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">ステータス</label>
                            <select name="status" class="form-control">
                                <option  value="1" {{$item->status=="1"?'selected':''}}>公開する</option>
                                <option  value="0" {{$item->status=="0"?'selected':''}}>下書き</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lastdate">エントリー期日</label>
                            <input type="text" id="datepicker" name="last_date" class="form-control @error('last_date') is-invalid @enderror" value="{{ $item->last_date }}">
                            @error('last_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit" >投稿する</button>
                        </div>
                    </div>
                </form>
            </div>
            @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                    @endif
        </div>
    </div>
</div>
@endsection
