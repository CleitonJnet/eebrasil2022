<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_in_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ojt_id')->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('student_id')->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('introduction')->nullable();
            $table->integer('grace')->nullable();
            $table->integer('sin')->nullable();
            $table->integer('god')->nullable();
            $table->integer('jesus')->nullable();
            $table->integer('faith')->nullable();
            $table->integer('appeal')->nullable();
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
        Schema::dropIfExists('student_in_jobs');
    }
}
