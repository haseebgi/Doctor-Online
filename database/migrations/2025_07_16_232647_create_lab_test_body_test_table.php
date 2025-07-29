<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_create_lab_test_body_test_table.php
public function up()
{
    Schema::create('lab_test_body_test', function (Blueprint $table) {
        $table->id();
        $table->foreignId('lab_test_id')->constrained('lab_tests')->onDelete('cascade');
        $table->foreignId('body_test_id')->constrained('body_tests')->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_test_body_test');
    }
};
