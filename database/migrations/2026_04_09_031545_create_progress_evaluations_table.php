<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('progress_evaluations', function (Blueprint $table) {
            $table->id();
            $table->text('observacion')->nullable();
            $table->date('fecha');

            $table->foreignId('id_avance')->constrained('progress')->onDelete('cascade');
            $table->foreignId('id_instructor')->constrained('instructors')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('progress_evaluations');
    }
};
