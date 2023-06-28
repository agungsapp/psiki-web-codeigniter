<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        //
        $data = [
            'menu' => 'index',
            'footer' => 'fixed'
        ];
        return view('pages/index', $data);
    }

    public function psikotes()
    {
        $data = [
            'menu' => 'psikotes',
            'footer' => 'fixed'
        ];
        return view('pages/psikotes', $data);
    }

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
