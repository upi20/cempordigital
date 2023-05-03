<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PortfolioSubKategoriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolio_sub_kategori')->delete();
        
        \DB::table('portfolio_sub_kategori')->insert(array (
            0 => 
            array (
                'id' => 2,
                'kategori_id' => 11,
                'urutan' => 1,
                'nama' => 'sub logo',
                'slug' => 'sub-logo',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 09:44:05',
                'updated_at' => '2023-05-03 09:44:05',
            ),
            1 => 
            array (
                'id' => 4,
                'kategori_id' => 7,
                'urutan' => 1,
                'nama' => 'Sub ilustrator',
                'slug' => 'sub-ilustrator',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 09:48:48',
                'updated_at' => '2023-05-03 09:48:48',
            ),
            2 => 
            array (
                'id' => 5,
                'kategori_id' => 7,
                'urutan' => 2,
                'nama' => 'ss',
                'slug' => 'ss',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 09:48:53',
                'updated_at' => '2023-05-03 09:48:53',
            ),
            3 => 
            array (
                'id' => 6,
                'kategori_id' => 11,
                'urutan' => 2,
                'nama' => 'logo2',
                'slug' => 'logo2',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 09:49:59',
                'updated_at' => '2023-05-03 09:49:59',
            ),
        ));
        
        
    }
}