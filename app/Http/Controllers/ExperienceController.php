<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Target;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Mengambil data pendidikan dan pengalaman.
     */
    public function getData()
    {
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

        $experiences = Experience::orderBy('year', 'desc')->get()->unique(fn($item) => trim($item->title));
        $targets = Target::all()->unique(fn($item) => trim($item->title));

        return [
            'educations' => $educations,
            'experiences' => $experiences,
            'targets' => $targets
        ];
    }
}
