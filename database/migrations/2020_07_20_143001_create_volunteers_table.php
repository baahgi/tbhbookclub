<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone', 30);
            $table->string('approved')->default(false);
            $table->string('other_phone', 30)->nullable();
            $table->string('marital_status')->nullable();
            $table->string('nationality', 60);
            $table->string('country_of_residence');
            $table->string('residential_address');
            $table->string('occupation')->nullable();

            //educational background
            $table->string('name_of_school')->nullable();
            $table->string('level_of_education')->nullable();
            $table->string('course_of_study')->nullable();

            //employment history
            $table->string('name_of_business')->nullable();
            $table->string('job_title')->nullable();
            $table->string('nature_of_business')->nullable();
            $table->string('business_address')->nullable();

            $table->string('how_often_you_read');
            $table->string('books_often_read');
            $table->string('other_books_read' )->nullable();
            $table->string('willingness_to_participate')->nullable();
            $table->string('your_availability')->nullable();
            $table->text('skills_and_interest')->nullable();
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
        Schema::dropIfExists('volunteers');
    }
}
