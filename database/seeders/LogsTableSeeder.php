<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('logs')->delete();
        
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'log_date' => '2023-04-13 14:22:56',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"103","ip":"103.147.8.161","date":"2023-04-13","time":"12:20:31","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.39","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39","hits":"5","has_detail":"0"}',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'log_date' => '2023-04-13 20:44:45',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.161","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39"}',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:06:18',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.9.27","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36"}',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:08:40',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":"11","kategori_id":"8","nama":"App Design","slug":"app-design","foto":"20230413015201.jpg","keterangan":null,"is_insert":"1","created_by":"1","created_at":"2023-04-13 01:52:01","updated_at":"2023-04-13 01:52:01"}',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:08:44',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:08:10","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"1","has_detail":"0"}',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:30',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"9","kategori_id":"9","nama":"Branding Design","slug":"branding-design","foto":"20230413015116.jpg","keterangan":null,"is_insert":"1","created_by":"1","created_at":"2023-04-13 01:51:16","updated_at":"2023-04-13 01:51:16"}',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:33',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"10","kategori_id":"9","nama":"Branding Design B","slug":"branding-design-b","foto":"20230413015139.jpg","keterangan":null,"is_insert":"1","created_by":"1","created_at":"2023-04-13 01:51:39","updated_at":"2023-04-13 01:51:39"}',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:36',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"5","kategori_id":"7","nama":"Design A","slug":"design-a","foto":"20230413014906.jpg","keterangan":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.","is_insert":"1","created_by":"1","created_at":"2023-04-13 01:49:06","updated_at":"2023-04-13 01:49:06"}',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:39',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"6","kategori_id":"7","nama":"Design B","slug":"design-b","foto":"20230413014929.jpg","keterangan":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.","is_insert":"1","created_by":"1","created_at":"2023-04-13 01:49:29","updated_at":"2023-04-13 01:49:29"}',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:43',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"7","kategori_id":"7","nama":"Design C","slug":"design-c","foto":"20230413015003.jpg","keterangan":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.","is_insert":"1","created_by":"1","created_at":"2023-04-13 01:50:03","updated_at":"2023-04-13 01:50:03"}',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:48',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"8","kategori_id":"7","nama":"Design D","slug":"design-d","foto":"20230413015052.jpg","keterangan":null,"is_insert":"1","created_by":"1","created_at":"2023-04-13 01:50:52","updated_at":"2023-04-13 01:50:52"}',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:52',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"1","portfolio_id":"1","urutan":"1","nama":"Project Type","keterangan":"Software & App Development","created_at":"2023-04-13 01:10:53","updated_at":"2023-04-13 01:10:53"}',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:52',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"2","portfolio_id":"1","urutan":"2","nama":"Client","keterangan":"Sekolah di Malaysia","created_at":"2023-04-13 01:13:53","updated_at":"2023-04-13 01:13:53"}',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:52',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"3","portfolio_id":"1","urutan":"3","nama":"Duration","keterangan":"3 Month","created_at":"2023-04-13 01:14:06","updated_at":"2023-04-13 01:14:06"}',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:52',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"4","portfolio_id":"1","urutan":"4","nama":"Task","keterangan":"Backend, Frontend","created_at":"2023-04-13 01:14:23","updated_at":"2023-04-13 01:14:23"}',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:52',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"5","portfolio_id":"1","urutan":"5","nama":"Budget","keterangan":"Rp 20.000.000","created_at":"2023-04-13 01:14:32","updated_at":"2023-04-13 01:14:32"}',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:52',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"1","kategori_id":"6","nama":"RAB Community","slug":"rab-community","foto":"20230413012220.png","keterangan":"Web aplikasi perusahaan, organisasi ataupun komunitas yang mempermudah dalam mengelola RAB dari proses pembuatan, pengajuan, diterima, proses belanja dan sampai kepada laporan yang mudah dibaca.","is_insert":"1","created_by":"1","created_at":"2023-04-13 01:15:09","updated_at":"2023-04-13 01:22:20"}',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:55',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"10","portfolio_id":"3","urutan":"1","nama":"Link","keterangan":"<a href=\\"https:\\/\\/warungkopigunungroastery.com\\/\\">Lihat<\\/a>","created_at":"2023-04-13 01:44:29","updated_at":"2023-04-13 01:44:29"}',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:55',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"3","kategori_id":"6","nama":"Warung Kopi Gunung","slug":"warung-kopi-gunung","foto":"20230413014353.png","keterangan":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.","is_insert":"1","created_by":"1","created_at":"2023-04-13 01:43:53","updated_at":"2023-04-13 01:43:53"}',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:59',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"6","portfolio_id":"2","urutan":"1","nama":"A","keterangan":"B","created_at":"2023-04-13 01:41:44","updated_at":"2023-04-13 01:41:44"}',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:59',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"7","portfolio_id":"2","urutan":"2","nama":"C","keterangan":"D","created_at":"2023-04-13 01:41:48","updated_at":"2023-04-13 01:41:48"}',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:59',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"8","portfolio_id":"2","urutan":"3","nama":"E","keterangan":"E","created_at":"2023-04-13 01:41:52","updated_at":"2023-04-13 01:41:52"}',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:17:59',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"2","kategori_id":"6","nama":"Web 2","slug":"web-2","foto":"20230413014157.jpg","keterangan":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.","is_insert":"1","created_by":"1","created_at":"2023-04-13 01:41:57","updated_at":"2023-04-13 01:41:57"}',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:18:02',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"11","kategori_id":"6","nama":"WKG Roastery","slug":"wkg-roastery","foto":"20230414020840.png","keterangan":null,"is_insert":"1","created_by":"1","created_at":"2023-04-13 01:52:01","updated_at":"2023-04-14 02:08:40"}',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:18:05',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"11","portfolio_id":"4","urutan":"1","nama":"A","keterangan":"A","created_at":"2023-04-13 01:45:20","updated_at":"2023-04-13 01:45:20"}',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:18:05',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"12","portfolio_id":"4","urutan":"2","nama":"B","keterangan":"B","created_at":"2023-04-13 01:45:25","updated_at":"2023-04-13 01:45:25"}',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:18:05',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"4","kategori_id":"6","nama":"WZx","slug":"wzx","foto":"20230413014514.jpg","keterangan":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.","is_insert":"1","created_by":"1","created_at":"2023-04-13 01:45:14","updated_at":"2023-04-13 01:45:14"}',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:20:02',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'delete',
                'data' => '{"id":"6","urutan":"1","nama":"Website","slug":"website","keterangan":null,"created_at":"2023-04-12 23:55:18","updated_at":"2023-04-12 23:55:18"}',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:20:07',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:08:44","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"2","has_detail":"0"}',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:20:54',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":"12","kategori_id":null,"nama":null,"slug":null,"foto":null,"keterangan":null,"is_insert":"0","created_by":"4","created_at":null,"updated_at":null}',
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:20:57',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:20:07","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"3","has_detail":"0"}',
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:21:19',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"12","kategori_id":"11","nama":"sad","slug":"sad","foto":"20230414022054.png","keterangan":null,"is_insert":"1","created_by":"4","created_at":"2023-04-14 02:20:54","updated_at":"2023-04-14 02:20:54"}',
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:22:07',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'edit',
                'data' => '{"id":"7","urutan":"2","nama":"Design","slug":"design","keterangan":null,"created_at":"2023-04-12 23:55:26","updated_at":"2023-04-12 23:55:26"}',
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:22:58',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'edit',
                'data' => '{"id":"8","urutan":"3","nama":"App Design","slug":"app-design","keterangan":null,"created_at":"2023-04-12 23:55:38","updated_at":"2023-04-12 23:55:38"}',
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:23:14',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'edit',
                'data' => '{"id":"9","urutan":"4","nama":"Branding Design","slug":"branding-design","keterangan":null,"created_at":"2023-04-12 23:55:45","updated_at":"2023-04-12 23:55:45"}',
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:25:58',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:20:57","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"4","has_detail":"0"}',
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:30:26',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:25:58","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"5","has_detail":"0"}',
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:38:45',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:30:26","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"6","has_detail":"0"}',
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:47:11',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":"13","kategori_id":null,"nama":null,"slug":null,"foto":null,"keterangan":null,"is_insert":"0","created_by":"4","created_at":null,"updated_at":null}',
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:47:32',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:38:45","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"7","has_detail":"0"}',
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:47:51',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":"13","kategori_id":"16","nama":"Warung Kopi Gunung Roastery","slug":"warung-kopi-gunung-roastery","foto":"20230414024711.png","keterangan":null,"is_insert":"1","created_by":"4","created_at":"2023-04-14 02:47:11","updated_at":"2023-04-14 02:47:11"}',
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:48:04',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:47:32","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"8","has_detail":"0"}',
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:50:39',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":"13","kategori_id":"16","nama":"Warung Kopi Gunung Roastery","slug":"warung-kopi-gunung-roastery","foto":"20230414024711.png","keterangan":"MAnsdansld","is_insert":"1","created_by":"4","created_at":"2023-04-14 02:47:11","updated_at":"2023-04-14 02:47:51"}',
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => 4,
                'log_date' => '2023-04-14 02:50:48',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:48:04","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"9","has_detail":"0"}',
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => 1,
                'log_date' => '2023-04-14 09:26:38',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.161","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39"}',
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => 1,
                'log_date' => '2023-04-14 09:29:29',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.161","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39"}',
            ),
            46 => 
            array (
                'id' => 47,
                'user_id' => 1,
                'log_date' => '2023-04-14 09:29:43',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"128","ip":"103.147.8.161","date":"2023-04-14","time":"09:29:22","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.39","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39","hits":"1","has_detail":"0"}',
            ),
            47 => 
            array (
                'id' => 48,
                'user_id' => 1,
                'log_date' => '2023-04-14 09:31:01',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"128","ip":"103.147.8.161","date":"2023-04-14","time":"09:29:43","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.39","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39","hits":"2","has_detail":"0"}',
            ),
            48 => 
            array (
                'id' => 49,
                'user_id' => 1,
                'log_date' => '2023-04-14 09:34:55',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"128","ip":"103.147.8.161","date":"2023-04-14","time":"09:31:01","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.39","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39","hits":"3","has_detail":"0"}',
            ),
            49 => 
            array (
                'id' => 50,
                'user_id' => 1,
                'log_date' => '2023-04-15 06:57:00',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.111.103","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39"}',
            ),
            50 => 
            array (
                'id' => 51,
                'user_id' => 1,
                'log_date' => '2023-04-15 07:01:09',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"130","ip":"114.122.111.103","date":"2023-04-15","time":"06:58:43","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.39","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39","hits":"1","has_detail":"0"}',
            ),
            51 => 
            array (
                'id' => 52,
                'user_id' => 1,
                'log_date' => '2023-04-15 15:02:00',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.111.107","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39"}',
            ),
            52 => 
            array (
                'id' => 53,
                'user_id' => 1,
                'log_date' => '2023-04-15 15:39:16',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'edit',
                'data' => '{"id":"16","urutan":"10","nama":"Website","slug":"website","keterangan":null,"created_at":"2023-04-14 02:25:53","updated_at":"2023-04-14 02:25:53"}',
            ),
            53 => 
            array (
                'id' => 54,
                'user_id' => 1,
                'log_date' => '2023-04-15 15:39:26',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'edit',
                'data' => '{"id":"16","urutan":"10","nama":"Websites","slug":"websites","keterangan":null,"created_at":"2023-04-14 02:25:53","updated_at":"2023-04-15 15:39:16"}',
            ),
            54 => 
            array (
                'id' => 55,
                'user_id' => 1,
                'log_date' => '2023-04-15 15:42:20',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'edit',
                'data' => '{"id":"11","urutan":"1","nama":"Logo","slug":"logo","keterangan":null,"created_at":"2023-04-14 02:19:55","updated_at":"2023-04-14 02:19:55"}',
            ),
            55 => 
            array (
                'id' => 56,
                'user_id' => 1,
                'log_date' => '2023-04-15 15:42:34',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'edit',
                'data' => '{"id":"11","urutan":"1","nama":"Logos","slug":"logos","keterangan":null,"created_at":"2023-04-14 02:19:55","updated_at":"2023-04-15 15:42:20"}',
            ),
            56 => 
            array (
                'id' => 57,
                'user_id' => 1,
                'log_date' => '2023-04-15 16:02:08',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":1,"key":"setting.home.galeri.visible","value":"1","created_at":"2023-04-15 15:58:47","updated_at":"2023-04-15 15:58:47"}',
            ),
            57 => 
            array (
                'id' => 58,
                'user_id' => 1,
                'log_date' => '2023-04-15 16:02:08',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":2,"key":"setting.home.galeri.title","value":"Galeri Kegiatana","created_at":"2023-04-15 15:58:47","updated_at":"2023-04-15 16:01:54"}',
            ),
            58 => 
            array (
                'id' => 59,
                'user_id' => 1,
                'log_date' => '2023-04-15 16:02:26',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":1,"key":"setting.home.galeri.visible","value":"0","created_at":"2023-04-15 15:58:47","updated_at":"2023-04-15 16:02:08"}',
            ),
            59 => 
            array (
                'id' => 60,
                'user_id' => 1,
                'log_date' => '2023-04-15 16:07:55',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":9,"key":"setting.home.galeri.sub_title","value":"Kegiatan Mengaji","created_at":"2023-04-15 16:07:49","updated_at":"2023-04-15 16:07:49"}',
            ),
            60 => 
            array (
                'id' => 61,
                'user_id' => 1,
                'log_date' => '2023-04-15 16:08:06',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":9,"key":"setting.home.galeri.sub_title","value":"Kegiatan Mengajia","created_at":"2023-04-15 16:07:49","updated_at":"2023-04-15 16:07:55"}',
            ),
            61 => 
            array (
                'id' => 62,
                'user_id' => 1,
                'log_date' => '2023-04-15 17:00:05',
                'table_name' => 'notif_admin_atas',
                'log_type' => 'delete',
                'data' => '{"id":1,"nama":"situs belum siap wkwk","deskripsi":"Website ini masih dalam masa pengembangan. jika anda menemukan error atau ada saran lain-nya bisa menghubungi developer","dari":"2022-08-17","sampai":"2023-03-08","link":"https:\\/\\/wa.me\\/+6285798132505","link_nama":"Klik disini","created_at":"2022-08-18 16:42:49","updated_at":"2023-03-09 22:21:38"}',
            ),
            62 => 
            array (
                'id' => 63,
                'user_id' => 1,
                'log_date' => '2023-04-15 17:32:33',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.home.galeri.visible","value":1,"updated_at":"2023-04-15T10:32:33.000000Z","created_at":"2023-04-15T10:32:33.000000Z","id":13}',
            ),
            63 => 
            array (
                'id' => 64,
                'user_id' => 1,
                'log_date' => '2023-04-15 17:32:33',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.home.galeri.title","value":"Galeri Kegiatan","updated_at":"2023-04-15T10:32:33.000000Z","created_at":"2023-04-15T10:32:33.000000Z","id":14}',
            ),
            64 => 
            array (
                'id' => 65,
                'user_id' => 1,
                'log_date' => '2023-04-15 17:32:33',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.home.galeri.sub_title","value":"Kegiatan Mengaji","updated_at":"2023-04-15T10:32:33.000000Z","created_at":"2023-04-15T10:32:33.000000Z","id":15}',
            ),
            65 => 
            array (
                'id' => 66,
                'user_id' => 1,
                'log_date' => '2023-04-15 21:00:51',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39"}',
            ),
            66 => 
            array (
                'id' => 67,
                'user_id' => 1,
                'log_date' => '2023-04-15 21:01:01',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.home.hero.visible","value":1,"updated_at":"2023-04-15T14:01:01.000000Z","created_at":"2023-04-15T14:01:01.000000Z","id":16}',
            ),
            67 => 
            array (
                'id' => 68,
                'user_id' => 1,
                'log_date' => '2023-04-15 21:01:01',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
            'data' => '{"key":"setting.home.hero.deskripsi","value":"Sebuah Rumah Tahfizh yang didirikan oleh Bapak  Dian Nopiandi seorang Guru Sman 1 Pasirkuda  dan Ibu Puput Risnawati di Cianjur Selatan yang bertujuan untuk mewujudkan jutaan penghafal Al-Qur\\u2019an di Indonesia dan mencetak generasi Qur\'ani yang beriman dan dapat mengaplikasikan kandungan Al-Qur\'an dalam kehidupan bermasyarakat yang Rahmatan Lil Alamin (kasih bagi seluruh alam).","updated_at":"2023-04-15T14:01:01.000000Z","created_at":"2023-04-15T14:01:01.000000Z","id":17}',
            ),
            68 => 
            array (
                'id' => 69,
                'user_id' => 1,
                'log_date' => '2023-04-15 21:01:01',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.home.hero.tombol_title","value":"DAFTAR SEKARANG","updated_at":"2023-04-15T14:01:01.000000Z","created_at":"2023-04-15T14:01:01.000000Z","id":18}',
            ),
            69 => 
            array (
                'id' => 70,
                'user_id' => 1,
                'log_date' => '2023-04-15 21:01:01',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.home.hero.tombol_link","value":"__base_url__\\/pendaftaran","updated_at":"2023-04-15T14:01:01.000000Z","created_at":"2023-04-15T14:01:01.000000Z","id":19}',
            ),
            70 => 
            array (
                'id' => 71,
                'user_id' => 1,
                'log_date' => '2023-04-15 21:01:01',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.home.hero.judul","value":"Rumah Tahfidzh Quran<br>Ar-Rahman","updated_at":"2023-04-15T14:01:01.000000Z","created_at":"2023-04-15T14:01:01.000000Z","id":20}',
            ),
            71 => 
            array (
                'id' => 72,
                'user_id' => 1,
                'log_date' => '2023-04-15 21:01:01',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.home.hero.sub_judul","value":"Gapai Ilmu dan Keberkahan Hidup melalui Hafalan Al-Quran.","updated_at":"2023-04-15T14:01:01.000000Z","created_at":"2023-04-15T14:01:01.000000Z","id":21}',
            ),
            72 => 
            array (
                'id' => 73,
                'user_id' => 1,
                'log_date' => '2023-04-15 21:01:06',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.home.artikel.visible","value":0,"updated_at":"2023-04-15T14:01:06.000000Z","created_at":"2023-04-15T14:01:06.000000Z","id":22}',
            ),
            73 => 
            array (
                'id' => 74,
                'user_id' => 1,
                'log_date' => '2023-04-15 21:01:06',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.home.artikel.title","value":"ARTIKEL","updated_at":"2023-04-15T14:01:06.000000Z","created_at":"2023-04-15T14:01:06.000000Z","id":23}',
            ),
            74 => 
            array (
                'id' => 75,
                'user_id' => 1,
                'log_date' => '2023-04-15 21:01:06',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.home.artikel.sub_title","value":"Kilasan artikel dari beberapa kegiatan kami","updated_at":"2023-04-15T14:01:06.000000Z","created_at":"2023-04-15T14:01:06.000000Z","id":24}',
            ),
            75 => 
            array (
                'id' => 76,
                'user_id' => 1,
                'log_date' => '2023-04-15 21:01:16',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.home.testimonial.visible","value":1,"updated_at":"2023-04-15T14:01:16.000000Z","created_at":"2023-04-15T14:01:16.000000Z","id":25}',
            ),
            76 => 
            array (
                'id' => 77,
                'user_id' => 1,
                'log_date' => '2023-04-15 21:01:16',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.home.testimonial.title","value":"Apa Pendapat Mereka <br> Tentang Kami","updated_at":"2023-04-15T14:01:16.000000Z","created_at":"2023-04-15T14:01:16.000000Z","id":26}',
            ),
            77 => 
            array (
                'id' => 78,
                'user_id' => 1,
                'log_date' => '2023-04-15 21:01:23',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.contact.faq.visible","value":1,"updated_at":"2023-04-15T14:01:23.000000Z","created_at":"2023-04-15T14:01:23.000000Z","id":27}',
            ),
            78 => 
            array (
                'id' => 79,
                'user_id' => 1,
                'log_date' => '2023-04-15 21:01:23',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.contact.faq.title","value":"Ada Pertanyaan ?","updated_at":"2023-04-15T14:01:23.000000Z","created_at":"2023-04-15T14:01:23.000000Z","id":28}',
            ),
            79 => 
            array (
                'id' => 80,
                'user_id' => 1,
                'log_date' => '2023-04-15 21:01:23',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.contact.faq.sub_title","value":"Semua Pertanyaan Yang Sering Diajukan Ada Disini","updated_at":"2023-04-15T14:01:23.000000Z","created_at":"2023-04-15T14:01:23.000000Z","id":29}',
            ),
            80 => 
            array (
                'id' => 81,
                'user_id' => 1,
                'log_date' => '2023-04-15 21:01:23',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.contact.faq.description","value":null,"updated_at":"2023-04-15T14:01:23.000000Z","created_at":"2023-04-15T14:01:23.000000Z","id":30}',
            ),
            81 => 
            array (
                'id' => 82,
                'user_id' => 1,
                'log_date' => '2023-04-17 23:15:40',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48"}',
            ),
            82 => 
            array (
                'id' => 83,
                'user_id' => 1,
                'log_date' => '2023-04-18 03:45:08',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'create',
                'data' => '{"keterangan":"Instagram Utama","nama":"PaDi UMKM","urutan":11,"slug":"padi-umkm","updated_at":"2023-04-17T20:45:08.000000Z","created_at":"2023-04-17T20:45:08.000000Z","id":17}',
            ),
            83 => 
            array (
                'id' => 84,
                'user_id' => 1,
                'log_date' => '2023-04-18 03:45:14',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'delete',
                'data' => '{"id":17,"urutan":11,"nama":"PaDi UMKM","slug":"padi-umkm","keterangan":"Instagram Utama","created_at":"2023-04-18 03:45:08","updated_at":"2023-04-18 03:45:08"}',
            ),
            84 => 
            array (
                'id' => 85,
                'user_id' => 1,
                'log_date' => '2023-04-18 04:44:56',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":1,"name":"Isep Lutpi Nur","email":"iseplutpinur7@gmail.com","foto":null,"username":null,"email_verified_at":null,"password":"$2y$10$DsI7ChQu4aIwEwc0CTlCnO66pBuIukicAIA\\/oIKwHD4AIGzIHmHZO","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-08-28 20:49:57"}',
            ),
            85 => 
            array (
                'id' => 86,
                'user_id' => 1,
                'log_date' => '2023-04-18 05:16:35',
                'table_name' => 'portfolio_item',
                'log_type' => 'create',
                'data' => '{"portfolio_id":"14","nama":"Email","keterangan":"iseplutpinur7@gmail.com","urutan":1,"updated_at":"2023-04-17T22:16:35.000000Z","created_at":"2023-04-17T22:16:35.000000Z","id":1}',
            ),
            86 => 
            array (
                'id' => 87,
                'user_id' => 1,
                'log_date' => '2023-04-18 05:36:55',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":410,"parent_id":null,"title":"Media Dan Informasi","icon":null,"route":null,"sequence":2,"active":1,"type":0,"created_at":"2022-09-15 21:17:53","updated_at":"2023-03-24 23:54:00"}',
            ),
            87 => 
            array (
                'id' => 88,
                'user_id' => 1,
                'log_date' => '2023-04-18 05:36:55',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":345,"parent_id":null,"title":"Dashboard","icon":"fas fa-tachometer-alt","route":"admin.dashboard","sequence":1,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-03-10 13:05:00"}',
            ),
            88 => 
            array (
                'id' => 89,
                'user_id' => 1,
                'log_date' => '2023-04-18 05:36:59',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":345,"parent_id":null,"title":"Dashboard","icon":"fas fa-tachometer-alt","route":"admin.dashboard","sequence":2,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-18 05:36:55"}',
            ),
            89 => 
            array (
                'id' => 90,
                'user_id' => 1,
                'log_date' => '2023-04-18 05:37:00',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":410,"parent_id":null,"title":"Media Dan Informasi","icon":null,"route":null,"sequence":1,"active":1,"type":0,"created_at":"2022-09-15 21:17:53","updated_at":"2023-04-18 05:36:55"}',
            ),
            90 => 
            array (
                'id' => 91,
                'user_id' => 1,
                'log_date' => '2023-04-18 05:43:44',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":345,"updated_at":"2023-04-17T22:43:44.000000Z","created_at":"2023-04-17T22:43:44.000000Z","id":228}',
            ),
            91 => 
            array (
                'id' => 92,
                'user_id' => 1,
                'log_date' => '2023-04-18 05:43:44',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":345,"updated_at":"2023-04-17T22:43:44.000000Z","created_at":"2023-04-17T22:43:44.000000Z","id":229}',
            ),
            92 => 
            array (
                'id' => 93,
                'user_id' => 1,
                'log_date' => '2023-04-18 05:44:21',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":425,"updated_at":"2023-04-17T22:44:21.000000Z","created_at":"2023-04-17T22:44:21.000000Z","id":230}',
            ),
            93 => 
            array (
                'id' => 94,
                'user_id' => 1,
                'log_date' => '2023-04-18 05:44:21',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":425,"updated_at":"2023-04-17T22:44:21.000000Z","created_at":"2023-04-17T22:44:21.000000Z","id":231}',
            ),
            94 => 
            array (
                'id' => 95,
                'user_id' => 1,
                'log_date' => '2023-04-18 10:49:36',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48"}',
            ),
            95 => 
            array (
                'id' => 96,
                'user_id' => 1,
                'log_date' => '2023-04-18 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":351,"parent_id":null,"title":"Artikel","icon":"fas fa-file-alt","route":null,"sequence":12,"active":0,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-13 13:06:20"}',
            ),
            96 => 
            array (
                'id' => 97,
                'user_id' => 1,
                'log_date' => '2023-04-18 10:52:23',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":351,"updated_at":"2023-04-18T03:52:23.000000Z","created_at":"2023-04-18T03:52:23.000000Z","id":232}',
            ),
            97 => 
            array (
                'id' => 98,
                'user_id' => 1,
                'log_date' => '2023-04-18 10:52:23',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":351,"updated_at":"2023-04-18T03:52:23.000000Z","created_at":"2023-04-18T03:52:23.000000Z","id":233}',
            ),
            98 => 
            array (
                'id' => 99,
                'user_id' => 1,
                'log_date' => '2023-04-18 12:50:10',
                'table_name' => 'artikel',
                'log_type' => 'edit',
                'data' => '{"id":36,"nama":"IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD","slug":"ideal-cocktails-from-our-barmen-for-pefect-mood","foto":"\\/assets\\/artikel\\/ideal-cock16784303220.png","detail":"<h2 class=\\"title mb-10\\" style=\\"text-align: center; \\"><img data-bs-filename=\\"blog-post-1.jpg\\" style=\\"width: 748px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16784303220.png\\"><br>\\n\\n<h2 class=\\"title mb-10\\">ideal cocktails from our barmen for pefect mood<\\/h2><div class=\\"mt-10\\">\\n<p>For those of us who want to say thank you to our moms, it\'s not always easy\\nto put those big feelings in words. Which is where Dribbble comes in.<\\/p>\\n<\\/div><div class=\\"mt-20\\">\\n<p>These eight shots crystallize the hard work moms put into keeping their kids\\nalive, happy, and healthy. They might give you the inspiration you need for\\nfilling out that card&acirc;&#128;&#148;or stand alone for your mom\'s interpretation.<\\/p>\\n<\\/div><div class=\\"mt-20\\">\\n<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to\\ntake care of us as we get older&acirc;&#128;&#148;often sacrificing their own needs so they\\ncan help with ours. Cruising on a bike <\\/p>\\n<\\/div><div class=\\"mt-20\\">\\n<h3>Here come the moms in space<\\/h3>\\n<p>A supermarket worker was spat at by a customer attempting to stockpile Pot\\nNoodles while another was told: &acirc;&#128;&#156;I hope you get the virus and die&acirc;&#128;&#157;, as\\npanic-buying blighted the nations response to coronavirus pandemic.<\\/p>\\n<\\/div><div class=\\"mt-20\\">\\n<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,\\nMerseyside, on Saturday, as a man in his 30s attempted to buy more than the\\nthree Pot Noodles allowed by the <\\/p>\\n<\\/div><div class=\\"mt-20\\">\\n<h3>Here come the moms in space<\\/h3>\\n<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was\\njust one of the horrendous cases of abuse revealed by supermarket workers in\\nrecent days as some customers grow angry over restrictions and empty\\nshelves.<\\/p>\\n<\\/div><div class=\\"mt-20\\">\\n<p>The doctor was exposed to the virus when the 38-year-old woman visited the\\nclinic on March 12, the minister said. Five days later, she tested positive.\\nThat day, the doctor was also admitted in hospital.Lorem ipsum dolor sit\\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\n<\\/div><div class=\\"mt-20\\">\\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\\neu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\\nsunt in culpa qui officia deserunt mollit <\\/p>\\n<\\/div><\\/h2>\\n","excerpt":"Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.","counter":91,"date":"2023-03-10","status":1,"created_at":"2022-04-28 07:19:02","updated_at":"2023-03-26 21:03:41","user_id":1}',
            ),
            99 => 
            array (
                'id' => 100,
                'user_id' => 1,
                'log_date' => '2023-04-18 12:50:28',
                'table_name' => 'artikel',
                'log_type' => 'edit',
                'data' => '{"id":36,"nama":"IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD","slug":"ideal-cocktails-from-our-barmen-for-pefect-mood","foto":"\\/assets\\/artikel\\/ideal-cock16784303220.png","detail":"<h2 class=\\"title mb-10\\" style=\\"text-align: center; \\"><img data-bs-filename=\\"blog-post-1.jpg\\" style=\\"width: 748px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16784303220.png\\"><br>\\r\\n\\r\\n<h2 class=\\"title mb-10\\">ideal cocktails from our barmen for pefect mood<\\/h2><div class=\\"mt-10\\">\\r\\n<p>For those of us who want to say thank you to our moms, it\'s not always easy\\r\\nto put those big feelings in words. Which is where Dribbble comes in.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>These eight shots crystallize the hard work moms put into keeping their kids\\r\\nalive, happy, and healthy. They might give you the inspiration you need for\\r\\nfilling out that card&acirc;&#128;&#148;or stand alone for your mom\'s interpretation.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to\\r\\ntake care of us as we get older&acirc;&#128;&#148;often sacrificing their own needs so they\\r\\ncan help with ours. Cruising on a bike <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>A supermarket worker was spat at by a customer attempting to stockpile Pot\\r\\nNoodles while another was told: &acirc;&#128;&#156;I hope you get the virus and die&acirc;&#128;&#157;, as\\r\\npanic-buying blighted the nations response to coronavirus pandemic.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,\\r\\nMerseyside, on Saturday, as a man in his 30s attempted to buy more than the\\r\\nthree Pot Noodles allowed by the <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was\\r\\njust one of the horrendous cases of abuse revealed by supermarket workers in\\r\\nrecent days as some customers grow angry over restrictions and empty\\r\\nshelves.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>The doctor was exposed to the virus when the 38-year-old woman visited the\\r\\nclinic on March 12, the minister said. Five days later, she tested positive.\\r\\nThat day, the doctor was also admitted in hospital.Lorem ipsum dolor sit\\r\\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\\r\\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\\r\\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\\r\\neu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\\r\\nsunt in culpa qui officia deserunt mollit <\\/p>\\r\\n<\\/div><\\/h2>\\n","excerpt":"Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.","counter":91,"date":"2023-03-10","status":1,"created_at":"2022-04-28 07:19:02","updated_at":"2023-04-18 12:50:10","user_id":1}',
            ),
            100 => 
            array (
                'id' => 101,
                'user_id' => 1,
                'log_date' => '2023-04-18 13:30:22',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":30,"key":"setting.contact.faq.description","value":null,"created_at":"2023-04-15 21:01:23","updated_at":"2023-04-15 21:01:23"}',
            ),
            101 => 
            array (
                'id' => 102,
                'user_id' => 1,
                'log_date' => '2023-04-18 13:33:08',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":27,"key":"setting.contact.faq.visible","value":"1","created_at":"2023-04-15 21:01:23","updated_at":"2023-04-15 21:01:23"}',
            ),
            102 => 
            array (
                'id' => 103,
                'user_id' => 1,
                'log_date' => '2023-04-18 13:33:13',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":27,"key":"setting.contact.faq.visible","value":"0","created_at":"2023-04-15 21:01:23","updated_at":"2023-04-18 13:33:08"}',
            ),
            103 => 
            array (
                'id' => 104,
                'user_id' => 1,
                'log_date' => '2023-04-18 13:42:14',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":22,"key":"setting.home.artikel.visible","value":"0","created_at":"2023-04-15 21:01:06","updated_at":"2023-04-15 21:01:06"}',
            ),
            104 => 
            array (
                'id' => 105,
                'user_id' => 1,
                'log_date' => '2023-04-18 13:47:25',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":9,"key":"setting.front.app.preloader","value":"1","created_at":"2023-04-15 16:42:12","updated_at":"2023-04-15 16:42:12"}',
            ),
            105 => 
            array (
                'id' => 106,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:01:26',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48"}',
            ),
            106 => 
            array (
                'id' => 107,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:01:55',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48"}',
            ),
            107 => 
            array (
                'id' => 108,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:03:29',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:01:36","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":2,"has_detail":0}',
            ),
            108 => 
            array (
                'id' => 109,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:04:08',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":1,"parent_id":null,"title":"Utama","icon":null,"route":"__base_url__","sequence":1,"active":1,"type":1,"created_at":"2022-08-20 14:26:10","updated_at":"2023-03-26 08:01:07"}',
            ),
            109 => 
            array (
                'id' => 110,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:04:31',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'create',
                'data' => '{"sequence":"10","parent_id":null,"active":"1","title":"Layanan","icon":null,"route":"#","type":"1","updated_at":"2023-04-18T07:04:31.000000Z","created_at":"2023-04-18T07:04:31.000000Z","id":31}',
            ),
            110 => 
            array (
                'id' => 111,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:14',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'create',
                'data' => '{"sequence":"11","parent_id":"31","active":"1","title":"Website","icon":null,"route":"#","type":"1","updated_at":"2023-04-18T07:05:14.000000Z","created_at":"2023-04-18T07:05:14.000000Z","id":32}',
            ),
            111 => 
            array (
                'id' => 112,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:19',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":31,"parent_id":null,"title":"Layanan","icon":null,"route":"#","sequence":10,"active":1,"type":1,"created_at":"2023-04-18 14:04:31","updated_at":"2023-04-18 14:04:31"}',
            ),
            112 => 
            array (
                'id' => 113,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:19',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":32,"parent_id":31,"title":"Website","icon":null,"route":"#","sequence":11,"active":1,"type":1,"created_at":"2023-04-18 14:05:14","updated_at":"2023-04-18 14:05:14"}',
            ),
            113 => 
            array (
                'id' => 114,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:19',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":2,"parent_id":null,"title":"Tentang","icon":null,"route":"about","sequence":2,"active":0,"type":1,"created_at":"2022-08-20 14:30:39","updated_at":"2023-04-13 03:26:30"}',
            ),
            114 => 
            array (
                'id' => 115,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:19',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":29,"parent_id":null,"title":"Galeri","icon":null,"route":"galeri","sequence":3,"active":0,"type":1,"created_at":"2023-03-26 08:02:10","updated_at":"2023-04-13 03:26:34"}',
            ),
            115 => 
            array (
                'id' => 116,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:19',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":20,"parent_id":null,"title":"Artikel","icon":null,"route":"artikel","sequence":4,"active":0,"type":1,"created_at":"2022-09-02 00:45:45","updated_at":"2023-04-13 03:26:39"}',
            ),
            116 => 
            array (
                'id' => 117,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:19',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":30,"parent_id":null,"title":"Pendaftaran","icon":null,"route":"pendaftaran","sequence":5,"active":0,"type":1,"created_at":"2023-03-26 08:02:37","updated_at":"2023-04-13 03:26:51"}',
            ),
            117 => 
            array (
                'id' => 118,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:19',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":18,"parent_id":null,"title":"Kontak","icon":null,"route":"kontak","sequence":6,"active":0,"type":1,"created_at":"2022-08-20 14:47:10","updated_at":"2023-04-13 03:26:47"}',
            ),
            118 => 
            array (
                'id' => 119,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:19',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":28,"parent_id":null,"title":"Marketplace","icon":null,"route":"marketplace","sequence":7,"active":0,"type":1,"created_at":"2023-03-14 17:39:30","updated_at":"2023-03-26 08:02:41"}',
            ),
            119 => 
            array (
                'id' => 120,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:19',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":22,"parent_id":null,"title":"Katalog","icon":null,"route":"katalog","sequence":8,"active":0,"type":1,"created_at":"2023-01-27 22:18:36","updated_at":"2023-03-26 08:02:41"}',
            ),
            120 => 
            array (
                'id' => 121,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:19',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":27,"parent_id":null,"title":"FAQ","icon":null,"route":"kontak.faq","sequence":9,"active":0,"type":1,"created_at":"2023-03-10 21:07:26","updated_at":"2023-03-26 08:02:41"}',
            ),
            121 => 
            array (
                'id' => 122,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:37',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":2,"parent_id":null,"title":"Tentang","icon":null,"route":"about","sequence":4,"active":0,"type":1,"created_at":"2022-08-20 14:30:39","updated_at":"2023-04-18 14:05:19"}',
            ),
            122 => 
            array (
                'id' => 123,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:51',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'create',
                'data' => '{"sequence":"13","parent_id":null,"active":"1","title":"Tentang","icon":null,"route":"#","type":"1","updated_at":"2023-04-18T07:05:51.000000Z","created_at":"2023-04-18T07:05:51.000000Z","id":33}',
            ),
            123 => 
            array (
                'id' => 124,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:55',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":33,"parent_id":null,"title":"Tentang","icon":null,"route":"#","sequence":13,"active":1,"type":1,"created_at":"2023-04-18 14:05:51","updated_at":"2023-04-18 14:05:51"}',
            ),
            124 => 
            array (
                'id' => 125,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:55',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":29,"parent_id":null,"title":"Galeri","icon":null,"route":"galeri","sequence":5,"active":0,"type":1,"created_at":"2023-03-26 08:02:10","updated_at":"2023-04-18 14:05:19"}',
            ),
            125 => 
            array (
                'id' => 126,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:55',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":20,"parent_id":null,"title":"Artikel","icon":null,"route":"artikel","sequence":6,"active":0,"type":1,"created_at":"2022-09-02 00:45:45","updated_at":"2023-04-18 14:05:19"}',
            ),
            126 => 
            array (
                'id' => 127,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:55',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":30,"parent_id":null,"title":"Pendaftaran","icon":null,"route":"pendaftaran","sequence":7,"active":0,"type":1,"created_at":"2023-03-26 08:02:37","updated_at":"2023-04-18 14:05:19"}',
            ),
            127 => 
            array (
                'id' => 128,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:55',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":18,"parent_id":null,"title":"Kontak","icon":null,"route":"kontak","sequence":8,"active":0,"type":1,"created_at":"2022-08-20 14:47:10","updated_at":"2023-04-18 14:05:19"}',
            ),
            128 => 
            array (
                'id' => 129,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:55',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":28,"parent_id":null,"title":"Marketplace","icon":null,"route":"marketplace","sequence":9,"active":0,"type":1,"created_at":"2023-03-14 17:39:30","updated_at":"2023-04-18 14:05:19"}',
            ),
            129 => 
            array (
                'id' => 130,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:55',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":22,"parent_id":null,"title":"Katalog","icon":null,"route":"katalog","sequence":10,"active":0,"type":1,"created_at":"2023-01-27 22:18:36","updated_at":"2023-04-18 14:05:19"}',
            ),
            130 => 
            array (
                'id' => 131,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:55',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":27,"parent_id":null,"title":"FAQ","icon":null,"route":"kontak.faq","sequence":11,"active":0,"type":1,"created_at":"2023-03-10 21:07:26","updated_at":"2023-04-18 14:05:19"}',
            ),
            131 => 
            array (
                'id' => 132,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:05:58',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:03:29","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":3,"has_detail":0}',
            ),
            132 => 
            array (
                'id' => 133,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:06:16',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'create',
                'data' => '{"sequence":"14","parent_id":null,"active":"1","title":"Portfolio","icon":null,"route":"#","type":"1","updated_at":"2023-04-18T07:06:16.000000Z","created_at":"2023-04-18T07:06:16.000000Z","id":34}',
            ),
            133 => 
            array (
                'id' => 134,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:06:22',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":34,"parent_id":null,"title":"Portfolio","icon":null,"route":"#","sequence":14,"active":1,"type":1,"created_at":"2023-04-18 14:06:16","updated_at":"2023-04-18 14:06:16"}',
            ),
            134 => 
            array (
                'id' => 135,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:06:22',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":33,"parent_id":null,"title":"Tentang","icon":null,"route":"#","sequence":5,"active":1,"type":1,"created_at":"2023-04-18 14:05:51","updated_at":"2023-04-18 14:05:55"}',
            ),
            135 => 
            array (
                'id' => 136,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:06:22',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":29,"parent_id":null,"title":"Galeri","icon":null,"route":"galeri","sequence":6,"active":0,"type":1,"created_at":"2023-03-26 08:02:10","updated_at":"2023-04-18 14:05:55"}',
            ),
            136 => 
            array (
                'id' => 137,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:06:22',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":20,"parent_id":null,"title":"Artikel","icon":null,"route":"artikel","sequence":7,"active":0,"type":1,"created_at":"2022-09-02 00:45:45","updated_at":"2023-04-18 14:05:55"}',
            ),
            137 => 
            array (
                'id' => 138,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:06:22',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":30,"parent_id":null,"title":"Pendaftaran","icon":null,"route":"pendaftaran","sequence":8,"active":0,"type":1,"created_at":"2023-03-26 08:02:37","updated_at":"2023-04-18 14:05:55"}',
            ),
            138 => 
            array (
                'id' => 139,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:06:22',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":18,"parent_id":null,"title":"Kontak","icon":null,"route":"kontak","sequence":9,"active":0,"type":1,"created_at":"2022-08-20 14:47:10","updated_at":"2023-04-18 14:05:55"}',
            ),
            139 => 
            array (
                'id' => 140,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:06:22',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":28,"parent_id":null,"title":"Marketplace","icon":null,"route":"marketplace","sequence":10,"active":0,"type":1,"created_at":"2023-03-14 17:39:30","updated_at":"2023-04-18 14:05:55"}',
            ),
            140 => 
            array (
                'id' => 141,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:06:22',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":22,"parent_id":null,"title":"Katalog","icon":null,"route":"katalog","sequence":11,"active":0,"type":1,"created_at":"2023-01-27 22:18:36","updated_at":"2023-04-18 14:05:55"}',
            ),
            141 => 
            array (
                'id' => 142,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:06:22',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":27,"parent_id":null,"title":"FAQ","icon":null,"route":"kontak.faq","sequence":12,"active":0,"type":1,"created_at":"2023-03-10 21:07:26","updated_at":"2023-04-18 14:05:55"}',
            ),
            142 => 
            array (
                'id' => 143,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:08:09',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:05:58","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":4,"has_detail":0}',
            ),
            143 => 
            array (
                'id' => 144,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:08:15',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:08:09","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":5,"has_detail":0}',
            ),
            144 => 
            array (
                'id' => 145,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:08:34',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:08:15","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":6,"has_detail":0}',
            ),
            145 => 
            array (
                'id' => 146,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:09:21',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:08:34","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":7,"has_detail":0}',
            ),
            146 => 
            array (
                'id' => 147,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:09:29',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:09:21","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":8,"has_detail":0}',
            ),
            147 => 
            array (
                'id' => 148,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:10:18',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:09:28","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":9,"has_detail":0}',
            ),
            148 => 
            array (
                'id' => 149,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:10:41',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:10:18","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":10,"has_detail":0}',
            ),
            149 => 
            array (
                'id' => 150,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:13:14',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:10:41","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":11,"has_detail":0}',
            ),
            150 => 
            array (
                'id' => 151,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:13:45',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:13:14","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":12,"has_detail":0}',
            ),
            151 => 
            array (
                'id' => 152,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:14:10',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:13:45","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":13,"has_detail":0}',
            ),
            152 => 
            array (
                'id' => 153,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:14:30',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.home.portfolio.visible","value":1,"updated_at":"2023-04-18T07:14:30.000000Z","created_at":"2023-04-18T07:14:30.000000Z","id":31}',
            ),
            153 => 
            array (
                'id' => 154,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:14:30',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.home.portfolio.title","value":"Inovasi Luar Biasa dan Tanpa Batas","updated_at":"2023-04-18T07:14:30.000000Z","created_at":"2023-04-18T07:14:30.000000Z","id":32}',
            ),
            154 => 
            array (
                'id' => 155,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:14:30',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.home.portfolio.sub_title","value":"Portofolio.","updated_at":"2023-04-18T07:14:30.000000Z","created_at":"2023-04-18T07:14:30.000000Z","id":33}',
            ),
            155 => 
            array (
                'id' => 156,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:14:53',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:14:10","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":14,"has_detail":0}',
            ),
            156 => 
            array (
                'id' => 157,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:15:05',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:14:53","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":15,"has_detail":0}',
            ),
            157 => 
            array (
                'id' => 158,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:15:45',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":31,"key":"setting.home.portfolio.visible","value":"1","created_at":"2023-04-18 14:14:30","updated_at":"2023-04-18 14:14:30"}',
            ),
            158 => 
            array (
                'id' => 159,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:16:33',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":31,"key":"setting.home.portfolio.visible","value":"0","created_at":"2023-04-18 14:14:30","updated_at":"2023-04-18 14:15:45"}',
            ),
            159 => 
            array (
                'id' => 160,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:17:16',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:15:05","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":16,"has_detail":0}',
            ),
            160 => 
            array (
                'id' => 161,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:17:32',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:17:16","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":17,"has_detail":0}',
            ),
            161 => 
            array (
                'id' => 162,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:17:46',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:17:32","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":18,"has_detail":0}',
            ),
            162 => 
            array (
                'id' => 163,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:18:33',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:17:46","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":19,"has_detail":0}',
            ),
            163 => 
            array (
                'id' => 164,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:19:14',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:18:33","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":20,"has_detail":0}',
            ),
            164 => 
            array (
                'id' => 165,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:20:44',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:19:14","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":21,"has_detail":0}',
            ),
            165 => 
            array (
                'id' => 166,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:22:45',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:20:44","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":22,"has_detail":0}',
            ),
            166 => 
            array (
                'id' => 167,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:22:56',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:22:45","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":23,"has_detail":0}',
            ),
            167 => 
            array (
                'id' => 168,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:23:14',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:22:56","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":24,"has_detail":0}',
            ),
            168 => 
            array (
                'id' => 169,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:23:25',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:23:14","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":25,"has_detail":0}',
            ),
            169 => 
            array (
                'id' => 170,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:27:00',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:23:25","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":26,"has_detail":0}',
            ),
            170 => 
            array (
                'id' => 171,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:27:13',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:27:00","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":27,"has_detail":0}',
            ),
            171 => 
            array (
                'id' => 172,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:27:29',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:27:13","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":28,"has_detail":0}',
            ),
            172 => 
            array (
                'id' => 173,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:27:39',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:27:29","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":29,"has_detail":0}',
            ),
            173 => 
            array (
                'id' => 174,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:27:42',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:27:39","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":30,"has_detail":0}',
            ),
            174 => 
            array (
                'id' => 175,
                'user_id' => 1,
                'log_date' => '2023-04-18 14:28:24',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":134,"ip":"127.0.0.1","date":"2023-04-18","time":"14:27:42","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":31,"has_detail":0}',
            ),
            175 => 
            array (
                'id' => 176,
                'user_id' => 1,
                'log_date' => '2023-04-18 20:17:25',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48"}',
            ),
            176 => 
            array (
                'id' => 177,
                'user_id' => 1,
                'log_date' => '2023-04-18 20:39:59',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":1,"name":"Isep Lutpi Nur","email":"iseplutpinur7@gmail.com","foto":null,"username":null,"email_verified_at":null,"password":"$2y$10$dcSS0tw\\/fLq75kGxFo6AieEHbjkSMjTdnChnt9IaUifEEBNu\\/PqUy","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2023-04-18 04:44:56"}',
            ),
            177 => 
            array (
                'id' => 178,
                'user_id' => 1,
                'log_date' => '2023-04-18 20:40:56',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":1,"name":"Isep Lutpi Nur","email":"iseplutpinur7@gmail.com","foto":null,"username":null,"email_verified_at":null,"password":"$2y$10$HSKLe6JFg0CYzt3afruop.HHtzpn2gXdNzTfKJFFM.FJ4OSiLDzKC","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2023-04-18 20:39:59"}',
            ),
            178 => 
            array (
                'id' => 179,
                'user_id' => 1,
                'log_date' => '2023-04-18 20:56:55',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":1,"name":"Isep Lutpi Nur","email":"iseplutpinur7@gmail.com","foto":null,"username":null,"email_verified_at":null,"password":"$2y$10$PrnL.Q2jlSDOdAXXCJ0WxuABImbj4TrycHq1jJRwIGIwx35XK2jz2","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2023-04-18 20:40:56"}',
            ),
            179 => 
            array (
                'id' => 180,
                'user_id' => 1,
                'log_date' => '2023-04-18 20:58:12',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":1,"name":"Isep Lutpi Nur","email":"iseplutpinur7@gmail.com","foto":"2023041820565567.png","username":null,"email_verified_at":null,"password":"$2y$10$PrnL.Q2jlSDOdAXXCJ0WxuABImbj4TrycHq1jJRwIGIwx35XK2jz2","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2023-04-18 20:56:55"}',
            ),
            180 => 
            array (
                'id' => 181,
                'user_id' => 1,
                'log_date' => '2023-04-18 20:58:20',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":1,"name":"Isep Lutpi Nur","email":"iseplutpinur7@gmail.com","foto":"2023041820581220.png","username":null,"email_verified_at":null,"password":"$2y$10$PrnL.Q2jlSDOdAXXCJ0WxuABImbj4TrycHq1jJRwIGIwx35XK2jz2","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2023-04-18 20:58:12"}',
            ),
            181 => 
            array (
                'id' => 182,
                'user_id' => 1,
                'log_date' => '2023-04-18 20:58:33',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":1,"name":"Isep Lutpi Nur","email":"iseplutpinur7@gmail.com","foto":"2023041820582070.png","username":null,"email_verified_at":null,"password":"$2y$10$PrnL.Q2jlSDOdAXXCJ0WxuABImbj4TrycHq1jJRwIGIwx35XK2jz2","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2023-04-18 20:58:20"}',
            ),
            182 => 
            array (
                'id' => 183,
                'user_id' => 1,
                'log_date' => '2023-04-18 21:00:47',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":373,"parent_id":null,"title":"Ganti Password","icon":"fas fa-key","route":"admin.password","sequence":41,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-13 13:06:20"}',
            ),
            183 => 
            array (
                'id' => 184,
                'user_id' => 1,
                'log_date' => '2023-04-18 21:00:47',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":373,"updated_at":"2023-04-18T14:00:47.000000Z","created_at":"2023-04-18T14:00:47.000000Z","id":234}',
            ),
            184 => 
            array (
                'id' => 185,
                'user_id' => 1,
                'log_date' => '2023-04-18 21:00:47',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":373,"updated_at":"2023-04-18T14:00:47.000000Z","created_at":"2023-04-18T14:00:47.000000Z","id":235}',
            ),
            185 => 
            array (
                'id' => 186,
                'user_id' => 1,
                'log_date' => '2023-04-18 21:08:41',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":1,"name":"Isep Lutpi Nur","email":"iseplutpinur7@gmail.com","foto":"202304182058334.png","username":null,"email_verified_at":null,"password":"$2y$10$PrnL.Q2jlSDOdAXXCJ0WxuABImbj4TrycHq1jJRwIGIwx35XK2jz2","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2023-04-18 20:58:33"}',
            ),
            186 => 
            array (
                'id' => 187,
                'user_id' => 1,
                'log_date' => '2023-04-18 21:08:47',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":1,"name":"Isep Lutpi Nur tes","email":"iseplutpinur7@gmail.com","foto":"202304182058334.png","username":null,"email_verified_at":null,"password":"$2y$10$PrnL.Q2jlSDOdAXXCJ0WxuABImbj4TrycHq1jJRwIGIwx35XK2jz2","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2023-04-18 21:08:41"}',
            ),
            187 => 
            array (
                'id' => 188,
                'user_id' => 1,
                'log_date' => '2023-04-18 21:08:52',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":1,"name":"Isep Lutpi Nur","email":"iseplutpinur7@gmail.com","foto":"202304182058334.png","username":null,"email_verified_at":null,"password":"$2y$10$PrnL.Q2jlSDOdAXXCJ0WxuABImbj4TrycHq1jJRwIGIwx35XK2jz2","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2023-04-18 21:08:47"}',
            ),
            188 => 
            array (
                'id' => 189,
                'user_id' => 1,
                'log_date' => '2023-04-18 21:08:57',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":1,"name":"Isep Lutpi Nur","email":"iseplutpinur7@gmail.co","foto":"202304182058334.png","username":null,"email_verified_at":null,"password":"$2y$10$PrnL.Q2jlSDOdAXXCJ0WxuABImbj4TrycHq1jJRwIGIwx35XK2jz2","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2023-04-18 21:08:52"}',
            ),
            189 => 
            array (
                'id' => 190,
                'user_id' => 1,
                'log_date' => '2023-04-19 10:28:54',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48"}',
            ),
            190 => 
            array (
                'id' => 191,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:04:08',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":135,"ip":"127.0.0.1","date":"2023-04-19","time":"10:17:30","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":1,"has_detail":0}',
            ),
            191 => 
            array (
                'id' => 192,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:04:18',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":135,"ip":"127.0.0.1","date":"2023-04-19","time":"11:04:08","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":2,"has_detail":0}',
            ),
            192 => 
            array (
                'id' => 193,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:04:45',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":135,"ip":"127.0.0.1","date":"2023-04-19","time":"11:04:18","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":3,"has_detail":0}',
            ),
            193 => 
            array (
                'id' => 194,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:04:49',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":135,"ip":"127.0.0.1","date":"2023-04-19","time":"11:04:45","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.48","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48","hits":4,"has_detail":0}',
            ),
            194 => 
            array (
                'id' => 195,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":412,"parent_id":null,"title":"Slider","icon":null,"route":"admin.setting.home_slider","sequence":44,"active":0,"type":1,"created_at":"2023-01-18 00:11:36","updated_at":"2023-04-13 13:06:20"}',
            ),
            195 => 
            array (
                'id' => 196,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":408,"parent_id":418,"title":"FAQ","icon":null,"route":"admin.kontak.faq","sequence":4,"active":1,"type":1,"created_at":"2022-08-21 08:39:18","updated_at":"2023-03-26 22:35:10"}',
            ),
            196 => 
            array (
                'id' => 197,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":425,"parent_id":418,"title":"Testimonial","icon":null,"route":"admin.home.testimonial","sequence":5,"active":1,"type":1,"created_at":"2023-04-13 13:06:10","updated_at":"2023-04-13 13:06:20"}',
            ),
            197 => 
            array (
                'id' => 198,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":400,"parent_id":418,"title":"Pengaturan Halaman","icon":null,"route":"admin.setting.home","sequence":6,"active":1,"type":1,"created_at":"2022-08-16 14:55:41","updated_at":"2023-04-13 13:06:55"}',
            ),
            198 => 
            array (
                'id' => 199,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":423,"parent_id":418,"title":"Pengurus","icon":"fas fa-users","route":"admin.home.pengurus","sequence":7,"active":0,"type":1,"created_at":"2023-03-26 18:32:49","updated_at":"2023-04-13 13:06:55"}',
            ),
            199 => 
            array (
                'id' => 200,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":413,"parent_id":418,"title":"Kata Kata","icon":"fas fa-star","route":"admin.home.kata_kata","sequence":8,"active":0,"type":1,"created_at":"2023-01-18 00:18:02","updated_at":"2023-04-13 13:06:55"}',
            ),
            200 => 
            array (
                'id' => 201,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":420,"parent_id":418,"title":"Program Pembelajaran","icon":null,"route":"admin.home.program_pembelajaran","sequence":9,"active":0,"type":1,"created_at":"2023-03-24 21:39:21","updated_at":"2023-04-13 13:06:52"}',
            ),
            201 => 
            array (
                'id' => 202,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":422,"parent_id":null,"title":"Tentang","icon":"fab fa-slack-hash","route":"admin.setting.about","sequence":10,"active":0,"type":1,"created_at":"2023-03-26 15:04:17","updated_at":"2023-04-13 13:06:20"}',
            ),
            202 => 
            array (
                'id' => 203,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":360,"parent_id":null,"title":"Galeri","icon":"fas fa-images","route":"admin.galeri","sequence":11,"active":0,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-13 13:06:20"}',
            ),
            203 => 
            array (
                'id' => 204,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":351,"parent_id":null,"title":"Artikel","icon":"fas fa-file-alt","route":null,"sequence":12,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-18 10:52:23"}',
            ),
            204 => 
            array (
                'id' => 205,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":352,"parent_id":351,"title":"Daftar Artikel","icon":null,"route":"admin.artikel.data","sequence":13,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-13 13:06:20"}',
            ),
            205 => 
            array (
                'id' => 206,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":353,"parent_id":351,"title":"Artikel Kategori","icon":null,"route":"admin.artikel.kategori","sequence":14,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-13 13:06:20"}',
            ),
            206 => 
            array (
                'id' => 207,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":354,"parent_id":351,"title":"Artikel Tag","icon":null,"route":"admin.artikel.tag","sequence":15,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-13 13:06:20"}',
            ),
            207 => 
            array (
                'id' => 208,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":421,"parent_id":351,"title":"Banner","icon":"fas fa-image","route":"admin.banner","sequence":16,"active":1,"type":1,"created_at":"2023-03-24 23:53:51","updated_at":"2023-04-13 13:06:20"}',
            ),
            208 => 
            array (
                'id' => 209,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":424,"parent_id":null,"title":"Pendaftaran","icon":"fas fa-user-edit","route":"admin.pendaftaran.santri","sequence":17,"active":0,"type":1,"created_at":"2023-03-26 22:33:01","updated_at":"2023-04-13 13:06:20"}',
            ),
            209 => 
            array (
                'id' => 210,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":364,"parent_id":null,"title":"Kontak","icon":"fas fa-phone","route":null,"sequence":18,"active":0,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-13 13:06:20"}',
            ),
            210 => 
            array (
                'id' => 211,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":363,"parent_id":364,"title":"Sosial Media","icon":"fas fa-share-alt","route":"admin.social_media","sequence":19,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-13 13:06:20"}',
            ),
            211 => 
            array (
                'id' => 212,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":409,"parent_id":364,"title":"Daftar Kontak","icon":null,"route":"admin.kontak.list","sequence":20,"active":1,"type":1,"created_at":"2022-08-21 08:40:08","updated_at":"2023-04-13 13:06:20"}',
            ),
            212 => 
            array (
                'id' => 213,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":407,"parent_id":364,"title":"Pesan Diterima","icon":null,"route":"admin.kontak.message","sequence":21,"active":1,"type":1,"created_at":"2022-08-21 08:38:20","updated_at":"2023-04-13 13:06:20"}',
            ),
            213 => 
            array (
                'id' => 214,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":415,"parent_id":null,"title":"Portfolio","icon":"fas fa-coffee","route":null,"sequence":22,"active":1,"type":1,"created_at":"2023-01-27 22:16:23","updated_at":"2023-04-13 13:06:20"}',
            ),
            214 => 
            array (
                'id' => 215,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":416,"parent_id":415,"title":"Kategori Portfolio","icon":null,"route":"admin.portfolio.kategori","sequence":23,"active":1,"type":1,"created_at":"2023-01-27 22:17:21","updated_at":"2023-04-13 13:06:20"}',
            ),
            215 => 
            array (
                'id' => 216,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":417,"parent_id":415,"title":"Daftar Portfolio","icon":null,"route":"admin.portfolio","sequence":24,"active":1,"type":1,"created_at":"2023-01-27 22:17:43","updated_at":"2023-04-13 13:06:20"}',
            ),
            216 => 
            array (
                'id' => 217,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":419,"parent_id":415,"title":"Marketplace","icon":null,"route":"admin.produk.marketplace","sequence":25,"active":0,"type":1,"created_at":"2023-03-15 14:10:53","updated_at":"2023-04-13 13:06:20"}',
            ),
            217 => 
            array (
                'id' => 218,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":411,"parent_id":null,"title":"Menu Lainnya","icon":null,"route":null,"sequence":26,"active":1,"type":0,"created_at":"2022-09-15 21:18:04","updated_at":"2023-04-13 13:06:20"}',
            ),
            218 => 
            array (
                'id' => 219,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":397,"parent_id":null,"title":"Pengaturan","icon":"fas fa-wrench","route":null,"sequence":27,"active":1,"type":1,"created_at":"2022-08-14 21:10:57","updated_at":"2023-04-13 13:06:20"}',
            ),
            219 => 
            array (
                'id' => 220,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":398,"parent_id":397,"title":"Informasi Admin","icon":null,"route":"admin.setting.admin","sequence":28,"active":1,"type":1,"created_at":"2022-08-14 21:11:42","updated_at":"2023-04-13 13:06:20"}',
            ),
            220 => 
            array (
                'id' => 221,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":399,"parent_id":397,"title":"Informasi Depan","icon":null,"route":"admin.setting.front","sequence":29,"active":1,"type":1,"created_at":"2022-08-14 21:52:45","updated_at":"2023-04-13 13:06:20"}',
            ),
            221 => 
            array (
                'id' => 222,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":393,"parent_id":null,"title":"Peralatan","icon":"fas fa-tools","route":null,"sequence":30,"active":1,"type":1,"created_at":"2022-08-08 22:41:26","updated_at":"2023-04-13 13:06:20"}',
            ),
            222 => 
            array (
                'id' => 223,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":402,"parent_id":393,"title":"Notifikasi Admin","icon":null,"route":"admin.utility.notif_admin_atas","sequence":31,"active":1,"type":1,"created_at":"2022-08-18 16:42:00","updated_at":"2023-04-13 13:06:20"}',
            ),
            223 => 
            array (
                'id' => 224,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":394,"parent_id":393,"title":"Notifikasi Depan","icon":null,"route":"admin.utility.notif_depan_atas","sequence":32,"active":1,"type":1,"created_at":"2022-08-08 22:41:53","updated_at":"2023-04-13 13:06:20"}',
            ),
            224 => 
            array (
                'id' => 225,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":401,"parent_id":393,"title":"Hari Besar Nasional","icon":null,"route":"admin.utility.hari_besar_nasional","sequence":33,"active":1,"type":1,"created_at":"2022-08-17 21:19:05","updated_at":"2023-04-13 13:06:20"}',
            ),
            225 => 
            array (
                'id' => 226,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":346,"parent_id":null,"title":"Manajemen Pengguna","icon":"fas fa-users","route":"admin.user","sequence":34,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-13 13:06:20"}',
            ),
            226 => 
            array (
                'id' => 227,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":361,"parent_id":null,"title":"Menu Management","icon":"fas fa-stream","route":null,"sequence":35,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-13 13:06:20"}',
            ),
            227 => 
            array (
                'id' => 228,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":405,"parent_id":361,"title":"Admin","icon":null,"route":"admin.menu.admin","sequence":36,"active":1,"type":1,"created_at":"2022-08-20 14:12:45","updated_at":"2023-04-13 13:06:20"}',
            ),
            228 => 
            array (
                'id' => 229,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":406,"parent_id":361,"title":"Depan","icon":null,"route":"admin.menu.frontend","sequence":37,"active":1,"type":1,"created_at":"2022-08-20 14:16:07","updated_at":"2023-04-13 13:06:20"}',
            ),
            229 => 
            array (
                'id' => 230,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":367,"parent_id":null,"title":"User Access","icon":"fas fa-user-check","route":null,"sequence":38,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-13 13:06:20"}',
            ),
            230 => 
            array (
                'id' => 231,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":368,"parent_id":367,"title":"Permission","icon":null,"route":"admin.user_access.permission","sequence":39,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-13 13:06:20"}',
            ),
            231 => 
            array (
                'id' => 232,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":369,"parent_id":367,"title":"Role","icon":null,"route":"admin.user_access.role","sequence":40,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-13 13:06:20"}',
            ),
            232 => 
            array (
                'id' => 233,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":373,"parent_id":null,"title":"Profile","icon":"fas fa-user","route":"admin.profile","sequence":41,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-18 21:00:47"}',
            ),
            233 => 
            array (
                'id' => 234,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":386,"parent_id":null,"title":"Logout","icon":"fas fa-sign-out-alt","route":"logout","sequence":42,"active":1,"type":1,"created_at":"2022-08-05 23:54:09","updated_at":"2023-04-13 13:06:20"}',
            ),
            234 => 
            array (
                'id' => 235,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":392,"parent_id":null,"title":"Google Form","icon":"fas fa-user-edit","route":"admin.pendaftaran.gform","sequence":43,"active":0,"type":1,"created_at":"2022-08-08 16:14:54","updated_at":"2023-04-13 13:06:20"}',
            ),
            235 => 
            array (
                'id' => 236,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:38',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":412,"parent_id":418,"title":"Slider","icon":null,"route":"admin.setting.home_slider","sequence":4,"active":0,"type":1,"created_at":"2023-01-18 00:11:36","updated_at":"2023-04-19 11:12:31"}',
            ),
            236 => 
            array (
                'id' => 237,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:38',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":412,"updated_at":"2023-04-19T04:12:38.000000Z","created_at":"2023-04-19T04:12:38.000000Z","id":236}',
            ),
            237 => 
            array (
                'id' => 238,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:38',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":412,"updated_at":"2023-04-19T04:12:38.000000Z","created_at":"2023-04-19T04:12:38.000000Z","id":237}',
            ),
            238 => 
            array (
                'id' => 239,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:50',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":408,"parent_id":418,"title":"FAQ","icon":null,"route":"admin.kontak.faq","sequence":5,"active":1,"type":1,"created_at":"2022-08-21 08:39:18","updated_at":"2023-04-19 11:12:31"}',
            ),
            239 => 
            array (
                'id' => 240,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:12:50',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":412,"parent_id":418,"title":"Slider","icon":null,"route":"admin.setting.home_slider","sequence":4,"active":1,"type":1,"created_at":"2023-01-18 00:11:36","updated_at":"2023-04-19 11:12:38"}',
            ),
            240 => 
            array (
                'id' => 241,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:13:04',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":412,"parent_id":418,"title":"Slider","icon":null,"route":"admin.setting.home_slider","sequence":5,"active":1,"type":1,"created_at":"2023-01-18 00:11:36","updated_at":"2023-04-19 11:12:50"}',
            ),
            241 => 
            array (
                'id' => 242,
                'user_id' => 1,
                'log_date' => '2023-04-19 11:13:04',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":408,"parent_id":418,"title":"FAQ","icon":null,"route":"admin.kontak.faq","sequence":4,"active":1,"type":1,"created_at":"2022-08-21 08:39:18","updated_at":"2023-04-19 11:12:50"}',
            ),
            242 => 
            array (
                'id' => 243,
                'user_id' => 1,
                'log_date' => '2023-04-19 13:32:35',
                'table_name' => 'home_sliders',
                'log_type' => 'edit',
                'data' => '{"id":3,"urutan":0,"nama":"1","foto":"20230124152804.jpeg","judul":null,"keterangan":null,"tombol_judul":null,"tombol_link":null,"tampilkan":"Ya","created_at":"2023-01-17 22:39:36","updated_at":"2023-01-24 15:28:04"}',
            ),
            243 => 
            array (
                'id' => 244,
                'user_id' => 1,
                'log_date' => '2023-04-19 13:33:43',
                'table_name' => 'portfolio_item',
                'log_type' => 'create',
                'data' => '{"portfolio_id":"13","nama":"ISEP LUTPI NUR","keterangan":"123","urutan":1,"updated_at":"2023-04-19T06:33:43.000000Z","created_at":"2023-04-19T06:33:43.000000Z","id":2}',
            ),
            244 => 
            array (
                'id' => 245,
                'user_id' => 1,
                'log_date' => '2023-04-19 13:33:46',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":2,"portfolio_id":13,"urutan":1,"nama":"ISEP LUTPI NUR","keterangan":"123","created_at":"2023-04-19 13:33:43","updated_at":"2023-04-19 13:33:43"}',
            ),
            245 => 
            array (
                'id' => 246,
                'user_id' => 1,
                'log_date' => '2023-04-19 13:34:33',
                'table_name' => 'home_sliders',
                'log_type' => 'delete',
                'data' => '{"id":4,"urutan":0,"nama":"2","foto":"20230117224024.jpeg","judul":null,"keterangan":null,"tombol_judul":null,"tombol_link":null,"tampilkan":"Ya","created_at":"2023-01-17 22:40:24","updated_at":"2023-01-17 22:47:05"}',
            ),
            246 => 
            array (
                'id' => 247,
                'user_id' => 1,
                'log_date' => '2023-04-19 13:34:35',
                'table_name' => 'home_sliders',
                'log_type' => 'delete',
                'data' => '{"id":5,"urutan":0,"nama":"3","foto":"20230117224031.jpeg","judul":null,"keterangan":null,"tombol_judul":null,"tombol_link":null,"tampilkan":"Ya","created_at":"2023-01-17 22:40:31","updated_at":"2023-01-17 22:47:09"}',
            ),
            247 => 
            array (
                'id' => 248,
                'user_id' => 1,
                'log_date' => '2023-04-19 13:34:39',
                'table_name' => 'home_sliders',
                'log_type' => 'delete',
                'data' => '{"id":6,"urutan":0,"nama":"4","foto":"20230124152929.jpeg","judul":null,"keterangan":null,"tombol_judul":null,"tombol_link":null,"tampilkan":"Ya","created_at":"2023-01-17 22:40:37","updated_at":"2023-01-24 15:29:29"}',
            ),
            248 => 
            array (
                'id' => 249,
                'user_id' => 1,
                'log_date' => '2023-04-19 13:34:42',
                'table_name' => 'home_sliders',
                'log_type' => 'delete',
                'data' => '{"id":7,"urutan":0,"nama":"5","foto":"20230117224046.jpeg","judul":null,"keterangan":null,"tombol_judul":null,"tombol_link":null,"tampilkan":"Ya","created_at":"2023-01-17 22:40:46","updated_at":"2023-01-17 22:47:18"}',
            ),
            249 => 
            array (
                'id' => 250,
                'user_id' => 1,
                'log_date' => '2023-04-19 13:35:45',
                'table_name' => 'home_sliders',
                'log_type' => 'edit',
                'data' => '{"id":3,"urutan":1,"nama":"1","foto":"20230419133235.png","judul":null,"keterangan":null,"tombol_judul":null,"tombol_link":null,"tampilkan":"Ya","created_at":"2023-01-17 22:39:36","updated_at":"2023-04-19 13:32:35"}',
            ),
            250 => 
            array (
                'id' => 251,
                'user_id' => 1,
                'log_date' => '2023-04-19 13:57:55',
                'table_name' => 'home_sliders',
                'log_type' => 'edit',
                'data' => '{"id":3,"urutan":2,"nama":"1","foto":"20230419133545.png","judul":null,"keterangan":null,"tombol_judul":null,"tombol_link":null,"tampilkan":"Ya","created_at":"2023-01-17 22:39:36","updated_at":"2023-04-19 13:35:45"}',
            ),
            251 => 
            array (
                'id' => 252,
                'user_id' => 1,
                'log_date' => '2023-04-19 13:58:23',
                'table_name' => 'home_sliders',
                'log_type' => 'edit',
                'data' => '{"id":3,"urutan":1,"nama":"1","foto":"20230419133545.png","judul":"Jasa Website, Desain, Foto, Video dan Sosial Media Marketing Cepat, Murah dan Berkualitas.","keterangan":"Banyak bisnis UKM, menengah dan besar telah menggunakan Cempor Digital untuk kebutuhan promosi dan branding bisnis mereka","tombol_judul":"Get Started","tombol_link":"__base_url__\\/contact","tampilkan":"Ya","created_at":"2023-01-17 22:39:36","updated_at":"2023-04-19 13:57:55"}',
            ),
            252 => 
            array (
                'id' => 253,
                'user_id' => 1,
                'log_date' => '2023-04-19 13:59:03',
                'table_name' => 'home_sliders',
                'log_type' => 'create',
                'data' => '{"urutan":2,"foto":"20230419135903.png","nama":"Utama","judul":"Jasa Website, Desain, Foto, Video dan Sosial Media Marketing Cepat, Murah dan Berkualitas.","keterangan":"Banyak bisnis UKM, menengah dan besar telah menggunakan Cempor Digital untuk kebutuhan promosi dan branding bisnis mereka","tombol_judul":"Get Started","tombol_link":"__base_url__\\/contact","tampilkan":"Ya","updated_at":"2023-04-19T06:59:03.000000Z","created_at":"2023-04-19T06:59:03.000000Z","id":8}',
            ),
            253 => 
            array (
                'id' => 254,
                'user_id' => 1,
                'log_date' => '2023-04-19 13:59:21',
                'table_name' => 'home_sliders',
                'log_type' => 'create',
                'data' => '{"urutan":3,"foto":"20230419135921.png","nama":"Utama","judul":"Jasa Website, Desain, Foto, Video dan Sosial Media Marketing Cepat, Murah dan Berkualitas.","keterangan":"Banyak bisnis UKM, menengah dan besar telah menggunakan Cempor Digital untuk kebutuhan promosi dan branding bisnis mereka","tombol_judul":"Get Started","tombol_link":"__base_url__\\/contact","tampilkan":"Ya","updated_at":"2023-04-19T06:59:21.000000Z","created_at":"2023-04-19T06:59:21.000000Z","id":9}',
            ),
            254 => 
            array (
                'id' => 255,
                'user_id' => 1,
                'log_date' => '2023-04-19 16:16:53',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48"}',
            ),
            255 => 
            array (
                'id' => 256,
                'user_id' => 1,
                'log_date' => '2023-04-19 16:18:43',
                'table_name' => 'home_sliders',
                'log_type' => 'edit',
                'data' => '{"id":8,"urutan":2,"nama":"Utama","foto":"20230419135903.png","judul":"Jasa Website, Desain, Foto, Video dan Sosial Media Marketing Cepat, Murah dan Berkualitas.","keterangan":"Banyak bisnis UKM, menengah dan besar telah menggunakan Cempor Digital untuk kebutuhan promosi dan branding bisnis mereka","tombol_judul":"Get Started","tombol_link":"__base_url__\\/contact","tampilkan":"Ya","created_at":"2023-04-19 13:59:03","updated_at":"2023-04-19 13:59:03","tombol_video_judul":null,"tombol_video_link":null}',
            ),
            256 => 
            array (
                'id' => 257,
                'user_id' => 1,
                'log_date' => '2023-04-19 17:19:32',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48"}',
            ),
            257 => 
            array (
                'id' => 258,
                'user_id' => 1,
                'log_date' => '2023-04-19 18:50:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":360,"parent_id":null,"title":"Galeri","icon":"fas fa-images","route":"admin.galeri","sequence":12,"active":0,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-19 11:12:31"}',
            ),
            258 => 
            array (
                'id' => 259,
                'user_id' => 1,
                'log_date' => '2023-04-19 18:50:30',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":360,"updated_at":"2023-04-19T11:50:30.000000Z","created_at":"2023-04-19T11:50:30.000000Z","id":238}',
            ),
            259 => 
            array (
                'id' => 260,
                'user_id' => 1,
                'log_date' => '2023-04-19 18:50:30',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":360,"updated_at":"2023-04-19T11:50:30.000000Z","created_at":"2023-04-19T11:50:30.000000Z","id":239}',
            ),
            260 => 
            array (
                'id' => 261,
                'user_id' => 1,
                'log_date' => '2023-04-19 18:50:35',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":422,"parent_id":null,"title":"Tentang","icon":"fab fa-slack-hash","route":"admin.setting.about","sequence":11,"active":0,"type":1,"created_at":"2023-03-26 15:04:17","updated_at":"2023-04-19 11:12:31"}',
            ),
            261 => 
            array (
                'id' => 262,
                'user_id' => 1,
                'log_date' => '2023-04-19 18:50:35',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":422,"updated_at":"2023-04-19T11:50:35.000000Z","created_at":"2023-04-19T11:50:35.000000Z","id":240}',
            ),
            262 => 
            array (
                'id' => 263,
                'user_id' => 1,
                'log_date' => '2023-04-19 18:50:35',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":422,"updated_at":"2023-04-19T11:50:35.000000Z","created_at":"2023-04-19T11:50:35.000000Z","id":241}',
            ),
            263 => 
            array (
                'id' => 264,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:04:11',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
            'data' => '{"key":"about.html","value":"<p>Masih dalam proses Testing<p><img data-bs-filename=\\"Group 4 (1).png\\" style=\\"width: 760px;\\" src=\\"\\/assets\\/about\\/16798180740.png\\"><br><\\/p><p><\\/p><\\/p>\\n","updated_at":"2023-04-19T12:04:11.000000Z","created_at":"2023-04-19T12:04:11.000000Z","id":1}',
            ),
            264 => 
            array (
                'id' => 265,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:04:11',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"about.judul","value":"Tentang Kami","updated_at":"2023-04-19T12:04:11.000000Z","created_at":"2023-04-19T12:04:11.000000Z","id":2}',
            ),
            265 => 
            array (
                'id' => 266,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:08:10',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":364,"parent_id":null,"title":"Kontak","icon":"fas fa-phone","route":null,"sequence":19,"active":0,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-19 11:12:31"}',
            ),
            266 => 
            array (
                'id' => 267,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:08:10',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":364,"updated_at":"2023-04-19T12:08:10.000000Z","created_at":"2023-04-19T12:08:10.000000Z","id":242}',
            ),
            267 => 
            array (
                'id' => 268,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:08:10',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":364,"updated_at":"2023-04-19T12:08:10.000000Z","created_at":"2023-04-19T12:08:10.000000Z","id":243}',
            ),
            268 => 
            array (
                'id' => 269,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:13:28',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.contact.message.title","value":"Kirim Pesan","updated_at":"2023-04-19T12:13:28.000000Z","created_at":"2023-04-19T12:13:28.000000Z","id":3}',
            ),
            269 => 
            array (
                'id' => 270,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:13:28',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.contact.message.sub_title","value":"Kirim pesan dibawah ini kepada kami jika ada yang ingin ditanyakan.","updated_at":"2023-04-19T12:13:28.000000Z","created_at":"2023-04-19T12:13:28.000000Z","id":4}',
            ),
            270 => 
            array (
                'id' => 271,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:13:28',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.contact.message.name","value":null,"updated_at":"2023-04-19T12:13:28.000000Z","created_at":"2023-04-19T12:13:28.000000Z","id":5}',
            ),
            271 => 
            array (
                'id' => 272,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:13:28',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.contact.message.name_placeholder","value":"Nama Lengkap*","updated_at":"2023-04-19T12:13:28.000000Z","created_at":"2023-04-19T12:13:28.000000Z","id":6}',
            ),
            272 => 
            array (
                'id' => 273,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:13:28',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.contact.message.email","value":null,"updated_at":"2023-04-19T12:13:28.000000Z","created_at":"2023-04-19T12:13:28.000000Z","id":7}',
            ),
            273 => 
            array (
                'id' => 274,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:13:28',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.contact.message.email_placeholder","value":"Email*","updated_at":"2023-04-19T12:13:28.000000Z","created_at":"2023-04-19T12:13:28.000000Z","id":8}',
            ),
            274 => 
            array (
                'id' => 275,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:13:28',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.contact.message.message","value":null,"updated_at":"2023-04-19T12:13:28.000000Z","created_at":"2023-04-19T12:13:28.000000Z","id":9}',
            ),
            275 => 
            array (
                'id' => 276,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:13:28',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.contact.message.message_placeholder","value":"Pesan*","updated_at":"2023-04-19T12:13:28.000000Z","created_at":"2023-04-19T12:13:28.000000Z","id":10}',
            ),
            276 => 
            array (
                'id' => 277,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:13:28',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.contact.message.button_text","value":"Kirim Pesan","updated_at":"2023-04-19T12:13:28.000000Z","created_at":"2023-04-19T12:13:28.000000Z","id":11}',
            ),
            277 => 
            array (
                'id' => 278,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:14:06',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":392,"parent_id":null,"title":"Google Form","icon":"fas fa-user-edit","route":"admin.pendaftaran.gform","sequence":44,"active":0,"type":1,"created_at":"2022-08-08 16:14:54","updated_at":"2023-04-19 11:12:31"}',
            ),
            278 => 
            array (
                'id' => 279,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:14:06',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":392,"updated_at":"2023-04-19T12:14:06.000000Z","created_at":"2023-04-19T12:14:06.000000Z","id":244}',
            ),
            279 => 
            array (
                'id' => 280,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:14:06',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":392,"updated_at":"2023-04-19T12:14:06.000000Z","created_at":"2023-04-19T12:14:06.000000Z","id":245}',
            ),
            280 => 
            array (
                'id' => 281,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:35:24',
                'table_name' => 'notif_admin_atas',
                'log_type' => 'edit',
                'data' => '{"id":2,"nama":"asdfasdf","deskripsi":"asdf","dari":"2023-04-01","sampai":"2023-04-03","link":null,"link_nama":"sadffasdf","created_at":"2023-04-15 16:58:15","updated_at":"2023-04-15 16:58:15"}',
            ),
            281 => 
            array (
                'id' => 282,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:35:36',
                'table_name' => 'notif_admin_atas',
                'log_type' => 'edit',
                'data' => '{"id":2,"nama":"asdfasdf","deskripsi":"asdf","dari":"2023-04-01","sampai":null,"link":null,"link_nama":"sadffasdf","created_at":"2023-04-15 16:58:15","updated_at":"2023-04-19 19:35:24"}',
            ),
            282 => 
            array (
                'id' => 283,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:36:34',
                'table_name' => 'notif_admin_atas',
                'log_type' => 'edit',
                'data' => '{"id":2,"nama":"asdfasdf","deskripsi":"asdf","dari":"2023-04-01","sampai":"2023-04-18","link":null,"link_nama":"sadffasdf","created_at":"2023-04-15 16:58:15","updated_at":"2023-04-19 19:35:36"}',
            ),
            283 => 
            array (
                'id' => 284,
                'user_id' => 1,
                'log_date' => '2023-04-19 19:36:41',
                'table_name' => 'notif_admin_atas',
                'log_type' => 'edit',
                'data' => '{"id":2,"nama":"asdfasdf","deskripsi":"asdf","dari":"2023-04-01","sampai":null,"link":null,"link_nama":"sadffasdf","created_at":"2023-04-15 16:58:15","updated_at":"2023-04-19 19:36:34"}',
            ),
            284 => 
            array (
                'id' => 285,
                'user_id' => 1,
                'log_date' => '2023-04-19 20:11:33',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48"}',
            ),
            285 => 
            array (
                'id' => 286,
                'user_id' => 1,
                'log_date' => '2023-04-24 11:40:43',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.58"}',
            ),
            286 => 
            array (
                'id' => 287,
                'user_id' => 1,
                'log_date' => '2023-04-24 11:42:33',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":392,"parent_id":null,"title":"Google Form","icon":"fas fa-user-edit","route":"admin.pendaftaran.gform","sequence":44,"active":1,"type":1,"created_at":"2022-08-08 16:14:54","updated_at":"2023-04-19 19:14:06"}',
            ),
            287 => 
            array (
                'id' => 288,
                'user_id' => 1,
                'log_date' => '2023-04-24 11:42:33',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":392,"updated_at":"2023-04-24T04:42:33.000000Z","created_at":"2023-04-24T04:42:33.000000Z","id":246}',
            ),
            288 => 
            array (
                'id' => 289,
                'user_id' => 1,
                'log_date' => '2023-04-24 11:42:33',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":392,"updated_at":"2023-04-24T04:42:33.000000Z","created_at":"2023-04-24T04:42:33.000000Z","id":247}',
            ),
            289 => 
            array (
                'id' => 290,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:24:35',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.58"}',
            ),
            290 => 
            array (
                'id' => 291,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:23',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":14,"updated_at":"2023-04-24T13:33:23.000000Z","created_at":"2023-04-24T13:33:23.000000Z","id":1}',
            ),
            291 => 
            array (
                'id' => 292,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:24',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":15,"updated_at":"2023-04-24T13:33:24.000000Z","created_at":"2023-04-24T13:33:24.000000Z","id":2}',
            ),
            292 => 
            array (
                'id' => 293,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:24',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":34,"updated_at":"2023-04-24T13:33:24.000000Z","created_at":"2023-04-24T13:33:24.000000Z","id":3}',
            ),
            293 => 
            array (
                'id' => 294,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:25',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":35,"updated_at":"2023-04-24T13:33:25.000000Z","created_at":"2023-04-24T13:33:25.000000Z","id":4}',
            ),
            294 => 
            array (
                'id' => 295,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:25',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":36,"updated_at":"2023-04-24T13:33:25.000000Z","created_at":"2023-04-24T13:33:25.000000Z","id":5}',
            ),
            295 => 
            array (
                'id' => 296,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:25',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":37,"updated_at":"2023-04-24T13:33:25.000000Z","created_at":"2023-04-24T13:33:25.000000Z","id":6}',
            ),
            296 => 
            array (
                'id' => 297,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:26',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":38,"updated_at":"2023-04-24T13:33:26.000000Z","created_at":"2023-04-24T13:33:26.000000Z","id":7}',
            ),
            297 => 
            array (
                'id' => 298,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:26',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":39,"updated_at":"2023-04-24T13:33:26.000000Z","created_at":"2023-04-24T13:33:26.000000Z","id":8}',
            ),
            298 => 
            array (
                'id' => 299,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:27',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":40,"updated_at":"2023-04-24T13:33:26.000000Z","created_at":"2023-04-24T13:33:26.000000Z","id":9}',
            ),
            299 => 
            array (
                'id' => 300,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:27',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":41,"updated_at":"2023-04-24T13:33:27.000000Z","created_at":"2023-04-24T13:33:27.000000Z","id":10}',
            ),
            300 => 
            array (
                'id' => 301,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:28',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":42,"updated_at":"2023-04-24T13:33:28.000000Z","created_at":"2023-04-24T13:33:28.000000Z","id":11}',
            ),
            301 => 
            array (
                'id' => 302,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:28',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"192.168.190.26","visitors_id":43,"updated_at":"2023-04-24T13:33:28.000000Z","created_at":"2023-04-24T13:33:28.000000Z","id":12}',
            ),
            302 => 
            array (
                'id' => 303,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:28',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":44,"updated_at":"2023-04-24T13:33:28.000000Z","created_at":"2023-04-24T13:33:28.000000Z","id":13}',
            ),
            303 => 
            array (
                'id' => 304,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:29',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":45,"updated_at":"2023-04-24T13:33:29.000000Z","created_at":"2023-04-24T13:33:29.000000Z","id":14}',
            ),
            304 => 
            array (
                'id' => 305,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:29',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":46,"updated_at":"2023-04-24T13:33:29.000000Z","created_at":"2023-04-24T13:33:29.000000Z","id":15}',
            ),
            305 => 
            array (
                'id' => 306,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:30',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.106.250","visitors_id":47,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:30.000000Z","created_at":"2023-04-24T13:33:30.000000Z","id":16}',
            ),
            306 => 
            array (
                'id' => 307,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:30',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.106.250","visitors_id":48,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:30.000000Z","created_at":"2023-04-24T13:33:30.000000Z","id":17}',
            ),
            307 => 
            array (
                'id' => 308,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:30',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":49,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2800,103.8539","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:33:30.000000Z","created_at":"2023-04-24T13:33:30.000000Z","id":18}',
            ),
            308 => 
            array (
                'id' => 309,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:31',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.106.226","visitors_id":50,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:31.000000Z","created_at":"2023-04-24T13:33:31.000000Z","id":19}',
            ),
            309 => 
            array (
                'id' => 310,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:31',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.106.226","visitors_id":51,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:31.000000Z","created_at":"2023-04-24T13:33:31.000000Z","id":20}',
            ),
            310 => 
            array (
                'id' => 311,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:32',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"34.195.25.237","visitors_id":52,"city":"Ashburn","region":"Virginia","country_code":"US","country":"United States of America","loc":"39.0437,-77.4875","timezone":"America\\/New_York","updated_at":"2023-04-24T13:33:32.000000Z","created_at":"2023-04-24T13:33:32.000000Z","id":21}',
            ),
            311 => 
            array (
                'id' => 312,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:32',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.100.106","visitors_id":53,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:32.000000Z","created_at":"2023-04-24T13:33:32.000000Z","id":22}',
            ),
            312 => 
            array (
                'id' => 313,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:33',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"64.233.172.221","visitors_id":54,"city":"Des Moines","region":"Iowa","country_code":"US","country":"United States of America","loc":"41.6005,-93.6091","timezone":"America\\/Chicago","updated_at":"2023-04-24T13:33:33.000000Z","created_at":"2023-04-24T13:33:33.000000Z","id":23}',
            ),
            313 => 
            array (
                'id' => 314,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:33',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"109.75.212.102","visitors_id":55,"city":"Frankfurt am Main","region":"Hesse","country_code":"DE","country":"Germany","loc":"50.1155,8.6842","timezone":"Europe\\/Berlin","updated_at":"2023-04-24T13:33:33.000000Z","created_at":"2023-04-24T13:33:33.000000Z","id":24}',
            ),
            314 => 
            array (
                'id' => 315,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:34',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"175.101.69.68","visitors_id":56,"city":"Chennai","region":"Tamil Nadu","country_code":"IN","country":"India","loc":"13.0878,80.2785","timezone":"Asia\\/Kolkata","updated_at":"2023-04-24T13:33:34.000000Z","created_at":"2023-04-24T13:33:34.000000Z","id":25}',
            ),
            315 => 
            array (
                'id' => 316,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:34',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.89.196","visitors_id":57,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-04-24T13:33:34.000000Z","created_at":"2023-04-24T13:33:34.000000Z","id":26}',
            ),
            316 => 
            array (
                'id' => 317,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:35',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.89.193","visitors_id":58,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-04-24T13:33:35.000000Z","created_at":"2023-04-24T13:33:35.000000Z","id":27}',
            ),
            317 => 
            array (
                'id' => 318,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:35',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.64.195","visitors_id":59,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-04-24T13:33:35.000000Z","created_at":"2023-04-24T13:33:35.000000Z","id":28}',
            ),
            318 => 
            array (
                'id' => 319,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:35',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.192","visitors_id":60,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-04-24T13:33:35.000000Z","created_at":"2023-04-24T13:33:35.000000Z","id":29}',
            ),
            319 => 
            array (
                'id' => 320,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:36',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.64.198","visitors_id":61,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-04-24T13:33:36.000000Z","created_at":"2023-04-24T13:33:36.000000Z","id":30}',
            ),
            320 => 
            array (
                'id' => 321,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:36',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.106.246","visitors_id":62,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:36.000000Z","created_at":"2023-04-24T13:33:36.000000Z","id":31}',
            ),
            321 => 
            array (
                'id' => 322,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:37',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.100.106","visitors_id":63,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:37.000000Z","created_at":"2023-04-24T13:33:37.000000Z","id":32}',
            ),
            322 => 
            array (
                'id' => 323,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:37',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.106.246","visitors_id":64,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:37.000000Z","created_at":"2023-04-24T13:33:37.000000Z","id":33}',
            ),
            323 => 
            array (
                'id' => 324,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:38',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.70.80","visitors_id":65,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:38.000000Z","created_at":"2023-04-24T13:33:38.000000Z","id":34}',
            ),
            324 => 
            array (
                'id' => 325,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:38',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"205.169.39.25","visitors_id":66,"city":"Bartlesville","region":"Oklahoma","country_code":"US","country":"United States of America","loc":"36.7473,-95.9808","timezone":"America\\/Chicago","updated_at":"2023-04-24T13:33:38.000000Z","created_at":"2023-04-24T13:33:38.000000Z","id":35}',
            ),
            325 => 
            array (
                'id' => 326,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:39',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.73.36","visitors_id":67,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:39.000000Z","created_at":"2023-04-24T13:33:39.000000Z","id":36}',
            ),
            326 => 
            array (
                'id' => 327,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:39',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.70.28","visitors_id":68,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:39.000000Z","created_at":"2023-04-24T13:33:39.000000Z","id":37}',
            ),
            327 => 
            array (
                'id' => 328,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:40',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"103.147.8.97","visitors_id":69,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:39.000000Z","created_at":"2023-04-24T13:33:39.000000Z","id":38}',
            ),
            328 => 
            array (
                'id' => 329,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:40',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.71.32","visitors_id":70,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:40.000000Z","created_at":"2023-04-24T13:33:40.000000Z","id":39}',
            ),
            329 => 
            array (
                'id' => 330,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:40',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.73.36","visitors_id":71,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:40.000000Z","created_at":"2023-04-24T13:33:40.000000Z","id":40}',
            ),
            330 => 
            array (
                'id' => 331,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:41',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.71.32","visitors_id":72,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:41.000000Z","created_at":"2023-04-24T13:33:41.000000Z","id":41}',
            ),
            331 => 
            array (
                'id' => 332,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:41',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.5.217.132","visitors_id":73,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:41.000000Z","created_at":"2023-04-24T13:33:41.000000Z","id":42}',
            ),
            332 => 
            array (
                'id' => 333,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:42',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"45.55.112.20","visitors_id":74,"city":"San Francisco","region":"California","country_code":"US","country":"United States of America","loc":"37.7309,-122.3886","timezone":"America\\/Los_Angeles","updated_at":"2023-04-24T13:33:42.000000Z","created_at":"2023-04-24T13:33:42.000000Z","id":43}',
            ),
            333 => 
            array (
                'id' => 334,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:42',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"45.90.62.183","visitors_id":75,"city":"Pos\\u00eblok Mar\\u2019ino","region":"Moscow Oblast","country_code":"RU","country":"Russian Federation","loc":"55.5500,37.3200","timezone":"Europe\\/Moscow","updated_at":"2023-04-24T13:33:42.000000Z","created_at":"2023-04-24T13:33:42.000000Z","id":44}',
            ),
            334 => 
            array (
                'id' => 335,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:43',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"176.53.217.213","visitors_id":76,"city":"Pos\\u00eblok Mar\\u2019ino","region":"Moscow Oblast","country_code":"RU","country":"Russian Federation","loc":"55.5500,37.3200","timezone":"Europe\\/Moscow","updated_at":"2023-04-24T13:33:43.000000Z","created_at":"2023-04-24T13:33:43.000000Z","id":45}',
            ),
            335 => 
            array (
                'id' => 336,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:43',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":77,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2800,103.8539","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:33:43.000000Z","created_at":"2023-04-24T13:33:43.000000Z","id":46}',
            ),
            336 => 
            array (
                'id' => 337,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:44',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"183.129.153.157","visitors_id":78,"city":"Hangzhou","region":"Zhejiang","country_code":"CN","country":"China","loc":"30.2936,120.1614","timezone":"Asia\\/Shanghai","updated_at":"2023-04-24T13:33:44.000000Z","created_at":"2023-04-24T13:33:44.000000Z","id":47}',
            ),
            337 => 
            array (
                'id' => 338,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:44',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":79,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2800,103.8539","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:33:44.000000Z","created_at":"2023-04-24T13:33:44.000000Z","id":48}',
            ),
            338 => 
            array (
                'id' => 339,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:45',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.192","visitors_id":80,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-04-24T13:33:45.000000Z","created_at":"2023-04-24T13:33:45.000000Z","id":49}',
            ),
            339 => 
            array (
                'id' => 340,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:45',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"176.53.220.156","visitors_id":81,"city":"Pos\\u00eblok Mar\\u2019ino","region":"Moscow Oblast","country_code":"RU","country":"Russian Federation","loc":"55.5500,37.3200","timezone":"Europe\\/Moscow","updated_at":"2023-04-24T13:33:45.000000Z","created_at":"2023-04-24T13:33:45.000000Z","id":50}',
            ),
            340 => 
            array (
                'id' => 341,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:45',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"45.90.63.167","visitors_id":82,"city":"Pos\\u00eblok Mar\\u2019ino","region":"Moscow Oblast","country_code":"RU","country":"Russian Federation","loc":"55.5500,37.3200","timezone":"Europe\\/Moscow","updated_at":"2023-04-24T13:33:45.000000Z","created_at":"2023-04-24T13:33:45.000000Z","id":51}',
            ),
            341 => 
            array (
                'id' => 342,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:46',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.198","visitors_id":83,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-04-24T13:33:46.000000Z","created_at":"2023-04-24T13:33:46.000000Z","id":52}',
            ),
            342 => 
            array (
                'id' => 343,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:46',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":84,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2800,103.8539","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:33:46.000000Z","created_at":"2023-04-24T13:33:46.000000Z","id":53}',
            ),
            343 => 
            array (
                'id' => 344,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:47',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":85,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2800,103.8539","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:33:47.000000Z","created_at":"2023-04-24T13:33:47.000000Z","id":54}',
            ),
            344 => 
            array (
                'id' => 345,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:47',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.192","visitors_id":86,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-04-24T13:33:47.000000Z","created_at":"2023-04-24T13:33:47.000000Z","id":55}',
            ),
            345 => 
            array (
                'id' => 346,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:48',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.195","visitors_id":87,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-04-24T13:33:48.000000Z","created_at":"2023-04-24T13:33:48.000000Z","id":56}',
            ),
            346 => 
            array (
                'id' => 347,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:48',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":88,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2800,103.8539","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:33:48.000000Z","created_at":"2023-04-24T13:33:48.000000Z","id":57}',
            ),
            347 => 
            array (
                'id' => 348,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.106.6","visitors_id":89,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:49.000000Z","created_at":"2023-04-24T13:33:49.000000Z","id":58}',
            ),
            348 => 
            array (
                'id' => 349,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":90,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2800,103.8539","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:33:49.000000Z","created_at":"2023-04-24T13:33:49.000000Z","id":59}',
            ),
            349 => 
            array (
                'id' => 350,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.79.70","visitors_id":91,"city":"Salem","region":"Oregon","country_code":"US","country":"United States of America","loc":"44.9429,-123.0351","timezone":"America\\/Los_Angeles","updated_at":"2023-04-24T13:33:49.000000Z","created_at":"2023-04-24T13:33:49.000000Z","id":60}',
            ),
            350 => 
            array (
                'id' => 351,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":92,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2800,103.8539","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:33:50.000000Z","created_at":"2023-04-24T13:33:50.000000Z","id":61}',
            ),
            351 => 
            array (
                'id' => 352,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.198","visitors_id":93,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-04-24T13:33:50.000000Z","created_at":"2023-04-24T13:33:50.000000Z","id":62}',
            ),
            352 => 
            array (
                'id' => 353,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:51',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.70.191","visitors_id":94,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:51.000000Z","created_at":"2023-04-24T13:33:51.000000Z","id":63}',
            ),
            353 => 
            array (
                'id' => 354,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:51',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":95,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2800,103.8539","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:33:51.000000Z","created_at":"2023-04-24T13:33:51.000000Z","id":64}',
            ),
            354 => 
            array (
                'id' => 355,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:52',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.79.73","visitors_id":96,"city":"Salem","region":"Oregon","country_code":"US","country":"United States of America","loc":"44.9429,-123.0351","timezone":"America\\/Los_Angeles","updated_at":"2023-04-24T13:33:52.000000Z","created_at":"2023-04-24T13:33:52.000000Z","id":65}',
            ),
            355 => 
            array (
                'id' => 356,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:52',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.195","visitors_id":97,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-04-24T13:33:52.000000Z","created_at":"2023-04-24T13:33:52.000000Z","id":66}',
            ),
            356 => 
            array (
                'id' => 357,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:53',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":98,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2800,103.8539","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:33:52.000000Z","created_at":"2023-04-24T13:33:52.000000Z","id":67}',
            ),
            357 => 
            array (
                'id' => 358,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:53',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"103.147.8.97","visitors_id":99,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:53.000000Z","created_at":"2023-04-24T13:33:53.000000Z","id":68}',
            ),
            358 => 
            array (
                'id' => 359,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:53',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":100,"updated_at":"2023-04-24T13:33:53.000000Z","created_at":"2023-04-24T13:33:53.000000Z","id":69}',
            ),
            359 => 
            array (
                'id' => 360,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:54',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":101,"updated_at":"2023-04-24T13:33:54.000000Z","created_at":"2023-04-24T13:33:54.000000Z","id":70}',
            ),
            360 => 
            array (
                'id' => 361,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:54',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":102,"updated_at":"2023-04-24T13:33:54.000000Z","created_at":"2023-04-24T13:33:54.000000Z","id":71}',
            ),
            361 => 
            array (
                'id' => 362,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:55',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"103.147.8.161","visitors_id":103,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:55.000000Z","created_at":"2023-04-24T13:33:55.000000Z","id":72}',
            ),
            362 => 
            array (
                'id' => 363,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:55',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"139.162.7.175","visitors_id":104,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2935,103.8603","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:33:55.000000Z","created_at":"2023-04-24T13:33:55.000000Z","id":73}',
            ),
            363 => 
            array (
                'id' => 364,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:56',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"157.230.185.127","visitors_id":105,"city":"North Bergen","region":"New Jersey","country_code":"US","country":"United States of America","loc":"40.8043,-74.0121","timezone":"America\\/New_York","updated_at":"2023-04-24T13:33:56.000000Z","created_at":"2023-04-24T13:33:56.000000Z","id":74}',
            ),
            364 => 
            array (
                'id' => 365,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:56',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"39.110.218.101","visitors_id":106,"city":"Tokyo","region":"Tokyo","country_code":"JP","country":"Japan","loc":"35.6940,139.7536","timezone":"Asia\\/Tokyo","updated_at":"2023-04-24T13:33:56.000000Z","created_at":"2023-04-24T13:33:56.000000Z","id":75}',
            ),
            365 => 
            array (
                'id' => 366,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:57',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"34.168.208.65","visitors_id":107,"city":"The Dalles","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.5946,-121.1787","timezone":"America\\/Los_Angeles","updated_at":"2023-04-24T13:33:57.000000Z","created_at":"2023-04-24T13:33:57.000000Z","id":76}',
            ),
            366 => 
            array (
                'id' => 367,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:57',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"34.168.208.65","visitors_id":108,"city":"The Dalles","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.5946,-121.1787","timezone":"America\\/Los_Angeles","updated_at":"2023-04-24T13:33:57.000000Z","created_at":"2023-04-24T13:33:57.000000Z","id":77}',
            ),
            367 => 
            array (
                'id' => 368,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:58',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"103.147.8.161","visitors_id":109,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:58.000000Z","created_at":"2023-04-24T13:33:58.000000Z","id":78}',
            ),
            368 => 
            array (
                'id' => 369,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:58',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"103.147.8.161","visitors_id":110,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:33:58.000000Z","created_at":"2023-04-24T13:33:58.000000Z","id":79}',
            ),
            369 => 
            array (
                'id' => 370,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:58',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"133.242.174.119","visitors_id":111,"city":"Tokyo","region":"Tokyo","country_code":"JP","country":"Japan","loc":"35.6910,139.7679","timezone":"Asia\\/Tokyo","updated_at":"2023-04-24T13:33:58.000000Z","created_at":"2023-04-24T13:33:58.000000Z","id":80}',
            ),
            370 => 
            array (
                'id' => 371,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:59',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"65.154.226.170","visitors_id":112,"city":"Irving","region":"Texas","country_code":"US","country":"United States of America","loc":"32.8140,-96.9489","timezone":"America\\/Chicago","updated_at":"2023-04-24T13:33:59.000000Z","created_at":"2023-04-24T13:33:59.000000Z","id":81}',
            ),
            371 => 
            array (
                'id' => 372,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:33:59',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"205.169.39.67","visitors_id":113,"city":"Bartlesville","region":"Oklahoma","country_code":"US","country":"United States of America","loc":"36.7473,-95.9808","timezone":"America\\/Chicago","updated_at":"2023-04-24T13:33:59.000000Z","created_at":"2023-04-24T13:33:59.000000Z","id":82}',
            ),
            372 => 
            array (
                'id' => 373,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:00',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"205.169.39.67","visitors_id":114,"city":"Bartlesville","region":"Oklahoma","country_code":"US","country":"United States of America","loc":"36.7473,-95.9808","timezone":"America\\/Chicago","updated_at":"2023-04-24T13:34:00.000000Z","created_at":"2023-04-24T13:34:00.000000Z","id":83}',
            ),
            373 => 
            array (
                'id' => 374,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:00',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"34.254.53.125","visitors_id":115,"city":"Dublin","region":"Leinster","country_code":"IE","country":"Ireland","loc":"53.3331,-6.2489","timezone":"Europe\\/Dublin","updated_at":"2023-04-24T13:34:00.000000Z","created_at":"2023-04-24T13:34:00.000000Z","id":84}',
            ),
            374 => 
            array (
                'id' => 375,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:01',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"34.254.53.125","visitors_id":116,"city":"Dublin","region":"Leinster","country_code":"IE","country":"Ireland","loc":"53.3331,-6.2489","timezone":"Europe\\/Dublin","updated_at":"2023-04-24T13:34:00.000000Z","created_at":"2023-04-24T13:34:00.000000Z","id":85}',
            ),
            375 => 
            array (
                'id' => 376,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:01',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"34.254.53.125","visitors_id":117,"city":"Dublin","region":"Leinster","country_code":"IE","country":"Ireland","loc":"53.3331,-6.2489","timezone":"Europe\\/Dublin","updated_at":"2023-04-24T13:34:01.000000Z","created_at":"2023-04-24T13:34:01.000000Z","id":86}',
            ),
            376 => 
            array (
                'id' => 377,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:01',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"65.109.163.80","visitors_id":118,"city":"Vaala","region":"Kainuu","country_code":"FI","country":"Finland","loc":"64.5739,26.7669","timezone":"Europe\\/Helsinki","updated_at":"2023-04-24T13:34:01.000000Z","created_at":"2023-04-24T13:34:01.000000Z","id":87}',
            ),
            377 => 
            array (
                'id' => 378,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:02',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"95.216.188.234","visitors_id":119,"city":"Helsinki","region":"Uusimaa","country_code":"FI","country":"Finland","loc":"60.1695,24.9354","timezone":"Europe\\/Helsinki","updated_at":"2023-04-24T13:34:02.000000Z","created_at":"2023-04-24T13:34:02.000000Z","id":88}',
            ),
            378 => 
            array (
                'id' => 379,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:02',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"47.242.105.176","visitors_id":120,"city":"Hong Kong","region":"Central and Western","country_code":"HK","country":"Hong Kong","loc":"22.2783,114.1747","timezone":"Asia\\/Hong_Kong","updated_at":"2023-04-24T13:34:02.000000Z","created_at":"2023-04-24T13:34:02.000000Z","id":89}',
            ),
            379 => 
            array (
                'id' => 380,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:03',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"205.169.39.115","visitors_id":121,"city":"Bartlesville","region":"Oklahoma","country_code":"US","country":"United States of America","loc":"36.7473,-95.9808","timezone":"America\\/Chicago","updated_at":"2023-04-24T13:34:03.000000Z","created_at":"2023-04-24T13:34:03.000000Z","id":90}',
            ),
            380 => 
            array (
                'id' => 381,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:03',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"205.169.39.115","visitors_id":122,"city":"Bartlesville","region":"Oklahoma","country_code":"US","country":"United States of America","loc":"36.7473,-95.9808","timezone":"America\\/Chicago","updated_at":"2023-04-24T13:34:03.000000Z","created_at":"2023-04-24T13:34:03.000000Z","id":91}',
            ),
            381 => 
            array (
                'id' => 382,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:03',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":123,"updated_at":"2023-04-24T13:34:03.000000Z","created_at":"2023-04-24T13:34:03.000000Z","id":92}',
            ),
            382 => 
            array (
                'id' => 383,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:04',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":124,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2800,103.8539","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:34:04.000000Z","created_at":"2023-04-24T13:34:04.000000Z","id":93}',
            ),
            383 => 
            array (
                'id' => 384,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:05',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"103.147.9.27","visitors_id":125,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:05.000000Z","created_at":"2023-04-24T13:34:05.000000Z","id":94}',
            ),
            384 => 
            array (
                'id' => 385,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:05',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"103.147.9.27","visitors_id":126,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:05.000000Z","created_at":"2023-04-24T13:34:05.000000Z","id":95}',
            ),
            385 => 
            array (
                'id' => 386,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:06',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.120.79.218","visitors_id":127,"city":"Oslo","region":"Oslo","country_code":"NO","country":"Norway","loc":"59.8457,10.7823","timezone":"Europe\\/Oslo","updated_at":"2023-04-24T13:34:06.000000Z","created_at":"2023-04-24T13:34:06.000000Z","id":96}',
            ),
            386 => 
            array (
                'id' => 387,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:06',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"103.147.8.161","visitors_id":128,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:06.000000Z","created_at":"2023-04-24T13:34:06.000000Z","id":97}',
            ),
            387 => 
            array (
                'id' => 388,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:07',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":129,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2842,103.8590","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:34:07.000000Z","created_at":"2023-04-24T13:34:07.000000Z","id":98}',
            ),
            388 => 
            array (
                'id' => 389,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:07',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.111.103","visitors_id":130,"city":"Cileunyi","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9389,107.7528","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:07.000000Z","created_at":"2023-04-24T13:34:07.000000Z","id":99}',
            ),
            389 => 
            array (
                'id' => 390,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:07',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"134.209.103.110","visitors_id":131,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.3215,103.6957","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:34:07.000000Z","created_at":"2023-04-24T13:34:07.000000Z","id":100}',
            ),
            390 => 
            array (
                'id' => 391,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:08',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.122.111.107","visitors_id":132,"city":"Cileunyi","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9389,107.7528","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:08.000000Z","created_at":"2023-04-24T13:34:08.000000Z","id":101}',
            ),
            391 => 
            array (
                'id' => 392,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:08',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":133,"updated_at":"2023-04-24T13:34:08.000000Z","created_at":"2023-04-24T13:34:08.000000Z","id":102}',
            ),
            392 => 
            array (
                'id' => 393,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:09',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":134,"updated_at":"2023-04-24T13:34:09.000000Z","created_at":"2023-04-24T13:34:09.000000Z","id":103}',
            ),
            393 => 
            array (
                'id' => 394,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:09',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":135,"updated_at":"2023-04-24T13:34:09.000000Z","created_at":"2023-04-24T13:34:09.000000Z","id":104}',
            ),
            394 => 
            array (
                'id' => 395,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:09',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":136,"updated_at":"2023-04-24T13:34:09.000000Z","created_at":"2023-04-24T13:34:09.000000Z","id":105}',
            ),
            395 => 
            array (
                'id' => 396,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:10',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"127.0.0.1","visitors_id":137,"updated_at":"2023-04-24T13:34:10.000000Z","created_at":"2023-04-24T13:34:10.000000Z","id":106}',
            ),
            396 => 
            array (
                'id' => 397,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:10',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.124.131.102","visitors_id":1,"city":"Jakarta","region":"Jakarta","country_code":"ID","country":"Indonesia","loc":"-6.2146,106.8451","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:10.000000Z","created_at":"2023-04-24T13:34:10.000000Z","id":107}',
            ),
            397 => 
            array (
                'id' => 398,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:11',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"103.147.8.244","visitors_id":2,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:11.000000Z","created_at":"2023-04-24T13:34:11.000000Z","id":108}',
            ),
            398 => 
            array (
                'id' => 399,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:11',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"149.154.161.233","visitors_id":3,"city":"Amsterdam","region":"North Holland","country_code":"NL","country":"Netherlands the","loc":"52.3740,4.8897","timezone":"Europe\\/Amsterdam","updated_at":"2023-04-24T13:34:11.000000Z","created_at":"2023-04-24T13:34:11.000000Z","id":109}',
            ),
            399 => 
            array (
                'id' => 400,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:12',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.124.131.102","visitors_id":4,"city":"Jakarta","region":"Jakarta","country_code":"ID","country":"Indonesia","loc":"-6.2146,106.8451","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:12.000000Z","created_at":"2023-04-24T13:34:12.000000Z","id":110}',
            ),
            400 => 
            array (
                'id' => 401,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:12',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.124.131.38","visitors_id":5,"city":"Jakarta","region":"Jakarta","country_code":"ID","country":"Indonesia","loc":"-6.2146,106.8451","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:12.000000Z","created_at":"2023-04-24T13:34:12.000000Z","id":111}',
            ),
            401 => 
            array (
                'id' => 402,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:12',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.124.131.102","visitors_id":6,"city":"Jakarta","region":"Jakarta","country_code":"ID","country":"Indonesia","loc":"-6.2146,106.8451","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:12.000000Z","created_at":"2023-04-24T13:34:12.000000Z","id":112}',
            ),
            402 => 
            array (
                'id' => 403,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:13',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.124.130.38","visitors_id":7,"city":"Jakarta","region":"Jakarta","country_code":"ID","country":"Indonesia","loc":"-6.2146,106.8451","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:13.000000Z","created_at":"2023-04-24T13:34:13.000000Z","id":113}',
            ),
            403 => 
            array (
                'id' => 404,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:13',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.124.131.102","visitors_id":8,"city":"Jakarta","region":"Jakarta","country_code":"ID","country":"Indonesia","loc":"-6.2146,106.8451","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:13.000000Z","created_at":"2023-04-24T13:34:13.000000Z","id":114}',
            ),
            404 => 
            array (
                'id' => 405,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:14',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"114.124.130.38","visitors_id":9,"city":"Jakarta","region":"Jakarta","country_code":"ID","country":"Indonesia","loc":"-6.2146,106.8451","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:14.000000Z","created_at":"2023-04-24T13:34:14.000000Z","id":115}',
            ),
            405 => 
            array (
                'id' => 406,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:14',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"103.147.8.244","visitors_id":10,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:14.000000Z","created_at":"2023-04-24T13:34:14.000000Z","id":116}',
            ),
            406 => 
            array (
                'id' => 407,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:15',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"103.147.8.244","visitors_id":11,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:15.000000Z","created_at":"2023-04-24T13:34:15.000000Z","id":117}',
            ),
            407 => 
            array (
                'id' => 408,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:15',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.39.107.46","visitors_id":12,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-04-24T13:34:15.000000Z","created_at":"2023-04-24T13:34:15.000000Z","id":118}',
            ),
            408 => 
            array (
                'id' => 409,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:16',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.1","visitors_id":13,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2800,103.8539","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:34:16.000000Z","created_at":"2023-04-24T13:34:16.000000Z","id":119}',
            ),
            409 => 
            array (
                'id' => 410,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:16',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"103.147.9.137","visitors_id":16,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:16.000000Z","created_at":"2023-04-24T13:34:16.000000Z","id":120}',
            ),
            410 => 
            array (
                'id' => 411,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:16',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"103.147.9.137","visitors_id":17,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:16.000000Z","created_at":"2023-04-24T13:34:16.000000Z","id":121}',
            ),
            411 => 
            array (
                'id' => 412,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:17',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"52.167.144.87","visitors_id":18,"city":"Boydton","region":"Virginia","country_code":"US","country":"United States of America","loc":"36.6676,-78.3875","timezone":"America\\/New_York","updated_at":"2023-04-24T13:34:17.000000Z","created_at":"2023-04-24T13:34:17.000000Z","id":122}',
            ),
            412 => 
            array (
                'id' => 413,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:18',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":19,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2842,103.8590","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:34:17.000000Z","created_at":"2023-04-24T13:34:17.000000Z","id":123}',
            ),
            413 => 
            array (
                'id' => 414,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:18',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"40.77.167.228","visitors_id":20,"city":"Boydton","region":"Virginia","country_code":"US","country":"United States of America","loc":"36.6676,-78.3875","timezone":"America\\/New_York","updated_at":"2023-04-24T13:34:18.000000Z","created_at":"2023-04-24T13:34:18.000000Z","id":124}',
            ),
            414 => 
            array (
                'id' => 415,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:19',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"207.46.13.211","visitors_id":21,"city":"Moses Lake","region":"Washington","country_code":"US","country":"United States of America","loc":"47.1301,-119.2781","timezone":"America\\/Los_Angeles","updated_at":"2023-04-24T13:34:19.000000Z","created_at":"2023-04-24T13:34:19.000000Z","id":125}',
            ),
            415 => 
            array (
                'id' => 416,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:19',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"40.77.167.167","visitors_id":22,"city":"Boydton","region":"Virginia","country_code":"US","country":"United States of America","loc":"36.6676,-78.3875","timezone":"America\\/New_York","updated_at":"2023-04-24T13:34:19.000000Z","created_at":"2023-04-24T13:34:19.000000Z","id":126}',
            ),
            416 => 
            array (
                'id' => 417,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:20',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"141.98.255.211","visitors_id":23,"city":"Malm\\u00f6","region":"Sk\\u00e5ne","country_code":"SE","country":"Sweden","loc":"55.6059,13.0007","timezone":"Europe\\/Stockholm","updated_at":"2023-04-24T13:34:20.000000Z","created_at":"2023-04-24T13:34:20.000000Z","id":127}',
            ),
            417 => 
            array (
                'id' => 418,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:20',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"35.90.145.18","visitors_id":24,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-04-24T13:34:20.000000Z","created_at":"2023-04-24T13:34:20.000000Z","id":128}',
            ),
            418 => 
            array (
                'id' => 419,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:21',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"35.89.207.13","visitors_id":25,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-04-24T13:34:21.000000Z","created_at":"2023-04-24T13:34:21.000000Z","id":129}',
            ),
            419 => 
            array (
                'id' => 420,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:21',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"34.254.53.125","visitors_id":26,"city":"Dublin","region":"Leinster","country_code":"IE","country":"Ireland","loc":"53.3331,-6.2489","timezone":"Europe\\/Dublin","updated_at":"2023-04-24T13:34:21.000000Z","created_at":"2023-04-24T13:34:21.000000Z","id":130}',
            ),
            420 => 
            array (
                'id' => 421,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:21',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"34.254.53.125","visitors_id":27,"city":"Dublin","region":"Leinster","country_code":"IE","country":"Ireland","loc":"53.3331,-6.2489","timezone":"Europe\\/Dublin","updated_at":"2023-04-24T13:34:21.000000Z","created_at":"2023-04-24T13:34:21.000000Z","id":131}',
            ),
            421 => 
            array (
                'id' => 422,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:22',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"34.254.53.125","visitors_id":28,"city":"Dublin","region":"Leinster","country_code":"IE","country":"Ireland","loc":"53.3331,-6.2489","timezone":"Europe\\/Dublin","updated_at":"2023-04-24T13:34:22.000000Z","created_at":"2023-04-24T13:34:22.000000Z","id":132}',
            ),
            422 => 
            array (
                'id' => 423,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:23',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"94.176.82.49","visitors_id":29,"city":"San Francisco","region":"California","country_code":"US","country":"United States of America","loc":"37.7749,-122.4194","timezone":"America\\/Los_Angeles","updated_at":"2023-04-24T13:34:23.000000Z","created_at":"2023-04-24T13:34:23.000000Z","id":133}',
            ),
            423 => 
            array (
                'id' => 424,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:23',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"36.69.128.176","visitors_id":30,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:23.000000Z","created_at":"2023-04-24T13:34:23.000000Z","id":134}',
            ),
            424 => 
            array (
                'id' => 425,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:24',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":31,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2800,103.8539","timezone":"Asia\\/Singapore","updated_at":"2023-04-24T13:34:24.000000Z","created_at":"2023-04-24T13:34:24.000000Z","id":135}',
            ),
            425 => 
            array (
                'id' => 426,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:24',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"103.147.8.13","visitors_id":32,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-04-24T13:34:24.000000Z","created_at":"2023-04-24T13:34:24.000000Z","id":136}',
            ),
            426 => 
            array (
                'id' => 427,
                'user_id' => 1,
                'log_date' => '2023-04-24 20:34:24',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"35.189.210.103","visitors_id":33,"city":"Brussels","region":"Brussels Capital","country_code":"BE","country":"Belgium","loc":"50.8505,4.3488","timezone":"Europe\\/Brussels","updated_at":"2023-04-24T13:34:24.000000Z","created_at":"2023-04-24T13:34:24.000000Z","id":137}',
            ),
            427 => 
            array (
                'id' => 428,
                'user_id' => 1,
                'log_date' => '2023-04-25 01:26:46',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.58"}',
            ),
            428 => 
            array (
                'id' => 429,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:46:01',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.58"}',
            ),
            429 => 
            array (
                'id' => 430,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:08',
                'table_name' => 'p_menu',
                'log_type' => 'create',
                'data' => '{"sequence":"45","parent_id":null,"active":"1","title":"Pengunjung","icon":"fas fa-desktop","route":"admin.vistor","type":"1","updated_at":"2023-04-25T03:52:08.000000Z","created_at":"2023-04-25T03:52:08.000000Z","id":426}',
            ),
            430 => 
            array (
                'id' => 431,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:08',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":426,"updated_at":"2023-04-25T03:52:08.000000Z","created_at":"2023-04-25T03:52:08.000000Z","id":248}',
            ),
            431 => 
            array (
                'id' => 432,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:08',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":426,"updated_at":"2023-04-25T03:52:08.000000Z","created_at":"2023-04-25T03:52:08.000000Z","id":249}',
            ),
            432 => 
            array (
                'id' => 433,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":426,"parent_id":null,"title":"Pengunjung","icon":"fas fa-desktop","route":"admin.vistor","sequence":45,"active":1,"type":1,"created_at":"2023-04-25 10:52:08","updated_at":"2023-04-25 10:52:08"}',
            ),
            433 => 
            array (
                'id' => 434,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":411,"parent_id":null,"title":"Menu Lainnya","icon":null,"route":null,"sequence":27,"active":1,"type":0,"created_at":"2022-09-15 21:18:04","updated_at":"2023-04-19 11:12:31"}',
            ),
            434 => 
            array (
                'id' => 435,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":397,"parent_id":null,"title":"Pengaturan","icon":"fas fa-wrench","route":null,"sequence":28,"active":1,"type":1,"created_at":"2022-08-14 21:10:57","updated_at":"2023-04-19 11:12:31"}',
            ),
            435 => 
            array (
                'id' => 436,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":398,"parent_id":397,"title":"Informasi Admin","icon":null,"route":"admin.setting.admin","sequence":29,"active":1,"type":1,"created_at":"2022-08-14 21:11:42","updated_at":"2023-04-19 11:12:31"}',
            ),
            436 => 
            array (
                'id' => 437,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":399,"parent_id":397,"title":"Informasi Depan","icon":null,"route":"admin.setting.front","sequence":30,"active":1,"type":1,"created_at":"2022-08-14 21:52:45","updated_at":"2023-04-19 11:12:31"}',
            ),
            437 => 
            array (
                'id' => 438,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":393,"parent_id":null,"title":"Peralatan","icon":"fas fa-tools","route":null,"sequence":31,"active":1,"type":1,"created_at":"2022-08-08 22:41:26","updated_at":"2023-04-19 11:12:31"}',
            ),
            438 => 
            array (
                'id' => 439,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":402,"parent_id":393,"title":"Notifikasi Admin","icon":null,"route":"admin.utility.notif_admin_atas","sequence":32,"active":1,"type":1,"created_at":"2022-08-18 16:42:00","updated_at":"2023-04-19 11:12:31"}',
            ),
            439 => 
            array (
                'id' => 440,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":394,"parent_id":393,"title":"Notifikasi Depan","icon":null,"route":"admin.utility.notif_depan_atas","sequence":33,"active":1,"type":1,"created_at":"2022-08-08 22:41:53","updated_at":"2023-04-19 11:12:31"}',
            ),
            440 => 
            array (
                'id' => 441,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":401,"parent_id":393,"title":"Hari Besar Nasional","icon":null,"route":"admin.utility.hari_besar_nasional","sequence":34,"active":1,"type":1,"created_at":"2022-08-17 21:19:05","updated_at":"2023-04-19 11:12:31"}',
            ),
            441 => 
            array (
                'id' => 442,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":346,"parent_id":null,"title":"Manajemen Pengguna","icon":"fas fa-users","route":"admin.user","sequence":35,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-19 11:12:31"}',
            ),
            442 => 
            array (
                'id' => 443,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":361,"parent_id":null,"title":"Menu Management","icon":"fas fa-stream","route":null,"sequence":36,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-19 11:12:31"}',
            ),
            443 => 
            array (
                'id' => 444,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":405,"parent_id":361,"title":"Admin","icon":null,"route":"admin.menu.admin","sequence":37,"active":1,"type":1,"created_at":"2022-08-20 14:12:45","updated_at":"2023-04-19 11:12:31"}',
            ),
            444 => 
            array (
                'id' => 445,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":406,"parent_id":361,"title":"Depan","icon":null,"route":"admin.menu.frontend","sequence":38,"active":1,"type":1,"created_at":"2022-08-20 14:16:07","updated_at":"2023-04-19 11:12:31"}',
            ),
            445 => 
            array (
                'id' => 446,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":367,"parent_id":null,"title":"User Access","icon":"fas fa-user-check","route":null,"sequence":39,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-19 11:12:31"}',
            ),
            446 => 
            array (
                'id' => 447,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":368,"parent_id":367,"title":"Permission","icon":null,"route":"admin.user_access.permission","sequence":40,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-19 11:12:31"}',
            ),
            447 => 
            array (
                'id' => 448,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":369,"parent_id":367,"title":"Role","icon":null,"route":"admin.user_access.role","sequence":41,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-19 11:12:31"}',
            ),
            448 => 
            array (
                'id' => 449,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":373,"parent_id":null,"title":"Profile","icon":"fas fa-user","route":"admin.profile","sequence":42,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-19 11:12:31"}',
            ),
            449 => 
            array (
                'id' => 450,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":386,"parent_id":null,"title":"Logout","icon":"fas fa-sign-out-alt","route":"logout","sequence":43,"active":1,"type":1,"created_at":"2022-08-05 23:54:09","updated_at":"2023-04-19 11:12:31"}',
            ),
            450 => 
            array (
                'id' => 451,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":392,"parent_id":null,"title":"Google Form","icon":"fas fa-user-edit","route":"admin.pendaftaran.gform","sequence":44,"active":0,"type":1,"created_at":"2022-08-08 16:14:54","updated_at":"2023-04-24 11:42:33"}',
            ),
            451 => 
            array (
                'id' => 452,
                'user_id' => 1,
                'log_date' => '2023-04-25 10:52:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":414,"parent_id":null,"title":"Visi Dan Misi","icon":null,"route":"admin.setting.visi_misi","sequence":45,"active":0,"type":1,"created_at":"2023-01-18 01:51:32","updated_at":"2023-04-13 13:06:20"}',
            ),
        ));
        
        
    }
}