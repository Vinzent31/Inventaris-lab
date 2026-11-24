
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->increments('id_peminjaman');
            $table->string('nama_peminjam', 100);

            $table->integer('id_barang')->nullable();

            $table->integer('jumlah_barang');
            $table->dateTime('waktu_peminjaman');
            $table->dateTime('waktu_pengembalian')->nullable();

            $table->foreign('id_barang')
                  ->references('id_barang')
                  ->on('barang')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
