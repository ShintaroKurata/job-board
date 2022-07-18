@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
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
            <br>
            <br>
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
@endsection
