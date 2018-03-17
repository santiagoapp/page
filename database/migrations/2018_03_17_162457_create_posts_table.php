<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('author_id')->unsigned();
            $table->integer('image_id')->unsigned();
            $table->string('title');
            $table->string('excerpt');
            $table->string('status')->default('Inactivo');
            $table->text('content');
            $table->foreign('author_id')->references('id')->on('users');
            $table->foreign('image_id')->references('id')->on('media');

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
        Schema::dropIfExists('posts');
    }
}
