<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteerReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_references', function (Blueprint $table) {
            $table->id();
            $table->foreignId('volunteer_id')
                    ->constrained()
                    ->onDelete('cascade');

            $table->string('name');
            $table->string('occupation');
            $table->string('place_of_work');
            $table->string('email');
            $table->string('phone');
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
        Schema::dropIfExists('volunteer_references');
    }
}
