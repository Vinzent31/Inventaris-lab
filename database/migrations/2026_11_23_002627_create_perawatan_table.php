
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('perawatan', function (Blueprint $table) {
            $table->increments('id_perawatan');

            $table->integer('id_barang')->nullable();

            $table->date('tanggal_perawatan');
            $table->string('jenis_perawatan', 100);
            $table->string('status', 50);

            $table->foreign('id_barang')
                  ->references('id_barang')
                  ->on('barang')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('perawatan');
    }
};
