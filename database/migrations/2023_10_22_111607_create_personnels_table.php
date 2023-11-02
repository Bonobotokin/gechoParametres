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
        Schema::create('personnels', function (Blueprint $table) {
            $table->id(); // Ceci définit la colonne "id" comme clé primaire
            $table->unsignedBigInteger('fonction_id');
            $table->unsignedBigInteger('user_id');
            $table->string('nom_personneles', 100);
            $table->boolean('sexe_personneles');
            $table->date('date_naissance_personneles');
            $table->string('lieu_naissance_personneles', 20);
            $table->string('adresse_personneles');
            $table->integer('telephone_1_personneles')->nullable();
            $table->integer('telephone_2_personneles')->nullable();
            $table->string('situation_matrimoniale_personneles', 20);
            $table->integer('salaire_base')->default(0);
            $table->timestamps();


            $table->foreign('fonction_id')->references('id')->on('fonctions')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnels');
    }
};
