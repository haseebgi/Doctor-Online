<?php

// database/migrations/xxxx_xx_xx_create_lab_tests_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabTestsTable extends Migration
{
    // database/migrations/xxxx_xx_xx_create_lab_tests_table.php
public function up()
{
    Schema::create('lab_tests', function (Blueprint $table) {
        $table->id();
        $table->foreignId('lab_id')->constrained('labs')->onDelete('cascade');
        $table->string('test_name');
        $table->integer('price');
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('lab_tests');
    }
}
