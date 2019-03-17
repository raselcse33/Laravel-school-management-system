<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('gender');
            $table->integer('class_name_id');
            $table->string('student_group');
            $table->date('date_time');
            $table->string('nationality');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('occupation');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->integer('contuct_number');
            $table->string('image');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('admissions');
    }
}
