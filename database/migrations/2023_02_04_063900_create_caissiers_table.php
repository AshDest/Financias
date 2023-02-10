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
        Schema::create('caissiers', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('nom')->nullable();
            $table->string('postnom')->nullable();
            $table->string('compteUSD');
            $table->string('compteCDF');
            $table->double('montantCDF')->default('0');
            $table->double('montantUSD')->default('0');
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
        Schema::dropIfExists('caissiers');
    }
};