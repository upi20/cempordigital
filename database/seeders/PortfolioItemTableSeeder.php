<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PortfolioItemTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolio_item')->delete();
        
        \DB::table('portfolio_item')->insert(array (
            0 => 
            array (
                'id' => '1',
                'portfolio_id' => '1',
                'urutan' => '1',
                'nama' => 'Project Type',
                'keterangan' => 'Software & App Development',
                'created_at' => '2023-04-13 01:10:53',
                'updated_at' => '2023-04-13 01:10:53',
            ),
            1 => 
            array (
                'id' => '2',
                'portfolio_id' => '1',
                'urutan' => '2',
                'nama' => 'Client',
                'keterangan' => 'Sekolah di Malaysia',
                'created_at' => '2023-04-13 01:13:53',
                'updated_at' => '2023-04-13 01:13:53',
            ),
            2 => 
            array (
                'id' => '3',
                'portfolio_id' => '1',
                'urutan' => '3',
                'nama' => 'Duration',
                'keterangan' => '3 Month',
                'created_at' => '2023-04-13 01:14:06',
                'updated_at' => '2023-04-13 01:14:06',
            ),
            3 => 
            array (
                'id' => '4',
                'portfolio_id' => '1',
                'urutan' => '4',
                'nama' => 'Task',
                'keterangan' => 'Backend, Frontend',
                'created_at' => '2023-04-13 01:14:23',
                'updated_at' => '2023-04-13 01:14:23',
            ),
            4 => 
            array (
                'id' => '5',
                'portfolio_id' => '1',
                'urutan' => '5',
                'nama' => 'Budget',
                'keterangan' => 'Rp 20.000.000',
                'created_at' => '2023-04-13 01:14:32',
                'updated_at' => '2023-04-13 01:14:32',
            ),
            5 => 
            array (
                'id' => '6',
                'portfolio_id' => '2',
                'urutan' => '1',
                'nama' => 'A',
                'keterangan' => 'B',
                'created_at' => '2023-04-13 01:41:44',
                'updated_at' => '2023-04-13 01:41:44',
            ),
            6 => 
            array (
                'id' => '7',
                'portfolio_id' => '2',
                'urutan' => '2',
                'nama' => 'C',
                'keterangan' => 'D',
                'created_at' => '2023-04-13 01:41:48',
                'updated_at' => '2023-04-13 01:41:48',
            ),
            7 => 
            array (
                'id' => '8',
                'portfolio_id' => '2',
                'urutan' => '3',
                'nama' => 'E',
                'keterangan' => 'E',
                'created_at' => '2023-04-13 01:41:52',
                'updated_at' => '2023-04-13 01:41:52',
            ),
            8 => 
            array (
                'id' => '10',
                'portfolio_id' => '3',
                'urutan' => '1',
                'nama' => 'Link',
                'keterangan' => '<a href="https://warungkopigunungroastery.com/">Lihat</a>',
                'created_at' => '2023-04-13 01:44:29',
                'updated_at' => '2023-04-13 01:44:29',
            ),
            9 => 
            array (
                'id' => '11',
                'portfolio_id' => '4',
                'urutan' => '1',
                'nama' => 'A',
                'keterangan' => 'A',
                'created_at' => '2023-04-13 01:45:20',
                'updated_at' => '2023-04-13 01:45:20',
            ),
            10 => 
            array (
                'id' => '12',
                'portfolio_id' => '4',
                'urutan' => '2',
                'nama' => 'B',
                'keterangan' => 'B',
                'created_at' => '2023-04-13 01:45:25',
                'updated_at' => '2023-04-13 01:45:25',
            ),
        ));
        
        
    }
}