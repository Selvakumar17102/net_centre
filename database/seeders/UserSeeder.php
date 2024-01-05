<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("users")->insert([
            'name'=>'Plentitude Energy',
            'email'=>'superadmin@gmail.com',
            'password'=>bcrypt('sadmin'),
            'login_type'=>1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table("users")->insert([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123'),
            'login_type'=>2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table("users")->insert([
            'name'=>'customer',
            'email'=>'customer@gmail.com',
            'password'=>bcrypt('123'),
            'login_type'=>3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table("users")->insert([
            'name'=>'user',
            'email'=>'custuser@gmail.com',
            'password'=>bcrypt('123'),
            'login_type'=>4,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
