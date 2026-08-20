<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
        public function profil()
    {
        return view('profil');
    }
            public function jurusan()
    {
        return view('jurusan');
    }
            public function fasilitas()
    {
        return view('fasilitas');
    }
            public function kontak()
    {
        return view('kontak');
    }
}
