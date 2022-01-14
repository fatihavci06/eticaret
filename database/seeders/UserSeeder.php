<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name'=>'Fatih',
        'email'=>'fatih@test.com',
        'password'=>bcrypt('102030') //bcrypt olmalı aksi halde çalışmaz
        ]);
    }
}
