<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nome' => 'Ermelinda',
            'email' => 'ermelinda@gmail.com',
            'password' => bcrypt('123456'),
            'telefone' => '(13)99644-2358',
        ]);
    }
}