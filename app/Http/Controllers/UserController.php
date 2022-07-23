<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Brand;
use App\Models\User;
use Auth;

class UserController extends Controller
{

    public function __construct(){
        $this->middleware(['buyer','verified']);

    }

    public function create(){
        $user = Auth::user();
        return view('profile.create',compact('user'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'address'=>'required',
            'phone_number'=>'required|regex:/(0)[0-9]{10}/',
            'experience'=>'required|min:20'
        ]);

        $user_id = auth()->user()->id;
        Profile::where('user_id',$user_id)->update([
            'address'=>request('address'),
            'experience'=>request('experience'),
            'bio'=>request('bio'),
            'phone_number'=>request('phone_number'),
            'home_page'=>request('home_page'),
            'twitter_url'=>request('twitter_url'),
            'instagram_url'=>request('instagram_url'),
            'tiktok_url'=>request('tiktok_url'),
            'youtube_url'=>request('youtube_url'),
            'note_url'=>request('note_url')
        ]);

        return redirect()->back()->with('message','情報は正常に更新されました！');

    }

    public function coverletter(Request $request){
        $user_id = auth()->user()->id;
        $cover = $request->file('cover_letter')->store('public/files');
        Profile::where('user_id',$user_id)->update([
            'cover_letter' =>$cover
        ]);
        return redirect()->back()->with('message','カバーレターは正常に更新されました！');
    }

    public function resume(Request $request){
        $user_id = auth()->user()->id;
        $resume = $request->file('resume')->store('public/files');
        Profile::where('user_id',$user_id)->update([
            'resume' =>$resume
        ]);
        return redirect()->back()->with('message','履歴書は正常に更新されました！');
    }

    public function avatar(Request $request){
        $this->validate($request,[
            'avatar'=>'required|mimes:png,jpeg,jpg|max:20000'
        ]);

        $user_id = auth()->user()->id;
        if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/avatar',$filename);
            Profile::where('user_id',$user_id)->update([
                'avatar' =>$filename
            ]);
            return redirect()->back()->with('message','プロフィール画像は正常に更新されました！');
        }

    }
    public function favourite(){
        // $item=Item::find($id);
        $items = Auth::user()->favourites;
        return view('items.favourite',compact('items'));
    }

    public function dashboard(){
        $items = Auth::user()->item_user;
        $fav_items = Auth::user()->favourites;
        return view('profile.dashboard',compact('items','fav_items'));
    }

    public function buyerProfile($id){
        $user = Auth::user();
        return view('profile.profile',compact('user'));
    }

    public function allbrands(Request $request){
        $keyword = $request->get('title');
        $category = $request->get('category_id');
        $address = $request->get('address');
        $price = $request->get('price');

        if($keyword||$category||$address||$price){
            $brands = Brand::where('title','LIKE','%{$keyword}%')
            ->orwhere('category_id','=',$category)
            ->orwhere('address','LIKE','%{$address}%')
            ->orwhere('price','LIKE','%'.$price.'%')
            ->paginate(10);
            return view('brand.allbrands',compact('brands'));
        }else{
            $brands=Brand::latest()->get();
            return view('brand.allbrands',compact('brands'));
        }
    }

}
