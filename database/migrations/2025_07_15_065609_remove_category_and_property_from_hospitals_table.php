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
    Schema::table('hospitals', function (Blueprint $table) {
        $table->dropForeign(['hospital_category_id']);
        $table->dropColumn('hospital_category_id');

        $table->dropForeign(['property_id']);
        $table->dropColumn('property_id');
    });
}

public function down()
{
    Schema::table('hospitals', function (Blueprint $table) {
        $table->unsignedBigInteger('hospital_category_id');
        $table->foreign('hospital_category_id')->references('id')->on('hospital_categories')->onDelete('cascade');

        $table->unsignedBigInteger('property_id');
        $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
    });
}

};
