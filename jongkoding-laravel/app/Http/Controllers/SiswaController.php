<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

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

    public function sm(){
        // mengambil model dengan pk
        $siswa = Siswa::find('2021010003');

        // ambil model pertama yg cocok dengan batasan query
        $siswa1 = Siswa::where('nama', 'Tegar')->first();
        // alternatif
        $siswa2 = Siswa::firstWhere('nama', 'Dian');
    }

    public function siswajrs(){
        $siswajrs = Siswa::where('id_jurusan', '=', 1)->firstOr(function(){ // mengambil record pertama dalam jurusan urutan default nis
            // jika data tidak ditemukan akan menjalankan disini
            echo "tidak ada yg ditemukan </br>";
        });
        if ($siswajrs) {
            echo $siswajrs;
        }
    }

    public function siswafof($value='')
    {
        // findOrFail firstOrFail kalo gagal nampilin 404
        $siswa = Siswa::findOrFail('kok bisa');
        $siswa2 = Siswa::where('id_jurusan', '>', 2)->firstOrFail();

        echo $siswa;
        echo $siswa2;
    }

    public function store(Request $request)
    {
        // $siswa = new Siswa;
        // $siswa->nama = $request->nama; // karna di tabelku ada yg not null jadi error
        // $siswa->save();

        $siswa = new Siswa([
            'nis' => '2021010012',
            'nama' => 'Putrahh',
            'jk' => 'P',
            'alamat' => 'Jong',
            'tmp_lahir' => 'Koding',
            'tgl_lahir' => '2000-02-21',
            'telepon' => '081928212',
            'id_jurusan' => '2'
        ]); // ntahlah gimana 

        // cari dulu nisnya kalo kosong baru create bikin record, kalo ada return value
        $siswa2 = Siswa::firstOrCreate(
            ['nis' => '2021010009'],
            ['nama' => 'Putrahh1',
            'jk' => 'L',
            'alamat' => 'Koding',
            'tmp_lahir' => 'Jong',
            'tgl_lahir' => '2000-03-22',
            'telepon' => '08221212',
            'id_jurusan' => '1']
        );

        echo $siswa2;
    }
}

