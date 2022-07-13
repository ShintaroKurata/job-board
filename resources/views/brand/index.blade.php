@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-md-12">
        <div class="brand-profile">
            @if(empty(Auth::user()->brand->cover_photo))
            <img src={{asset('cover/400-200.png')}} style="width:100%">
            @else
            <img src="{{asset('uploads/coverphoto')}}/{{Auth::user()->brand->cover_photo}}" style="width: 100%; height:200px; object-fit: cover;">
            @endif

            <div class="brand-desc">
            @if(empty(Auth::user()->brand->logo))
                <img src={{asset('avatar/t-shirt.png')}} width="100">
            @else
                <img src="{{asset('uploads/logo')}}/{{Auth::user()->brand->logo}}" style="width: 160px; height: 240px; object-fit: cover;">
            @endif
                <p>{{$brand->description}}</p>
                <h1>{{$brand->brand_name}}</h1>
                <p>Slogan-{{$brand->slogan}}&nbsp;Address-{{$brand->address}}&nbsp; Phone-{{$brand->phone}}&nbsp; Website-{{$brand->website}}</p>
            </div>
        </div>
        <table class="table">
            <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach($brand->items as $item)
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
