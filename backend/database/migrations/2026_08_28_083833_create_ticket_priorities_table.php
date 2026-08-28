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
        Schema::create('ticket_priorities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

          DB::table('ticket_priorities')->insert([
            [
                'name' => 'LOW',
                'description' => 'Priorité faible',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MEDIUM',
                'description' => 'Priorité moyenne',
                'created_at' => now(),
                'updated_at' => now(),
            ],
              [
                'name' => 'HIGH',
                'description' => 'Priorité élevée',
                'created_at' => now(),
                'updated_at' => now(),
            ],  [
                'name' => 'CRITICAL',
                'description' => 'Priorité critique',
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
        Schema::dropIfExists('ticket_priorities');
    }
};
