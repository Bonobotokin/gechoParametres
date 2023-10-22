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
            $table->id();
            $table->string('nom_personneles', 100);
            $table->boolean('sexe_personneles');
            $table->date('date_naissance_personneles');
            $table->string('lieu_naissance_personneles', 20);
            $table->string('adresse_personneles');
            $table->integer('telephone_1_personneles')->nullable();
            $table->integer('telephone_2_personneles')->nullable();
            $table->string('situation_matrimoniale_personneles', 20);
            $table->string('titre')->nullable();
            $table->integer('salaire_base')->default(0);
            $table->timestamps();
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
