<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_create_body_tests_table.php
public function up()
{
    Schema::create('body_tests', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->integer('original_price')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('body_tests');
    }
};
