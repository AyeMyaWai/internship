<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('internship_id');
            $table->string('internship_name');
            $table->string('url_name');
            $table->string('occupation_name');
            $table->string('job_description');
            $table->string('skill');
            $table->integer('category_id');
            $table->integer('company_id');
            $table->string('postal_code');
            $table->string('location_full');
            $table->string('location_refectures');
            $table->string('location_detail');
            $table->string('telephone');
            $table->string('fax');
            
            $table->string('job_time');
            $table->string('station');
            $table->string('holiday');
            $table->string('final_education');
            $table->string('salary');
            $table->integer('max_salary');
            $table->integer('min_salary');
            $table->string('main_img');
            $table->string('sub_img1');
            $table->string('sub_img2');
            $table->string('sub_img3');
            $table->string('application_mailaddress1');
            $table->string('application_mailaddress2');
            $table->string('application_mailaddress3');
            $table->string('application_telephone');
            $table->string('recruiter_word');
            $table->string('recruiter_address');
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
        Schema::dropIfExists('internships');
    }
}
