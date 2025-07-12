<?php

// database/migrations/xxxx_xx_xx_create_surgeries_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurgeriesTable extends Migration
{
    public function up()
    {
        Schema::create('surgeries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('discount_label')->nullable();
            $table->string('subtext')->nullable();
            $table->string('image')->nullable();
            $table->string('button')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('surgeries');
    }
}

