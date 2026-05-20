<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama
        Project::truncate();

        // Project 1
        Project::create([
            'title' => 'Visual Studio FoxPro Application',
            'description' => 'A desktop-based database management system developed using Visual Studio FoxPro, focusing on efficient data handling and user-friendly interface for classic environments.',
            'category' => 'Desktop App',
            'tech_stack' => 'FoxPro',
            'image_url' => 'assets/img/project_foxpro.png',
            'github_link' => 'https://github.com/yunitainesis/Form-FOXPRO',
        ]);

        // Project 2
        Project::create([
            'title' => 'CRUD Mobile App (Kodular)',
            'description' => 'A mobile application built with the Kodular block-based programming platform, implementing full CRUD (Create, Read, Update, Delete) functionality for dynamic data management.',
            'category' => 'Mobile App',
            'tech_stack' => 'Kodular',
            'image_url' => 'assets/img/project_kodular.png',
            'github_link' => 'https://github.com/yunitainesis/mobile-app-kodular-task',
        ]);

        // Project 3
        Project::create([
            'title' => 'Hestii Henna Reservation',
            'description' => 'A sophisticated web application designed for booking henna services. Features an elegant UI, category selection, and a seamless reservation workflow.',
            'category' => 'Web App',
            'tech_stack' => 'Laravel',
            'image_url' => 'assets/img/project_henna.png',
            'github_link' => 'https://github.com/yunitainesis/hestii_henna',
        ]);

        // Project 4
        Project::create([
            'title' => 'Jimpitan Desa',
            'description' => 'A community-focused web application designed to digitize and manage the traditional \'Jimpitan\' (community savings and mutual aid) system for rural villages, enhancing financial transparency and administrative efficiency.',
            'category' => 'Web App',
            'tech_stack' => 'Laravel',
            'image_url' => 'assets/img/project_jimpitan.png',
            'github_link' => 'https://github.com/yunitainesis/Jimpitan-desa',
        ]);
    }
}
