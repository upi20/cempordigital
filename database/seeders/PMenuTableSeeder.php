<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_menu')->delete();
        
        \DB::table('p_menu')->insert(array (
            0 => 
            array (
                'id' => '345',
                'parent_id' => NULL,
                'title' => 'Dashboard',
                'icon' => 'fas fa-tachometer-alt',
                'route' => 'admin.dashboard',
                'sequence' => '1',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-04-18 05:36:59',
            ),
            1 => 
            array (
                'id' => '346',
                'parent_id' => NULL,
                'title' => 'Manajemen Pengguna',
                'icon' => 'fas fa-users',
                'route' => 'admin.user',
                'sequence' => '38',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            2 => 
            array (
                'id' => '351',
                'parent_id' => NULL,
                'title' => 'Artikel',
                'icon' => 'fas fa-file-alt',
                'route' => NULL,
                'sequence' => '13',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            3 => 
            array (
                'id' => '352',
                'parent_id' => '351',
                'title' => 'Daftar Artikel',
                'icon' => NULL,
                'route' => 'admin.artikel.data',
                'sequence' => '14',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            4 => 
            array (
                'id' => '353',
                'parent_id' => '351',
                'title' => 'Artikel Kategori',
                'icon' => NULL,
                'route' => 'admin.artikel.kategori',
                'sequence' => '15',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            5 => 
            array (
                'id' => '354',
                'parent_id' => '351',
                'title' => 'Artikel Tag',
                'icon' => NULL,
                'route' => 'admin.artikel.tag',
                'sequence' => '16',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            6 => 
            array (
                'id' => '360',
                'parent_id' => NULL,
                'title' => 'Galeri',
                'icon' => 'fas fa-images',
                'route' => 'admin.galeri',
                'sequence' => '12',
                'active' => '0',
                'type' => '1',
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-04 21:36:25',
            ),
            7 => 
            array (
                'id' => '361',
                'parent_id' => NULL,
                'title' => 'Menu Management',
                'icon' => 'fas fa-stream',
                'route' => NULL,
                'sequence' => '39',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            8 => 
            array (
                'id' => '363',
                'parent_id' => '364',
                'title' => 'Sosial Media',
                'icon' => 'fas fa-share-alt',
                'route' => 'admin.social_media',
                'sequence' => '20',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            9 => 
            array (
                'id' => '364',
                'parent_id' => NULL,
                'title' => 'Kontak',
                'icon' => 'fas fa-phone',
                'route' => NULL,
                'sequence' => '19',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-04-19 19:08:10',
            ),
            10 => 
            array (
                'id' => '367',
                'parent_id' => NULL,
                'title' => 'User Access',
                'icon' => 'fas fa-user-check',
                'route' => NULL,
                'sequence' => '42',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            11 => 
            array (
                'id' => '368',
                'parent_id' => '367',
                'title' => 'Permission',
                'icon' => NULL,
                'route' => 'admin.user_access.permission',
                'sequence' => '43',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            12 => 
            array (
                'id' => '369',
                'parent_id' => '367',
                'title' => 'Role',
                'icon' => NULL,
                'route' => 'admin.user_access.role',
                'sequence' => '44',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            13 => 
            array (
                'id' => '373',
                'parent_id' => NULL,
                'title' => 'Profile',
                'icon' => 'fas fa-user',
                'route' => 'admin.profile',
                'sequence' => '45',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            14 => 
            array (
                'id' => '386',
                'parent_id' => NULL,
                'title' => 'Logout',
                'icon' => 'fas fa-sign-out-alt',
                'route' => 'logout',
                'sequence' => '46',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-05 23:54:09',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            15 => 
            array (
                'id' => '392',
                'parent_id' => NULL,
                'title' => 'Google Form',
                'icon' => 'fas fa-user-edit',
                'route' => 'admin.pendaftaran.gform',
                'sequence' => '47',
                'active' => '0',
                'type' => '1',
                'created_at' => '2022-08-08 16:14:54',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            16 => 
            array (
                'id' => '393',
                'parent_id' => NULL,
                'title' => 'Peralatan',
                'icon' => 'fas fa-tools',
                'route' => NULL,
                'sequence' => '34',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-08 22:41:26',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            17 => 
            array (
                'id' => '394',
                'parent_id' => '393',
                'title' => 'Notifikasi Depan',
                'icon' => NULL,
                'route' => 'admin.utility.notif_depan_atas',
                'sequence' => '36',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-08 22:41:53',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            18 => 
            array (
                'id' => '397',
                'parent_id' => NULL,
                'title' => 'Pengaturan',
                'icon' => 'fas fa-wrench',
                'route' => NULL,
                'sequence' => '31',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-14 21:10:57',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            19 => 
            array (
                'id' => '398',
                'parent_id' => '397',
                'title' => 'Informasi Admin',
                'icon' => NULL,
                'route' => 'admin.setting.admin',
                'sequence' => '32',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-14 21:11:42',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            20 => 
            array (
                'id' => '399',
                'parent_id' => '397',
                'title' => 'Informasi Depan',
                'icon' => NULL,
                'route' => 'admin.setting.front',
                'sequence' => '33',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-14 21:52:45',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            21 => 
            array (
                'id' => '400',
                'parent_id' => '418',
                'title' => 'Pengaturan Halaman',
                'icon' => NULL,
                'route' => 'admin.setting.home',
                'sequence' => '7',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-16 14:55:41',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            22 => 
            array (
                'id' => '401',
                'parent_id' => '393',
                'title' => 'Hari Besar Nasional',
                'icon' => NULL,
                'route' => 'admin.utility.hari_besar_nasional',
                'sequence' => '37',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-17 21:19:05',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            23 => 
            array (
                'id' => '402',
                'parent_id' => '393',
                'title' => 'Notifikasi Admin',
                'icon' => NULL,
                'route' => 'admin.utility.notif_admin_atas',
                'sequence' => '35',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-18 16:42:00',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            24 => 
            array (
                'id' => '404',
                'parent_id' => '403',
                'title' => 'Anggota',
                'icon' => NULL,
                'route' => 'admin.lapooran.anggota',
                'sequence' => '41',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-18 18:55:08',
                'updated_at' => '2022-08-20 14:04:25',
            ),
            25 => 
            array (
                'id' => '405',
                'parent_id' => '361',
                'title' => 'Admin',
                'icon' => NULL,
                'route' => 'admin.menu.admin',
                'sequence' => '40',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-20 14:12:45',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            26 => 
            array (
                'id' => '406',
                'parent_id' => '361',
                'title' => 'Depan',
                'icon' => NULL,
                'route' => 'admin.menu.frontend',
                'sequence' => '41',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-20 14:16:07',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            27 => 
            array (
                'id' => '407',
                'parent_id' => '364',
                'title' => 'Pesan Diterima',
                'icon' => NULL,
                'route' => 'admin.kontak.message',
                'sequence' => '22',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-21 08:38:20',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            28 => 
            array (
                'id' => '408',
                'parent_id' => '418',
                'title' => 'FAQ',
                'icon' => NULL,
                'route' => 'admin.kontak.faq',
                'sequence' => '5',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-21 08:39:18',
                'updated_at' => '2023-04-19 11:13:04',
            ),
            29 => 
            array (
                'id' => '409',
                'parent_id' => '364',
                'title' => 'Daftar Kontak',
                'icon' => NULL,
                'route' => 'admin.kontak.list',
                'sequence' => '21',
                'active' => '1',
                'type' => '1',
                'created_at' => '2022-08-21 08:40:08',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            30 => 
            array (
                'id' => '410',
                'parent_id' => NULL,
                'title' => 'Media Dan Informasi',
                'icon' => NULL,
                'route' => NULL,
                'sequence' => '2',
                'active' => '1',
                'type' => '0',
                'created_at' => '2022-09-15 21:17:53',
                'updated_at' => '2023-04-18 05:37:00',
            ),
            31 => 
            array (
                'id' => '411',
                'parent_id' => NULL,
                'title' => 'Menu Lainnya',
                'icon' => NULL,
                'route' => NULL,
                'sequence' => '30',
                'active' => '1',
                'type' => '0',
                'created_at' => '2022-09-15 21:18:04',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            32 => 
            array (
                'id' => '412',
                'parent_id' => '418',
                'title' => 'Slider',
                'icon' => NULL,
                'route' => 'admin.setting.home_slider',
                'sequence' => '4',
                'active' => '1',
                'type' => '1',
                'created_at' => '2023-01-18 00:11:36',
                'updated_at' => '2023-04-19 11:13:04',
            ),
            33 => 
            array (
                'id' => '413',
                'parent_id' => '418',
                'title' => 'Kata Kata',
                'icon' => 'fas fa-star',
                'route' => 'admin.home.kata_kata',
                'sequence' => '9',
                'active' => '0',
                'type' => '1',
                'created_at' => '2023-01-18 00:18:02',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            34 => 
            array (
                'id' => '414',
                'parent_id' => NULL,
                'title' => 'Visi Dan Misi',
                'icon' => NULL,
                'route' => 'admin.setting.visi_misi',
                'sequence' => '48',
                'active' => '0',
                'type' => '1',
                'created_at' => '2023-01-18 01:51:32',
                'updated_at' => '2023-05-13 04:20:09',
            ),
            35 => 
            array (
                'id' => '415',
                'parent_id' => NULL,
                'title' => 'Portfolio',
                'icon' => 'fas fa-coffee',
                'route' => NULL,
                'sequence' => '23',
                'active' => '1',
                'type' => '1',
                'created_at' => '2023-01-27 22:16:23',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            36 => 
            array (
                'id' => '416',
                'parent_id' => '415',
                'title' => 'Kategori Portfolio',
                'icon' => NULL,
                'route' => 'admin.portfolio.kategori',
                'sequence' => '24',
                'active' => '1',
                'type' => '1',
                'created_at' => '2023-01-27 22:17:21',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            37 => 
            array (
                'id' => '417',
                'parent_id' => '415',
                'title' => 'Daftar Portfolio',
                'icon' => NULL,
                'route' => 'admin.portfolio',
                'sequence' => '25',
                'active' => '1',
                'type' => '1',
                'created_at' => '2023-01-27 22:17:43',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            38 => 
            array (
                'id' => '418',
                'parent_id' => NULL,
                'title' => 'Halaman Utama',
                'icon' => 'fas fa-home',
                'route' => NULL,
                'sequence' => '3',
                'active' => '1',
                'type' => '1',
                'created_at' => '2023-03-10 13:04:51',
                'updated_at' => '2023-04-13 13:05:41',
            ),
            39 => 
            array (
                'id' => '419',
                'parent_id' => '415',
                'title' => 'Marketplace',
                'icon' => NULL,
                'route' => 'admin.produk.marketplace',
                'sequence' => '26',
                'active' => '0',
                'type' => '1',
                'created_at' => '2023-03-15 14:10:53',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            40 => 
            array (
                'id' => '420',
                'parent_id' => '418',
                'title' => 'Program Pembelajaran',
                'icon' => NULL,
                'route' => 'admin.home.program_pembelajaran',
                'sequence' => '10',
                'active' => '0',
                'type' => '1',
                'created_at' => '2023-03-24 21:39:21',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            41 => 
            array (
                'id' => '421',
                'parent_id' => '351',
                'title' => 'Banner',
                'icon' => 'fas fa-image',
                'route' => 'admin.banner',
                'sequence' => '17',
                'active' => '1',
                'type' => '1',
                'created_at' => '2023-03-24 23:53:51',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            42 => 
            array (
                'id' => '422',
                'parent_id' => NULL,
                'title' => 'Tentang',
                'icon' => 'fab fa-slack-hash',
                'route' => 'admin.setting.about',
                'sequence' => '11',
                'active' => '1',
                'type' => '1',
                'created_at' => '2023-03-26 15:04:17',
                'updated_at' => '2023-04-19 18:50:35',
            ),
            43 => 
            array (
                'id' => '423',
                'parent_id' => '418',
                'title' => 'Pengurus',
                'icon' => 'fas fa-users',
                'route' => 'admin.home.pengurus',
                'sequence' => '8',
                'active' => '0',
                'type' => '1',
                'created_at' => '2023-03-26 18:32:49',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            44 => 
            array (
                'id' => '424',
                'parent_id' => NULL,
                'title' => 'Pendaftaran',
                'icon' => 'fas fa-user-edit',
                'route' => 'admin.pendaftaran.santri',
                'sequence' => '18',
                'active' => '0',
                'type' => '1',
                'created_at' => '2023-03-26 22:33:01',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            45 => 
            array (
                'id' => '425',
                'parent_id' => '418',
                'title' => 'Testimonial',
                'icon' => NULL,
                'route' => 'admin.home.testimonial',
                'sequence' => '6',
                'active' => '1',
                'type' => '1',
                'created_at' => '2023-04-13 13:06:10',
                'updated_at' => '2023-04-19 11:12:31',
            ),
            46 => 
            array (
                'id' => '426',
                'parent_id' => NULL,
                'title' => 'Pengunjung',
                'icon' => 'fas fa-desktop',
                'route' => 'admin.vistor',
                'sequence' => '27',
                'active' => '1',
                'type' => '1',
                'created_at' => '2023-04-25 10:52:08',
                'updated_at' => '2023-04-25 10:52:23',
            ),
            47 => 
            array (
                'id' => '427',
                'parent_id' => NULL,
                'title' => 'Client',
                'icon' => 'fas fa-th-large',
                'route' => 'admin.client',
                'sequence' => '28',
                'active' => '1',
                'type' => '1',
                'created_at' => '2023-05-04 18:12:41',
                'updated_at' => '2023-05-04 18:21:58',
            ),
            48 => 
            array (
                'id' => '428',
                'parent_id' => NULL,
                'title' => 'Sistem Pendukung Keputusan',
                'icon' => 'fas fa-list',
                'route' => 'admin.spk.saw',
                'sequence' => '29',
                'active' => '1',
                'type' => '1',
                'created_at' => '2023-05-13 04:19:56',
                'updated_at' => '2023-05-13 04:20:09',
            ),
        ));
        
        
    }
}