<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_marks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subjectId')->nallable();
            $table->string('class_id')->nallable();
            $table->integer('subject_code')->nallable();
            $table->integer('full_mark')->nallable();
            $table->integer('ca')->nallable();
            $table->integer('cr')->nallable();
            $table->integer('mcq')->nallable();
            $table->integer('pr')->nallable();
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
        Schema::dropIfExists('subject_marks');
    }
}
