<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plans')->insert([
            'title'    => 'Básico',
            'slug'     => 'basico',
            'value'    => '39',
            'emphasis' => false,
            'items'    => json_encode([
                [
                    'title'       => '📄 1x Modelo landing page',
                    'description' => ''
                ],

                [
                    'title'       => '⚙️ Painel de controle',
                    'description' => ''
                ],

                [
                    'title'       => '📧 Suporte via Whatsapp',
                    'description' => ''
                ],

                [
                    'title'       => '🔗 1x Subdomínio disponível',
                    'description' => ''
                ],

                [
                    'title'       => '📧 1x E-mail',
                    'description' => 'seusite@sitemas.com.br'
                ],
            ]),
            'feature_id' => 1,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s')
        ]);

        DB::table('plans')->insert([
            'title'    => 'Essencial',
            'slug'     => 'essencial',
            'value'    => '59',
            'emphasis' => true,
            'items'    => json_encode([
                [
                    'title'       => '📄 1x Modelo institucional',
                    'description' => '(5 páginas)'
                ],

                [
                    'title'       => '⚙️ Painel de controle',
                    'description' => ''
                ],

                [
                    'title'       => '📧 Suporte via Whatsapp',
                    'description' => ''
                ],

                [
                    'title'       => '🔗 1x Subdomínio disponível',
                    'description' => ''
                ],

                [
                    'title'       => '📧 2x E-mail',
                    'description' => 'seusite@sitemas.com.br'
                ],
            ]),
            'feature_id' => 1,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s')
        ]);

        DB::table('plans')->insert([
            'title'    => 'Avançado',
            'slug'     => 'avancado',
            'value'    => '79',
            'emphasis' => false,
            'items' => json_encode([
                [
                    'title'       => '📄 2x Modelos',
                    'description' => '(landing page | institucional)'
                ],

                [
                    'title'       => '⚙️ Painel de controle',
                    'description' => ''
                ],

                [
                    'title'       => '📧 Suporte via Whatsapp',
                    'description' => ''
                ],

                [
                    'title'       => '🔗 1x Subdomínio disponível',
                    'description' => ''
                ],

                [
                    'title'       => '📧 4x E-mail',
                    'description' => 'seusite@sitemas.com.br'
                ],
            ]),
            'feature_id' => 2,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s')
        ]);
    }
}
