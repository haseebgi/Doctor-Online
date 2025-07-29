<?php

// database/migrations/xxxx_xx_xx_create_labs_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabsTable extends Migration
{
    // database/migrations/xxxx_xx_xx_create_labs_table.php
        public function up()
        {
            Schema::create('labs', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('location')->nullable();
                $table->string('contact')->nullable();
                $table->timestamps();
            });
        }


    public function down()
    {
        Schema::dropIfExists('labs');
    }
}
