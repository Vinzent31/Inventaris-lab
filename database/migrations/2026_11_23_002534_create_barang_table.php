
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->string('nama_barang', 100);
            $table->integer('jumlah_barang');
            $table->string('kondisi_barang', 50);

            $table->integer('id_ruang')->nullable();

            $table->foreign('id_ruang')
                  ->references('id_ruang')
                  ->on('ruang')
                  ->nullOnDelete()
                  ->cascadeOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
