<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('name_bangla')->nullable();
            $table->string('slogan')->nullable();
            $table->string('email')->nullable();
            $table->string('institute_code')->nullable();
            $table->string('mpo_code')->nullable();
            $table->integer('eiin')->nullable();
            $table->text('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('telephone_number')->nullable();
            $table->string('school_time')->nullable();
            $table->year('eastablished')->nullable();
            $table->string('class_name_id')->nullable();
            $table->text('description')->nullable();
            $table->text('widgetone')->nullable();
            $table->text('widgettwo')->nullable();
            $table->text('metakeyword')->nullable();
            $table->text('metadescription')->nullable();
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
            $table->string('flag')->nullable();
            $table->string('icon')->nullable();
            $table->string('signature')->nullable();
            $table->string('authorurl')->nullable();
            $table->string('mapurl')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
