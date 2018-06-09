<?php

namespace App\Http\Controllers;

use App\Project;
use App\Social\Contracts\Repositories\ProjectRepository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    /**
     * The projects repository.
     * 
     * @var \App\Social\Contracts\Repositories\ProjectRepository
     */
    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @param  \App\Social\Contracts\Repositories\ProjectRepository  $repository
     * @return void
     */
    public function __construct(ProjectRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    /**
     * Show the projects.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $projects = $this->repository->authenticatedUser();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the project creation form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Select a project and save it to the session.
     *
     * @return \Illuminate\Http\Response
     */
    public function select(Request $request, Project $project)
    {
        $request->session()->put('project', $project);
        return redirect('/accounts');
    }
}
