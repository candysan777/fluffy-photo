<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIconToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //usersテーブルにiconカラム追加
            $table->string('icon')->default('default_icon.png');
            
            //外部キー制約
            $table->foreign('id')->references('user_id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('icon'); //カラムの削除
            $table->dropForeign(['id']); //外部キー制約削除
        });
    }
}
