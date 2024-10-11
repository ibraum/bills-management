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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bill_id');
            $table->decimal('montant', 10, 2);
            $table->date('date_paiement');
            $table->enum('moyen_paiement', ['carte', 'virement', 'espece']);
            $table->timestamps();
        });

        Schema::table('paiements', function (Blueprint $table) {
            $table->foreign('bill_id')->on('bills')->references('bill_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
