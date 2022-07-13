@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">アイテム情報を更新する</div>
                <form action="{{route('items.store')}}" method="POST">@csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">タイトル：</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                            @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">商品詳細：</label>
                            <textarea name="description" class="form-control @error('title') is-invalid @enderror" value="{{ old('description') }}"></textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                        </div>
                        <div class="form-group">
                            <label for="lot">販売最小単位</label>
                            <input type="number" name="lot_number" class="form-control @error('title') is-invalid @enderror" value="{{ old('lot_number') }}">
                            @error('lot_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <select name="lot" class="form-control">
                                <option  value="着">着</option>
                                <option  value="足">足</option>
                                <option  value="個">個</option>
                                <option  value="セット">セット</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">最小販売単位あたりの金額：（円）</label>
                            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}"><p>円</p>
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
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">会社所在地：</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">ステータス</label>
                            <select name="status" class="form-control">
                                <option  value="1">公開する</option>
                                <option  value="0">下書き</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lastdate">エントリー期日</label>
                            <input type="text" id="datepicker" name="last_date" class="form-control @error('last_date') is-invalid @enderror" value="{{ old('last_date') }}">
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
