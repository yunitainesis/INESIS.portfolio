<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Menampilkan halaman utama portofolio.
     * Sekarang menggunakan data yang dipasok oleh Controller lain (Refactoring).
     */
    public function index()
    {
        // Mengambil data dari SkillController
        $skills = (new SkillController())->getSkills();

        // Mengambil data dari ProjectController
        $projects = (new ProjectController())->getProjects();

        // Mengambil data dari ExperienceController
        $experienceData = (new ExperienceController())->getData();
        
        $educations = $experienceData['educations'];
        $experiences = $experienceData['experiences'];
        $targets = $experienceData['targets'];

        // Tetap menampilkan view yang sama dengan data yang sama
        return view('portofolio', compact('educations', 'skills', 'projects', 'experiences', 'targets'));
    }
}
