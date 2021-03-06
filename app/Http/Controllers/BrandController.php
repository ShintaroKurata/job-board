<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Brand;
use App\Models\Item;

class BrandController extends Controller
{

    public function __construct(){
        $this->middleware(['brand_owner','verified'],['except'=>array('index')]);

    }

    public function index($id,Brand $brand) {
        return view('brand.index',compact('brand'));
    }

    public function create(){
        return view('brand.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'address'=>'required',
            'phone'=>'required|regex:/(0)[0-9]{10}/',
            'home_page'=>'required',
            'catch_copy'=>'required|min:20',
            'description'=>'required|min:20'
        ]);

        $user_id = auth()->user()->id;
        Brand::where('user_id',$user_id)->update([
            'address'=>request('address'),
            'phone'=>request('phone'),
            'catch_copy'=>request('catch_copy'),
            'description'=>request('description'),
            'home_page'=>request('home_page'),
            'twitter_url'=>request('twitter_url'),
            'instagram_url'=>request('instagram_url'),
            'tiktok_url'=>request('tiktok_url'),
            'youtube_url'=>request('youtube_url'),
            'note_url'=>request('note_url')
        ]);

        return redirect()->back()->with('message','情報は正常に更新されました！');

    }

    public function brandLogo(Request $request){
        $this->validate($request,[
            'logo'=>'required|mimes:png,jpeg,jpg|max:20000'
        ]);

        $user_id = auth()->user()->id;
        if($request->hasfile('logo')){
            $file = $request->file('logo');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/logo',$filename);
            Brand::where('user_id',$user_id)->update([
                'logo' =>$filename
            ]);
            return redirect()->back()->with('message','ブランドロゴ画像は正常に更新されました！');
        }

    }

    public function coverPhoto(Request $request){
        $user_id = auth()->user()->id;
        if($request->hasfile('cover_photo')){
            $file=$request->file('cover_photo');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/coverphoto',$filename);
            Brand::where('user_id',$user_id)->update([
                'cover_photo' =>$filename
            ]);
            return redirect()->back()->with('message','カバー画像は正常に更新されました！');
        }
    }
}
