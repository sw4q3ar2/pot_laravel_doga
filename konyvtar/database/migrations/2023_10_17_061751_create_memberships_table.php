<?php

use App\Models\Memberships;
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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id('member_id');
            $table->foreignId('club_id')->references('club_id')->on('clubs');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Memberships::create([
            'date' => '2000-12-13', 
            'club_id' => 1,
            'user_id' => 2
        ]);

        Memberships::create([
            'date' => '2000-12-11', 
            'club_id' => 3,
            'user_id' => 4
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
