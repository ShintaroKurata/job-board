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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('brand_id');
            $table->string('title');
            $table->string('slug')->nullable();;
            $table->text('description');
            $table->integer('category_id');
            $table->string('address');
            $table->integer('price');
            $table->integer('lot_number');
            $table->string('lot');
            $table->string('type')->nullable();
            $table->integer('status');
            $table->date('last_date');
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
        Schema::dropIfExists('items');
    }
};
