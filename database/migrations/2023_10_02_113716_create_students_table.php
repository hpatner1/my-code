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
        Schema::create('Students', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('student_id');
            $table->string('photo');
            $table->string('name');
            $table->string('address');
            $table->string('country');
            $table->string('state');
            $table->string('lg');
            $table->string('zip');
            $table->string('birthdate');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('p_mobile');
            $table->string('p_email');
            $table->string('p_address');
            $table->string('admision');
            $table->string('class');
            $table->string('section');
            $table->string('duty');
            $table->enum('status', ['Active', 'Inactive']);
          // $table->dateTimeTz('created_time', $precision = 0);
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
        Schema::dropIfExists('students');
    }
};
