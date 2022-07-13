<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Brand;
use Hash;

class BrandOwnerRegisterController extends Controller
{
    public function brandownerRegister(){
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
        return redirect()->to('login');
    }
}
