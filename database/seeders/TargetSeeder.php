<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Target::truncate();

        \App\Models\Target::create([
            'title' => 'Counter Bookkeeping & BRILink',
            'description' => 'Developing a dedicated web application to streamline daily financial records and transactions for retail counters and BRILink agents.',
            'icon' => 'calculator',
        ]);

        \App\Models\Target::create([
            'title' => 'Garment Factory Payroll App',
            'description' => 'Creating an efficient payroll management system tailored for garment factories (Konveksi) to automate wage calculations and attendance tracking.',
            'icon' => 'money',
        ]);

        \App\Models\Target::create([
            'title' => 'Organization Financial Web',
            'description' => 'Building a transparent financial management platform for organizations to easily track income, expenses, and generate detailed reports.',
            'icon' => 'building',
        ]);
    }
}
