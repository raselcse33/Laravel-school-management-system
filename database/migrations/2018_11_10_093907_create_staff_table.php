<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('date');
            $table->string('father_name');
            $table->string('mother_name');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('nid_number');
            $table->string('phone_number');
            $table->string('email')->nullable();
            $table->string('marital_status');
            $table->string('gender');
            $table->string('education');
            $table->text('job_skill')->nullable();
            $table->string('experience')->nullable();
            $table->string('previous_institution')->nullable();
            $table->string('designation');
            $table->string('image');
            $table->string('cv');
            $table->string('document');
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
        Schema::dropIfExists('staff');
    }
}
