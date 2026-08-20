<?php

namespace App\Controllers;

class Fasilitas extends BaseController
{
    public function index(): string
    {
        return view('fasilitas');
    }
}