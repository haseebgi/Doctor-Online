<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->string('image')->nullable();
            $table->text('uses')->nullable();
            $table->text('dosage')->nullable();
            $table->text('warnings')->nullable();
            $table->text('precautions')->nullable();
            $table->text('side_effects')->nullable();
            $table->string('packaging')->nullable();
            $table->boolean('prescription_required')->default(false);
            $table->text('expert_advice')->nullable();
            $table->text('faq')->nullable();
            $table->text('disclaimer')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('generic_name')->nullable();
            $table->string('formula')->nullable();
            $table->string('drug_class')->nullable();
            $table->string('medicinal_form')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
