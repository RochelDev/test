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
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->string('code_dossier');
            $table->string('titre');
            $table->foreignId('ministere_id')->constrained();
            $table->foreignId('type_mobilite_id')->constrained();
            $table->foreignId('agent_id')->constrained();
            $table->string('statut')->default('en_attente');
            $table->year('annee');
            $table->json('historique_statut')->nullable();
            $table->softDeletes();
            $table->string('type_acte');
            $table->string('signataire');
            $table->string('référence dossier');
            $table->string('contenu_acte');
            $table->timestamps('date_creation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossiers');
    }
};
