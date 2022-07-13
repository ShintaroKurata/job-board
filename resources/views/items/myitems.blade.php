@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
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
                                <td>
                                    @if(empty(Auth::user()->brand->logo))
                                    <img src="{{asset('avatar/t-shirt.png')}}" width="100" style="width:100%;">
                                    @else
                                    <img src="{{asset('uploads/logo')}}/{{Auth::user()->brand->logo}}" width="100" style="width: 30%;">
                                    @endif
                                </td>
                                <td>position:{{$item->position}}
                                    <br>
                                    <i class="fa-solid fa-clock" aria-hidden="true"></i>&nbsp;{{$item->type}}
                                </td>
                                <td><i class="fa-solid fa-location-dot" aria-hidden="true"></i>&nbsp;Address:{{$item->address}}</td>
                                <td><i class="fa-solid fa-calendar" aria-hidden="true"></i>&nbsp;Date:{{$item->created_at->diffForHumans()}}</td>
                                <td><a href="{{route('items.show',[$item->id,$item->slug])}}"><button class="btn btn-success btn-ssm">申し込む</button></a>
                                    <a href="{{route('items.edit',$item->id)}}"><button class="btn btn-dark">編集する</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
