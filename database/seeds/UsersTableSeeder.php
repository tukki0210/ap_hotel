<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('ja_JP');
        for ($i = 0; $i < 10; $i++){
        $param = [
            'name' => $faker->name(),
            'address' => substr($faker->address(),7),
            'tel' => $faker->phoneNumber(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('users')->insert($param);
        }
    }
}