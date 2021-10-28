<?php

use Illuminate\Database\Seeder;

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
            'address' => '奈良県奈良市',
            'tel' => '0742-12-3456'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'jiro',
            'address' => '奈良県奈良市',
            'tel' => '0742-12-3456'
        ];
        DB::table('users')->insert($param);
    }
}
