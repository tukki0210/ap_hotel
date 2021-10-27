<?php

use Illuminate\Database\Seeder;

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
    }
}
