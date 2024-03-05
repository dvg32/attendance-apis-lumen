<?php

namespace Database\Factories;

use App\Models\Absen;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;

class AbsenFactory extends Factory
{
    protected $model = Absen::class;

    public function definition(): array
    {
        $faker = Faker::create();
    	return [
    	    //
            'id_pegawai' => mt_rand(0, 20),
            'jenis_absen' => $faker->randomElement([1,2]),
            'waktu_absen' => Carbon::now(),
    	];
    }
}
