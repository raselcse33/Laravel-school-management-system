<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('online_application')->nullable();
            $table->tinyInteger('routine')->nullable();
            $table->tinyInteger('menu_attendance')->nullable();
            $table->tinyInteger('result')->nullable();
            $table->tinyInteger('counter')->nullable();
            $table->tinyInteger('attendance')->nullable();
            $table->tinyInteger('teacher')->nullable();
            $table->tinyInteger('student')->nullable();
            $table->tinyInteger('map')->nullable(0);
            $table->tinyInteger('ca')->nullable();
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
        Schema::dropIfExists('system_settings');
    }
}
