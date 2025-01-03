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
        Schema::create('add_services', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('accepted');
            $table->string('ServiceImage')->nullable();
            $table->string('ServiceTitle')->nullable();
            $table->text('ServiceDetails')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_services');
    }
};
