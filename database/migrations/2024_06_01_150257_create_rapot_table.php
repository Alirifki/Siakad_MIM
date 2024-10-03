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
        Schema::create('rapot', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mapel_id')->nullable();
            $table->string('siswa_id')->nullable();
            $table->string('smt_id')->nullable();
            $table->string('na');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapot');
    }
};
