<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Jenis extends BaseController
{
    public function index()
    {
        //
    }

    public function gangguanKecemasan()
    {
        $data = [
            'menu' => 'jenis',
            'footer' => 'relative'
        ];
        return view('pages/jenis/gangguan_kecemasan',  $data);
    }
    public function gangguanMood()
    {
        return view('pages/jenis/gangguan_mood');
    }
    public function skizofrenia()
    {
        return view('pages/jenis/skizofrenia');
    }
    public function gangguanMakan()
    {
        return view('pages/jenis/gangguan_makan');
    }
    public function ocd()
    {
        return view('pages/jenis/ocd');
    }
    public function gangguanKepribadian()
    {
        return view('pages/jenis/gangguan_kepribadian');
    }
    public function adhd()
    {
        return view('pages/jenis/adhd');
    }
    public function depresi()
    {
        return view('pages/jenis/depresi');
    }
    public function ts()
    {
        return view('pages/jenis/ts');
    }
}
