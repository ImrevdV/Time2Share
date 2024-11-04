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
            'title' => 'Munisense Pen',
            'tags' => 'Pen, Schrijfgerei',
            'description' => 'Een hele goede pen van Munisense, nog niet vaak gebruikt.',
            'owner_name' => 'admin',
            'img' => 'imgs/IMG-20241104-WA0012.jpg'
        ]);

        Listing::create([
            'title' => 'No mans sky ps4',
            'tags' => 'Playstation, Games, PS4',
            'description' => 'No mans sky voor ps4 (werkt ook op ps5) tweedehands gekocht ooit bij Gamemania, nu speel ik hem bijna nooit meer dus jullie mogen het lenen van mij :)',
            'owner_name' => 'admin',
            'img' => 'imgs/IMG-20241104-WA0001.jpg'
        ]);

        Listing::create([
            'title' => 'Bini basketbal',
            'tags' => 'Speelgoed, Basketbal',
            'description' => 'Mini basketbal, de hoop heb ik helaas niet meer denk ik',
            'owner_name' => 'admin',
            'img' => 'imgs/IMG-20241104-WA0002.jpg'
        ]);

        Listing::create([
            'title' => 'Spiderman ps4',
            'tags' => 'Playstation, Games, PS4',
            'description' => 'Spiderman voor ps4 (werkt ook op ps5), nu speel ik hem bijna nooit meer dus jullie mogen het lenen van mij :)',
            'owner_name' => 'admin',
            'img' => 'imgs/IMG-20241104-WA0003.jpg'
        ]);

        Listing::create([
            'title' => 'Super Smash Bros Ultimate nintendo switch',
            'tags' => 'Nintendo, Games, Switch',
            'description' => 'Super Smash Bros Ultimate voor de nintendo switch, nu speel ik hem bijna nooit meer dus jullie mogen het lenen van mij :)',
            'owner_name' => 'admin',
            'img' => 'imgs/IMG-20241104-WA0004.jpg'
        ]);

        Listing::create([
            'title' => 'Starwars Battlefront ps4',
            'tags' => 'Playstation, Games, PS4',
            'description' => 'Starwars Battlefront voor ps4 (werkt ook op ps5), nu speel ik hem bijna nooit meer dus jullie mogen het lenen van mij :)',
            'owner_name' => 'admin',
            'img' => 'imgs/IMG-20241104-WA0005.jpg'
        ]);

        Listing::create([
            'title' => 'Marshall IV Koptelefoon',
            'tags' => 'Marshall, Koptelefoon',
            'description' => 'Hele goede koptelefoon van Marshall.',
            'owner_name' => 'admin',
            'img' => 'imgs/IMG-20241104-WA0006.jpg'
        ]);

        Listing::create([
            'title' => 'Zelda TotK nintendo switch',
            'tags' => 'Nintendo, Games, Switch',
            'description' => 'The legend of Zelda, Tears of the Kingdom voor de nintendo switch, nu speel ik hem bijna nooit meer dus jullie mogen het lenen van mij :)',
            'owner_name' => 'admin',
            'img' => 'imgs/IMG-20241104-WA0007.jpg'
        ]);

        Listing::create([
            'title' => 'PS5 Controller',
            'tags' => 'Playstation, PS5, Games, Controller',
            'description' => 'PS5 Controller werkt nog heel goed',
            'owner_name' => 'admin',
            'img' => 'imgs/IMG-20241104-WA0008.jpg'
        ]);

        Listing::create([
            'title' => 'Splatoon 2 nintendo switch',
            'tags' => 'Nintendo, Games, Switch',
            'description' => 'Splatoon 2 voor de nintendo switch, nu speel ik hem bijna nooit meer dus jullie mogen het lenen van mij :)',
            'owner_name' => 'admin',
            'img' => 'imgs/IMG-20241104-WA0009.jpg'
        ]);

        Listing::create([
            'title' => 'Frieren Volume 7',
            'tags' => 'Manga, Anime, Boek',
            'description' => 'Frieren Manga Volume 7, is al uitgelezen dus je mag hem lenen van mij. Gaat precies verder waar de anime na seizoen 1 gebleven is',
            'owner_name' => 'admin',
            'img' => 'imgs/IMG-20241104-WA0010.jpg'
        ]);

        Listing::create([
            'title' => 'Pokemon Legends Arceus nintendo switch',
            'tags' => 'Nintendo, Games, Switch',
            'description' => 'Pokemon Legends Arceus voor de nintendo switch, nu speel ik hem bijna nooit meer dus jullie mogen het lenen van mij :)',
            'owner_name' => 'admin',
            'img' => 'imgs/IMG-20241104-WA0011.jpg'
        ]);

        Listing::create([
            'title' => 'Fidget spinner',
            'tags' => 'Speelgoed, Fidget',
            'description' => 'Werkt nog goed, je mag hem lenen',
            'owner_name' => 'admin',
            'img' => 'imgs/IMG-20241104-WA0013.jpg'
        ]);
    }
}
