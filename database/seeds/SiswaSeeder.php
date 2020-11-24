<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){
        	DB::table('siswa')->insert([
        		'nama' => $faker->name,
        		'umur' => $faker->numberBetween(17,18)
        	]);
        }

    }
}
