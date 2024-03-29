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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')
                ->unique();
            $table->string('nscient')->nullable();
            $table->string('famille')->nullable();
            $table->string('genre')->nullable();
            $table->longText('description')->nullable();
            $table->longText('habitat')->nullable();
            $table->longText('propriete')->nullable();
            $table->longText('precaution')->nullable();
            $table->longText('usageInterne')->nullable();
            $table->longText('usageExterne')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
