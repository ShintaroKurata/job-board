<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;
use App\Models\Category;
use App\Models\User;

class Item extends Model
{
    use HasFactory;

    protected $fillable=[
       'user_id','brand_id','title','slug','description','category_id','address','price','lot_number','lot','status','last_date'
    ];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function category(){
        return $this->belongsToMany(Category::class,'category_id');
    }

    public function users(){
        return $this->belongsToMany(User::class)->withTimeStamps();
    }

    public function checkApplication(){
        return \DB::table('item_user')->where('user_id',auth()->user()->id)->where('item_id',$this->id)->exists();
    }

    public function favourites(){
        return $this->belongsToMany(Item::class,'favourites','item_id','user_id')->withTimeStamps();
    }

    public function checkSaved(){
        return \DB::table('favourites')->where('user_id',auth()->user()->id)->where('item_id',$this->id)->exists();
    }
}
