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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->string('email', 100)->unique();
            $table->string('telephone', 15)->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('adresse', 255)->nullable();
            $table->string('ville', 50)->nullable();
            $table->string('code_postal', 10)->nullable();
            $table->string('photo')->nullable();
            $table->boolean('actif')->default(true);
            $table->integer('annee_inscription')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
