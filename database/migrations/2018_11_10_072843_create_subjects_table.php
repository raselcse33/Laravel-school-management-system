<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject_english')->nullable();
            $table->string('subject_bangla')->nullable();
            $table->integer('subject_code')->nullable();
            $table->string('group_name')->nullable();
            $table->integer('subject_common')->nullable();
            $table->integer('class_id')->nullable();
            $table->tinyInteger('not_effect')->nullable();
            $table->tinyInteger('religion_subject');
            $table->string('summary')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('subjects');
    }
}
