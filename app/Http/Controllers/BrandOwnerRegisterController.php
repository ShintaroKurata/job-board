<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Brand;
use Hash;

class BrandOwnerRegisterController extends Controller
{

    public function brandownerRegister(Request $request){
        $this->validate($request,[
            'brand_name' =>'required|string|max:255',
            'email' =>'required|string|email|max:255|unique:users',
            'password' =>'required|string|min:8|confirmed'
        ]);

        $user = User::create([
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'user_type' => request('user_type')
        ]);

        Brand::create([
            'user_id'=>$user->id,
            'brand_name'=>request('brand_name'),
            'slug'=>Str::slug(request('brand_name'))
        ]);

        $user->sendEmailVerificationNotification();
        return redirect()->to('login')->with('message','ご登録ありがとうございます。あなたのメールアドレスにリンクをお送り致しました。メールアドレスの認証をお願いいたします！');
    }
}
