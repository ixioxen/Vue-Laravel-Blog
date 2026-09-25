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
        Schema::create('nrcs', function (Blueprint $table) {
            $table->id();
            $table->string('township');
            $table->string('number_code',6);
            $table->string('nrc_number',6);
            $table->string('age');
            $table->string('citizenship',6);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nrcs');
    }
};
