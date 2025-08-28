<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faqs')->insert([
            'title'       => 'Como posso alterar imagens e textos?',
            'description' => 'Acessando o painel de controle do seu site meumodelo.sitemas.com.br/admin poderá alterar alterar imagens, textos e links sem complexidade.',
            'created_at'  => date('y-m-d H:i:s'),
            'updated_at'  => date('y-m-d H:i:s')
        ]);

        DB::table('faqs')->insert([
            'title'       => 'Como funciona os planos?',
            'description' => 'Importante: Os planos Essencial e Avançado funcionam por assinatura mensal, ou seja, o site permanece ativo enquanto a assinatura estiver vigente. <br /> Se preferir adquirir o modelo de forma definitiva, oferecemos essa opção mediante orçamento, com instalação realizada em sua própria hospedagem.',
            'created_at'  => date('y-m-d H:i:s'),
            'updated_at'  => date('y-m-d H:i:s')
        ]);

        DB::table('faqs')->insert([
            'title'       => 'E se eu quiser cancelar?',
            'description' => 'Iremos manter os seus dados e modelo com seu conteúdo por dois meses  após o cancelamento. Podendo retomar o site entre os dois meses com todos os dados.',
            'created_at'  => date('y-m-d H:i:s'),
            'updated_at'  => date('y-m-d H:i:s')
        ]);

        DB::table('faqs')->insert([
            'title'       => 'Preciso pagar alguma taxa de instalação?',
            'description' => 'Não. Assinando um dos planos, não há taxa de instalação. O site é configurado e entregue sem custo adicional.',
            'created_at'  => date('y-m-d H:i:s'),
            'updated_at'  => date('y-m-d H:i:s')
        ]);

        DB::table('faqs')->insert([
            'title'       => 'Consigo usar meu domínio próprio?',
            'description' => 'Sim, é possível usar o domínio da sua igreja (ex: www.suaigreja.com.br). Para configurar corretamente, consulte o suporte.',
            'created_at'  => date('y-m-d H:i:s'),
            'updated_at'  => date('y-m-d H:i:s')
        ]);
    }
}
