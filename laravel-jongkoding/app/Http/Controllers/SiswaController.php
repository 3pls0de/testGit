<?php

namespace App\Http\Controllers;
use App\Siswa;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        // Mengambil semua nama siswa
        foreach (Siswa::all() as $siswa) {
            echo $siswa->nama . "</br>";
        }
    }

    public function lakek()
    {
        // Mengambil siswa == lakek
        $siswa_laki = Siswa::where('jk', 'L')
            ->orderBy('nis')
            ->get();

        foreach ($siswa_laki as $siswa) {
            echo $siswa->nis . " - " . $siswa->nama . "</br>";
        }
    }
}
