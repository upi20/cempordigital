<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolio')->delete();
        
        \DB::table('portfolio')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kategori_id' => 6,
                'nama' => 'RAB Community',
                'slug' => 'rab-community',
                'foto' => '20230413012220.png',
                'keterangan' => 'Web aplikasi perusahaan, organisasi ataupun komunitas yang mempermudah dalam mengelola RAB dari proses pembuatan, pengajuan, diterima, proses belanja dan sampai kepada laporan yang mudah dibaca.',
                'is_insert' => 1,
                'created_by' => 1,
                'created_at' => '2023-04-13 01:15:09',
                'updated_at' => '2023-04-13 01:22:20',
            ),
            1 => 
            array (
                'id' => 2,
                'kategori_id' => NULL,
                'nama' => NULL,
                'slug' => NULL,
                'foto' => NULL,
                'keterangan' => NULL,
                'is_insert' => 0,
                'created_by' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}