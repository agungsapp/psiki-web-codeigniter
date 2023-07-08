<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BankSoalModel;

class SoalController extends BaseController
{

    protected $bankModel;

    public function __construct()
    {
        $this->bankModel = new BankSoalModel();
    }

    public function index()
    {
        //
        $data = [
            'title' => 'Bank soal',
            'breadcrumbs' => [
                'Data User' => '/admin/banl soal',
            ],
            'data' => $this->bankModel->findAll(),
        ];

        return view('admin/bank/index', $data);
    }
}
