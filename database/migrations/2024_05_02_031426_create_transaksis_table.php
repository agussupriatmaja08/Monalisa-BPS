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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string("nama", 550);
            $table->string("no_kwt");
            $table->string("nilai_trans")->nullable();
            $table->foreignId("akun_id");
            $table->float('progres')->nullable()->default(0);
            $table->integer('amount_file')->nullable()->default(0);
            $table->integer('complete_file')->nullable()->default(0);
            $table->date('tgl_akhir');
            $table->string('bln_arsip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
