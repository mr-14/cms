<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('type')->unsigned();
            $table->integer('root_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('parent_comment_id')->unsigned()->nullable();
			$table->string('content', 1500);
            $table->integer('like_count')->unsigned();
            $table->integer('dislike_count')->unsigned();
			$table->timestamp('created_at');
			$table->tinyInteger('status')->unsigned();

			$table->index(['type', 'root_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }
}
