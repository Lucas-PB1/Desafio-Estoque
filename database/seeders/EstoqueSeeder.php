<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelEstoque;

class EstoqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelEstoque $stock)
    {
        $stock->create([
            'name' => 'Pão',
            'desc' => 'Um produto para se consumir no dia a dia.',
            'category' => 'Não-duráveis',
            'price' => '1',
            'qtd' => '2000',
        ]);
        $stock->create([
            'name' => 'Chave de Fenda',
            'desc' => 'Uma ferramenta frequentemente procurada para consertos e construções.',
            'category' => 'Produtos Industriais',
            'price' => '15.99',
            'qtd' => '10',
        ]);
        $stock->create([
            'name' => 'Onix Plus',
            'desc' => 'Um veiculo da nova geração com todo conforto e acesso.',
            'category' => 'Bens duráveis',
            'price' => '77000.69',
            'qtd' => '2',
        ]);
    }
}
