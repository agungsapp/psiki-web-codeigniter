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
        $data = [
            'menu' => 'jenis',
            'footer' => 'relative'
        ];
        return view('pages/jenis/gangguan_mood', $data);
    }

    public function skizofrenia()
    {
        $data = [
            'menu' => 'jenis',
            'footer' => 'relative'
        ];
        return view('pages/jenis/skizofrenia', $data);
    }

    public function gangguanMakan()
    {
        $data = [
            'menu' => 'jenis',
            'footer' => 'relative'
        ];
        return view('pages/jenis/gangguan_makan', $data);
    }

    public function ocd()
    {
        $data = [
            'menu' => 'jenis',
            'footer' => 'relative'
        ];
        return view('pages/jenis/ocd', $data);
    }

    public function gangguanKepribadian()
    {
        $data = [
            'menu' => 'jenis',
            'footer' => 'relative'
        ];
        return view('pages/jenis/gangguan_kepribadian', $data);
    }

    public function adhd()
    {
        $data = [
            'menu' => 'jenis',
            'footer' => 'relative'
        ];
        return view('pages/jenis/adhd', $data);
    }

    public function depresi()
    {
        $data = [
            'menu' => 'jenis',
            'footer' => 'relative'
        ];
        return view('pages/jenis/depresi', $data);
    }

    public function ts()
    {
        $data = [
            'menu' => 'jenis',
            'footer' => 'relative'
        ];
        return view('pages/jenis/ts', $data);
    }
}
