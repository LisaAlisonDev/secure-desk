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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        DB::table('roles')->insert([
            [
                'name' => 'ADMIN',
                'description' => 'Administrateur de la plateforme',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AGENT',
                'description' => 'Agent support',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'name' => 'USER',
                'description' => 'Utilisateur standard',
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
        Schema::dropIfExists('roles');
    }
};
