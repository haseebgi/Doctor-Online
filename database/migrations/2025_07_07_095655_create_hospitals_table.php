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
    Schema::create('hospitals', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('icon')->nullable(); // Image path
        $table->string('title')->nullable();
        $table->text('description')->nullable();
        $table->string('phone_no')->nullable();
        $table->text('map_direction')->nullable();
        $table->text('address')->nullable();

        $table->unsignedBigInteger('hospital_category_id');
        $table->unsignedBigInteger('property_id');

        $table->timestamps();

        // Foreign key constraints (optional, if tables exist)
        $table->foreign('hospital_category_id')->references('id')->on('hospital_categories')->onDelete('cascade');
        $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
    }
};
