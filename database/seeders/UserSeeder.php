<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{

    public function run()
    {
        // Create 3 Authors
        User::factory()->count(3)->create([
            'role' => 'Author',
        ]);

        // Create 50 Readers
        User::factory()->count(50)->create([
            'role' => 'Reader',
        ]);

        echo "Seeded 3 authors and 50 readers\n";
    }
}
