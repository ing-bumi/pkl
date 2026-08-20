<?php

namespace App\Controllers;

class Jurusan extends BaseController
{
    public function index(): string
    {
        return view('jurusan');
    }
}