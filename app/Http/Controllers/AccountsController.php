<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(
            ['auth', 'project']
        );
    }

    /**
     * Show the current project accounts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $project = $request->session()->get('project');
        $accounts = $project->accounts()->get();
        return view('accounts.index', compact('accounts'));
    }
}
