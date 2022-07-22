@extends('layouts.lower')

@section('content')

                    <!-- Breadcrumb Section Start -->
                    <div class="breadcrumb-section section bg_color--5 pt-60 pt-sm-50 pt-xs-40 pb-60 pb-sm-50 pb-xs-40">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-breadcrumb-content">
                                        <h1>メールアドレスを認証してください。</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Breadcrumb Section Start -->

<div class="section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="login-register-form-area">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('message')}}<br>
                            </div>
                        @endif

                        {{ __('次のステップに進む前に、あなたのメールアドレスにお送りした認証リンクから、メールアドレスを認証してください。') }}<br>
                        {{ __('もしメールが届かなかった場合は、') }}
                        <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('こちらをクリックし、再度メールをリクエストしてください。') }}</button>.
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
