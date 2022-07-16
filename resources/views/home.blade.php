@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(Auth::user()->user_type == 'buyer')
                    <p>ようこそ、{{Auth::user()->name}}さん。ご登録ありがとうございます。</p>
                    <p>{{Auth::user()->profile->address}}</p>
                    @else
                    <p>ようこそ。あなたは、『{{Auth::user()->brand->brand_name}}』のオーナーさんですね。</p><br>
                    <p>詳しいブランドプロフィールは、こちらから編集してください。</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
