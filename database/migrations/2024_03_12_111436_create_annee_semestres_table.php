<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Annee;
use App\Models\Semestre;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('annee_semestres', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Annee::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Semestre::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(AnneeSemestre::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annee_semestres');
    }
};
