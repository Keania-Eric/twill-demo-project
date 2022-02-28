<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProjectRepository;

class HomePageController extends Controller
{
    //

    protected $projectRepository;

    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }


    public function homepage()
    {
        return view('pages.home', [
            'projects'=> $this->projectRepository->allProjects()
        ]);
    }
}
