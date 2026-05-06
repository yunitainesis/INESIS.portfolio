<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Experience::create([
            'title' => 'HIMAPROTEKSA',
            'role' => 'General Treasurer',
            'year' => '2026',
            'description' => "Managing and overseeing the organization's financial administration, ensuring transparent budgeting and efficient fund allocation for all student association activities.",
        ]);

        \App\Models\Experience::create([
            'title' => 'Solo Anggrek Festival',
            'role' => 'Committee Member',
            'year' => '2025',
            'description' => 'Organized and facilitated event operations for the festival, coordinating with various stakeholders to ensure a smooth and successful exhibition.',
        ]);
    }
}
