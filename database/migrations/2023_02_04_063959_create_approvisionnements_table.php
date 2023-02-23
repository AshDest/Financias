<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvisionnements', function (Blueprint $table) {
            $table->id();
            $table->string('fournisseur')->nullable();
            $table->decimal('montantCDF', 10, 2)->default('0');
            $table->decimal('valeurenCDF', 10, 2)->default('0');
            $table->decimal('montantUSD', 10, 2)->default('0');
            $table->decimal('valeurenUSD', 10, 2)->default('0');
            $table->double('taux')->default('0');
            $table->unsignedBigInteger('caisse_id');
            $table->foreign('caisse_id')->references('id')->on('caisses')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approvisionnements');
    }
};