<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'room_name' => '和室',
            'capacity' => '4',
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'room_name' => '洋室',
            'capacity' => '3',
        ];
        DB::table('room_types')->insert($param);
    }
}
