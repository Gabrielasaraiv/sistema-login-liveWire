<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Admin',
            'email'=>'teste@teste.com',
            'password'=>Hash::make('123456'),//vai fazer a criptografia da senha com base da chave app_key do .env
            'role'=>'admin'
        ]);

        User::create([
            'name'=>'User',
            'email'=>'user@teste.com',
            'password'=>Hash::make('123456'),//vai fazer a criptografia da senha com base da chave app_key do .env
            'role'=>'user'
        ]);
    }
}
