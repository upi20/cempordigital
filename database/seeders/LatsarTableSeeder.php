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
                'nama' => 'Barbershop',
                'slug' => 'barbershop',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p><img style="width: 744px;" data-bs-filename="20230529142706.png" src="/assets/latsar/1686228494930.png"><br></p>
',
                'created_at' => '2023-06-08 19:48:14',
                'updated_at' => '2023-06-08 19:48:14',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Body Care',
                'slug' => 'body-care',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-08 19:51:30',
                'updated_at' => '2023-06-08 19:51:30',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Fotografi',
                'slug' => 'fotografi',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-08 19:52:59',
                'updated_at' => '2023-06-08 19:52:59',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'Barista',
                'slug' => 'barista',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-08 19:53:10',
                'updated_at' => '2023-06-08 19:53:10',
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'Pastry & Bakery',
                'slug' => 'pastry-bakery',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-08 19:53:18',
                'updated_at' => '2023-06-08 19:53:18',
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'Videografi & Editing',
                'slug' => 'videografi-editing',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-08 19:53:27',
                'updated_at' => '2023-06-08 19:53:27',
            ),
            6 => 
            array (
                'id' => 7,
                'nama' => 'Konten Kreator',
                'slug' => 'konten-kreator',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-08 19:53:38',
                'updated_at' => '2023-06-08 19:53:38',
            ),
            7 => 
            array (
                'id' => 8,
                'nama' => 'Pelatihan Exportir',
                'slug' => 'pelatihan-exportir',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-08 19:53:53',
                'updated_at' => '2023-06-08 19:53:53',
            ),
            8 => 
            array (
                'id' => 9,
                'nama' => 'Desain Produk & Kemasan Makanan',
                'slug' => 'desain-produk-kemasan-makanan',
                'angkatan_sekarang' => '2023',
                'dibuka' => 1,
                'deskripsi' => '<p></p>
',
                'created_at' => '2023-06-08 19:54:01',
                'updated_at' => '2023-06-08 19:54:01',
            ),
        ));
        
        
    }
}