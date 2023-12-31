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
        Schema::create('jabatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->decimal('gaji_pokok', 10, 2)->default(0);
            $table->decimal('tunjangan_makan', 10, 2)->default(0);
            $table->decimal('tunjangan_transportasi', 10, 2)->default(0);
            $table->decimal('tunjangan_kesehatan', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jabatan');
    }
};
