<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@featlly.com',
            'password' => Hash::make('admin'),
            'no_telp' => "089665444333",
            "alamat" => "alamat",
            "email_verified_at" => Date::now(),
            'is_admin' => true,
        ]);
    }
}
