<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsersFunctionModel;

class Dashboard extends BaseController
{

    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UsersFunctionModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'breadcrumbs' => [
                'Dashboard' => '/admin/index',
            ],
        ];

        return view('admin/dashboard/index', $data);
    }
}
