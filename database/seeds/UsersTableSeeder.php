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
        $param = [
            'name' => 'taro',
            'address' => '大阪府大阪市',
            'tel' => '12-3456-7890'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'jiro',
            'address' => '京都府京都市',
            'tel' => '12-3456-7890'
        ];
        DB::table('users')->insert($param);
    }
}
