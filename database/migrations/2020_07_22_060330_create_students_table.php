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
            $table->string('student_id');
            $table->integer('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('first_name_kana');
            $table->string('last_name_kana');
            $table->string('postal_code');
            $table->string('location_full');
            $table->string('location_refectures');
            $table->string('location_detail');
            $table->string('tel_main');
            $table->string('tel_sub');
            $table->string('school_type');
            $table->string('schoole_name');
            $table->date('graduation_date');
            $table->string('major_field');
            $table->string('research_title');
            $table->string('research_summary');
            $table->string('how_known_website');
            $table->string('remark');
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
