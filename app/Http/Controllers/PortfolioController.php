<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Target;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Menampilkan halaman utama portofolio.
     */
    public function index()
    {
        // =================================================================
        // DATA HARDCODED (Sesuai Permintaan)
        // =================================================================
        $educations = [
            (object)[
                'school_name' => 'Politeknik Indonusa Surakarta',
                'degree' => 'Software Engineering Technology',
                'start_year' => '2024',
                'end_year' => null,
            ],
            (object)[
                'school_name' => 'SMA Negeri 1 Sukodono',
                'degree' => 'Science Major (IPA)',
                'start_year' => '2021',
                'end_year' => '2024',
            ],
            (object)[
                'school_name' => 'SMPIT Ar-Rahman',
                'degree' => 'Junior High School',
                'start_year' => '2018',
                'end_year' => '2021',
            ],
            (object)[
                'school_name' => 'SD Negeri Sukaresmi 05',
                'degree' => 'Elementary School',
                'start_year' => '2012',
                'end_year' => '2018',
            ],
        ];

        // =================================================================
        // MENGAMBIL DATA DARI DATABASE
        // =================================================================
        $skills = Skill::all();
        $projects = Project::all();
        $experiences = Experience::orderBy('year', 'desc')->get();
        $targets = Target::all();
        
        // =================================================================
        // MENAMPILKAN VIEW (TAMPILAN)
        // =================================================================
        return view('portofolio', compact('educations', 'skills', 'projects', 'experiences', 'targets'));
    }
}
