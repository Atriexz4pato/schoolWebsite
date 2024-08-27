<?php

namespace Database\Seeders;

use App\Models\Neew;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Neew::factory()->count(3)->create();
    }
}
