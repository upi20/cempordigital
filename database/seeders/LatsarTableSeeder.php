<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LatsarTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('latsar')->delete();
        
        \DB::table('latsar')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kode' => 'BBS003',
                'nama' => 'Barbershop',
                'slug' => 'barbershop',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p><img style="width: 744px;" data-bs-filename="20230529142706.png" src="/assets/latsar/1686228494930.png"><br></p>
',
                'created_at' => '2023-06-08 19:48:14',
                'updated_at' => '2023-06-09 15:10:55',
            ),
            1 => 
            array (
                'id' => 2,
                'kode' => 'BDC003',
                'nama' => 'Body Care',
                'slug' => 'body-care',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-08 19:51:30',
                'updated_at' => '2023-06-09 15:11:01',
            ),
            2 => 
            array (
                'id' => 3,
                'kode' => 'FTG003',
                'nama' => 'Fotografi',
                'slug' => 'fotografi',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-08 19:52:59',
                'updated_at' => '2023-06-09 15:11:24',
            ),
            3 => 
            array (
                'id' => 4,
                'kode' => 'BRT003',
                'nama' => 'Barista',
                'slug' => 'barista',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-08 19:53:10',
                'updated_at' => '2023-06-09 15:11:08',
            ),
            4 => 
            array (
                'id' => 5,
                'kode' => 'PBR003',
                'nama' => 'Pastry & Bakery',
                'slug' => 'pastry-bakery',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-08 19:53:18',
                'updated_at' => '2023-06-09 15:11:35',
            ),
            5 => 
            array (
                'id' => 6,
                'kode' => 'VGE003',
                'nama' => 'Videografi & Editing',
                'slug' => 'videografi-editing',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-08 19:53:27',
                'updated_at' => '2023-06-09 15:11:39',
            ),
            6 => 
            array (
                'id' => 7,
                'kode' => 'KKR003',
                'nama' => 'Konten Kreator',
                'slug' => 'konten-kreator',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-08 19:53:38',
                'updated_at' => '2023-06-09 15:11:29',
            ),
            7 => 
            array (
                'id' => 8,
                'kode' => 'EXT003',
                'nama' => 'Pelatihan Exportir',
                'slug' => 'pelatihan-exportir',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-08 19:53:53',
                'updated_at' => '2023-06-09 15:11:18',
            ),
            8 => 
            array (
                'id' => 9,
                'kode' => 'DPK003',
                'nama' => 'Desain Produk & Kemasan Makanan',
                'slug' => 'desain-produk-kemasan-makanan',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-08 19:54:01',
                'updated_at' => '2023-06-09 15:11:13',
            ),
            9 => 
            array (
                'id' => 10,
                'kode' => 'ANM003',
                'nama' => 'Animasi',
                'slug' => 'animasi',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-09 16:39:15',
                'updated_at' => '2023-06-09 16:39:15',
            ),
            10 => 
            array (
                'id' => 11,
                'kode' => 'WCR',
                'nama' => 'Wood Craft',
                'slug' => 'wood-craft',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-09 16:45:34',
                'updated_at' => '2023-06-09 16:45:34',
            ),
            11 => 
            array (
                'id' => 12,
                'kode' => 'WCR003',
                'nama' => 'Wood Craft',
                'slug' => 'wood-craft-2',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-09 20:06:36',
                'updated_at' => '2023-06-09 20:06:36',
            ),
        ));
        
        
    }
}