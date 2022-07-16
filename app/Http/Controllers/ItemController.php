<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Item;
use App\Models\Brand;
use App\Models\User;
use App\Http\Requests\ItemPostRequest;
use Auth;

class ItemController extends Controller
{

   public function __construct(){
        $this->middleware(['brand_owner','verified'],['except'=>array('index','show','apply','allitems')]);

    }

   public function index(){
        $items=Item::latest()->limit(12)->where('status',1)->get();
        $brands = Brand::limit(12)->get();

        return view('welcome',compact('items','brands'));
    }

    public function show($id,Item $item){
        // $item=Item::find($id);
        return view('items.show',compact('item'));
    }

    public function brand(){
        return view('brand.index');
    }

    public function myitems(){
        $items = Item::where('user_id',auth()->user()->id)->get();
        return view('items.myitems',compact('items'));
    }


    public function create(){
        return view('items.create');
    }

    public function update(Request $request,$id){
        $item = Item::findOrFail($id);
        $item->update($request->all());
        return redirect()->back()->with('message','商品情報は正常に更新されました！');

    }

    public function applicant(){
        $applicants = Item::has('users')->where('user_id',auth()->user()->id)->get();
        return view('items.applicants',compact('applicants'));
    }


    public function edit($id){
        $item = Item::findOrFail($id);
        return view('items.edit',compact('item'));
    }

    public function store(ItemPostRequest $request){
        $this->validate($request,[
            'title'=>'required',
            'address'=>'required',
            'description'=>'required'
        ]);


        $user_id = auth()->user()->id;
        $brand = Brand::where('user_id',$user_id)->first();
        $brand_id = $brand->id;
        Item::create([
            'user_id' => $user_id,
            'brand_id' => $brand_id,
            'title' => request('title'),
            'slug' => Str::slug(request(('title'))),
            'address' => request('address'),
            'description' => request('description'),
            'lot_number' => request('lot_number'),
            'lot' => request('lot'),
            'price' => request('price'),
            'category_id' => request('category'),
            'status' => request('status'),
            'last_date' => request('last_date')
        ]);

        return redirect()->back()->with('message','情報は正常に更新されました！');

    }

    public function apply(Request $request,$id){
        $ItemId = Item::find($id);
        $ItemId->users()->attach(Auth::user()->id);
        return redirect()->back()->with('message','申請は送られました！');
    }
    public function allitems(Request $request){
        $keyword = $request->get('title');
        $category = $request->get('category_id');
        $address = $request->get('address');
        $price = $request->get('price');

        if($keyword||$category||$address||$price){
            $items = Item::where('title','LIKE','%{$keyword}%')
            ->orwhere('category_id','=',$category)
            ->orwhere('address','LIKE','%{$address}%')
            ->orwhere('price','LIKE','%'.$price.'%')
            ->paginate(10);
            return view('items.allitems',compact('items'));
        }else{
        $items=Item::latest()->paginate(10);
        return view('items.allitems',compact('items'));
        }
    }


}
