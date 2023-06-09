<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpkSawTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('spk_saw')->delete();
        
        \DB::table('spk_saw')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Kelulusan pelatihan ABC',
                'slug' => 'kelulusan-pelatihan-abc',
                'keterangan' => '<p>Pendukung keputusan untuk pelatihan abcd<p></p><p></p><p></p><p></p></p>
',
                'status' => 0,
                'created_at' => '2023-05-13 01:47:05',
                'updated_at' => '2023-05-13 15:21:04',
            ),
        ));
        
        
    }
}