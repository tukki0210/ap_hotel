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
            'days' => '2021-10-23',
            'price' => 8000
        ];
        DB::table('reserve_room')->insert($param);

        $param = [
            'reserve_id' => 1,
            'room_id' => 1,
            'days' => '2021-10-24',
            'price' => 9000
        ];
        DB::table('reserve_room')->insert($param);

        $param = [
            'reserve_id' => 2,
            'room_id' => 2,
            'days' => '2021-10-24',
            'price' => 9000
        ];
        DB::table('reserve_room')->insert($param);

        $param = [
            'reserve_id' => 2,
            'room_id' => 2,
            'days' => '2021-10-25',
            'price' => 9000
        ];
        DB::table('reserve_room')->insert($param);
    }
}
