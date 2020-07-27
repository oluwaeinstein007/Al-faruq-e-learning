<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_levels', function (Blueprint $table) {
            $table->id();
            $table->String('jamb_vid');
            $table->String('postutme_vid');
            $table->String('waec_vid');
            $table->String('sat_vid');
            $table->String('ielts_vid');
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
        Schema::dropIfExists('class_levels');
        DB::table('class_levels')->insert(
            [
                'jamb_vid',
                'waec_vid',
                'ielts_vid',
                'sat_vid',
                'postutme_vid',
            ]);
    }
}
