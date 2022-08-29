<?php

use Illuminate\Database\Seeder;
use App\Fornecedores;

class FornecedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedores();
        $fornecedor->nome = 'fornecedor100';
        $fornecedor->site = 'www.fornecedor100.com';
        $fornecedor->email = 'fornecedor100@forn.com';
        $fornecedor->uf = 'CE';
        $fornecedor->save();

        Fornecedores::create([
            'nome' => 'fornecedor200',
            'site' => 'www.fornecedor200.com',
            'email' => 'fornecedor200@forn.com',
            'uf' => 'PE',
        ]);
    }
}
