<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ticket_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('description', 255);
            $table->timestamps();
        });

        DB::table('ticket_statuses')->insert([
            [
                'name' => 'OPEN',
                'description' => 'Ticket ouvert',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'IN_PROGRESS',
                'description' => 'Ticket en cours de traitement',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'WAITING',
                'description' => 'En attente d\'informations',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'RESOLVED',
                'description' => 'Ticket résolu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CLOSED',
                'description' => 'Ticket fermé',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_statuses');
    }
};
