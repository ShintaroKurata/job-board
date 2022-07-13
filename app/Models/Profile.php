<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;
    protected $fillable =['user_id','gender','dob','address','experience','bio','cover_letter','resume','avatar',];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
