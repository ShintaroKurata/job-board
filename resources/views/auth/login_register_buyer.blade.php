@extends('layouts.lower')
@section('content')

    <div id="main-wrapper">
                <!-- Breadcrumb Section Start -->
                <div class="breadcrumb-section section bg_color--5 pt-60 pt-sm-50 pt-xs-40 pb-60 pb-sm-50 pb-xs-40">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-breadcrumb-content">
                                    <ul class="page-breadcrumb">
                                        <li><a href="index.html">Home</a></li>
                                        <li>【Buyer】Login & Register</li>
                                    </ul>
                                    <h1>【Buyer】Login & Register</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb Section Start -->

        <!-- Login Register Section Start -->
        <div class="login-register-section section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row g-0">

                    <div class="col-lg-4">
                        <div class="login-register-form-area">
                            <div class="login-tab-menu">
                                <ul class="nav">
                                    <li><a class="active show" data-bs-toggle="tab" href="#login">Login</a></li>
                                    <li><a data-bs-toggle="tab" href="#register">Register</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div id="login" class="tab-pane fade show active">
                                    <div class="login-register-form">
                                        @if(Session::has('message'))
                                        <div class="alert alert-success">
                                            {{Session::get('message')}}
                                        </div>
                                        @endif
                                        <form action="{{route('login')}}" method="post">@csrf
                                            <p>登録済みのバイヤーの方は、こちらからログインしてください。</p>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="single-input">
                                                        <input type="text" class = "form-control @error('email') is-invalid @enderror" placeholder="メールアドレス" name="email" required autocomplete="email" autofocus>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="single-input">
                                                        <input type="password"  class = "form-control @error('password') is-invalid @enderror" placeholder="パスワード" name="password" required autocomplete="current-password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="checkbox-input">
                                                        <input type="checkbox" name="login-form-remember" id="login-form-remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label for="login-form-remember">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-25">
                                                    <button type="submit" class="ht-btn">Login</button>
                                                    @if (Route::has('password.request'))
                                                        <a href="{{ route('password.request') }}">
                                                            Forgot Your Password?
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </form>
                                        <div class="divider">
                                            <span class="line"></span>
                                            <span class="circle">or login with</span>
                                        </div>
                                        <div class="social-login">
                                            <ul class="social-icon">
                                                <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a class="google" href="#"><i class="fab fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="register" class="tab-pane fade">
                                    <div class="login-register-form">
                                        <form method="POST" action="{{ route('register') }}">@csrf
                                            <p>バイヤーの方は、こちらからご登録ください。</p>
                                            <input type="hidden" value="buyer" name="user_type">
                                            <div class="col-12">
                                                <div class="single-input">
                                                        <input id="name" type="text" placeholder="ユーザー名" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="single-input">
                                                        <input id="email" type="email" placeholder="メールアドレス" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="single-input">
                                                    <input id="datepicker" type="date" placeholder="生年月日" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob">

                                                    @error('dob')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="single-input">
                                                        <input id="password" type="password" placeholder="パスワード" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="single-input">
                                                        <input id="password-confirm" type="password" placeholder="パスワード（確認）" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>



                                            <div class="col-6">
                                                <div class="radio-input">
                                                    <input type="radio" name="gender" value="男性" id="login-form-male" required="">
                                                    <label for="login-form-male">男性</label>
                                                    <input type="radio" name="gender" value="女性" id="login-form-female" required="">
                                                    <label for="login-form-female">女性</label>
                                                </div>
                                            </div>
                                                    @error('gender')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror


                                            <div class="col-12 mb-25">
                                                    <button type="submit" class="ht-btn">
                                                        {{ __('Register') }}
                                                    </button>
                                            </div>
                                        </form>
                                        <div class="divider">
                                            <span class="line"></span>
                                            <span class="circle">or login with</span>
                                        </div>
                                        <div class="social-login">
                                            <ul class="social-icon">
                                                <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a class="google" href="#"><i class="fab fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="login-instruction">
                            <div class="login-instruction-content">
                                <h3 class="title">会員登録したら、できること。</h3>
                                <p>アパレルビジネスは、商品が存在するだけでは成り立ちません。</p>
                                <p>それを店頭に並べ、お客様との接点を作る必要があります。あなたのような優秀なバイヤーに見つけてもらいたいブランドオーナーはたくさんいます。ブランドが更なる発展をするには、あなたのようなプロの目利きによってその商品価値を認めてもらうことが必要です。</p>
                                <ul class="list-reasons">
                                    <li class="reason" style="font-size: 11px;">あなたがお店を持っている場合、あなたのお店に仕入れたい商品を買うことができます。</li>
                                    <li class="reason" style="font-size: 11px;">あなたがアパレルバイヤーとして活躍している場合、新たな商品と出会うことができます。</li>
                                    <li class="reason" style="font-size: 11px;">あなたがアパレルバイヤーとして認知を高めたい場合、そのプロフィールをブランド担当者に見せることができます。</li>
                                    <li class="reason" style="font-size: 11px;">効率よく商品を仕入れるためのサーチツールとして活用することできます。</li>
                                </ul>
                                <span class="sale-text theme-color border-color">Login today &amp; Get 15% Off Coupon for the first planning purchase</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Login Register Section End -->

@endsection
