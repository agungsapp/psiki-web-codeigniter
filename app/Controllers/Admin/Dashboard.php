<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'breadcrumbs' => [
                'Dashboard' => '/admin/index',
            ]
        ];

        return view('admin/dashboard/index', $data);
    }
}
