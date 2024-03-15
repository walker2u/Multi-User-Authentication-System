<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('123'),
                'role' => 'admin',
                'status' => 'active'
            ]
        ]);
        //Agent
        DB::table('users')->insert([
            [
                'name' => 'Agent',
                'username' => 'agent',
                'email' => 'agent@agent.com',
                'password' => Hash::make('123'),
                'role' => 'agent',
                'status' => 'active'
            ]
        ]);
        //Admin
        DB::table('users')->insert([
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@user.com',
                'password' => Hash::make('123'),
                'role' => 'user',
                'status' => 'active'
            ]
        ]);
    }
}
