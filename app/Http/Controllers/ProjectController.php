<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Mengambil semua data project.
     */
    public function getProjects()
    {
        return Project::all();
    }
}
