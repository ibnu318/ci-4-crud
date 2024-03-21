<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Home extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $projectModel = new ProjectModel();
        return view('welcome_message', ['projects' => $projectModel->orderBy('created_at', 'desc')->paginate(3),
                                        'pager' => $projectModel->pager
                                        ]);
    }

    public function show($id = null)
    {
        $projectModel = new ProjectModel();
        // dd($projectModel);
        return view('detail', ['project' => $projectModel->find($id)]);
    }
}