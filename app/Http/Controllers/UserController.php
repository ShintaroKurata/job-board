<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class UserController extends Controller
{

    public function __construct(){
        $this->middleware('buyer');

    }

    public function index(){
        return view('profile.index');
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
            'phone_number'=>request('phone_number')
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

}
