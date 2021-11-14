<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldIdTypeSportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function($table) {
            $table->integer('type_sport_id')->nullable(false)->unsigned()->after('id');
            $table->foreign('type_sport_id','posts')->references('id')->on('type_sport')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('posts', function($table) {
            $table->dropForeign('posts_type_sport_id_foreign');
            $table->dropIndex('posts_type_sport_id_foreign');
            $table->dropColumn('type_sport_id');
        });
    }
}
