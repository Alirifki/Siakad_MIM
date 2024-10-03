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
        Schema::create('nilai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mapel_id')->nullable();
            $table->string('siswa_id')->nullable();
            $table->enum('smt_id',['ganjil','genap'])->nullable();
            $table->string('uh1');
            $table->string('uts');
            $table->string('uh2');
            $table->string('uas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};
