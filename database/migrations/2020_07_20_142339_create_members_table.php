<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone', 30);
            $table->string('approved')->default(false);
            $table->string('nationality', 60);
            $table->date('date_of_birth');
            $table->string('country_of_residence');
            $table->string('residential_address');
            $table->string('occupation');
            /*
            This is for members wih occupation of employee
            or entreprenuers
            */
            $table->string('name_of_business')->nullable();
            $table->string('job_title')->nullable();
            $table->string('nature_of_business')->nullable();
            $table->string('business_address')->nullable();

            //for students
            $table->string('name_of_school')->nullable();
            $table->string('level_of_education')->nullable();
            $table->string('course_of_study')->nullable();
            $table->string('location_of_school')->nullable();

            $table->string('other_occupation')->nullable();

            $table->string('how_often_you_read');
            $table->string('books_often_read' );
            $table->string('other_books_read' )->nullable();
            $table->text('future_aspiration');
            $table->text('personal_mission_statement')->nullable();
            $table->text('why_you_want_to_join')->nullable();
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
        Schema::dropIfExists('members');
    }
}
