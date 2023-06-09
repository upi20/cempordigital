<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpkSawKriteriaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('spk_saw_kriteria')->delete();
        
        \DB::table('spk_saw_kriteria')->insert(array (
            0 => 
            array (
                'id' => 1,
                'spk_id' => 1,
            'nama' => 'Seleksi Tahap Awal  (Administrasi)',
                'kode' => 'B1',
                'bobot' => 20.0,
                'created_at' => '2023-05-13 02:55:05',
                'updated_at' => '2023-05-13 15:22:18',
            ),
            1 => 
            array (
                'id' => 2,
                'spk_id' => 1,
            'nama' => 'Absensi (Kehadiarn)',
                'kode' => 'B2',
                'bobot' => 40.0,
                'created_at' => '2023-05-13 02:56:27',
                'updated_at' => '2023-05-13 15:21:59',
            ),
            2 => 
            array (
                'id' => 3,
                'spk_id' => 1,
                'nama' => 'Tugas',
                'kode' => 'B3',
                'bobot' => 20.0,
                'created_at' => '2023-05-13 02:57:14',
                'updated_at' => '2023-05-13 15:22:23',
            ),
        ));
        
        
    }
}