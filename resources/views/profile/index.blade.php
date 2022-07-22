@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @if(empty(Auth::user()->profile->avatar))
            <img src="{{asset('avatar/t-shirt.png')}}" width="100" style="width:100%;">
            @else
            <img src="{{asset('uploads/avatar')}}/{{Auth::user()->profile->avatar}}" width="100" style="width:100%;">
            @endif
            <br>
            <br>
            <form action="{{route('avatar')}}" method="POST" enctype="multipart/form-data">@csrf
                <div class="card">
                    <div class="card-header">プロフィール画像をアップロードする</div>
                    <div class="card-body">
                        <input type="file" class="form-control" name="avatar"><br>
                        <button class="btn btn-success float-end" type="submit">更新する</button>
                        @if($errors->has('avatar'))
                        <div class="error" style="color: red;">{{$errors->first('avatar')}}
                        </div>
                    @endif
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-5">
            <div class="card">
                    <div class="card-header">プロフィール内容を更新する</div>

                    <form action="{{route('buyer.store')}}" method="POST">@csrf

                        <div class="card-body">
                                    <div class="form-group">
                                        <label for="">所在地・住所</label>
                                        <input type="text" class="form-control" name="address" value="{{Auth::user()->profile->address}}">
                                        @if($errors->has('address'))
                                            <div class="error" style="color: red;">{{$errors->first('address')}}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="">電話番号</label>
                                        <input type="text" class="form-control" name="phone_number" value="{{Auth::user()->profile->phone_number}}">
                                        @if($errors->has('phone_number'))
                                            <div class="error" style="color: red;">{{$errors->first('phone_number')}}
                                            </div>
                                        @endif
                                    </div>


                                    <div class="form-group">経験・職歴</label>
                                        <textarea name="experience" class="form-control">{{Auth::user()->profile->experience}}</textarea>
                                        @if($errors->has('experience'))
                                            <div class="error" style="color: red;">{{$errors->first('experience')}}
                                            </div>
                                        @endif
                                    </div>


                                    <div class="form-group">
                                            <label for="">自己紹介など</label>
                                            <textarea name="bio" class="form-control">{{Auth::user()->profile->bio}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-success" type="submit" >更新する</button>
                                    </div>
                        </div>
            </div>

            @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
            @endif

        </div>

    </form>
        <div class="col-md-4">
                <div class="card">
                    <div class="card-header">About you</div>
                    <div class="card-body">
                        <p>ユーザー名：{{Auth::user()->name}}</p>
                        <p>メールアドレス：{{Auth::user()->email}}</p>
                        <p>所在地・住所：{{Auth::user()->profile->address}}</p>
                        <p>電話番号：{{Auth::user()->profile->phone_number}}</p>
                        <p>性別：{{Auth::user()->profile->gender}}</p>
                        <p>経歴・職歴：{{Auth::user()->profile->experience}}</p>
                        <p>自己紹介など：{{Auth::user()->profile->bio}}</p>
                        @if(!empty(Auth::user()->profile->cover_letter))
                        <p><a href="{{Storage::url(Auth::user()->profile->cover_letter)}}">Cover letter</a></p>
                        @else
                        <p>カバーレターをアップロードしてください。</p>
                        @endif

                        @if(!empty(Auth::user()->profile->resume))
                        <p><a href="{{Storage::url(Auth::user()->profile->resume)}}">Resume</a></p>
                        @else
                        <p>履歴書をアップロードしてください。</p>
                        @endif

                    </div>
                </div>




            <form action="{{route('cover.letter')}}" method="POST" enctype="multipart/form-data">@csrf
                <div class="card">
                    <div class="card-header">Update coverletter</div>
                    <div class="card-body">
                        <input type="file" class="form-control" name="cover_letter"><br>
                        <button class="btn btn-success float-end" type="submit">更新する</button>
                    </div>
                </div>
            </form>
            <br>
            <form action="{{route('resume')}}" method="POST" enctype="multipart/form-data">@csrf
                <div class="card">
                    <div class="card-header">Update resume</div>
                    <div class="card-body">
                        <input type="file" class="form-control" name="resume"><br>
                        <button class="btn btn-success float-end" type="submit">更新する</button>
                    </div>
                </div>
            </form>


        </div>









    </div>
</div>
@endsection
