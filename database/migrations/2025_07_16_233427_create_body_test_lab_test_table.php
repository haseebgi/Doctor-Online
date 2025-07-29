<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodyTestLabTestTable extends Migration
{
    public function up()
    {
        Schema::create('body_test_lab_test', function (Blueprint $table) {
            $table->id();
            $table->foreignId('body_test_id')->constrained()->onDelete('cascade');
            $table->foreignId('lab_test_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('body_test_lab_test');
    }
}

