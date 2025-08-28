<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            'company'        => 'Seusite',
            'website'        => 'Seusite website',
            'email'          => 'seusite@gmail.com',
            'phone'          => '1234-1234',
            'domain_id'      => 1,
            'plan_id'        => 1,
            'payment_status' => 'pending',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
    }
}
