<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Produto;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar algumas categorias
        $eletronicos = Categoria::create(['nome' => 'Eletrônicos']);
        $livros = Categoria::create(['nome' => 'Livros']);
        $roupas = Categoria::create(['nome' => 'Roupas']);

        // Criar alguns produtos e associá-los às categorias
        Produto::create([
            'nome' => '1982',
            'preco' => 50.00,
            'categoria_id' => $livros->id
        ]);

        Produto::create([
            'nome' => 'Televisão 4k',
            'preco' => 2000.00,
            'categoria_id' => $eletronicos->id
        ]);

        Produto::create([
            'nome' => 'A Sociedade Industrial e Seu Futuro',
            'preco' => 59.90,
            'categoria_id' => $livros->id
        ]);

        Produto::create([
            'nome' => 'Camiseta de Coqueiro Oklahoma',
            'preco' => 600.00,
            'categoria_id' => $roupas->id
        ]);
    }
}
