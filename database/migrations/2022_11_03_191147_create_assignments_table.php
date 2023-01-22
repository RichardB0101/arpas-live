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
            $table->foreignIdFor(new \App\Models\User, 'author_id');;
//            $table->foreignId('student_id')->constrained();
//            $table->foreignId('subject_id')->constrained();
            $table->string('title');
            //bad example, actually you have to do it within other column and join tables to get this data
            $table->string('author_name');
            $table->text('description')->default('');

//            $table->integer('author_id');
            $table->string('author_kierunek')->default('');
            $table->integer('author_study_year')->default(0);
            $table->integer('grade')->default(0);
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
