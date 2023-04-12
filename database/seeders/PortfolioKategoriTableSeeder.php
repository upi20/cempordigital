<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PortfolioKategoriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolio_kategori')->delete();
        
        \DB::table('portfolio_kategori')->insert(array (
            0 => 
            array (
                'id' => 6,
                'urutan' => 1,
                'nama' => 'Website',
                'slug' => 'website',
                'keterangan' => NULL,
                'created_at' => '2023-04-12 23:55:18',
                'updated_at' => '2023-04-12 23:55:18',
            ),
            1 => 
            array (
                'id' => 7,
                'urutan' => 2,
                'nama' => 'Design',
                'slug' => 'design',
                'keterangan' => NULL,
                'created_at' => '2023-04-12 23:55:26',
                'updated_at' => '2023-04-12 23:55:26',
            ),
            2 => 
            array (
                'id' => 8,
                'urutan' => 3,
                'nama' => 'App Design',
                'slug' => 'app-design',
                'keterangan' => NULL,
                'created_at' => '2023-04-12 23:55:38',
                'updated_at' => '2023-04-12 23:55:38',
            ),
            3 => 
            array (
                'id' => 9,
                'urutan' => 4,
                'nama' => 'Branding Design',
                'slug' => 'branding-design',
                'keterangan' => NULL,
                'created_at' => '2023-04-12 23:55:45',
                'updated_at' => '2023-04-12 23:55:45',
            ),
            4 => 
            array (
                'id' => 10,
                'urutan' => 5,
                'nama' => 'Lainnya',
                'slug' => 'lainnya',
                'keterangan' => NULL,
                'created_at' => '2023-04-13 01:52:09',
                'updated_at' => '2023-04-13 01:52:09',
            ),
        ));
        
        
    }
}