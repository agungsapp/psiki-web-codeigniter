<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsersFunctionModel;
use Myth\Auth\Models\UserModel;

class UsersController extends BaseController
{

    protected $userModel, $userFunModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->userFunModel = new UsersFunctionModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data User',
            'breadcrumbs' => [
                'Data User' => '/admin/user',
            ],
            'users' => $this->userFunModel->getUsersByGroupId(2),
        ];

        return view('admin/users/user/index', $data);
    }
}
