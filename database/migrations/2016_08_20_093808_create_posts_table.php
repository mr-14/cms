<?php

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
			$table->integer('user_id')->unsigned();
			$table->tinyInteger('type')->unsigned();
			$table->string('title', 65)->nullable();
			$table->string('summary', 255)->nullable();
			$table->integer('view_count')->unsigned();
			$table->integer('favorite_count')->unsigned();
			$table->integer('like_count')->unsigned();
			$table->integer('dislike_count')->unsigned();
			$table->tinyInteger('status')->unsigned();
            $table->timestamps();

			$table->index(['user_id', 'type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
