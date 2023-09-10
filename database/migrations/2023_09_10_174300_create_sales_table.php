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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string("Index");
            $table->string("Organization Id");
            $table->string("Name");
            $table->string("Website");
            $table->string("Country");
            $table->string("Description");
            $table->string("Founded");
            $table->string("Industry");
            $table->string("Number of employees");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
