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
                'kategori_id' => 6,
                'nama' => 'Web 2',
                'slug' => 'web-2',
                'foto' => '20230413014157.jpg',
                'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.',
                'is_insert' => 1,
                'created_by' => 1,
                'created_at' => '2023-04-13 01:41:57',
                'updated_at' => '2023-04-13 01:41:57',
            ),
            2 => 
            array (
                'id' => 3,
                'kategori_id' => 6,
                'nama' => 'Warung Kopi Gunung',
                'slug' => 'warung-kopi-gunung',
                'foto' => '20230413014353.png',
                'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.',
                'is_insert' => 1,
                'created_by' => 1,
                'created_at' => '2023-04-13 01:43:53',
                'updated_at' => '2023-04-13 01:43:53',
            ),
            3 => 
            array (
                'id' => 4,
                'kategori_id' => 6,
                'nama' => 'WZx',
                'slug' => 'wzx',
                'foto' => '20230413014514.jpg',
                'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.',
                'is_insert' => 1,
                'created_by' => 1,
                'created_at' => '2023-04-13 01:45:14',
                'updated_at' => '2023-04-13 01:45:14',
            ),
            4 => 
            array (
                'id' => 5,
                'kategori_id' => 7,
                'nama' => 'Design A',
                'slug' => 'design-a',
                'foto' => '20230413014906.jpg',
                'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.',
                'is_insert' => 1,
                'created_by' => 1,
                'created_at' => '2023-04-13 01:49:06',
                'updated_at' => '2023-04-13 01:49:06',
            ),
            5 => 
            array (
                'id' => 6,
                'kategori_id' => 7,
                'nama' => 'Design B',
                'slug' => 'design-b',
                'foto' => '20230413014929.jpg',
                'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.',
                'is_insert' => 1,
                'created_by' => 1,
                'created_at' => '2023-04-13 01:49:29',
                'updated_at' => '2023-04-13 01:49:29',
            ),
            6 => 
            array (
                'id' => 7,
                'kategori_id' => 7,
                'nama' => 'Design C',
                'slug' => 'design-c',
                'foto' => '20230413015003.jpg',
                'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.',
                'is_insert' => 1,
                'created_by' => 1,
                'created_at' => '2023-04-13 01:50:03',
                'updated_at' => '2023-04-13 01:50:03',
            ),
            7 => 
            array (
                'id' => 8,
                'kategori_id' => 7,
                'nama' => 'Design D',
                'slug' => 'design-d',
                'foto' => '20230413015052.jpg',
                'keterangan' => NULL,
                'is_insert' => 1,
                'created_by' => 1,
                'created_at' => '2023-04-13 01:50:52',
                'updated_at' => '2023-04-13 01:50:52',
            ),
            8 => 
            array (
                'id' => 9,
                'kategori_id' => 9,
                'nama' => 'Branding Design',
                'slug' => 'branding-design',
                'foto' => '20230413015116.jpg',
                'keterangan' => NULL,
                'is_insert' => 1,
                'created_by' => 1,
                'created_at' => '2023-04-13 01:51:16',
                'updated_at' => '2023-04-13 01:51:16',
            ),
            9 => 
            array (
                'id' => 10,
                'kategori_id' => 9,
                'nama' => 'Branding Design B',
                'slug' => 'branding-design-b',
                'foto' => '20230413015139.jpg',
                'keterangan' => NULL,
                'is_insert' => 1,
                'created_by' => 1,
                'created_at' => '2023-04-13 01:51:39',
                'updated_at' => '2023-04-13 01:51:39',
            ),
            10 => 
            array (
                'id' => 11,
                'kategori_id' => 8,
                'nama' => 'App Design',
                'slug' => 'app-design',
                'foto' => '20230413015201.jpg',
                'keterangan' => NULL,
                'is_insert' => 1,
                'created_by' => 1,
                'created_at' => '2023-04-13 01:52:01',
                'updated_at' => '2023-04-13 01:52:01',
            ),
        ));
        
        
    }
}