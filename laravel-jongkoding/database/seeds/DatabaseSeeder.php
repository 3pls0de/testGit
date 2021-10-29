<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call([
            SiswaSeeder::class
        ]);

        // Query Builder
        DB::table('siswa')
            ->insert([
                [
                    "nis" => 2021010001,
                    "nama" => "Sugeng",
                    "jk" => "L",
                    "alamat" => "Jalan Depan",
                    "tmp_lahir" => "Bandung",
                    "tgl_lahir" => date_create(strtotime("2000-02-28")),
                    "telepon" => "083832581083",
                    "id_jurusan" => 1,
                    "nilai" => 80
                ]
            ]);

        // Eloquent
        Siswa::insert([
            [
                "nis" => 2021010001,
                "nama" => "Sugeng",
                "jk" => "L",
                "alamat" => "Jalan Depan",
                "tmp_lahir" => "Bandung",
                "tgl_lahir" => date_create(strtotime("2000-02-28")),
                "telepon" => "083832581083",
                "id_jurusan" => 1,
                "nilai" => 80
            ]
        ]);
    }
}
