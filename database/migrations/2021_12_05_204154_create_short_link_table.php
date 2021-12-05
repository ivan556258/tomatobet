<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('short_link')) {
            Schema::create('short_link', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('refer');
                $table->string('link')->unique();
                $table->boolean('active');
                $table->timestamps();
            });
        }

        Schema::table('short_link', function($table) {
            $table->integer('posts_id')->nullable(false)->unsigned()->after('id');
            $table->foreign('posts_id','posts')->references('id')->on('posts')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('short_link');
    }
}
