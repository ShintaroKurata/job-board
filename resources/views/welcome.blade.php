@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>最新商品一覧</h1>
        <table class="table">
            <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td><img src="{{asset('avatar/t-shirt.png')}}" width="80"></td>
                    <td>position:{{$item->position}}
                        <br>
                        <i class="fa-solid fa-clock" aria-hidden="true"></i>&nbsp;{{$item->type}}
                    </td>
                    <td><i class="fa-solid fa-location-dot" aria-hidden="true"></i>&nbsp;Address:{{$item->address}}</td>
                    <td><i class="fa-solid fa-calendar" aria-hidden="true"></i>&nbsp;Date:{{$item->created_at->diffForHumans()}}</td>
                    <td><a href="{{route('items.show',[$item->id,$item->slug])}}"><button class="btn btn-success btn-ssm">申し込む</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
<style>
    .fa-solid{
        color: #4183D7;
    }
</style>
