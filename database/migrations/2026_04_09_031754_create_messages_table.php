<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->text('contenido');
            $table->string('url_adjunto')->nullable();
            $table->boolean('leido')->default(false);
            $table->timestamp('fecha_envio');

            $table->foreignId('id_remitente')->constrained('general_users')->onDelete('cascade');
            $table->foreignId('id_destinatario')->constrained('general_users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
