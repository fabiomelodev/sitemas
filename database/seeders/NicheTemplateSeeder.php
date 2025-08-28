<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NicheTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('niche_templates')->insert([
            'niche_id'    => 1,
            'template_id' => 1
        ]);

        DB::table('niche_templates')->insert([
            'niche_id'    => 1,
            'template_id' => 2
        ]);

        DB::table('niche_templates')->insert([
            'niche_id'    => 1,
            'template_id' => 3
        ]);
    }
}
