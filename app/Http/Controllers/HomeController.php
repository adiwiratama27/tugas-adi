<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Halaman home";
        $content['mahasiswa'] = array(
            'nama' => 'I Ketut Adi Wiratama',
            'nim' => '1915101057'
        );

        return view('admin/beranda', compact('title', 'content'));
    }

    public function dashboard()
    {
        $title = "Halaman dasboard";

        return view('admin/dashboard', compact('title'));
    }
} 
