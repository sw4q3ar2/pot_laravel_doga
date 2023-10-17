<?php

use App\Models\Clubs;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->id('club_id');
            $table->date('date');
            $table->string('location');
            $table->integer('max_number');
            $table->timestamps();
        });

        Clubs::create([
            'date' => '2000-12-11', 
            'location' => 'Kispálya',
            'max_number' => 100 
        ]);

        Clubs::create([
            'date' => '2000-12-11', 
            'location' => 'haz',
            'max_number' => 100 
        ]);

        Clubs::create([
            'date' => '2000-12-11', 
            'location' => 'Nagyp',
            'max_number' => 100 
        ]);

        Clubs::create([
            'date' => '2000-12-11', 
            'location' => 'bolt',
            'max_number' => 100 
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
