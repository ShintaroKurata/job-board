@extends('layouts.main')
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
                                <li>Login & Register</li>
                            </ul>
                            <h1>Login & Register</h1>
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
                                        <form action="#" method="post">
                                            <p>Login to Jotopa with your registered account</p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="single-input">
                                                        <input type="text" placeholder="Username or Email" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="single-input">
                                                        <input type="password" placeholder="Password" name="password">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="checkbox-input">
                                                        <input type="checkbox" name="login-form-remember" id="login-form-remember">
                                                        <label for="login-form-remember">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-25"><button class="ht-btn">Login</button></div>
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
                                            <p>Buyer Create Your account</p>
                                            <input type="hidden" value="buyer" name="user_type">
                                                <div class="row row-5">
                                                        <div class="col-12">
                                                            <div class="single-input">
                                                            <input id="name" type="text" placeholder="氏名"  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                            </div>

                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="single-input">
                                                            <input id="email" type="email" placeholder="メールアドレス" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                            </div>

                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="single-input">
                                                            <input id="datepicker" type="text" class=" @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob">
                                                            <div class="single-input">

                                                            @error('dob')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="single-input">
                                                            <input id="password" type="password"  placeholder="パスワード" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                            </div>

                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="single-input">
                                                            <input id="password-confirm" type="password" placeholder="パスワード（確認）" class="" name="password_confirmation" required autocomplete="new-password">
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <input type="radio" name="gender" value="男性" required="">男性
                                                            <input type="radio" name="gender" value="女性" required="">女性

                                                            @error('gender')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>


                                                        <div class="col-12 mb-25">
                                                            <button type="submit" class="ht-btn">
                                                                {{ __('Register') }}
                                                            </button>
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
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="login-instruction">
                            <div class="login-instruction-content">
                                <h3 class="title">Why Login To Us</h3>
                                <p>It’s important for you to have an account and login in order to have full access at Jotopa. We need to know your account details in order to allow work together</p>
                                <ul class="list-reasons">
                                    <li class="reason">Be alerted to the latest jobs</li>
                                    <li class="reason">Apply for jobs with a single click</li>
                                    <li class="reason">Showcase your CV to thousands of employers</li>
                                    <li class="reason">Keep a record of all your applications</li>
                                </ul>
                                <span class="sale-text theme-color border-color">Login today &amp; Get 15% Off Coupon for the first planning purchase</span>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
        <!-- Login Register Section End -->
        </div>
@endsection
