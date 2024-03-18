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
        Schema::create('objectifccs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cc_id')->constrained('ccs')->cascadeOnDelete();
            $table->foreignId('objectifra_id')->constrained('objectifras')->cascadeOnDelete();
            $table->integer('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objectifccs');
    }
};
