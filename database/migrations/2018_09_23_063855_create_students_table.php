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
            $table->string('gender');
            $table->date('birthday');
            $table->string('phone');
            $table->string('class');
            $table->string('section');
            $table->string('roll');
            $table->string('previous_school');
            $table->string('guardian_id');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('student_image', 191);
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
        Schema::dropIfExists('students');
    }
}
