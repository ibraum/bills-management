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
        Schema::create('bills', function (Blueprint $table) {
            $table->id('bill_id');
            $table->unsignedBigInteger('user_id');
            $table->string('reference');
            $table->date('date_emission');
            $table->date('date_echeance');
            $table->enum('status', ['en attente', 'partiellement payé', 'payé', 'annulé']);
            $table->decimal('total_ht', 10, 2);
            $table->decimal('taux_tva', 5, 2);
            $table->decimal('total_tva', 10, 2);
            $table->decimal('total_ttc', 10, 2);
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::table('bills', function (Blueprint $table) {
            $table->foreign('user_id')->on('users')->references('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
