<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        /* User::create([
            'name'=>'Jocinei da Rosa',
            'email'=>'jocinei300@gmail.com',
            'password'=>Hash::make('minhasenha')
        ]); */

        User::create([
            'name'=>'Maria da Silva',
            'email'=>'maria@gmail.com',
            'password'=>Hash::make('minhasenha')
        ]);
    }
}