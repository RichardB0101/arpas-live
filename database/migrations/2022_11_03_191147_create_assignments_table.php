<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
//            $table->foreignId('student_id')->constrained();
//            $table->foreignId('subject_id')->constrained();
            $table->string('title');
            //bad example, actually you have to do it within other column and join tables to get this data
            $table->string('author_name');
            $table->string('author_kierunek');
            $table->integer('author_study_year');
            $table->integer('grade');
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
        Schema::dropIfExists('assignments');
    }
};
