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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rakbuku_id')->unsigned();
            $table->bigInteger('kategoribuku_id')->unsigned();
            $table->string('kode_isbn');
            $table->string('judul_buku');
            $table->string('pengarang');
            $table->string('image');
            $table->string('dokumen');
            $table->timestamps();

            // Schema::table('buku', function (Blueprint $table) {
                $table->foreign('rakbuku_id')->references('id')->on('rakbuku')
                ->onDelete('cascade');
                $table->foreign('kategoribuku_id')->references('id')->on('kategoribuku')
                ->onDelete('cascade');
            // });
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
