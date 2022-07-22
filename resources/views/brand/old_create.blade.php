@extends('layouts.lower')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @if(empty(Auth::user()->brand->logo))
            <img src="{{asset('avatar/t-shirt.png')}}" width="100" style="width:100%;">
            @else
            <img src="{{asset('uploads/logo')}}/{{Auth::user()->brand->logo}}" width="100" style="width:100%;">
            @endif
            <br>
            <br>
            <form action="{{route('brandlogo')}}" method="POST" enctype="multipart/form-data">@csrf
                <div class="card">
                    <div class="card-header">ブランドロゴをアップロードする</div>
                    <div class="card-body">
                        <input type="file" class="form-control" name="logo"><br>
                        <button class="btn btn-success float-end" type="submit">更新する</button>
                        @if($errors->has('logo'))
                        <div class="error" style="color: red;">{{$errors->first('logo')}}
                        </div>
                    @endif
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-5">
            <div class="card">
                    <div class="card-header">ブランドプロフィール内容を更新する</div>

                    <form action="{{route('brand.store')}}" method="POST">@csrf

                        <div class="card-body">
                                    <div class="form-group">
                                        <label for="">所在地・住所</label>
                                        <input type="text" class="form-control" name="address" value="{{Auth::user()->brand->address}}">
                                        @if($errors->has('address'))
                                            <div class="error" style="color: red;">{{$errors->first('address')}}
                                            </div>
                                        @endif
                                    </div>


                                    <div class="form-group">
                                        <label for="">電話番号</label>
                                        <input type="text" class="form-control" name="phone" value="{{Auth::user()->brand->phone}}">
                                        @if($errors->has('phone'))
                                            <div class="error" style="color: red;">{{$errors->first('phone')}}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="">Webサイト</label>
                                        <input type="text" class="form-control" name="website" value="{{Auth::user()->brand->website}}">
                                        @if($errors->has('website'))
                                            <div class="error" style="color: red;">{{$errors->first('website')}}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="">キャッチコピー</label>
                                        <input type="text" class="form-control" name="slogan" value="{{Auth::user()->brand->slogan}}">
                                        @if($errors->has('slogan'))
                                            <div class="error" style="color: red;">{{$errors->first('slogan')}}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="">ブランド詳細説明</label>
                                        <textarea name="description" class="form-control">{{Auth::user()->brand->description}}</textarea>
                                        @if($errors->has('description'))
                                            <div class="error" style="color: red;">{{$errors->first('description')}}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-success" type="submit" >更新する</button>
                                    </div>
                        </div>
            </div>

            @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
            @endif

        </div>

    </form>
        <div class="col-md-4">
                <div class="card">
                    <div class="card-header">About your brand</div>
                    <div class="card-body">
                        <p>ブランド名：{{Auth::user()->brand->brand_name}}</p>
                        <p>所在地：{{Auth::user()->brand->address}}</p>
                        <p>電話番号：{{Auth::user()->brand->phone}}</p>
                        <p>Webサイト：<a href="{{Auth::user()->brand->website}}" target="_blank" rel="noopener noreferrer">{{Auth::user()->brand->website}}</a></p>
                        <p>キャッチコピー：{{Auth::user()->brand->slogan}}</p>
                        <p>ブランド詳細説明：{{Auth::user()->brand->description}}</p>
                        <p>あなたのブランドページ：<br><a href="{{Auth::user()->brand->user_id}}/{{Auth::user()->brand->slug}}">ブランドページを見る</a></p>
                    </div>
                </div>




            <form action="{{route('cover.photo')}}" method="POST" enctype="multipart/form-data">@csrf
                <div class="card">
                    <div class="card-header">カバー画像を更新する</div>
                    <div class="card-body">
                        <input type="file" class="form-control" name="cover_photo"><br>
                        <button class="btn btn-success float-end" type="submit">更新する</button>
                    </div>
                </div>
            </form>


        </div>

    </div>
</div>
@endsection
