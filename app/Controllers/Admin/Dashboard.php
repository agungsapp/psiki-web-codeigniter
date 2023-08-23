<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JawabanModel;
use App\Models\UsersFunctionModel;

class Dashboard extends BaseController
{

    protected $userModel, $jawabanModel;

    public function __construct()
    {
        $this->userModel = new UsersFunctionModel();
        $this->jawabanModel = new JawabanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'breadcrumbs' => [
                'Dashboard' => '/admin/index',
            ],
            'jumlah_users' => $this->userModel->countUser(),
            'users_menjawab' => $this->jawabanModel->getUsersAnswer()
        ];

        // dd($data['users_menjawab']);


        return view('admin/dashboard/index', $data);
    }
}
