<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->date('registration_start_date');
            $table->date('registration_end_date');
            $table->date('date_raffle');
            $table->foreignId('course_id')->constrained('courses');
            $table->bigInteger('amount_vacancy');
            $table->bigInteger('amount_vacancy_final');
            $table->foreignId('scholarship_status_id')->constrained('scholarship_statuses');
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
        Schema::dropIfExists('scholarships');
    }
}
