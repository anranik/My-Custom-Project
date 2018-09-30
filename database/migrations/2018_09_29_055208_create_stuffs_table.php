<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStuffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stuffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('position');
            $table->string('qualification');
            $table->date('birthday');
            $table->enum('gender',['male','female','others']);
            $table->date('blood_group');
            $table->date('job_started');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->text('email');
            $table->text('password');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stuffs');
    }
}
