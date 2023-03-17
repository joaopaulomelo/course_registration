<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnderageGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('underage_guardians', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_birth');
            $table->string('phone');
            $table->string('cpf')->unique();
            $table->integer('file_id')->nullable();
            $table->foreignId('nationality_id')->constrained('nationalities');
            $table->foreignId('kinship_type_id')->constrained('kinship_types');
            $table->foreignId('user_info_id')->constrained('user_infos');
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
        Schema::dropIfExists('underage_guardians');
    }
}
