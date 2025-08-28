<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('templates')->insert([
            'title'      => 'Modelo 01',
            'slug'       => 'modelo-01',
            'thumbnail'  => null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('templates')->insert([
            'title'      => 'Modelo 02',
            'slug'       => 'modelo-02',
            'thumbnail'  => null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('templates')->insert([
            'title'      => 'Modelo 03',
            'slug'       => 'modelo-03',
            'thumbnail'  => null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('templates')->insert([
            'title'      => 'Modelo 04',
            'slug'       => 'modelo-04',
            'thumbnail'  => null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
