<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\User::class,20)->create();
    }
}