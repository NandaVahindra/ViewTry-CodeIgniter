<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
    public function pendaftaran(): string
    {
        return view('pendaftaran');
    }
}
