<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('barang_nota', function (Blueprint $table) {
            $table->id();
            $table->string('KodeNota');
            $table->string('KodeBarang');
            $table->integer('JumlahBarang');
            $table->decimal('HargaSatuan', 10, 2);
            $table->decimal('Jumlah', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_nota');
    }
};
