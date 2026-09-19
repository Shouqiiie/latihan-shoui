<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa; // Import Model-nya

class MahasiswaController extends Controller
{
    public function index()
    {
        // Ambil data dari model
        $data = Mahasiswa::getProfil();
        
        // Lempar data ke file view bernama 'mahasiswa.blade.php'
        return view('mahasiswa', $data);
    }
}