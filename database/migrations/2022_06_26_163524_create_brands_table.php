<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('brand_name')->nullable();
            $table->string('slug')->nullable();;
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('logo')->nullable();
            $table->string('cover_photo')->nullable();
            $table->string('catch_copy')->nullable();
            $table->string('description')->nullable();
            $table->text('home_page')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('instagram_url')->nullable();
            $table->text('tiktok_url')->nullable();
            $table->text('youtube_url')->nullable();
            $table->text('note_url')->nullable();
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
        Schema::dropIfExists('brands');
    }
};
