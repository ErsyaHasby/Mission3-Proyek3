<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title'   => 'Home',
            'content' => view('welcome')
        ];

        return view('template', $data);
    }
}
