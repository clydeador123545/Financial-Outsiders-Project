<?php

namespace Database\Seeders;

use App\Models\Blogposts;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogpostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blogposts::factory()->count(50)->create();
    }
}
