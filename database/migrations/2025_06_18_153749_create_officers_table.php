<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('officers', function (Blueprint $table) {
            $table->id(); // Primary key: id
            $table->string('name'); // Nama lengkap
            $table->string('badge_number')->unique(); // Nomor badge unik
            $table->string('rank'); // Pangkat polisi
            $table->string('assigned_area'); // Area penugasan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('officers');
    }
};
