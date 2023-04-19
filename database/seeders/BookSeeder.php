<?php

use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    public function run(ModelBook $cliente)
    {
        $cliente->create([
            'nome' => 'Yann Lima',
            'data_nasc' => '04/09/1998',
            'cpf' => '999.999.999-89',
            'foto' => 'imagem',
            'nome_social' => 'Yann',
        ]);

        $cliente->create([
            'nome' => 'Vitoria Pereira',
            'data_nasc' => '20/03/2000',
            'cpf' => '999.999.999-89',
            'foto' => 'imagem',
            'nome_social' => 'Vitoria',
        ]);

        $cliente->create([
            'nome' => 'Jose Macena',
            'data_nasc' => '08/07/1972',
            'cpf' => '999.999.999-89',
            'foto' => 'imagem',
            'nome_social' => 'Jose',
        ]);
    }
}
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(BookSeeder::class);
    }
}
