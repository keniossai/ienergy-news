<?php

namespace Database\Seeders;

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
        
        // $this->call(UserTableSeeder::class);

        // $this->call(UserTableSeeder::class);
        // $this->call(SettingTableSeeder::class);

        factory('App\Models\Category', 10)->create();
        factory('App\Models\Post', 100)->create();
        factory('App\Models\Tag', 50)->create();
        // factory('App\Models\Post', 50)->create();
    }
}
