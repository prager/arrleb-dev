<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        echo view('template/header');
        echo view('public/main_view');
        echo view('template/footer');
    }
}
