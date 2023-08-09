<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SaranModel;

class SaranController extends BaseController
{

    protected $saranModel;

    public function __construct()
    {
        $this->saranModel = new SaranModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Saran',
            'breadcrumbs' => [
                'Data User' => '/admin/user',
            ],
            'data' => $this->saranModel->getAll()

        ];

        // dd($data['data']);

        return view('admin/saran/index', $data);
    }

    public function store()
    {
        $this->saranModel->save([
            'saran_id' => $this->request->getVar('ids'),
            'gejala_id' => $this->request->getVar('gejala'),
            'saran' => $this->request->getVar('isisaran')
        ]);

        session()->setFlashdata('pesan', 'Data saran berhasil di update !');

        return redirect()->to('/admin/saran');
    }
}
