<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('domains')->insert([
            [
                'name'        => 'seusite',
                'full_domain' => 'seusite.sitemas.com.br',
                'order_id'    => null,
                'created_at'  => now(),
                'updated_at'  => now()
            ],

            [
                'name'        => 'seusite1',
                'full_domain' => 'seusite1.sitemas.com.br',
                'order_id'    => null,
                'created_at'  => now(),
                'updated_at'  => now()
            ],

            [
                'name'        => 'seusite2',
                'full_domain' => 'seusite2.sitemas.com.br',
                'order_id'    => null,
                'created_at'  => now(),
                'updated_at'  => now()
            ],

            [
                'name'        => 'seusite3',
                'full_domain' => 'seusite3.sitemas.com.br',
                'order_id'    => null,
                'created_at'  => now(),
                'updated_at'  => now()
            ]
        ]);
    }
}
