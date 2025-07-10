<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('pmdc_verified')->default(false);
            $table->string('specialization');
            $table->string('degrees')->nullable();
            $table->string('experience')->nullable();
            $table->text('tags')->nullable(); // comma separated tags
            $table->string('clinic_info')->nullable();
            $table->string('availability')->nullable();
            $table->decimal('fee', 8, 2)->nullable();
            $table->string('profile_image')->nullable(); // store filename or URL
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
