<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PMenuFrontendsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_menu_frontends')->delete();
        
        \DB::table('p_menu_frontends')->insert(array (
            0 => 
            array (
                'id' => '1',
                'parent_id' => NULL,
                'title' => 'Utama',
                'icon' => NULL,
                'route' => '__base_url__',
                'sequence' => '1',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-20 14:26:10',
                'updated_at' => '2023-03-26 08:01:07',
            ),
            1 => 
            array (
                'id' => '2',
                'parent_id' => NULL,
                'title' => 'Tentang',
                'icon' => NULL,
                'route' => 'about',
                'sequence' => '2',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-20 14:30:39',
                'updated_at' => '2023-03-26 08:01:13',
            ),
            2 => 
            array (
                'id' => '18',
                'parent_id' => NULL,
                'title' => 'Kontak',
                'icon' => NULL,
                'route' => 'kontak',
                'sequence' => '6',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-20 14:47:10',
                'updated_at' => '2023-03-26 08:02:41',
            ),
            3 => 
            array (
                'id' => '20',
                'parent_id' => NULL,
                'title' => 'Artikel',
                'icon' => NULL,
                'route' => 'artikel',
                'sequence' => '4',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-09-02 00:45:45',
                'updated_at' => '2023-03-26 08:02:17',
            ),
            4 => 
            array (
                'id' => '22',
                'parent_id' => NULL,
                'title' => 'Katalog',
                'icon' => NULL,
                'route' => 'katalog',
                'sequence' => '8',
                'active' => '0',
                'type' => '1',
                'created_at' => '2023-01-27 22:18:36',
                'updated_at' => '2023-03-26 08:02:41',
            ),
            5 => 
            array (
                'id' => '27',
                'parent_id' => NULL,
                'title' => 'FAQ',
                'icon' => NULL,
                'route' => 'kontak.faq',
                'sequence' => '9',
                'active' => '0',
                'type' => '1',
                'created_at' => '2023-03-10 21:07:26',
                'updated_at' => '2023-03-26 08:02:41',
            ),
            6 => 
            array (
                'id' => '28',
                'parent_id' => NULL,
                'title' => 'Marketplace',
                'icon' => NULL,
                'route' => 'marketplace',
                'sequence' => '7',
                'active' => '0',
                'type' => '1',
                'created_at' => '2023-03-14 17:39:30',
                'updated_at' => '2023-03-26 08:02:41',
            ),
            7 => 
            array (
                'id' => '29',
                'parent_id' => NULL,
                'title' => 'Galeri',
                'icon' => NULL,
                'route' => 'galeri',
                'sequence' => '3',
                'active' => '1',
                'type' => '1',
                'created_at' => '2023-03-26 08:02:10',
                'updated_at' => '2023-03-26 08:02:17',
            ),
            8 => 
            array (
                'id' => '30',
                'parent_id' => NULL,
                'title' => 'Pendaftaran',
                'icon' => NULL,
                'route' => 'pendaftaran',
                'sequence' => '5',
                'active' => '1',
                'type' => '1',
                'created_at' => '2023-03-26 08:02:37',
                'updated_at' => '2023-03-26 22:37:02',
            ),
        ));
        
        
    }
}