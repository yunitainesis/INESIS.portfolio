<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Mengambil semua data skill.
     */
    public function getSkills()
    {
        return Skill::all();
    }
}
