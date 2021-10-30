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


        echo "Siswa yg lakek </br>";
        foreach ($siswa_laki as $siswa) {
            echo $siswa->nis . " - " . $siswa->nama . "</br>";
        }
    }

    public function siswapertama(){

        // Mengambil model dengan pk
        $siswa = Siswa::find('2001');
        echo $siswa->nis;

        // Ambil model pertama yang cocok dengan batasan query / where
        $siswa1 = Siswa::where('nis', '2008')->first();
        // alternatif untuk mengambil model pertama yang cocok dengan batasan query
        // $siswass = Siswa::firstWhere('nis', '2007'); // errorrrrr  beda versi laravel

        $siswajrs = Siswa::where('id_jurusan', '=', 3)->firstOr(function(){
            // jika tidak ada data yang ditemukan maka akan menjalankan perintah ini
            echo "Tidak ada hasil yang ditemukan";
        });
        echo $siswajrs;

        // findOrFail dengan pk
        $siswapt = Siswa::findOrFail('2008');
        echo "</br>" . $siswapt;

        // findOrFail dengan pembatasan query
        $siswagbt = Siswa::where('id_jurusan', '>', 1)->firstOrFail(); //angka adalah dri 0 dan 1... 0 untuk 1, dan 1 untuk 2, layaknya index 
        echo "</br>" . $siswagbt;

    }

    public function store(Request $request){
        $siswa = new Siswa()->create[
            'nis'=> 20212022,
            'nama' => 'kok bisa',
            'jk' => 'L',
            'alamat' => 'Sukorejo',
            'tmp_lahir' => 'Sukorejo',
            'tgl_lahir' => '2004-02-03',
            'telepon' => '028120182',
            'id_jurusan' => 1,
            'foto' => ''
        ];
    }
}
