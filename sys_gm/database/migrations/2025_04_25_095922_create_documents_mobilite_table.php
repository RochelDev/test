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
        Schema::create('documents_mobilite', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mobilite_id')->constrained('mobilites')->onDelete('cascade');
            $table->string('type_document'); // ex : lettre_motivation, CV, etc.
            $table->string('chemin_fichier');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents_mobilite');
    }
};
