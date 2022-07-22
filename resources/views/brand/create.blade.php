@extends('layouts.lower')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!--会員登録完了メッセージ start-->
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong class="me-auto">FASHIONATE</strong><br>
                            <hr>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="閉じる"></button>
                        @if(Auth::user()->user_type == 'buyer')
                                ようこそ、{{Auth::user()->name}}さん。ご登録ありがとうございます。<br>
                                無事、メールアドレス認証が完了されました。プロフィールを作成し、気になる商品をチェックしましょう。
                        @else
                                ようこそ。あなたは、『{{Auth::user()->brand->brand_name}}』のオーナーさんですね。メールアドレス認証が完了しました。<br>
                                ブランドプロフィールを作成し、バイヤーの皆さんに公開しましょう。
                        @endif
                </div>
            <!--会員登録完了メッセージ end-->

            @if(Auth::user()->user_type == 'buyer')
            @foreach($items as $item)
            <div class="card">
                <div class="card-header">{{$item->title}}</div>
                {{-- <small class="badge badge-primary">{{$item->category->name}}</small> --}}
                <div class="card-body">
                    {{$item->description}}
                </div>
                <div class="card-footer">
                    <span><a href="{{route('items.show',[$item->id,$item->slug])}}">商品詳細を見る</a></span>
                    <span class="float-end">締切日：{{$item->last_date}}</span>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>

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
                                    <li><a href="dashboard.html"><i class="lnr lnr-chart-bars"></i> ダッシュボード </a></li>
                                    <li><a href="message.html"><i class="lnr lnr-bubble"></i> メッセージ </a></li>
                                    <li><a href="job-alerts.html"><i class="lnr lnr-envelope"></i> 商品に関する通知 </a></li>
                                    {{-- <li><a href="reviews.html"><i class="lnr lnr-star"></i> レビュー </a></li> --}}
                                </ul>
                            </li>
                            <li>
                                <h3>Items</h3>
                                <ul>
                                    <li><a href="applications.html"><i class="lnr lnr-briefcase"></i> 申請した商品</a></li>
                                    <li><a href="bookmarks.html"><i class="lnr lnr-bookmark"></i> お気に入り </a></li>
                                    {{-- <li><a href="follows.html"><i class="lnr lnr-pointer-right"></i> フォロー </a></li> --}}
                                </ul>
                            </li>
                            <li>
                                <h3>Account</h3>
                                <ul>
                                    <li><a class="active" href="profile.html"><i class="lnr lnr-user"></i> プロフィール </a></li>
                                    {{-- <li><a href="orders.html"><i class="lnr lnr-cart"></i> 注文 </a></li> --}}
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
                                <h1>【Brand Owner】プロフィール</h1>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                    @endif
                    <div class="dashboard-overview">
                        <div class="row">
                            <div class="col-xl-12 col-12">
                                <div class="profile-applications mb-50">
                                    <div class="profile-applications-heading">
                                        <ul class="nav">
                                            <li><a class="active" href="profile.html">My profile</a></li>
                                        </ul>
                                    </div>
                                    <div class="profile-applications-main-block">
                                        <div class="profile-applications-form">
                                                <div class="row mb-30">
                                                    {{-- アイコン画像アップロード start--}}
                                                    <div class="col-lg-2">
                                                        <div class="profile-avatar mb-30">
                                                            <label class="d-block"><span>アイコン画像</span></label>
                                                                @if(empty(Auth::user()->profile->avatar))
                                                                <img src="{{asset('avatar/t-shirt.png')}}" width="100" style="width:80%;">
                                                                @else
                                                                <img src="{{asset('uploads/avatar')}}/{{Auth::user()->profile->avatar}}" width="100" style="width:80%;">
                                                                @endif
                                                        </div>
                                                        <form action="{{route('avatar')}}" method="POST" enctype="multipart/form-data">@csrf
                                                                    <input type="file" class="form-control" name="avatar"><br>
                                                                    @if($errors->has('avatar'))
                                                                    <div class="error" style="color: red;">{{$errors->first('avatar')}}
                                                                    </div>
                                                                @endif
                                                        </form>
                                                    </div>
                                                    {{-- アイコン画像アップロード end --}}

                                                    <div class="col-lg-10">
                                                        <form action="{{route('brand.store')}}" method="POST">@csrf
                                                                    <div class="row">

                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                                                <label for="first-name">ユーザー名</label>
                                                                                <p style="font-size: 20px;">&nbsp;{{Auth::user()->name}}</p>
                                                                        </div>

                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                                            <!-- Single Input Start -->
                                                                            <div class="single-input mb-25">
                                                                                <label for="email">メールアドレス <span>*</span></label>
                                                                                <input type="email" id="email" name="email" placeholder="メールアドレス" value="{{Auth::user()->email}}">
                                                                                @if($errors->has('email'))
                                                                                    <div class="error" style="color: red;">{{$errors->first('email')}}
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                            <!-- Single Input End -->
                                                                        </div>

                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                                            <!-- Single Input Start -->
                                                                            <div class="single-input mb-25">
                                                                                <label for="phone">電話番号</label>
                                                                                <input type="text" id="phone" name="phone" placeholder="電話番号" value="{{old('phone')}}">
                                                                                @if($errors->has('address'))
                                                                                <div class="error" style="color: red;">{{$errors->first('phone')}}
                                                                                </div>
                                                                                @endif
                                                                            </div>
                                                                            <!-- Single Input End -->
                                                                        </div>


                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                                            <!-- Single Input Start -->
                                                                            <div class="single-input mb-25">
                                                                                <label for="address">所在地</label>
                                                                                <input type="text" id="address" name="address" placeholder="所在地" value="{{old('address')}}">
                                                                                @if($errors->has('address'))
                                                                                <div class="error" style="color: red;">{{$errors->first('address')}}
                                                                                </div>
                                                                                @endif
                                                                            </div>
                                                                            <!-- Single Input End -->
                                                                        </div>

                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                            <!-- Single Input Start -->
                                                                            <div class="single-input mb-25">
                                                                                <label for="catch_copy">キャッチコピー<span>*</span></label>
                                                                                <input type=text id="catch_copy" name="catch_copy" placeholder="キャッチコピー">{{old('catch_copy')}}</textarea>
                                                                                @if($errors->has('catch_copy'))
                                                                                <div class="error" style="color: red;">{{$errors->first('catch_copy')}}
                                                                                </div>
                                                                                @endif
                                                                            </div>
                                                                            <!-- Single Input End -->
                                                                        </div>

                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                            <!-- Single Input Start -->
                                                                            <div class="single-input mb-25">
                                                                                <label for="description">ブランド詳細説明</label>
                                                                                <textarea id="description" name="description" placeholder="ブランド詳細説明">{{old('description')}}</textarea>
                                                                                @if($errors->has('bio'))
                                                                                <div class="error" style="color: red;">{{$errors->first('bio')}}
                                                                                </div>
                                                                                @endif
                                                                            </div>
                                                                            <!-- Single Input End -->
                                                                        </div>

                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                                            <!-- Single Input Start -->
                                                                            <div class="single-input mb-25">
                                                                                <label for="home_page">公式ホームページ</label>
                                                                                <input type="url" id="home_page" name="home_page" placeholder="ホームページURL" value="{{old('home_page')}}">
                                                                            </div>
                                                                            <!-- Single Input End -->
                                                                        </div>

                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                                            <!-- Single Input Start -->
                                                                            <div class="single-input mb-25">
                                                                                <label for="twitter_url">Twitter URL</label>
                                                                                <input type="url" id="twitter_url" name="twitter_url" placeholder="Twitter URL" value="{{old('twitter_url')}}">
                                                                            </div>
                                                                            <!-- Single Input End -->
                                                                        </div>

                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                                            <!-- Single Input Start -->
                                                                            <div class="single-input mb-25">
                                                                                <label for="instagram_url">Instagram URL</label>
                                                                                <input type="url" id="instagram_url" name="instagram_url" placeholder="Instagram URL" value="{{old('instagram_url')}}">
                                                                            </div>
                                                                            <!-- Single Input End -->
                                                                        </div>

                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                                            <!-- Single Input Start -->
                                                                            <div class="single-input mb-25">
                                                                                <label for="tiktok_url">Tiktok URL</label>
                                                                                <input type="url" id="tiktok_url" name="tiktok_url" placeholder="Tiktok URL" value="{{old('tiktok_url')}}">
                                                                            </div>
                                                                            <!-- Single Input End -->
                                                                        </div>

                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                                            <!-- Single Input Start -->
                                                                            <div class="single-input mb-25">
                                                                                <label for="youtube_url">YouTube URL</label>
                                                                                <input type="url" id="youtube_url" name="youtube_url" placeholder="YouTube URL" value="{{old('youtube_url')}}">
                                                                            </div>
                                                                            <!-- Single Input End -->
                                                                        </div>

                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                                            <!-- Single Input Start -->
                                                                            <div class="single-input mb-25">
                                                                                <label for="note_url">note URL</label>
                                                                                <input type="url" id="note_url" name="note_url" placeholder="note URL" value="{{old('note_url')}}">
                                                                            </div>
                                                                            <!-- Single Input End -->
                                                                        </div>


                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                                            <!-- Single Input Start -->
                                                                            <div class="single-input mb-25">
                                                                                <label for="new-password">新しいパスワード</label>
                                                                                <input type="password" id="new-password" name="new-password" placeholder="パスワード" value="">
                                                                            </div>
                                                                            <!-- Single Input End -->
                                                                        </div>

                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                                            <!-- Single Input Start -->
                                                                            <div class="single-input mb-25">
                                                                                <label for="confirm-password">パスワード（確認）</label>
                                                                                <input type="password" id="confirm-password" name="confirm-password" placeholder="パスワード（確認）" value="">
                                                                            </div>
                                                                            <!-- Single Input End -->
                                                                        </div>

                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="profile-action-btn d-flex flex-wrap align-content-center justify-content-between">
                                                                                <button type="submit" class="ht-btn theme-btn theme-btn-two mb-xs-20">プロフィールを更新する</button>
                                                                                <button class="ht-btn theme-btn theme-btn-two transparent-btn-two">アカウントを削除する</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                        </form>
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
</div>
<!-- Dashboard Content Section End -->
@endsection
