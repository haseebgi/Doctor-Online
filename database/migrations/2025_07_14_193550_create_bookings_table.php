<?php

// database/migrations/xxxx_xx_xx_create_bookings_table.php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('lab_test_id')->constrained('lab_tests')->onDelete('cascade');
            
            $table->string('patient_name');
            $table->string('patient_number');
            $table->string('lab_city');
            $table->integer('age')->nullable();
            $table->string('prescription')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}

