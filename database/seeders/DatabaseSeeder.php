<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            FaqSeeder::class,
            NicheSeeder::class,
            TemplateSeeder::class,
            FeatureSeeder::class,
            DomainSeeder::class,
            PlanSeeder::class,
            // OrderSeeder::class,
            NicheTemplateSeeder::class,
            NichePlanSeeder::class,
            TemplateFeatureSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
