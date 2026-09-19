<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // Simulasi data dari database
    public static function getProfil()
    {
        return [
            'nama' => 'Muhammad Shouqi',
            'nim' => '251011700713',
            'kelas' => '03SIFE002',
            'semester' => 3,
            'mata_kuliah' => 'Rekayasa Web'
        ];
    }
}