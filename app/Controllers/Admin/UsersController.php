<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JawabanModel;
use App\Models\UsersFunctionModel;
use Myth\Auth\Models\UserModel;

class UsersController extends BaseController
{

    protected $userModel, $userFunModel, $jawabanModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->userFunModel = new UsersFunctionModel();
        $this->jawabanModel = new JawabanModel();
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

    public function admin()
    {
        $data = [
            'title' => 'Data Admin',
            'breadcrumbs' => [
                'Data Admin' => '/admin/admin',
            ],
            'users' => $this->userFunModel->getUsersByGroupId(1),
        ];

        return view('admin/users/admin/index', $data);
    }

    public function editDataAdmin()
    {
        $this->userFunModel->save([
            'id' => $this->request->getVar('ids'),
            'first_name' => $this->request->getVar('namadepan'),
            'last_name' => $this->request->getVar('namabelakang'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'umur' => $this->request->getVar('umur'),
            'phone' => $this->request->getVar('phone'),
        ]);

        session()->setFlashdata('pesan', 'Data admin berhasil di update !');

        return redirect()->to('/admin/admin');

        // return "joss";
    }
    public function editDataUsers()
    {
        $this->userFunModel->save([
            'id' => $this->request->getVar('ids'),
            'first_name' => $this->request->getVar('namadepan'),
            'last_name' => $this->request->getVar('namabelakang'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'umur' => $this->request->getVar('umur'),
            'phone' => $this->request->getVar('phone'),
        ]);

        session()->setFlashdata('pesan', 'Data user berhasil di update !');

        return redirect()->to('/admin/user');

        // return "joss";
    }

    public function deleteUsers($id)
    {

        $delete = $this->userFunModel->where('id', $id)->delete();

        if ($delete) {

            session()->setFlashdata('pesan', 'Data user berhasil di hapus !');

            return redirect()->to('/admin/user');
        }
    }

    public function reset($id)
    {
        $resetData = $this->jawabanModel->reset($id);

        if ($resetData) {

            session()->setFlashdata('pesan', 'Data jawaban user berhasil di reset !');

            return redirect()->to('/admin/user');
        } else {
            return "delete gagal ";
        }
    }
}
