@extends('layouts.lower')

@section('content')
<div class="job-details-section section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50 pt-120 pt-lg-100 pt-md-80 pt-sm-60 pt-xs-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="section section-title ">
                    <h2 class="pb-10 pb-lg-10 pb-md-8 pb-sm-6 pb-xs-5">商品を投稿する</h2>
                    <form action="{{route('items.store')}}" method="POST">@csrf
                        <div class="bg_color--1 section pb-12 pb-lg-10 pb-md-8 pb-sm-6 pb-xs-5 pt-10 pt-lg-10 pt-md-8 pt-sm-6 pt-xs-5">
                            <div class="single-input">
                                <input type="text" name="title" placeholder="商品タイトル" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                                @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="single-input">
                                <textarea name="description" placeholder="商品詳細" class="form-control @error('title') is-invalid @enderror" value="{{ old('description') }}"></textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="single-input">
                                    <input type="number" name="lot_number" placeholder="販売最小単位" class="form-control @error('title') is-invalid @enderror" value="{{ old('lot_number') }}">
                                    @error('lot_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                    <select name="lot" class="form-control">
                                        <option  value="着">着</option>
                                        <option  value="足">足</option>
                                        <option  value="個">個</option>
                                        <option  value="セット">セット</option>
                                    </select>

                            </div>
                            <div class="single-input">
                                <input type="number" name="price" placeholder="最小販売単位あたりの金額：（円）" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}"><p>円</p>
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="single-input">
                                <label for="category_id">商品カテゴリー：</label>
                                <select name="category_id"class="form-control">
                                    @foreach(App\Models\Category::all() as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="single-input">
                                <label for="address">会社所在地：</label>
                                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}">
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="single-input">
                                <label for="status">ステータス</label>
                                <select name="status" class="form-control">
                                    <option  value="1">公開する</option>
                                    <option  value="0">下書き</option>
                                </select>
                            </div>
                            <div class="single-input">
                                <label for="lastdate">エントリー期日</label>
                                <input type="text" id="datepicker" name="last_date" class="form-control @error('last_date') is-invalid @enderror" value="{{ old('last_date') }}">
                                @error('last_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-12 mb-25">
                                <button class="ht-btn" type="submit" >投稿する</button>
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
</div>
@endsection
