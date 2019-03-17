<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('student_id')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('village')->nullable();
            $table->string('post')->nullable();
            $table->string('thana')->nullable();
            $table->string('district')->nullable();
            $table->string('occupation')->nullable();
            $table->string('image')->nullable();
            $table->string('guardian')->nullable();
            $table->string('guardian_village')->nullable();
            $table->string('guardian_post')->nullable();
            $table->string('guardian_thana')->nullable();
            $table->string('guardian_district')->nullable();
            $table->date('date_of_birdth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
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
        Schema::dropIfExists('students');
    }
}
