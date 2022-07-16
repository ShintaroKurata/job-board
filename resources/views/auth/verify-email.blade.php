@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('メールアドレスを認証してください。') }}</div>

                <div class="card-body">
                    @if (session::has('message'))
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
