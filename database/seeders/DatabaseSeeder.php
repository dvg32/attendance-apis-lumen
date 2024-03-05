<?php

namespace Database\Seeders;

use App\Models\Absen;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        $this->call(UserSeeder::class);
        Absen::factory(10)->create();
    }
}
