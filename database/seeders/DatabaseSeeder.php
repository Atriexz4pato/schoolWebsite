<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TeacherSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(NewSeeder::class);
//        User::factory()->create([
//            'name' => 'Anonymous User',
//            'email' => 'anonymous@example.com',
//        ]);
    }
}
