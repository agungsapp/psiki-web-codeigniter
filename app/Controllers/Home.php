<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function userValidate()
    {


        // pengecekan login
        if (logged_in()) {

            // pemisahan role
            if (in_groups('admin') == 1) {
                return redirect()->to('/admin/dashboard');
            } else if (in_groups('user')) {
                return redirect()->to('pages/index');
            }
        } else {
            // jika guest
            return redirect()->to('/pages/index');
        }
    }
}
