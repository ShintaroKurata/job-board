@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                    @endif
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$item->title}}</div>

                <div class="card-body">
                    <p><h3>Description</h3> {{$item->description}}</p>


                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Short Info</div>

                <div class="card-body">
                    <p>Brand:<a href="{{route('brand.index',[$item->brand->id,$item->brand->slug])}}">{{$item->brand->brand_name}}</a></p>
                    <p>Address:{{$item->address}}</p>
                    <p>Employment Type:{{$item->type}}</p>
                    <p>Position:{{$item->position}}</p>
                    <p>Date:{{$item->created_at->diffForHumans()}}</p>

                </div>
            </div>
            @if(Auth::check()&&Auth::user()->user_type=='buyer')

            @if(!$item->checkApplication())
            <apply-component itemid={{$item->id}}></apply-component>
            @endif
            <br>
            <favourite-component></favourite-component>

            @endif
        </div>
    </div>
</div>
@endsection
