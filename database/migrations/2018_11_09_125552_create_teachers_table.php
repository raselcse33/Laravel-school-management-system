<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('contuctNumber');
            $table->string('emailAddress');
            $table->string('level1');
            $table->string('level2');
            $table->string('level3')->nullable();
            $table->string('level4')->nullable();
            $table->string('nidNumber');
            $table->string('indexNumber');
            $table->date('dateTime');
            $table->string('image');
            $table->string('training')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
