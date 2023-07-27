<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BankSoalModel;

class Pages extends BaseController
{
    protected $bankSoal;

    public function __construct()
    {
        $this->bankSoal = new BankSoalModel();
    }

    public function index()
    {
        //
        $data = [
            'menu' => 'index',
            'footer' => 'fixed'
        ];
        return view('pages/index', $data);
    }

    // public function psikotes()
    // {
    //     $data = [
    //         'menu' => 'psikotes',
    //         'footer' => 'relative',
    //         'soal' => $this->bankSoal->findAll()
    //     ];

    //     // dd(password_hash('123', PASSWORD_DEFAULT));

    //     // if (in_groups('admin') == 1) {
    //     //     return redirect()->to('/');
    //     // }

    //     return view('pages/psikotes', $data);
    // }

    public function jenis()
    {
        $data = [
            'menu' => 'jenis',
            'footer' => 'relative'
        ];
        return view('pages/jenis', $data);
    }

    public function konsultasi()
    {
        $data = [
            'menu' => 'konsultasi',
            'footer' => 'fixed'
        ];
        return view('pages/konsultasi', $data);
    }
}
