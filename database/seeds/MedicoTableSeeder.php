<?php

use Illuminate\Database\Seeder;
use App\Medico;

class MedicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medico::create([
            'nome' => 'Ermelinda',
            'email' => 'ermelinda22@gmail.com',
            'password' => bcrypt('123456'),
            'telefone' => '(13)99644-2358',
            'celular' => '(13)99644-2358',
            'especialidade' => 'cardiologista',
            'descricao' => 'especialista em cardiologia',
            'foto' => 'imagens/foto1.jpg',
        ]);
    }
}

