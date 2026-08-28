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
   Schema::create('tickets', function (Blueprint $table) {
            $table->id();

            // Utilisateur ayant créé le ticket
            $table->foreignId('creator_id')
                ->constrained('users')
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            // Agent assigné au ticket (optionnel)
            $table->foreignId('assigned_agent_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete()
                ->cascadeOnUpdate();

            // Statut du ticket
            $table->foreignId('status_id')
                ->constrained('ticket_statuses')
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            // Priorité du ticket
            $table->foreignId('priority_id')
                ->constrained('ticket_priorities')
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            $table->string('title', 255);
            $table->text('description');

            $table->timestamp('resolved_at')->nullable();
            $table->timestamp('closed_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
