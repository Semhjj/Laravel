<?php

namespace Database\Seeders;
use App\Models\ToDo;
use Database\Factories\ToDoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();

            ToDo::factory(2)->create();

//        ToDo::create([
//           'email' => 'semjansen.langmuur@gmail.com',
//           'opdracht' => 'Werkplek schoonmaken.',
//           'opdracht_omschrijving' => 'Werkplek goed boenen en alle stof afnemen.',
//        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
