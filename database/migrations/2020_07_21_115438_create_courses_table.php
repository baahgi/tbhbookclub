<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                    ->constrained()
                    ->onDelete('cascade');
            $table->foreignId('program_id')
                    ->constrained()
                    ->onDelete('cascade');

            $table->string('title');
            $table->string('duration')->nullable();
            $table->double('price', 6, 2)->nullable();
            $table->text('description');
            $table->unsignedInteger('students')->nullable();
            $table->double('discount')->unsigned()->nullable();
            $table->boolean('visibility')->default(false);
            $table->boolean('free')->default(false);
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
        Schema::dropIfExists('courses');
    }
}
