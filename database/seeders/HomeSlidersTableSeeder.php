<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeSlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('home_sliders')->delete();
        
        \DB::table('home_sliders')->insert(array (
            0 => 
            array (
                'id' => '3',
                'nama' => '1',
                'foto' => '20230124152804.jpeg',
                'tampilkan' => 'Ya',
                'created_at' => '2023-01-17 22:39:36',
                'updated_at' => '2023-01-24 15:28:04',
            ),
            1 => 
            array (
                'id' => '4',
                'nama' => '2',
                'foto' => '20230117224024.jpeg',
                'tampilkan' => 'Ya',
                'created_at' => '2023-01-17 22:40:24',
                'updated_at' => '2023-01-17 22:47:05',
            ),
            2 => 
            array (
                'id' => '5',
                'nama' => '3',
                'foto' => '20230117224031.jpeg',
                'tampilkan' => 'Ya',
                'created_at' => '2023-01-17 22:40:31',
                'updated_at' => '2023-01-17 22:47:09',
            ),
            3 => 
            array (
                'id' => '6',
                'nama' => '4',
                'foto' => '20230124152929.jpeg',
                'tampilkan' => 'Ya',
                'created_at' => '2023-01-17 22:40:37',
                'updated_at' => '2023-01-24 15:29:29',
            ),
            4 => 
            array (
                'id' => '7',
                'nama' => '5',
                'foto' => '20230117224046.jpeg',
                'tampilkan' => 'Ya',
                'created_at' => '2023-01-17 22:40:46',
                'updated_at' => '2023-01-17 22:47:18',
            ),
        ));
        
        
    }
}