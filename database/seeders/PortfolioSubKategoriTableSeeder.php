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
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
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
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
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
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => '20230504024552.png',
                'tampilkan_client' => 1,
                'tampilkan_testimoni' => 1,
                'slug' => 'bug-fixes',
                'keterangan' => '<p><br></p>
',
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-04 02:47:59',
            ),
            3 => 
            array (
                'id' => 95,
                'kategori_id' => 16,
                'urutan' => 2,
                'nama' => 'Other Website & Development Work',
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
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
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
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
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => '20230504024934.png',
                'tampilkan_client' => 1,
                'tampilkan_testimoni' => 1,
                'slug' => 'website-development',
                'keterangan' => '<div class="solution-text">
<h1 class="h1" id="page_title" data-testid="title_landing_page">

Professional Web Programming Services. Money-back Guarantee.
</h1>
<h2 class="h2" data-testid="subtitle_landing_page">

Experienced web programming service. Fast &amp; efficient work. Has helped 30,000+ SME &amp; corporate clients. Guaranteed.
</h2>


<div class="solution-list">
<ul>

<li>
No Risk, Money Back Guarantee
</li>

<li>
Budget that you can set yourself
</li>

<li>
6+ years experienced team
</li>

<li>
Up-to-date and secure technology
</li>

<li>
Fast and Efficient in processing
</li>

</ul>
</div>


<div class="btn-2-wrapper" style="margin-top: 32px">
<a class="btn btn-primary p" data-testid="button_check_price1" style="--p: 20px 30px; min-width: 200px;" href="/en/packages?category=website-and-development">
<h6 class="h6 m-0">
Check Package Price
</h6>
</a>
</div>

<!-- 


<div class="btn-2-wrapper" style="margin-top: 32px">
<a class="btn btn-primary p" style="--p: 20px 30px; min-width: 200px;"
href="/en/browse-freelancer/ad62c648-d223-446c-9a00-28c99613d0b5/5f9e2589-f52b-4296-914f-7f0156445976">
<h6 class="h6 m-0">
Browse Freelancer
</h6>
</a>
</div>
-->
</div>
',
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-04 02:49:34',
            ),
            6 => 
            array (
                'id' => 109,
                'kategori_id' => 18,
                'urutan' => 1,
                'nama' => 'Catalog Photography',
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
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
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
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
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
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
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
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
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
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
                'judul' => NULL,
                'sub_judul' => NULL,
                'foto' => NULL,
                'tampilkan_client' => 0,
                'tampilkan_testimoni' => 0,
                'slug' => 'youtube-marketing',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:54:54',
                'updated_at' => '2023-05-03 21:54:54',
            ),
        ));
        
        
    }
}