<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('问题标题');
            $table->text('body')->comment('问题内容');
            $table->integer('user_id')->unsigned()->comment('关联用户');
            $table->integer('comments_count')->default(0)->comment('关联用户');
            $table->integer('followers_count')->default(1)->comment('关联用户');
            $table->integer('answers_count')->default(0)->comment('关联用户');
            $table->string('close_comments',8)->default('F')->comment('关联用户');
            $table->string('is_hidden',8)->default('F')->comment('关联用户');
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
        Schema::dropIfExists('questions');
    }
}
