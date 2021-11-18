<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReserveDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'reserve_id' => 1,
            'room_id' => 1,
            'days' => 3,
            'price' => 8000
        ];
        DB::table('reserve_room')->insert($param);

        $param = [
            'reserve_id' => 2,
            'room_id' => 2,
            'days' => 2,
            'price' => 7000
        ];
        DB::table('reserve_room')->insert($param);
    }
}
