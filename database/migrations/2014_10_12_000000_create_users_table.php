<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('用户名');
            $table->string('email')->unique()->comment('用户邮箱');
            $table->string('password')->comment('用户密码');
            $table->string('avatar')->comment('用户头像');
            $table->string('confirmation_token')->comment('用户头像');
            $table->smallInteger('is_active')->default(0)->comment('用户邮箱是否验证 1验证2');
            $table->string('questions_count')->default(0)->comment('用户发表问题个数');
            $table->string('answers_count')->default(0)->comment('用户回答个数');
            $table->string('comments_count')->default(0)->comment('用户评论个数');
            $table->string('favorites_count')->default(0)->comment('用户收藏');
            $table->string('likes_count')->default(0)->comment('用户点赞');
            $table->string('followers_count')->default(0)->comment('用户关注');
            $table->string('followings_count')->default(0)->comment('被关注');
            $table->json('settings')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
