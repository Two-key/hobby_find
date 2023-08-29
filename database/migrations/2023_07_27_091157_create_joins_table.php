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
        /**Schema::create('joins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('group_id');
            $table->timestamps();
        });*/
        Schema::create('joins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained() //userテーブルのidカラムを参照するconstrainedメソッド
                ->onDelete('cascade'); //削除時のオプション
            $table->foreignId('group_id')
               ->constrained()
               ->onDelete('cascade');
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
        Schema::dropIfExists('joins');
    }
};
