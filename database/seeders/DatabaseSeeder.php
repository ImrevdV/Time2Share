<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Listing::create([
            'title' => 'lamp',
            'tags' => 'licht, meubel',
            'description' => 'wss de mooiste lamp'
        ]);

        Listing::create([
            'title' => 'computermuis',
            'tags' => 'computer, elektronica',
            'description' => 'wss de mooiste muis'
        ]);
    }
}
