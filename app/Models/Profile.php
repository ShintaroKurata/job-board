<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;
    protected $fillable =['user_id','gender','dob','phone_number','twitter_url'.'instagram_url','tiktok_url','youtube_url','note_url','address','experience','bio','cover_letter','resume','avatar',];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
