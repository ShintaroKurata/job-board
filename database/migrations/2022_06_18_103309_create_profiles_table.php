<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('slug')->default(str_random(20));
            $table->string('address')->nullable();
            $table->string('gender');
            $table->string('dob');
            $table->string('experience')->nullable();
            $table->string('bio')->nullable();
            $table->text('home_page')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('instagram_url')->nullable();
            $table->text('tiktok_url')->nullable();
            $table->text('youtube_url')->nullable();
            $table->text('note_url')->nullable();
            $table->string('cover_letter')->nullable();
            $table->string('resume')->nullable();
            $table->string('avatar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
