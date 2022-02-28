<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProjectRepository;

class ProjectController extends Controller
{
    //
    protected $projectRepository;

    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }


    public function show($slug)
    {
        return view('projects.show', [
            'project'=> $this->projectRepository->forSlug($slug)
        ]);
    }
}
