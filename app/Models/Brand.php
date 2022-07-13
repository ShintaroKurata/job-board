<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\User;

class Brand extends Model
{
    use HasFactory;


    protected $fillable= [
        'brand_name','user_id','slug','address','phone','website','logo','cover_photo','slogan','description'

    ];



    public function items(){
        return $this->hasMany('\App\Models\Item');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}

//     protected static function boot()
//     {
//         parent::boot();

//         static::created(function ($brand) {

//             $brand->slug = $brand->createSlug($brand->brand_name);

//             $brand->save();
//         });
//     }

//      /**
//      * Write code on Method
//      *
//      * @return response()
//      */
//     private function createSlug($brand_name)
//     {
//         if (static::whereSlug($slug = str_slug($brand_name))->exists()) {

//             $max = static::whereName($brand_name)->latest('id')->skip(1)->value('slug');

//             if (isset($max[-1]) && is_numeric($max[-1])) {

//                 return preg_replace_callback('/(\d+)$/', function ($mathces) {

//                     return $mathces[1] + 1;
//                 }, $max);
//             }
//             return "{$slug}-2";
//         }
//         return $slug;
//     }
// }
