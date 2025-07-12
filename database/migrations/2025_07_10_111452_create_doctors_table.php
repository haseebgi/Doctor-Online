<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 public function up()
{
    Schema::create('doctors', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('designation')->nullable(); // e.g., Dermatologist
        $table->string('qualifications')->nullable(); // MBBS, MCPS...
        $table->integer('reviews')->default(0);
        $table->integer('experience_years')->nullable();
        $table->integer('satisfaction')->nullable(); // percentage
        $table->decimal('video_fee', 8, 0)->nullable(); // Rs. 1000
        $table->decimal('hospital_fee', 8, 0)->nullable(); // Rs. 2500
        $table->string('hospital_name')->nullable();
        $table->string('hospital_location')->nullable();
        $table->string('image')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
