<?php

namespace Database\Seeders;

use App\Models\User;
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

        User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin1234'),
            'role' => 'admin'
        ]);


        Listing::create([
            'title' => 'lamp',
            'tags' => 'licht, meubel',
            'description' => 'wss de mooiste lamp',
            'owner_name' => 'admin'
        ]);

        Listing::create([
            'title' => 'computermuis',
            'tags' => 'computer, elektronica',
            'description' => 'wss de mooiste muis',
            'owner_name' => 'admin'
        ]);
    }
}
