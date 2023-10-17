<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamps();
        });

        User::create([
            'name' => 'sendorr', 
            'email' => "sendooor@gmail.com"
        ]);

        User::create([
            'name' => 'sanyi', 
            'email' => "sanyi@gmail.com"
        ]);

        User::create([
            'name' => 'patria', 
            'email' => "patria@gmail.com"
        ]);

        User::create([
            'name' => 'anna', 
            'email' => "anna@gmail.com"
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
