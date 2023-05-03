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
                'id' => 50,
                'kategori_id' => 17,
                'urutan' => 1,
                'nama' => 'Banner or Billboard Design',
                'slug' => 'banner-or-billboard-design',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
            1 => 
            array (
                'id' => 51,
                'kategori_id' => 17,
                'urutan' => 2,
                'nama' => 'Poster Design',
                'slug' => 'poster-design',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
            2 => 
            array (
                'id' => 94,
                'kategori_id' => 16,
                'urutan' => 1,
                'nama' => 'Bug Fixes',
                'slug' => 'bug-fixes',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
            3 => 
            array (
                'id' => 95,
                'kategori_id' => 16,
                'urutan' => 2,
                'nama' => 'Other Website & Development Work',
                'slug' => 'other-website-development-work',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
            4 => 
            array (
                'id' => 106,
                'kategori_id' => 16,
                'urutan' => 4,
                'nama' => 'Website Maintenance',
                'slug' => 'website-maintenance',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-04 01:51:19',
            ),
            5 => 
            array (
                'id' => 107,
                'kategori_id' => 16,
                'urutan' => 3,
                'nama' => 'Website Development',
                'slug' => 'website-development',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-04 01:51:08',
            ),
            6 => 
            array (
                'id' => 109,
                'kategori_id' => 18,
                'urutan' => 1,
                'nama' => 'Catalog Photography',
                'slug' => 'catalog-photography',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
            7 => 
            array (
                'id' => 110,
                'kategori_id' => 18,
                'urutan' => 2,
                'nama' => '2D & Animasi',
                'slug' => '2d-animasi',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
            8 => 
            array (
                'id' => 137,
                'kategori_id' => 19,
                'urutan' => 1,
                'nama' => 'Articles & Blog Posts',
                'slug' => 'articles-blog-posts',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
            9 => 
            array (
                'id' => 138,
                'kategori_id' => 19,
                'urutan' => 2,
            'nama' => 'Product Description Writing (Bahasa)',
                'slug' => 'product-description-writing-bahasa',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
            10 => 
            array (
                'id' => 162,
                'kategori_id' => 20,
                'urutan' => 1,
                'nama' => 'Mobile App Marketing',
                'slug' => 'mobile-app-marketing',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
            11 => 
            array (
                'id' => 163,
                'kategori_id' => 20,
                'urutan' => 2,
                'nama' => 'Youtube Marketing',
                'slug' => 'youtube-marketing',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
        ));
        
        
    }
}