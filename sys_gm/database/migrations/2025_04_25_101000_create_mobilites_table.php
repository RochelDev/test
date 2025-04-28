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
        Schema::create('mobilites', function (Blueprint $table) {
            $table->id();
            $table->string('nom_agent');
            $table->string('poste_actuel');
            $table->string('poste_souhaite');
            $table->text('motif');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobilites');

    }
};
