<?php

use Illuminate\Database\Seeder;
use App\site_contato;

class siteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contato = new site_contato();
        $contato->nome = 'Carlos'; 
        $contato->telefone = '(11)9999-2222'; 
        $contato->email = 'carlos@contato.com'; 
        $contato->motivo_contato = 1; 
        $contato->mensagem = 'gostei muito';
        $contato->save();

        $contato = new site_contato();
        $contato->nome = 'Maria'; 
        $contato->telefone = '(11)9999-2222'; 
        $contato->email = 'maria@contato.com'; 
        $contato->motivo_contato = 3; 
        $contato->mensagem = 'nossaaaaa que site sensacional';
        $contato->save();
    }
}
