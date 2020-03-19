<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::where('is_completed', false)
                            ->orderBy('created_at', 'desc')
                            ->withCount([
                                'tasks' => function($query){
                                    $query->where('is_completed', false);
                                }
                            ])
                            ->get();
        return $projects->toJson();

    }
}
