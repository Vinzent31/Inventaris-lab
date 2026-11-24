
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ruang', function (Blueprint $table) {
            $table->increments('id_ruang');
            $table->string('nama_ruangan', 50);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ruang');
    }
};
