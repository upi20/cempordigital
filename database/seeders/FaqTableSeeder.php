<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faq')->delete();
        
        \DB::table('faq')->insert(array (
            0 => 
            array (
                'id' => 6,
                'nama' => 'Apa itu Rumah Tahfidz Quran?',
                'link' => NULL,
                'jawaban' => 'Rumah Tahfidz Quran adalah lembaga pendidikan yang memfokuskan pada program penghafalan dan pemahaman Al-Quran.',
                'type' => 1,
                'status' => 1,
                'created_at' => '2023-03-26 11:42:01',
                'updated_at' => '2023-03-26 11:42:01',
            ),
            1 => 
            array (
                'id' => 7,
                'nama' => 'Siapa yang cocok untuk bergabung di Rumah Tahfidz Quran?',
                'link' => NULL,
                'jawaban' => 'Rumah Tahfidz Quran terbuka bagi siapa saja yang ingin menghafal dan memahami Al-Quran, baik anak-anak maupun dewasa.',
                'type' => 1,
                'status' => 1,
                'created_at' => '2023-03-26 11:42:12',
                'updated_at' => '2023-03-26 11:42:12',
            ),
            2 => 
            array (
                'id' => 8,
                'nama' => 'Apa saja program yang ditawarkan oleh Rumah Tahfidz Quran?',
                'link' => NULL,
                'jawaban' => 'Program yang ditawarkan antara lain penghafalan Al-Quran, tajwid, dan juga pemahaman Al-Quran.',
                'type' => 1,
                'status' => 1,
                'created_at' => '2023-03-26 11:42:23',
                'updated_at' => '2023-03-26 11:42:23',
            ),
            3 => 
            array (
                'id' => 9,
                'nama' => 'Bagaimana cara mendaftar di Rumah Tahfidz Quran?',
                'link' => NULL,
                'jawaban' => 'Cara mendaftar dapat dilakukan dengan menghubungi pihak Rumah Tahfidz Quran melalui telepon atau datang langsung ke lokasi.',
                'type' => 1,
                'status' => 1,
                'created_at' => '2023-03-26 11:42:40',
                'updated_at' => '2023-03-26 11:42:40',
            ),
            4 => 
            array (
                'id' => 10,
                'nama' => 'Apakah ada persyaratan khusus untuk bergabung di Rumah Tahfidz Quran?',
                'link' => NULL,
                'jawaban' => 'Persyaratan bergabung di Rumah Tahfidz Quran bervariasi tergantung program yang dipilih, namun umumnya para calon santri harus memiliki niat dan tekad yang kuat untuk menghafal dan memahami Al-Quran.',
                'type' => 1,
                'status' => 1,
                'created_at' => '2023-03-26 11:42:48',
                'updated_at' => '2023-03-26 11:42:48',
            ),
            5 => 
            array (
                'id' => 11,
                'nama' => 'Berapa lama waktu yang dibutuhkan untuk menghafal Al-Quran di Rumah Tahfidz Quran?',
                'link' => NULL,
                'jawaban' => 'Waktu yang dibutuhkan untuk menghafal Al-Quran bervariasi tergantung kemampuan dan tekad masing-masing santri, namun umumnya membutuhkan waktu minimal 2-3 tahun.',
                'type' => 1,
                'status' => 1,
                'created_at' => '2023-03-26 11:43:00',
                'updated_at' => '2023-03-26 11:43:00',
            ),
            6 => 
            array (
                'id' => 12,
                'nama' => 'Bagaimana sistem pembelajaran di Rumah Tahfidz Quran?',
                'link' => NULL,
                'jawaban' => 'Sistem pembelajaran di Rumah Tahfidz Quran terdiri dari penghafalan secara berkala, tajwid, pemahaman Al-Quran, dan juga pembinaan akhlak dan kepribadian.',
                'type' => 1,
                'status' => 1,
                'created_at' => '2023-03-26 11:43:12',
                'updated_at' => '2023-03-26 11:43:12',
            ),
        ));
        
        
    }
}