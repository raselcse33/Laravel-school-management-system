<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_marks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('studentRoll');
            $table->integer('classNameId');
            $table->integer('subjectId');
            $table->string('semisterId');
            $table->year('examYear');
            $table->integer('fullMark');
            $table->float('heightMark');
            $table->float('ca',10,2)->nullable();
            $table->float('cr',10,2)->nullable();
            $table->float('mcq',10,2)->nullable();
            $table->float('pr',10,2)->nullable();
            $table->float('subjectTotal',10,2)->nullable();
            $table->string('letterGrade')->nullable();
            $table->string('gpa')->nullable();
            $table->integer('ap')->default(0);
            $table->tinyInteger('not_effect')->default(0);
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
        Schema::dropIfExists('student_marks');
    }
}
