<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('posts')) {
                Schema::create('posts', function (Blueprint $table) {
                    $table->id();
                    $table->text('titleText');
                    $table->string('h1Text');
                    $table->string('keywordsText');
                    $table->string('prevText');
                    $table->string('DescText');
                    $table->string('smallPicture');
                    $table->string('bigPicture');
                    $table->string('oneHashTag');
                    $table->string('twoHashTag');
                    $table->string('threeHashTag');
                    $table->string('fooHashTag');
                    $table->string('fiveHashTag');
                    $table->integer('user_id')->default(13)->nullable(false)->unsigned()->after('id');
                    $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
                    $table->text('eDataHtml')->nullable();
                    $table->text('eDataOrigin')->nullable();
                    $table->boolean('public')->nullable();
                    $table->timestamps();
                });
        }
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
