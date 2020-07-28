<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone', 30)->nullable();
            $table->date('date_of_birth');
            $table->string('nationality', 60);
            $table->string('country_of_residence')->nullable();
            $table->string('residential_address')->nullable();
            $table->string('occupation');
            $table->string('job_title')->nullable();
            $table->string('nature_of_business')->nullable();
            $table->string('business_address')->nullable();
            $table->text('how_often_you_wish_to_contribute');
            $table->boolean('approved')->default(false);
            $table->timestamps();
        });

        Schema::create('firm_partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('years_of_operation');
            $table->string('nature_of_business');
            $table->string('business_address')->nullable();
            $table->string('contact_person');
            $table->text('how_often_you_wish_to_contribute');
            $table->boolean('approved')->default(false);
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
        Schema::drop('individual_partners');
        Schema::drop('firm_partners');
    }
}
