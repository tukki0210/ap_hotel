<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'number_of_reservations' => 3,
            'check_in_day' => '2021-10-23',
            'check_out_day' => '2021-10-25'
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'user_id' => 2,
            'number_of_reservations' => 2,
            'check_in_day' => '2021-10-24',
            'check_out_day' => '2021-10-26'
        ];
        DB::table('reserves')->insert($param);
    }
}
