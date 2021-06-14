<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table){
            $table->increments('id'); // Это id комментария
            $table->timestamps(); // Время добавления
            $table->integer('post_id',false,true); // Id поста
            $table->bigInteger('user_id'); // id пльзователя
            $table->string('text'); // Текст комментария
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
