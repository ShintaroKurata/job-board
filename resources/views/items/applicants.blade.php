@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @foreach($applicants as $applicant)
                <div class="card-header"><a href="{{route('items.show',[$applicant->id,$applicant->slug])}}">{{$applicant->title}}</a></div>

                <div class="card-body">
                    @foreach($applicant->users as $user)
                    <table class="table">
                        <thead>
                          <tr>
                            <th>氏名</th>
                            <th></th>
                            <th>メールアドレス</th>
                            <th>住所・所在地</th>
                            <th>電話番号</th>
                            <th>性別</th>
                            <th>経歴</th>
                            <th>自己紹介</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{$user->name}}</td>
                            <td><img src="{{asset('uploads/avatar')}}/{{$user->profile->avatar}}" style="width: 80px; height: 80px; object-fit: cover;"></td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->profile->address}}</td>
                            <td>{{$user->profile->phone_number}}</td>
                            <td>{{$user->profile->gender}}</td>
                            <td>{{$user->profile->experience}}</td>
                            <td>{{$user->profile->bio}}</td>
                          </tr>
                        </tbody>
                      </table>

                </div>
                @endforeach
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
