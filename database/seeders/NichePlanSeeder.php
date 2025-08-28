<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NichePlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('niche_plans')->insert([
            'niche_id' => 1,
            'plan_id'  => 1
        ]);

        DB::table('niche_plans')->insert([
            'niche_id' => 1,
            'plan_id'  => 2
        ]);

        DB::table('niche_plans')->insert([
            'niche_id' => 1,
            'plan_id'  => 3
        ]);
    }
}
