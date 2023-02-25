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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained('users');
            $table->foreignId("carrera_id")->constrained('carreras')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('birth_date');
            $table->string('DNI');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
