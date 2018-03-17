<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryHasPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_has_posts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('post_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('order')->default(1);
            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('category_id')->references('id')->on('categories');

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
        Schema::dropIfExists('category_has_posts');
    }
}
