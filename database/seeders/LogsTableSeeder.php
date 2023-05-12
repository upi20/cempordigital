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
            452 => 
            array (
                'id' => 453,
                'user_id' => 1,
                'log_date' => '2023-05-03 09:42:58',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"keterangan":null,"nama":"sub logo","kategori_id":"11","urutan":1,"slug":"sub-logo","updated_at":"2023-05-03T02:42:58.000000Z","created_at":"2023-05-03T02:42:58.000000Z","id":1}',
            ),
            453 => 
            array (
                'id' => 454,
                'user_id' => 1,
                'log_date' => '2023-05-03 09:43:58',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'delete',
                'data' => '{"id":1,"kategori_id":11,"urutan":1,"nama":"sub logo","slug":"sub-logo","keterangan":null,"created_at":"2023-05-03 09:42:58","updated_at":"2023-05-03 09:42:58"}',
            ),
            454 => 
            array (
                'id' => 455,
                'user_id' => 1,
                'log_date' => '2023-05-03 09:44:05',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"keterangan":null,"nama":"sub logo","kategori_id":"11","urutan":1,"slug":"sub-logo","updated_at":"2023-05-03T02:44:05.000000Z","created_at":"2023-05-03T02:44:05.000000Z","id":2}',
            ),
            455 => 
            array (
                'id' => 456,
                'user_id' => 1,
                'log_date' => '2023-05-03 09:47:46',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"keterangan":null,"nama":"Sub ilustrator","kategori_id":"7","urutan":2,"slug":"sub-ilustrator","updated_at":"2023-05-03T02:47:46.000000Z","created_at":"2023-05-03T02:47:46.000000Z","id":3}',
            ),
            456 => 
            array (
                'id' => 457,
                'user_id' => 1,
                'log_date' => '2023-05-03 09:48:41',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'delete',
                'data' => '{"id":3,"kategori_id":7,"urutan":2,"nama":"Sub ilustrator","slug":"sub-ilustrator","keterangan":null,"created_at":"2023-05-03 09:47:46","updated_at":"2023-05-03 09:47:46"}',
            ),
            457 => 
            array (
                'id' => 458,
                'user_id' => 1,
                'log_date' => '2023-05-03 09:48:48',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"keterangan":null,"nama":"Sub ilustrator","kategori_id":"7","urutan":1,"slug":"sub-ilustrator","updated_at":"2023-05-03T02:48:48.000000Z","created_at":"2023-05-03T02:48:48.000000Z","id":4}',
            ),
            458 => 
            array (
                'id' => 459,
                'user_id' => 1,
                'log_date' => '2023-05-03 09:48:53',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"keterangan":null,"nama":"ss","kategori_id":"7","urutan":2,"slug":"ss","updated_at":"2023-05-03T02:48:53.000000Z","created_at":"2023-05-03T02:48:53.000000Z","id":5}',
            ),
            459 => 
            array (
                'id' => 460,
                'user_id' => 1,
                'log_date' => '2023-05-03 09:49:59',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"keterangan":null,"nama":"logo2","kategori_id":"11","urutan":2,"slug":"logo2","updated_at":"2023-05-03T02:49:59.000000Z","created_at":"2023-05-03T02:49:59.000000Z","id":6}',
            ),
            460 => 
            array (
                'id' => 461,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:33:41',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'edit',
                'data' => '{"id":16,"urutan":10,"nama":"Website","slug":"website","keterangan":null,"created_at":"2023-04-14 02:25:53","updated_at":"2023-04-15 15:39:26"}',
            ),
            461 => 
            array (
                'id' => 505,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":1,"nama":"Banner or Billboard Design","kategori_id":17,"slug":"banner-or-billboard-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":50}',
            ),
            462 => 
            array (
                'id' => 506,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":2,"nama":"Poster Design","kategori_id":17,"slug":"poster-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":51}',
            ),
            463 => 
            array (
                'id' => 507,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":3,"nama":"Packaging Design","kategori_id":17,"slug":"packaging-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":52}',
            ),
            464 => 
            array (
                'id' => 508,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":4,"nama":"Product Design","kategori_id":17,"slug":"product-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":53}',
            ),
            465 => 
            array (
                'id' => 509,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":5,"nama":"Signage Design","kategori_id":17,"slug":"signage-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":54}',
            ),
            466 => 
            array (
                'id' => 510,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":6,"nama":"Booth Design","kategori_id":17,"slug":"booth-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":55}',
            ),
            467 => 
            array (
                'id' => 511,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":7,"nama":"Infographic Design","kategori_id":17,"slug":"infographic-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":56}',
            ),
            468 => 
            array (
                'id' => 512,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":8,"nama":"Icon Design","kategori_id":17,"slug":"icon-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":57}',
            ),
            469 => 
            array (
                'id' => 513,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":9,"nama":"UI\\/UX Design","kategori_id":17,"slug":"ui-ux-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":58}',
            ),
            470 => 
            array (
                'id' => 514,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":10,"nama":"Social Media Design","kategori_id":17,"slug":"social-media-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":59}',
            ),
            471 => 
            array (
                'id' => 515,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":11,"nama":"Logo Design","kategori_id":17,"slug":"logo-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":60}',
            ),
            472 => 
            array (
                'id' => 516,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":12,"nama":"Line Sticker","kategori_id":17,"slug":"line-sticker","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":61}',
            ),
            473 => 
            array (
                'id' => 517,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":13,"nama":"Vector Design","kategori_id":17,"slug":"vector-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":62}',
            ),
            474 => 
            array (
                'id' => 518,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":14,"nama":"AutoCAD Drafter","kategori_id":17,"slug":"autocad-drafter","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":63}',
            ),
            475 => 
            array (
                'id' => 519,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":15,"nama":"Graphic Design","kategori_id":17,"slug":"graphic-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":64}',
            ),
            476 => 
            array (
                'id' => 520,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":16,"nama":"Invitation Design","kategori_id":17,"slug":"invitation-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":65}',
            ),
            477 => 
            array (
                'id' => 521,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":17,"nama":"Web Design","kategori_id":17,"slug":"web-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":66}',
            ),
            478 => 
            array (
                'id' => 522,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":18,"nama":"Mobile Apps Design","kategori_id":17,"slug":"mobile-apps-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":67}',
            ),
            479 => 
            array (
                'id' => 523,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":19,"nama":"Mascot\\/Character Design","kategori_id":17,"slug":"mascot-character-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":68}',
            ),
            480 => 
            array (
                'id' => 524,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":20,"nama":"Other Design","kategori_id":17,"slug":"other-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":69}',
            ),
            481 => 
            array (
                'id' => 525,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":21,"nama":"Image & Illustration ","kategori_id":17,"slug":"image-illustration","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":70}',
            ),
            482 => 
            array (
                'id' => 526,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":22,"nama":"Book Design","kategori_id":17,"slug":"book-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":71}',
            ),
            483 => 
            array (
                'id' => 527,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":23,"nama":"Landing Page Design","kategori_id":17,"slug":"landing-page-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":72}',
            ),
            484 => 
            array (
                'id' => 528,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":24,"nama":"Office Uniform\\/Clothing Design","kategori_id":17,"slug":"office-uniform-clothing-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":73}',
            ),
            485 => 
            array (
                'id' => 529,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":25,"nama":"Calendar Design","kategori_id":17,"slug":"calendar-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":74}',
            ),
            486 => 
            array (
                'id' => 530,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":26,"nama":"Image Editing & Photoshop","kategori_id":17,"slug":"image-editing-photoshop","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":75}',
            ),
            487 => 
            array (
                'id' => 531,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":27,"nama":"Interior Design","kategori_id":17,"slug":"interior-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":76}',
            ),
            488 => 
            array (
                'id' => 532,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":28,"nama":"Cellphone Case Design","kategori_id":17,"slug":"cellphone-case-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":77}',
            ),
            489 => 
            array (
                'id' => 533,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":29,"nama":"Menu Design","kategori_id":17,"slug":"menu-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":78}',
            ),
            490 => 
            array (
                'id' => 534,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":30,"nama":"Email Design","kategori_id":17,"slug":"email-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":79}',
            ),
            491 => 
            array (
                'id' => 535,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":31,"nama":"Label Design","kategori_id":17,"slug":"label-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":80}',
            ),
            492 => 
            array (
                'id' => 536,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":32,"nama":"Business Card & Stationery Design","kategori_id":17,"slug":"business-card-stationery-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":81}',
            ),
            493 => 
            array (
                'id' => 537,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":33,"nama":"Brochure or Flyer Design","kategori_id":17,"slug":"brochure-or-flyer-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":82}',
            ),
            494 => 
            array (
                'id' => 538,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":34,"nama":"Presentation Design","kategori_id":17,"slug":"presentation-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":83}',
            ),
            495 => 
            array (
                'id' => 539,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":35,"nama":"Brochure","kategori_id":17,"slug":"brochure","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":84}',
            ),
            496 => 
            array (
                'id' => 540,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":36,"nama":"Brand Guidelines","kategori_id":17,"slug":"brand-guidelines","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":85}',
            ),
            497 => 
            array (
                'id' => 541,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":37,"nama":"Portrait Image","kategori_id":17,"slug":"portrait-image","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":86}',
            ),
            498 => 
            array (
                'id' => 542,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":38,"nama":"Portfolio & Resume Design","kategori_id":17,"slug":"portfolio-resume-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":87}',
            ),
            499 => 
            array (
                'id' => 543,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":39,"nama":"Book\\/Magazine Cover Design","kategori_id":17,"slug":"book-magazine-cover-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":88}',
            ),
        ));
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 544,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":40,"nama":"3D & Perspective","kategori_id":17,"slug":"3d-perspective","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":89}',
            ),
            1 => 
            array (
                'id' => 545,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":41,"nama":"Catalog Design","kategori_id":17,"slug":"catalog-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":90}',
            ),
            2 => 
            array (
                'id' => 546,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":42,"nama":"Company Profile Design","kategori_id":17,"slug":"company-profile-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":91}',
            ),
            3 => 
            array (
                'id' => 547,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":43,"nama":"Merchandising Design","kategori_id":17,"slug":"merchandising-design","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":92}',
            ),
            4 => 
            array (
                'id' => 548,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":44,"nama":"Ecommerce Development","kategori_id":17,"slug":"ecommerce-development","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":93}',
            ),
            5 => 
            array (
                'id' => 549,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":1,"nama":"Bug Fixes","kategori_id":16,"slug":"bug-fixes","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":94}',
            ),
            6 => 
            array (
                'id' => 550,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":2,"nama":"Other Website & Development Work","kategori_id":16,"slug":"other-website-development-work","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":95}',
            ),
            7 => 
            array (
                'id' => 551,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
            'data' => '{"urutan":3,"nama":"Quality Assurance (QA)","kategori_id":16,"slug":"quality-assurance-qa","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":96}',
            ),
            8 => 
            array (
                'id' => 552,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":4,"nama":"Slicing to HTML","kategori_id":16,"slug":"slicing-to-html","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":97}',
            ),
            9 => 
            array (
                'id' => 553,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":5,"nama":"Mobile App Development for Android","kategori_id":16,"slug":"mobile-app-development-for-android","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":98}',
            ),
            10 => 
            array (
                'id' => 554,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":6,"nama":"IT Support","kategori_id":16,"slug":"it-support","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":99}',
            ),
            11 => 
            array (
                'id' => 555,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":7,"nama":"Wordpress","kategori_id":16,"slug":"wordpress","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":100}',
            ),
            12 => 
            array (
                'id' => 556,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":8,"nama":"Ecommerce Development","kategori_id":16,"slug":"ecommerce-development-2","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":101}',
            ),
            13 => 
            array (
                'id' => 557,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":9,"nama":"Mobile Apps","kategori_id":16,"slug":"mobile-apps","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":102}',
            ),
            14 => 
            array (
                'id' => 558,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":10,"nama":"Game Development","kategori_id":16,"slug":"game-development","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":103}',
            ),
            15 => 
            array (
                'id' => 559,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":11,"nama":"Desktop Application","kategori_id":16,"slug":"desktop-application","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":104}',
            ),
            16 => 
            array (
                'id' => 560,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":12,"nama":"Web Programming","kategori_id":16,"slug":"web-programming","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":105}',
            ),
            17 => 
            array (
                'id' => 561,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":13,"nama":"Website Maintenance","kategori_id":16,"slug":"website-maintenance","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":106}',
            ),
            18 => 
            array (
                'id' => 562,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":14,"nama":"Website Development","kategori_id":16,"slug":"website-development","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":107}',
            ),
            19 => 
            array (
                'id' => 563,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":15,"nama":"Aerial Photography","kategori_id":16,"slug":"aerial-photography","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":108}',
            ),
            20 => 
            array (
                'id' => 564,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":1,"nama":"Catalog Photography","kategori_id":18,"slug":"catalog-photography","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":109}',
            ),
            21 => 
            array (
                'id' => 565,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":2,"nama":"2D & Animasi","kategori_id":18,"slug":"2d-animasi","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":110}',
            ),
            22 => 
            array (
                'id' => 566,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":3,"nama":"Social Media Videos","kategori_id":18,"slug":"social-media-videos","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":111}',
            ),
            23 => 
            array (
                'id' => 567,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":4,"nama":"E-commerce Product Videos","kategori_id":18,"slug":"e-commerce-product-videos","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":112}',
            ),
            24 => 
            array (
                'id' => 568,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":5,"nama":"Food & Beverage Photography","kategori_id":18,"slug":"food-beverage-photography","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":113}',
            ),
            25 => 
            array (
                'id' => 569,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":6,"nama":"Video Ads & Commercials","kategori_id":18,"slug":"video-ads-commercials","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":114}',
            ),
            26 => 
            array (
                'id' => 570,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":7,"nama":"Video Production","kategori_id":18,"slug":"video-production","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":115}',
            ),
            27 => 
            array (
                'id' => 571,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":8,"nama":"Video Editing","kategori_id":18,"slug":"video-editing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":116}',
            ),
            28 => 
            array (
                'id' => 572,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":9,"nama":"Product Photography","kategori_id":18,"slug":"product-photography","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":117}',
            ),
            29 => 
            array (
                'id' => 573,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":10,"nama":"Portrait Photography","kategori_id":18,"slug":"portrait-photography","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":118}',
            ),
            30 => 
            array (
                'id' => 574,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":11,"nama":"Sound Effects","kategori_id":18,"slug":"sound-effects","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":119}',
            ),
            31 => 
            array (
                'id' => 575,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":12,"nama":"Wedding Photography","kategori_id":18,"slug":"wedding-photography","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":120}',
            ),
            32 => 
            array (
                'id' => 576,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":13,"nama":"Event Documentation","kategori_id":18,"slug":"event-documentation","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":121}',
            ),
            33 => 
            array (
                'id' => 577,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":14,"nama":"Whiteboard & Animated Explainers","kategori_id":18,"slug":"whiteboard-animated-explainers","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":122}',
            ),
            34 => 
            array (
                'id' => 578,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":15,"nama":"Real Estate Photography","kategori_id":18,"slug":"real-estate-photography","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":123}',
            ),
            35 => 
            array (
                'id' => 579,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":16,"nama":"Photo Editing","kategori_id":18,"slug":"photo-editing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":124}',
            ),
            36 => 
            array (
                'id' => 580,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":17,"nama":"Animation for Streamers","kategori_id":18,"slug":"animation-for-streamers","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":125}',
            ),
            37 => 
            array (
                'id' => 581,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":18,"nama":"Voice Editing","kategori_id":18,"slug":"voice-editing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":126}',
            ),
            38 => 
            array (
                'id' => 582,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":19,"nama":"Unboxing Videos","kategori_id":18,"slug":"unboxing-videos","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":127}',
            ),
            39 => 
            array (
                'id' => 583,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":20,"nama":"Voice Over","kategori_id":18,"slug":"voice-over","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":128}',
            ),
            40 => 
            array (
                'id' => 584,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":21,"nama":"Lifestyle & Fashion Photography","kategori_id":18,"slug":"lifestyle-fashion-photography","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":129}',
            ),
            41 => 
            array (
                'id' => 585,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":22,"nama":"Other Video, Photography, Audio","kategori_id":18,"slug":"other-video-photography-audio","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":130}',
            ),
            42 => 
            array (
                'id' => 586,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":23,"nama":"Corporate Videos","kategori_id":18,"slug":"corporate-videos","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":131}',
            ),
            43 => 
            array (
                'id' => 587,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":24,"nama":"Subtitle","kategori_id":18,"slug":"subtitle","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":132}',
            ),
            44 => 
            array (
                'id' => 588,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":25,"nama":"Visual Effects","kategori_id":18,"slug":"visual-effects","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":133}',
            ),
            45 => 
            array (
                'id' => 589,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":26,"nama":"3D & Animation","kategori_id":18,"slug":"3d-animation","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":134}',
            ),
            46 => 
            array (
                'id' => 590,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":27,"nama":"Motion Graphics","kategori_id":18,"slug":"motion-graphics","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":135}',
            ),
            47 => 
            array (
                'id' => 591,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":28,"nama":"Website Content","kategori_id":18,"slug":"website-content","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":136}',
            ),
            48 => 
            array (
                'id' => 592,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":1,"nama":"Articles & Blog Posts","kategori_id":19,"slug":"articles-blog-posts","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":137}',
            ),
            49 => 
            array (
                'id' => 593,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
            'data' => '{"urutan":2,"nama":"Product Description Writing (Bahasa)","kategori_id":19,"slug":"product-description-writing-bahasa","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":138}',
            ),
            50 => 
            array (
                'id' => 594,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":3,"nama":"Book & eBook Writing","kategori_id":19,"slug":"book-ebook-writing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":139}',
            ),
            51 => 
            array (
                'id' => 595,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":4,"nama":"Resume Writing","kategori_id":19,"slug":"resume-writing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":140}',
            ),
            52 => 
            array (
                'id' => 596,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":5,"nama":"Sales Copy","kategori_id":19,"slug":"sales-copy","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":141}',
            ),
            53 => 
            array (
                'id' => 597,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":6,"nama":"Creative Writing","kategori_id":19,"slug":"creative-writing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":142}',
            ),
            54 => 
            array (
                'id' => 598,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":7,"nama":"Ads Copy","kategori_id":19,"slug":"ads-copy","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":143}',
            ),
            55 => 
            array (
                'id' => 599,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":8,"nama":"Translation","kategori_id":19,"slug":"translation","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":144}',
            ),
            56 => 
            array (
                'id' => 600,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":9,"nama":"Proofreading & Editing","kategori_id":19,"slug":"proofreading-editing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":145}',
            ),
            57 => 
            array (
                'id' => 601,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":10,"nama":"Other Writing, Translations, Data Entry","kategori_id":19,"slug":"other-writing-translations-data-entry","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":146}',
            ),
            58 => 
            array (
                'id' => 602,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":11,"nama":"Research & Summaries","kategori_id":19,"slug":"research-summaries","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":147}',
            ),
            59 => 
            array (
                'id' => 603,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":12,"nama":"Business Names & Slogans","kategori_id":19,"slug":"business-names-slogans","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":148}',
            ),
            60 => 
            array (
                'id' => 604,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":13,"nama":"Technical Writing","kategori_id":19,"slug":"technical-writing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":149}',
            ),
            61 => 
            array (
                'id' => 605,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":14,"nama":"Data Entry in Excel","kategori_id":19,"slug":"data-entry-in-excel","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":150}',
            ),
            62 => 
            array (
                'id' => 606,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":15,"nama":"Email Copy","kategori_id":19,"slug":"email-copy","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":151}',
            ),
            63 => 
            array (
                'id' => 607,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":16,"nama":"Social Media Copy","kategori_id":19,"slug":"social-media-copy","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":152}',
            ),
            64 => 
            array (
                'id' => 608,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":17,"nama":"Data Entry in Website","kategori_id":19,"slug":"data-entry-in-website","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":153}',
            ),
            65 => 
            array (
                'id' => 609,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":18,"nama":"Podcast Writing","kategori_id":19,"slug":"podcast-writing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":154}',
            ),
            66 => 
            array (
                'id' => 610,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":19,"nama":"Press Releases","kategori_id":19,"slug":"press-releases","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":155}',
            ),
            67 => 
            array (
                'id' => 611,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":20,"nama":"Case Studies","kategori_id":19,"slug":"case-studies","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":156}',
            ),
            68 => 
            array (
                'id' => 612,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":21,"nama":"Scriptwriting","kategori_id":19,"slug":"scriptwriting","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":157}',
            ),
            69 => 
            array (
                'id' => 613,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":22,"nama":"Job Descriptions","kategori_id":19,"slug":"job-descriptions","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":158}',
            ),
            70 => 
            array (
                'id' => 614,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":23,"nama":"Speechwriting","kategori_id":19,"slug":"speechwriting","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":159}',
            ),
            71 => 
            array (
                'id' => 615,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":24,"nama":"Product Description","kategori_id":19,"slug":"product-description","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":160}',
            ),
            72 => 
            array (
                'id' => 616,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":25,"nama":"Web Traffic & Analytics","kategori_id":19,"slug":"web-traffic-analytics","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":161}',
            ),
            73 => 
            array (
                'id' => 617,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":1,"nama":"Mobile App Marketing","kategori_id":20,"slug":"mobile-app-marketing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":162}',
            ),
            74 => 
            array (
                'id' => 618,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":2,"nama":"Youtube Marketing","kategori_id":20,"slug":"youtube-marketing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":163}',
            ),
            75 => 
            array (
                'id' => 619,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":3,"nama":"Blogger Marketing","kategori_id":20,"slug":"blogger-marketing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":164}',
            ),
            76 => 
            array (
                'id' => 620,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":4,"nama":"Social Media Marketing","kategori_id":20,"slug":"social-media-marketing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":165}',
            ),
            77 => 
            array (
                'id' => 621,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":5,"nama":"Market Research","kategori_id":20,"slug":"market-research","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":166}',
            ),
            78 => 
            array (
                'id' => 622,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":6,"nama":"Other Online Marketing Work","kategori_id":20,"slug":"other-online-marketing-work","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":167}',
            ),
            79 => 
            array (
                'id' => 623,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":7,"nama":"Affiliate Marketing","kategori_id":20,"slug":"affiliate-marketing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":168}',
            ),
            80 => 
            array (
                'id' => 624,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":8,"nama":"Buzzer Marketing","kategori_id":20,"slug":"buzzer-marketing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":169}',
            ),
            81 => 
            array (
                'id' => 625,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":9,"nama":"Add Social Media Followers","kategori_id":20,"slug":"add-social-media-followers","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":170}',
            ),
            82 => 
            array (
                'id' => 626,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":10,"nama":"Add Reviews","kategori_id":20,"slug":"add-reviews","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":171}',
            ),
            83 => 
            array (
                'id' => 627,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
            'data' => '{"urutan":11,"nama":"Search Engine Marketing (SEM)","kategori_id":20,"slug":"search-engine-marketing-sem","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":172}',
            ),
            84 => 
            array (
                'id' => 628,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":12,"nama":"Public Relation","kategori_id":20,"slug":"public-relation","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":173}',
            ),
            85 => 
            array (
                'id' => 629,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":13,"nama":"Video Marketing","kategori_id":20,"slug":"video-marketing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":174}',
            ),
            86 => 
            array (
                'id' => 630,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":14,"nama":"Ecommerce Marketing","kategori_id":20,"slug":"ecommerce-marketing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":175}',
            ),
            87 => 
            array (
                'id' => 631,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":15,"nama":"Paid ads - Instagram","kategori_id":20,"slug":"paid-ads-instagram","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":176}',
            ),
            88 => 
            array (
                'id' => 632,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":16,"nama":"Book & eBook Marketing","kategori_id":20,"slug":"book-ebook-marketing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":177}',
            ),
            89 => 
            array (
                'id' => 633,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":17,"nama":"Beauty Product Reviews","kategori_id":20,"slug":"beauty-product-reviews","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":178}',
            ),
            90 => 
            array (
                'id' => 634,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":18,"nama":"Email Marketing","kategori_id":20,"slug":"email-marketing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":179}',
            ),
            91 => 
            array (
                'id' => 635,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":19,"nama":"Create IG Reels","kategori_id":20,"slug":"create-ig-reels","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":180}',
            ),
            92 => 
            array (
                'id' => 636,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
            'data' => '{"urutan":20,"nama":"Influencer Marketing (Selebgram)","kategori_id":20,"slug":"influencer-marketing-selebgram","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":181}',
            ),
            93 => 
            array (
                'id' => 637,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":21,"nama":"Online Store Product Updates","kategori_id":20,"slug":"online-store-product-updates","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":182}',
            ),
            94 => 
            array (
                'id' => 638,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":22,"nama":"Tiktok Live Marketing","kategori_id":20,"slug":"tiktok-live-marketing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":183}',
            ),
            95 => 
            array (
                'id' => 639,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
            'data' => '{"urutan":23,"nama":"SEO (Search Engine Optimization)","kategori_id":20,"slug":"seo-search-engine-optimization","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":184}',
            ),
            96 => 
            array (
                'id' => 640,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":24,"nama":"Backlink PBN","kategori_id":20,"slug":"backlink-pbn","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":185}',
            ),
            97 => 
            array (
                'id' => 641,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":25,"nama":"Podcast Marketing","kategori_id":20,"slug":"podcast-marketing","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":186}',
            ),
            98 => 
            array (
                'id' => 642,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":26,"nama":"Paid ads - Facebook","kategori_id":20,"slug":"paid-ads-facebook","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":187}',
            ),
            99 => 
            array (
                'id' => 643,
                'user_id' => 1,
                'log_date' => '2023-05-03 21:54:54',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":27,"nama":"Guest Posting","kategori_id":20,"slug":"guest-posting","updated_at":"2023-05-03T14:54:54.000000Z","created_at":"2023-05-03T14:54:54.000000Z","id":188}',
            ),
            100 => 
            array (
                'id' => 644,
                'user_id' => 1,
                'log_date' => '2023-05-03 23:16:21',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":13,"kategori_id":107,"nama":"Warung Kopi Gunung Roastery","slug":"warung-kopi-gunung-roastery","foto":"20230414025039.png","keterangan":"MAnsdansld","is_insert":1,"created_by":4,"created_at":"2023-04-14 02:47:11","updated_at":"2023-04-14 02:50:39"}',
            ),
            101 => 
            array (
                'id' => 645,
                'user_id' => 1,
                'log_date' => '2023-05-03 23:54:02',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":13,"kategori_id":136,"nama":"Warung Kopi Gunung Roastery","slug":"warung-kopi-gunung-roastery","foto":"20230414025039.png","keterangan":"MAnsdansld","is_insert":1,"created_by":4,"created_at":"2023-04-14 02:47:11","updated_at":"2023-05-03 23:16:21"}',
            ),
            102 => 
            array (
                'id' => 646,
                'user_id' => 1,
                'log_date' => '2023-05-04 00:12:19',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":14,"kategori_id":null,"nama":null,"slug":null,"foto":null,"keterangan":null,"is_insert":0,"created_by":1,"created_at":null,"updated_at":null}',
            ),
            103 => 
            array (
                'id' => 647,
                'user_id' => 1,
                'log_date' => '2023-05-04 00:12:43',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":14,"kategori_id":110,"nama":"apa kabar","slug":"apa-kabar","foto":"20230504001219.jpg","keterangan":null,"is_insert":1,"created_by":1,"created_at":"2023-05-04 00:12:19","updated_at":"2023-05-04 00:12:19"}',
            ),
            104 => 
            array (
                'id' => 648,
                'user_id' => 1,
                'log_date' => '2023-05-04 01:05:09',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":32,"parent_id":31,"title":"Website","icon":null,"route":"#","sequence":3,"active":1,"type":1,"created_at":"2023-04-18 14:05:14","updated_at":"2023-04-18 14:05:19"}',
            ),
            105 => 
            array (
                'id' => 649,
                'user_id' => 1,
                'log_date' => '2023-05-04 01:05:28',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":31,"parent_id":null,"title":"Layanan","icon":null,"route":"#","sequence":2,"active":1,"type":1,"created_at":"2023-04-18 14:04:31","updated_at":"2023-04-18 14:05:19"}',
            ),
            106 => 
            array (
                'id' => 650,
                'user_id' => 1,
                'log_date' => '2023-05-04 01:22:20',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'delete',
                'data' => '{"id":33,"parent_id":null,"title":"Tentang","icon":null,"route":"#","sequence":6,"active":1,"type":1,"created_at":"2023-04-18 14:05:51","updated_at":"2023-04-18 14:06:22"}',
            ),
            107 => 
            array (
                'id' => 651,
                'user_id' => 1,
                'log_date' => '2023-05-04 01:22:26',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":20,"parent_id":null,"title":"Artikel","icon":null,"route":"artikel","sequence":8,"active":0,"type":1,"created_at":"2022-09-02 00:45:45","updated_at":"2023-04-18 14:06:22"}',
            ),
            108 => 
            array (
                'id' => 652,
                'user_id' => 1,
                'log_date' => '2023-05-04 01:22:33',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":5,"nama":"Iklan 5","foto":"20230324234545.jpg","status":1,"ditampilkan":37,"created_at":"2023-03-24 23:45:45","updated_at":"2023-03-27 05:18:32"}',
            ),
            109 => 
            array (
                'id' => 653,
                'user_id' => 1,
                'log_date' => '2023-05-04 01:23:09',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":18,"parent_id":null,"title":"Kontak","icon":null,"route":"kontak","sequence":10,"active":0,"type":1,"created_at":"2022-08-20 14:47:10","updated_at":"2023-04-18 14:06:22"}',
            ),
            110 => 
            array (
                'id' => 654,
                'user_id' => 1,
                'log_date' => '2023-05-04 01:23:16',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":28,"created_at":"2023-03-24 23:45:25","updated_at":"2023-04-01 21:18:02"}',
            ),
            111 => 
            array (
                'id' => 655,
                'user_id' => 1,
                'log_date' => '2023-05-04 01:23:40',
                'table_name' => 'p_menu_frontends',
                'log_type' => 'edit',
                'data' => '{"id":34,"parent_id":null,"title":"Portfolio","icon":null,"route":"#","sequence":5,"active":1,"type":1,"created_at":"2023-04-18 14:06:16","updated_at":"2023-04-18 14:06:22"}',
            ),
            112 => 
            array (
                'id' => 656,
                'user_id' => 1,
                'log_date' => '2023-05-04 01:23:58',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":25,"created_at":"2023-03-24 23:45:34","updated_at":"2023-03-27 16:46:33"}',
            ),
            113 => 
            array (
                'id' => 657,
                'user_id' => 1,
                'log_date' => '2023-05-04 01:50:57',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'edit',
                'data' => '{"id":106,"kategori_id":16,"urutan":13,"nama":"Website Maintenance","slug":"website-maintenance","keterangan":null,"created_at":"2023-05-03 21:54:54","updated_at":"2023-05-03 21:54:54"}',
            ),
            114 => 
            array (
                'id' => 658,
                'user_id' => 1,
                'log_date' => '2023-05-04 01:51:08',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'edit',
                'data' => '{"id":107,"kategori_id":16,"urutan":14,"nama":"Website Development","slug":"website-development","keterangan":null,"created_at":"2023-05-03 21:54:54","updated_at":"2023-05-03 21:54:54"}',
            ),
            115 => 
            array (
                'id' => 659,
                'user_id' => 1,
                'log_date' => '2023-05-04 01:51:14',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'edit',
                'data' => '{"id":106,"kategori_id":16,"urutan":15,"nama":"Website Maintenance","slug":"website-maintenance","keterangan":null,"created_at":"2023-05-03 21:54:54","updated_at":"2023-05-04 01:50:57"}',
            ),
            116 => 
            array (
                'id' => 660,
                'user_id' => 1,
                'log_date' => '2023-05-04 01:51:19',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'edit',
                'data' => '{"id":106,"kategori_id":16,"urutan":16,"nama":"Website Maintenance","slug":"website-maintenance","keterangan":null,"created_at":"2023-05-03 21:54:54","updated_at":"2023-05-04 01:51:14"}',
            ),
            117 => 
            array (
                'id' => 661,
                'user_id' => 1,
                'log_date' => '2023-05-04 02:45:52',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'edit',
                'data' => '{"id":94,"kategori_id":16,"urutan":1,"nama":"Bug Fixes","judul":null,"sub_judul":null,"foto":null,"tampilkan_client":0,"tampilkan_testimoni":0,"slug":"bug-fixes","keterangan":null,"created_at":"2023-05-03 21:54:54","updated_at":"2023-05-03 21:54:54"}',
            ),
            118 => 
            array (
                'id' => 662,
                'user_id' => 1,
                'log_date' => '2023-05-04 02:47:10',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'edit',
                'data' => '{"id":94,"kategori_id":16,"urutan":1,"nama":"Bug Fixes","judul":null,"sub_judul":null,"foto":"20230504024552.png","tampilkan_client":0,"tampilkan_testimoni":0,"slug":"bug-fixes","keterangan":"","created_at":"2023-05-03 21:54:54","updated_at":"2023-05-04 02:45:52"}',
            ),
            119 => 
            array (
                'id' => 663,
                'user_id' => 1,
                'log_date' => '2023-05-04 02:47:30',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'edit',
                'data' => '{"id":94,"kategori_id":16,"urutan":1,"nama":"Bug Fixes","judul":null,"sub_judul":null,"foto":"20230504024552.png","tampilkan_client":1,"tampilkan_testimoni":1,"slug":"bug-fixes","keterangan":"","created_at":"2023-05-03 21:54:54","updated_at":"2023-05-04 02:47:10"}',
            ),
            120 => 
            array (
                'id' => 664,
                'user_id' => 1,
                'log_date' => '2023-05-04 02:47:59',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'edit',
                'data' => '{"id":94,"kategori_id":16,"urutan":1,"nama":"Bug Fixes","judul":null,"sub_judul":null,"foto":"20230504024552.png","tampilkan_client":1,"tampilkan_testimoni":1,"slug":"bug-fixes","keterangan":"<p><img data-bs-filename=\\"1681873855530_53.png\\" style=\\"width: 744.8px;\\" src=\\"\\/assets\\/portfolio\\/kategori\\/sub\\/keterangan16831432500.png\\"><br><\\/p>\\n","created_at":"2023-05-03 21:54:54","updated_at":"2023-05-04 02:47:30"}',
            ),
            121 => 
            array (
                'id' => 665,
                'user_id' => 1,
                'log_date' => '2023-05-04 02:49:34',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'edit',
                'data' => '{"id":107,"kategori_id":16,"urutan":3,"nama":"Website Development","judul":null,"sub_judul":null,"foto":null,"tampilkan_client":0,"tampilkan_testimoni":0,"slug":"website-development","keterangan":null,"created_at":"2023-05-03 21:54:54","updated_at":"2023-05-04 01:51:08"}',
            ),
            122 => 
            array (
                'id' => 666,
                'user_id' => 1,
                'log_date' => '2023-05-04 02:55:44',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'create',
                'data' => '{"urutan":5,"foto":"20230504025544.png","keterangan":"<p>bil hax<\\/p>\\n","nama":"Testing","kategori_id":"16","judul":"judul","sub_judul":"sub judul","tampilkan_client":"1","tampilkan_testimoni":"1","slug":"testing","updated_at":"2023-05-03T19:55:44.000000Z","created_at":"2023-05-03T19:55:44.000000Z","id":164}',
            ),
            123 => 
            array (
                'id' => 667,
                'user_id' => 1,
                'log_date' => '2023-05-04 02:55:48',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'delete',
                'data' => '{"id":164,"kategori_id":16,"urutan":5,"nama":"Testing","judul":"judul","sub_judul":"sub judul","foto":"20230504025544.png","tampilkan_client":1,"tampilkan_testimoni":1,"slug":"testing","keterangan":"<p>bil hax<\\/p>\\n","created_at":"2023-05-04 02:55:44","updated_at":"2023-05-04 02:55:44"}',
            ),
            124 => 
            array (
                'id' => 668,
                'user_id' => 1,
                'log_date' => '2023-05-04 03:12:32',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'edit',
                'data' => '{"id":107,"kategori_id":16,"urutan":3,"nama":"Website Development","judul":null,"sub_judul":null,"foto":"20230504024934.png","tampilkan_client":1,"tampilkan_testimoni":1,"slug":"website-development","keterangan":"<div class=\\"solution-text\\">\\r\\n                  <h1 class=\\"h1\\" id=\\"page_title\\" data-testid=\\"title_landing_page\\">\\r\\n                     \\r\\n                     Professional Web Programming Services. Money-back Guarantee.\\r\\n                  <\\/h1>\\r\\n                  <h2 class=\\"h2\\" data-testid=\\"subtitle_landing_page\\">\\r\\n                     \\r\\n                     Experienced web programming service. Fast &amp; efficient work. Has helped 30,000+ SME &amp; corporate clients. Guaranteed.\\r\\n                  <\\/h2>\\r\\n\\r\\n                  \\r\\n                  <div class=\\"solution-list\\">\\r\\n                     <ul>\\r\\n                        \\r\\n                        <li>\\r\\n                           No Risk, Money Back Guarantee\\r\\n                        <\\/li>\\r\\n                        \\r\\n                        <li>\\r\\n                           Budget that you can set yourself\\r\\n                        <\\/li>\\r\\n                        \\r\\n                        <li>\\r\\n                           6+ years experienced team\\r\\n                        <\\/li>\\r\\n                        \\r\\n                        <li>\\r\\n                           Up-to-date and secure technology\\r\\n                        <\\/li>\\r\\n                        \\r\\n                        <li>\\r\\n                           Fast and Efficient in processing\\r\\n                        <\\/li>\\r\\n                        \\r\\n                     <\\/ul>\\r\\n                  <\\/div>\\r\\n                  \\r\\n                  \\r\\n                  <div class=\\"btn-2-wrapper\\" style=\\"margin-top: 32px\\">\\r\\n                     <a class=\\"btn btn-primary p\\" data-testid=\\"button_check_price1\\" style=\\"--p: 20px 30px; min-width: 200px;\\" href=\\"\\/en\\/packages?category=website-and-development\\">\\r\\n                        <h6 class=\\"h6 m-0\\">\\r\\n                           Check Package Price\\r\\n                        <\\/h6>\\r\\n                     <\\/a>\\r\\n                  <\\/div>\\r\\n\\r\\n                  <!-- \\r\\n                  \\r\\n                  \\r\\n                  <div class=\\"btn-2-wrapper\\" style=\\"margin-top: 32px\\">\\r\\n                     <a class=\\"btn btn-primary p\\" style=\\"--p: 20px 30px; min-width: 200px;\\"\\r\\n                        href=\\"\\/en\\/browse-freelancer\\/ad62c648-d223-446c-9a00-28c99613d0b5\\/5f9e2589-f52b-4296-914f-7f0156445976\\">\\r\\n                        <h6 class=\\"h6 m-0\\">\\r\\n                           Browse Freelancer\\r\\n                        <\\/h6>\\r\\n                     <\\/a>\\r\\n                  <\\/div>\\r\\n                   -->\\r\\n               <\\/div>\\n","created_at":"2023-05-03 21:54:54","updated_at":"2023-05-04 02:49:34"}',
            ),
            125 => 
            array (
                'id' => 669,
                'user_id' => 1,
                'log_date' => '2023-05-04 03:33:27',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":14,"kategori_id":106,"nama":"apa kabar","slug":"apa-kabar","foto":"20230504001219.jpg","keterangan":null,"is_insert":1,"created_by":1,"created_at":"2023-05-04 00:12:19","updated_at":"2023-05-04 00:12:43"}',
            ),
            126 => 
            array (
                'id' => 670,
                'user_id' => 1,
                'log_date' => '2023-05-04 03:38:08',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":14,"kategori_id":163,"nama":"apa kabar","slug":"apa-kabar","foto":"20230504001219.jpg","keterangan":null,"is_insert":1,"created_by":1,"created_at":"2023-05-04 00:12:19","updated_at":"2023-05-04 03:33:27"}',
            ),
            127 => 
            array (
                'id' => 671,
                'user_id' => 1,
                'log_date' => '2023-05-04 03:40:19',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":14,"kategori_id":107,"nama":"apa kabar","slug":"apa-kabar","foto":"20230504001219.jpg","keterangan":null,"is_insert":1,"created_by":1,"created_at":"2023-05-04 00:12:19","updated_at":"2023-05-04 03:38:08"}',
            ),
            128 => 
            array (
                'id' => 672,
                'user_id' => 1,
                'log_date' => '2023-05-04 03:46:48',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":14,"kategori_id":162,"nama":"apa kabar","slug":"apa-kabar","foto":"20230504001219.jpg","keterangan":null,"is_insert":1,"created_by":1,"created_at":"2023-05-04 00:12:19","updated_at":"2023-05-04 03:40:19"}',
            ),
            129 => 
            array (
                'id' => 673,
                'user_id' => 1,
                'log_date' => '2023-05-04 04:10:02',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'edit',
                'data' => '{"id":107,"kategori_id":16,"urutan":3,"nama":"Website Development","judul":"We design and develop web and mobile applications for our clients worldwide","sub_judul":"Lorem ipsum dolor sit amet, sed nulla ante amet, elementum tincidunt arcu sed laoreet, natoque ac eget imperdiet. Ac scelerisque nibh dolores consectetuer,","foto":"20230504024934.png","tampilkan_client":1,"tampilkan_testimoni":1,"slug":"website-development","keterangan":"<div class=\\"solution-text\\">\\r\\n                  <h1 class=\\"h1\\" id=\\"page_title\\" data-testid=\\"title_landing_page\\">\\r\\n                     \\r\\n                     Professional Web Programming Services. Money-back Guarantee.\\r\\n                  <\\/h1>\\r\\n                  <h2 class=\\"h2\\" data-testid=\\"subtitle_landing_page\\">\\r\\n                     \\r\\n                     Experienced web programming service. Fast &amp; efficient work. Has helped 30,000+ SME &amp; corporate clients. Guaranteed.\\r\\n                  <\\/h2>\\r\\n\\r\\n                  \\r\\n                  <div class=\\"solution-list\\">\\r\\n                     <ul>\\r\\n                        \\r\\n                        <li>\\r\\n                           No Risk, Money Back Guarantee\\r\\n                        <\\/li>\\r\\n                        \\r\\n                        <li>\\r\\n                           Budget that you can set yourself\\r\\n                        <\\/li>\\r\\n                        \\r\\n                        <li>\\r\\n                           6+ years experienced team\\r\\n                        <\\/li>\\r\\n                        \\r\\n                        <li>\\r\\n                           Up-to-date and secure technology\\r\\n                        <\\/li>\\r\\n                        \\r\\n                        <li>\\r\\n                           Fast and Efficient in processing\\r\\n                        <\\/li>\\r\\n                        \\r\\n                     <\\/ul>\\r\\n                  <\\/div>\\r\\n                  \\r\\n                  \\r\\n                  <div class=\\"btn-2-wrapper\\" style=\\"margin-top: 32px\\">\\r\\n                     <a class=\\"btn btn-primary p\\" data-testid=\\"button_check_price1\\" style=\\"--p: 20px 30px; min-width: 200px;\\" href=\\"\\/en\\/packages?category=website-and-development\\">\\r\\n                        <h6 class=\\"h6 m-0\\">\\r\\n                           Check Package Price\\r\\n                        <\\/h6>\\r\\n                     <\\/a>\\r\\n                  <\\/div>\\r\\n\\r\\n                  <!-- \\r\\n                  \\r\\n                  \\r\\n                  <div class=\\"btn-2-wrapper\\" style=\\"margin-top: 32px\\">\\r\\n                     <a class=\\"btn btn-primary p\\" style=\\"--p: 20px 30px; min-width: 200px;\\"\\r\\n                        href=\\"\\/en\\/browse-freelancer\\/ad62c648-d223-446c-9a00-28c99613d0b5\\/5f9e2589-f52b-4296-914f-7f0156445976\\">\\r\\n                        <h6 class=\\"h6 m-0\\">\\r\\n                           Browse Freelancer\\r\\n                        <\\/h6>\\r\\n                     <\\/a>\\r\\n                  <\\/div>\\r\\n                   -->\\r\\n               <\\/div>\\n","created_at":"2023-05-03 21:54:54","updated_at":"2023-05-04 03:12:32"}',
            ),
            130 => 
            array (
                'id' => 674,
                'user_id' => 1,
                'log_date' => '2023-05-04 17:57:30',
                'table_name' => 'clients',
                'log_type' => 'create',
                'data' => '{"foto":"20230504175730.png","nama":"Shopeify","status":"1","updated_at":"2023-05-04T10:57:30.000000Z","created_at":"2023-05-04T10:57:30.000000Z","id":1}',
            ),
            131 => 
            array (
                'id' => 675,
                'user_id' => 1,
                'log_date' => '2023-05-04 17:57:45',
                'table_name' => 'clients',
                'log_type' => 'create',
                'data' => '{"foto":"20230504175745.png","nama":"Airbnb","status":"1","updated_at":"2023-05-04T10:57:45.000000Z","created_at":"2023-05-04T10:57:45.000000Z","id":2}',
            ),
            132 => 
            array (
                'id' => 676,
                'user_id' => 1,
                'log_date' => '2023-05-04 17:57:54',
                'table_name' => 'clients',
                'log_type' => 'create',
                'data' => '{"foto":"20230504175754.png","nama":"Amazon","status":"1","updated_at":"2023-05-04T10:57:54.000000Z","created_at":"2023-05-04T10:57:54.000000Z","id":3}',
            ),
            133 => 
            array (
                'id' => 677,
                'user_id' => 1,
                'log_date' => '2023-05-04 17:58:04',
                'table_name' => 'clients',
                'log_type' => 'create',
                'data' => '{"foto":"20230504175804.png","nama":"Google","status":"1","updated_at":"2023-05-04T10:58:04.000000Z","created_at":"2023-05-04T10:58:04.000000Z","id":4}',
            ),
            134 => 
            array (
                'id' => 678,
                'user_id' => 1,
                'log_date' => '2023-05-04 17:58:30',
                'table_name' => 'clients',
                'log_type' => 'create',
                'data' => '{"foto":"20230504175830.png","nama":"Paypal","status":"1","updated_at":"2023-05-04T10:58:30.000000Z","created_at":"2023-05-04T10:58:30.000000Z","id":5}',
            ),
            135 => 
            array (
                'id' => 679,
                'user_id' => 1,
                'log_date' => '2023-05-04 17:58:41',
                'table_name' => 'clients',
                'log_type' => 'create',
                'data' => '{"foto":"20230504175841.png","nama":"Slack","status":"1","updated_at":"2023-05-04T10:58:41.000000Z","created_at":"2023-05-04T10:58:41.000000Z","id":6}',
            ),
            136 => 
            array (
                'id' => 680,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:04:06',
                'table_name' => 'clients',
                'log_type' => 'edit',
                'data' => '{"id":1,"nama":"Shopeify","foto":"20230504175730.png","status":1,"created_at":"2023-05-04 17:57:30","updated_at":"2023-05-04 17:57:30"}',
            ),
            137 => 
            array (
                'id' => 681,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:04:13',
                'table_name' => 'clients',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Amazon","foto":"20230504175754.png","status":1,"created_at":"2023-05-04 17:57:54","updated_at":"2023-05-04 17:57:54"}',
            ),
            138 => 
            array (
                'id' => 682,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:04:26',
                'table_name' => 'clients',
                'log_type' => 'edit',
                'data' => '{"id":6,"nama":"Slack","foto":"20230504175841.png","status":1,"created_at":"2023-05-04 17:58:41","updated_at":"2023-05-04 17:58:41"}',
            ),
            139 => 
            array (
                'id' => 683,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:41',
                'table_name' => 'p_menu',
                'log_type' => 'create',
                'data' => '{"sequence":"46","parent_id":null,"active":"1","title":"Client","icon":"fas fa-th-large","route":"admin.client","type":"1","updated_at":"2023-05-04T11:12:41.000000Z","created_at":"2023-05-04T11:12:41.000000Z","id":427}',
            ),
            140 => 
            array (
                'id' => 684,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:41',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":427,"updated_at":"2023-05-04T11:12:41.000000Z","created_at":"2023-05-04T11:12:41.000000Z","id":250}',
            ),
            141 => 
            array (
                'id' => 685,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":427,"parent_id":null,"title":"Client","icon":"fas fa-th-large","route":"admin.client","sequence":46,"active":1,"type":1,"created_at":"2023-05-04 18:12:41","updated_at":"2023-05-04 18:12:41"}',
            ),
            142 => 
            array (
                'id' => 686,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":411,"parent_id":null,"title":"Menu Lainnya","icon":null,"route":null,"sequence":28,"active":1,"type":0,"created_at":"2022-09-15 21:18:04","updated_at":"2023-04-25 10:52:23"}',
            ),
            143 => 
            array (
                'id' => 687,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":397,"parent_id":null,"title":"Pengaturan","icon":"fas fa-wrench","route":null,"sequence":29,"active":1,"type":1,"created_at":"2022-08-14 21:10:57","updated_at":"2023-04-25 10:52:23"}',
            ),
            144 => 
            array (
                'id' => 688,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":398,"parent_id":397,"title":"Informasi Admin","icon":null,"route":"admin.setting.admin","sequence":30,"active":1,"type":1,"created_at":"2022-08-14 21:11:42","updated_at":"2023-04-25 10:52:23"}',
            ),
            145 => 
            array (
                'id' => 689,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":399,"parent_id":397,"title":"Informasi Depan","icon":null,"route":"admin.setting.front","sequence":31,"active":1,"type":1,"created_at":"2022-08-14 21:52:45","updated_at":"2023-04-25 10:52:23"}',
            ),
            146 => 
            array (
                'id' => 690,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":393,"parent_id":null,"title":"Peralatan","icon":"fas fa-tools","route":null,"sequence":32,"active":1,"type":1,"created_at":"2022-08-08 22:41:26","updated_at":"2023-04-25 10:52:23"}',
            ),
            147 => 
            array (
                'id' => 691,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":402,"parent_id":393,"title":"Notifikasi Admin","icon":null,"route":"admin.utility.notif_admin_atas","sequence":33,"active":1,"type":1,"created_at":"2022-08-18 16:42:00","updated_at":"2023-04-25 10:52:23"}',
            ),
            148 => 
            array (
                'id' => 692,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":394,"parent_id":393,"title":"Notifikasi Depan","icon":null,"route":"admin.utility.notif_depan_atas","sequence":34,"active":1,"type":1,"created_at":"2022-08-08 22:41:53","updated_at":"2023-04-25 10:52:23"}',
            ),
            149 => 
            array (
                'id' => 693,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":401,"parent_id":393,"title":"Hari Besar Nasional","icon":null,"route":"admin.utility.hari_besar_nasional","sequence":35,"active":1,"type":1,"created_at":"2022-08-17 21:19:05","updated_at":"2023-04-25 10:52:23"}',
            ),
            150 => 
            array (
                'id' => 694,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":346,"parent_id":null,"title":"Manajemen Pengguna","icon":"fas fa-users","route":"admin.user","sequence":36,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-25 10:52:23"}',
            ),
            151 => 
            array (
                'id' => 695,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":361,"parent_id":null,"title":"Menu Management","icon":"fas fa-stream","route":null,"sequence":37,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-25 10:52:23"}',
            ),
            152 => 
            array (
                'id' => 696,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":405,"parent_id":361,"title":"Admin","icon":null,"route":"admin.menu.admin","sequence":38,"active":1,"type":1,"created_at":"2022-08-20 14:12:45","updated_at":"2023-04-25 10:52:23"}',
            ),
            153 => 
            array (
                'id' => 697,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":406,"parent_id":361,"title":"Depan","icon":null,"route":"admin.menu.frontend","sequence":39,"active":1,"type":1,"created_at":"2022-08-20 14:16:07","updated_at":"2023-04-25 10:52:23"}',
            ),
            154 => 
            array (
                'id' => 698,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":367,"parent_id":null,"title":"User Access","icon":"fas fa-user-check","route":null,"sequence":40,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-25 10:52:23"}',
            ),
            155 => 
            array (
                'id' => 699,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":368,"parent_id":367,"title":"Permission","icon":null,"route":"admin.user_access.permission","sequence":41,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-25 10:52:23"}',
            ),
            156 => 
            array (
                'id' => 700,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":369,"parent_id":367,"title":"Role","icon":null,"route":"admin.user_access.role","sequence":42,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-25 10:52:23"}',
            ),
            157 => 
            array (
                'id' => 701,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":373,"parent_id":null,"title":"Profile","icon":"fas fa-user","route":"admin.profile","sequence":43,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-25 10:52:23"}',
            ),
            158 => 
            array (
                'id' => 702,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":386,"parent_id":null,"title":"Logout","icon":"fas fa-sign-out-alt","route":"logout","sequence":44,"active":1,"type":1,"created_at":"2022-08-05 23:54:09","updated_at":"2023-04-25 10:52:23"}',
            ),
            159 => 
            array (
                'id' => 703,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":392,"parent_id":null,"title":"Google Form","icon":"fas fa-user-edit","route":"admin.pendaftaran.gform","sequence":45,"active":0,"type":1,"created_at":"2022-08-08 16:14:54","updated_at":"2023-04-25 10:52:23"}',
            ),
            160 => 
            array (
                'id' => 704,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:12:51',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":414,"parent_id":null,"title":"Visi Dan Misi","icon":null,"route":"admin.setting.visi_misi","sequence":46,"active":0,"type":1,"created_at":"2023-01-18 01:51:32","updated_at":"2023-04-25 10:52:23"}',
            ),
            161 => 
            array (
                'id' => 705,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:21:34',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":427,"parent_id":null,"title":"Client","icon":"fas fa-th-large","route":"admin.client","sequence":28,"active":1,"type":1,"created_at":"2023-05-04 18:12:41","updated_at":"2023-05-04 18:12:51"}',
            ),
            162 => 
            array (
                'id' => 706,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:21:34',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":427,"updated_at":"2023-05-04T11:21:34.000000Z","created_at":"2023-05-04T11:21:34.000000Z","id":251}',
            ),
            163 => 
            array (
                'id' => 707,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:21:58',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":427,"parent_id":null,"title":"Clients","icon":"fas fa-th-large","route":"admin.client","sequence":28,"active":1,"type":1,"created_at":"2023-05-04 18:12:41","updated_at":"2023-05-04 18:21:34"}',
            ),
            164 => 
            array (
                'id' => 708,
                'user_id' => 1,
                'log_date' => '2023-05-04 18:21:58',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":427,"updated_at":"2023-05-04T11:21:58.000000Z","created_at":"2023-05-04T11:21:58.000000Z","id":252}',
            ),
            165 => 
            array (
                'id' => 709,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:28:29',
                'table_name' => 'contact_messages',
                'log_type' => 'create',
                'data' => '{"nama":"Isep lutt","email":"igmail@gmail.com","message":"fasdf","updated_at":"2023-05-04T14:28:29.000000Z","created_at":"2023-05-04T14:28:29.000000Z","id":9}',
            ),
            166 => 
            array (
                'id' => 710,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:30:06',
                'table_name' => 'contact_messages',
                'log_type' => 'create',
                'data' => '{"nama":"Isep lutt","email":"igmail@gmail.com","message":"s","updated_at":"2023-05-04T14:30:06.000000Z","created_at":"2023-05-04T14:30:06.000000Z","id":10}',
            ),
            167 => 
            array (
                'id' => 711,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:31:51',
                'table_name' => 'contact_messages',
                'log_type' => 'create',
                'data' => '{"nama":"Davin Koss","email":"DavinKoss@mail.com","message":"asdf","updated_at":"2023-05-04T14:31:51.000000Z","created_at":"2023-05-04T14:31:51.000000Z","id":11}',
            ),
            168 => 
            array (
                'id' => 712,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:32:23',
                'table_name' => 'contact_messages',
                'log_type' => 'delete',
                'data' => '{"id":11,"nama":"Davin Koss","email":"DavinKoss@mail.com","message":"asdf","status":null,"created_at":"2023-05-04 21:31:51","updated_at":"2023-05-04 21:31:51"}',
            ),
            169 => 
            array (
                'id' => 713,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:36:25',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":360,"parent_id":null,"title":"Galeri","icon":"fas fa-images","route":"admin.galeri","sequence":12,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-04-19 18:50:30"}',
            ),
            170 => 
            array (
                'id' => 714,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:36:25',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":360,"updated_at":"2023-05-04T14:36:25.000000Z","created_at":"2023-05-04T14:36:25.000000Z","id":253}',
            ),
            171 => 
            array (
                'id' => 715,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:36:25',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":360,"updated_at":"2023-05-04T14:36:25.000000Z","created_at":"2023-05-04T14:36:25.000000Z","id":254}',
            ),
            172 => 
            array (
                'id' => 716,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:38:41',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":29,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 01:23:16"}',
            ),
            173 => 
            array (
                'id' => 717,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:41:46',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":26,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 01:23:58"}',
            ),
            174 => 
            array (
                'id' => 718,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:43:14',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":30,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 21:38:41"}',
            ),
            175 => 
            array (
                'id' => 719,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:43:29',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":31,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 21:43:14"}',
            ),
            176 => 
            array (
                'id' => 720,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:43:42',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":5,"nama":"Iklan 5","foto":"20230324234545.jpg","status":1,"ditampilkan":38,"created_at":"2023-03-24 23:45:45","updated_at":"2023-05-04 01:22:33"}',
            ),
            177 => 
            array (
                'id' => 721,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:43:45',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":27,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 21:41:46"}',
            ),
            178 => 
            array (
                'id' => 722,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:44:33',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":28,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 21:43:45"}',
            ),
            179 => 
            array (
                'id' => 723,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:45:02',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":5,"nama":"Iklan 5","foto":"20230324234545.jpg","status":1,"ditampilkan":39,"created_at":"2023-03-24 23:45:45","updated_at":"2023-05-04 21:43:42"}',
            ),
            180 => 
            array (
                'id' => 724,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:46:00',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":29,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 21:44:33"}',
            ),
            181 => 
            array (
                'id' => 725,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:55:03',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":30,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 21:46:00"}',
            ),
            182 => 
            array (
                'id' => 726,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:55:10',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":31,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 21:55:03"}',
            ),
            183 => 
            array (
                'id' => 727,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:55:54',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":32,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 21:43:29"}',
            ),
            184 => 
            array (
                'id' => 728,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:56:03',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":5,"nama":"Iklan 5","foto":"20230324234545.jpg","status":1,"ditampilkan":40,"created_at":"2023-03-24 23:45:45","updated_at":"2023-05-04 21:45:02"}',
            ),
            185 => 
            array (
                'id' => 729,
                'user_id' => 1,
                'log_date' => '2023-05-04 21:56:06',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":5,"nama":"Iklan 5","foto":"20230324234545.jpg","status":1,"ditampilkan":41,"created_at":"2023-03-24 23:45:45","updated_at":"2023-05-04 21:56:03"}',
            ),
            186 => 
            array (
                'id' => 730,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:01:50',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":33,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 21:55:54"}',
            ),
            187 => 
            array (
                'id' => 731,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:02:22',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":5,"nama":"Iklan 5","foto":"20230324234545.jpg","status":1,"ditampilkan":42,"created_at":"2023-03-24 23:45:45","updated_at":"2023-05-04 21:56:06"}',
            ),
            188 => 
            array (
                'id' => 732,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:02:25',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":34,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 22:01:50"}',
            ),
            189 => 
            array (
                'id' => 733,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:02:38',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":35,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 22:02:25"}',
            ),
            190 => 
            array (
                'id' => 734,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:03:34',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":5,"nama":"Iklan 5","foto":"20230324234545.jpg","status":1,"ditampilkan":43,"created_at":"2023-03-24 23:45:45","updated_at":"2023-05-04 22:02:22"}',
            ),
            191 => 
            array (
                'id' => 735,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:03:45',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":36,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 22:02:38"}',
            ),
            192 => 
            array (
                'id' => 736,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:05:19',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":37,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 22:03:45"}',
            ),
            193 => 
            array (
                'id' => 737,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:05:31',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":38,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 22:05:19"}',
            ),
            194 => 
            array (
                'id' => 738,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:05:40',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":32,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 21:55:10"}',
            ),
            195 => 
            array (
                'id' => 739,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:07:30',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":33,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 22:05:40"}',
            ),
            196 => 
            array (
                'id' => 740,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:07:32',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":5,"nama":"Iklan 5","foto":"20230324234545.jpg","status":1,"ditampilkan":44,"created_at":"2023-03-24 23:45:45","updated_at":"2023-05-04 22:03:34"}',
            ),
            197 => 
            array (
                'id' => 741,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:08:12',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":34,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 22:07:30"}',
            ),
            198 => 
            array (
                'id' => 742,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:08:35',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":35,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 22:08:12"}',
            ),
            199 => 
            array (
                'id' => 743,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:09:00',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":36,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 22:08:35"}',
            ),
            200 => 
            array (
                'id' => 744,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:09:13',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":37,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 22:09:00"}',
            ),
            201 => 
            array (
                'id' => 745,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:09:16',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":38,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 22:09:13"}',
            ),
            202 => 
            array (
                'id' => 746,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:09:38',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":39,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 22:09:16"}',
            ),
            203 => 
            array (
                'id' => 747,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:11:52',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":40,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 22:09:38"}',
            ),
            204 => 
            array (
                'id' => 748,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:11:54',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":5,"nama":"Iklan 5","foto":"20230324234545.jpg","status":1,"ditampilkan":45,"created_at":"2023-03-24 23:45:45","updated_at":"2023-05-04 22:07:32"}',
            ),
            205 => 
            array (
                'id' => 749,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:11:59',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":5,"nama":"Iklan 5","foto":"20230324234545.jpg","status":1,"ditampilkan":46,"created_at":"2023-03-24 23:45:45","updated_at":"2023-05-04 22:11:54"}',
            ),
            206 => 
            array (
                'id' => 750,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:12:36',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":41,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 22:11:52"}',
            ),
            207 => 
            array (
                'id' => 751,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:12:42',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":42,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 22:12:36"}',
            ),
            208 => 
            array (
                'id' => 752,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:12:45',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":43,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 22:12:42"}',
            ),
            209 => 
            array (
                'id' => 753,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:14:34',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":5,"nama":"Iklan 5","foto":"20230324234545.jpg","status":1,"ditampilkan":47,"created_at":"2023-03-24 23:45:45","updated_at":"2023-05-04 22:11:59"}',
            ),
            210 => 
            array (
                'id' => 754,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:14:37',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":44,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 22:12:45"}',
            ),
            211 => 
            array (
                'id' => 755,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:14:50',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":45,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 22:14:37"}',
            ),
            212 => 
            array (
                'id' => 756,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:14:56',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":5,"nama":"Iklan 5","foto":"20230324234545.jpg","status":1,"ditampilkan":48,"created_at":"2023-03-24 23:45:45","updated_at":"2023-05-04 22:14:34"}',
            ),
            213 => 
            array (
                'id' => 757,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:15:07',
                'table_name' => 'artikel',
                'log_type' => 'edit',
                'data' => '{"id":36,"nama":"IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD","slug":"ideal-cocktails-from-our-barmen-for-pefect-mood","foto":"\\/assets\\/artikel\\/ideal-cock16784303220.png","detail":"<h2 class=\\"title mb-10\\" style=\\"text-align: center; \\"><img data-bs-filename=\\"blog-post-1.jpg\\" style=\\"width: 748px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16784303220.png\\"><br>\\r\\n\\n<h2 class=\\"title mb-10\\">ideal cocktails from our barmen for pefect mood<\\/h2><div class=\\"mt-10\\">\\r\\n<p>For those of us who want to say thank you to our moms, it\'s not always easy\\r\\nto put those big feelings in words. Which is where Dribbble comes in.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>These eight shots crystallize the hard work moms put into keeping their kids\\r\\nalive, happy, and healthy. They might give you the inspiration you need for\\r\\nfilling out that card&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;or stand alone for your mom\'s interpretation.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to\\r\\ntake care of us as we get older&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;often sacrificing their own needs so they\\r\\ncan help with ours. Cruising on a bike <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>A supermarket worker was spat at by a customer attempting to stockpile Pot\\r\\nNoodles while another was told: &Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;I hope you get the virus and die&Atilde;&cent;&acirc;&#130;&not;&Acirc;&#157;, as\\r\\npanic-buying blighted the nations response to coronavirus pandemic.<img data-filename=\\"wkg-roastery.png\\" style=\\"width: 885.578px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16817970281.png\\"><\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,\\r\\nMerseyside, on Saturday, as a man in his 30s attempted to buy more than the\\r\\nthree Pot Noodles allowed by the <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was\\r\\njust one of the horrendous cases of abuse revealed by supermarket workers in\\r\\nrecent days as some customers grow angry over restrictions and empty\\r\\nshelves.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>The doctor was exposed to the virus when the 38-year-old woman visited the\\r\\nclinic on March 12, the minister said. Five days later, she tested positive.\\r\\nThat day, the doctor was also admitted in hospital.Lorem ipsum dolor sit\\r\\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\\r\\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\\r\\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\\r\\neu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\\r\\nsunt in culpa qui officia deserunt mollit <\\/p>\\r\\n<\\/div><\\/h2>\\n","excerpt":"Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.","counter":91,"date":"2023-03-10","status":1,"created_at":"2022-04-28 07:19:02","updated_at":"2023-04-18 12:50:28","user_id":1}',
            ),
            214 => 
            array (
                'id' => 758,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:15:08',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":46,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 22:14:50"}',
            ),
            215 => 
            array (
                'id' => 759,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:16:16',
                'table_name' => 'artikel',
                'log_type' => 'edit',
                'data' => '{"id":36,"nama":"IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD","slug":"ideal-cocktails-from-our-barmen-for-pefect-mood","foto":"\\/assets\\/artikel\\/ideal-cock16784303220.png","detail":"<h2 class=\\"title mb-10\\" style=\\"text-align: center; \\"><img data-bs-filename=\\"blog-post-1.jpg\\" style=\\"width: 748px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16784303220.png\\"><br>\\r\\n\\n<h2 class=\\"title mb-10\\">ideal cocktails from our barmen for pefect mood<\\/h2><div class=\\"mt-10\\">\\r\\n<p>For those of us who want to say thank you to our moms, it\'s not always easy\\r\\nto put those big feelings in words. Which is where Dribbble comes in.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>These eight shots crystallize the hard work moms put into keeping their kids\\r\\nalive, happy, and healthy. They might give you the inspiration you need for\\r\\nfilling out that card&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;or stand alone for your mom\'s interpretation.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to\\r\\ntake care of us as we get older&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;often sacrificing their own needs so they\\r\\ncan help with ours. Cruising on a bike <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>A supermarket worker was spat at by a customer attempting to stockpile Pot\\r\\nNoodles while another was told: &Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;I hope you get the virus and die&Atilde;&cent;&acirc;&#130;&not;&Acirc;&#157;, as\\r\\npanic-buying blighted the nations response to coronavirus pandemic.<img data-filename=\\"wkg-roastery.png\\" style=\\"width: 885.578px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16817970281.png\\"><\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,\\r\\nMerseyside, on Saturday, as a man in his 30s attempted to buy more than the\\r\\nthree Pot Noodles allowed by the <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was\\r\\njust one of the horrendous cases of abuse revealed by supermarket workers in\\r\\nrecent days as some customers grow angry over restrictions and empty\\r\\nshelves.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>The doctor was exposed to the virus when the 38-year-old woman visited the\\r\\nclinic on March 12, the minister said. Five days later, she tested positive.\\r\\nThat day, the doctor was also admitted in hospital.Lorem ipsum dolor sit\\r\\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\\r\\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\\r\\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\\r\\neu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\\r\\nsunt in culpa qui officia deserunt mollit <\\/p>\\r\\n<\\/div><\\/h2>\\n","excerpt":"Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.","counter":92,"date":"2023-03-10","status":1,"created_at":"2022-04-28 07:19:02","updated_at":"2023-05-04 22:15:07","user_id":1}',
            ),
            216 => 
            array (
                'id' => 760,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:16:16',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":39,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 22:05:31"}',
            ),
            217 => 
            array (
                'id' => 761,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:16:20',
                'table_name' => 'artikel',
                'log_type' => 'edit',
                'data' => '{"id":36,"nama":"IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD","slug":"ideal-cocktails-from-our-barmen-for-pefect-mood","foto":"\\/assets\\/artikel\\/ideal-cock16784303220.png","detail":"<h2 class=\\"title mb-10\\" style=\\"text-align: center; \\"><img data-bs-filename=\\"blog-post-1.jpg\\" style=\\"width: 748px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16784303220.png\\"><br>\\r\\n\\n<h2 class=\\"title mb-10\\">ideal cocktails from our barmen for pefect mood<\\/h2><div class=\\"mt-10\\">\\r\\n<p>For those of us who want to say thank you to our moms, it\'s not always easy\\r\\nto put those big feelings in words. Which is where Dribbble comes in.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>These eight shots crystallize the hard work moms put into keeping their kids\\r\\nalive, happy, and healthy. They might give you the inspiration you need for\\r\\nfilling out that card&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;or stand alone for your mom\'s interpretation.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to\\r\\ntake care of us as we get older&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;often sacrificing their own needs so they\\r\\ncan help with ours. Cruising on a bike <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>A supermarket worker was spat at by a customer attempting to stockpile Pot\\r\\nNoodles while another was told: &Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;I hope you get the virus and die&Atilde;&cent;&acirc;&#130;&not;&Acirc;&#157;, as\\r\\npanic-buying blighted the nations response to coronavirus pandemic.<img data-filename=\\"wkg-roastery.png\\" style=\\"width: 885.578px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16817970281.png\\"><\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,\\r\\nMerseyside, on Saturday, as a man in his 30s attempted to buy more than the\\r\\nthree Pot Noodles allowed by the <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was\\r\\njust one of the horrendous cases of abuse revealed by supermarket workers in\\r\\nrecent days as some customers grow angry over restrictions and empty\\r\\nshelves.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>The doctor was exposed to the virus when the 38-year-old woman visited the\\r\\nclinic on March 12, the minister said. Five days later, she tested positive.\\r\\nThat day, the doctor was also admitted in hospital.Lorem ipsum dolor sit\\r\\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\\r\\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\\r\\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\\r\\neu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\\r\\nsunt in culpa qui officia deserunt mollit <\\/p>\\r\\n<\\/div><\\/h2>\\n","excerpt":"Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.","counter":93,"date":"2023-03-10","status":1,"created_at":"2022-04-28 07:19:02","updated_at":"2023-05-04 22:16:16","user_id":1}',
            ),
            218 => 
            array (
                'id' => 762,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:16:20',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":40,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 22:16:16"}',
            ),
            219 => 
            array (
                'id' => 763,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:17:22',
                'table_name' => 'artikel',
                'log_type' => 'edit',
                'data' => '{"id":36,"nama":"IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD","slug":"ideal-cocktails-from-our-barmen-for-pefect-mood","foto":"\\/assets\\/artikel\\/ideal-cock16784303220.png","detail":"<h2 class=\\"title mb-10\\" style=\\"text-align: center; \\"><img data-bs-filename=\\"blog-post-1.jpg\\" style=\\"width: 748px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16784303220.png\\"><br>\\r\\n\\n<h2 class=\\"title mb-10\\">ideal cocktails from our barmen for pefect mood<\\/h2><div class=\\"mt-10\\">\\r\\n<p>For those of us who want to say thank you to our moms, it\'s not always easy\\r\\nto put those big feelings in words. Which is where Dribbble comes in.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>These eight shots crystallize the hard work moms put into keeping their kids\\r\\nalive, happy, and healthy. They might give you the inspiration you need for\\r\\nfilling out that card&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;or stand alone for your mom\'s interpretation.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to\\r\\ntake care of us as we get older&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;often sacrificing their own needs so they\\r\\ncan help with ours. Cruising on a bike <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>A supermarket worker was spat at by a customer attempting to stockpile Pot\\r\\nNoodles while another was told: &Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;I hope you get the virus and die&Atilde;&cent;&acirc;&#130;&not;&Acirc;&#157;, as\\r\\npanic-buying blighted the nations response to coronavirus pandemic.<img data-filename=\\"wkg-roastery.png\\" style=\\"width: 885.578px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16817970281.png\\"><\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,\\r\\nMerseyside, on Saturday, as a man in his 30s attempted to buy more than the\\r\\nthree Pot Noodles allowed by the <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was\\r\\njust one of the horrendous cases of abuse revealed by supermarket workers in\\r\\nrecent days as some customers grow angry over restrictions and empty\\r\\nshelves.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>The doctor was exposed to the virus when the 38-year-old woman visited the\\r\\nclinic on March 12, the minister said. Five days later, she tested positive.\\r\\nThat day, the doctor was also admitted in hospital.Lorem ipsum dolor sit\\r\\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\\r\\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\\r\\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\\r\\neu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\\r\\nsunt in culpa qui officia deserunt mollit <\\/p>\\r\\n<\\/div><\\/h2>\\n","excerpt":"Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.","counter":94,"date":"2023-03-10","status":1,"created_at":"2022-04-28 07:19:02","updated_at":"2023-05-04 22:16:20","user_id":1}',
            ),
            220 => 
            array (
                'id' => 764,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:17:22',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":41,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 22:16:20"}',
            ),
            221 => 
            array (
                'id' => 765,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:17:39',
                'table_name' => 'artikel',
                'log_type' => 'edit',
                'data' => '{"id":36,"nama":"IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD","slug":"ideal-cocktails-from-our-barmen-for-pefect-mood","foto":"\\/assets\\/artikel\\/ideal-cock16784303220.png","detail":"<h2 class=\\"title mb-10\\" style=\\"text-align: center; \\"><img data-bs-filename=\\"blog-post-1.jpg\\" style=\\"width: 748px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16784303220.png\\"><br>\\r\\n\\n<h2 class=\\"title mb-10\\">ideal cocktails from our barmen for pefect mood<\\/h2><div class=\\"mt-10\\">\\r\\n<p>For those of us who want to say thank you to our moms, it\'s not always easy\\r\\nto put those big feelings in words. Which is where Dribbble comes in.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>These eight shots crystallize the hard work moms put into keeping their kids\\r\\nalive, happy, and healthy. They might give you the inspiration you need for\\r\\nfilling out that card&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;or stand alone for your mom\'s interpretation.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to\\r\\ntake care of us as we get older&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;often sacrificing their own needs so they\\r\\ncan help with ours. Cruising on a bike <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>A supermarket worker was spat at by a customer attempting to stockpile Pot\\r\\nNoodles while another was told: &Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;I hope you get the virus and die&Atilde;&cent;&acirc;&#130;&not;&Acirc;&#157;, as\\r\\npanic-buying blighted the nations response to coronavirus pandemic.<img data-filename=\\"wkg-roastery.png\\" style=\\"width: 885.578px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16817970281.png\\"><\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,\\r\\nMerseyside, on Saturday, as a man in his 30s attempted to buy more than the\\r\\nthree Pot Noodles allowed by the <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was\\r\\njust one of the horrendous cases of abuse revealed by supermarket workers in\\r\\nrecent days as some customers grow angry over restrictions and empty\\r\\nshelves.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>The doctor was exposed to the virus when the 38-year-old woman visited the\\r\\nclinic on March 12, the minister said. Five days later, she tested positive.\\r\\nThat day, the doctor was also admitted in hospital.Lorem ipsum dolor sit\\r\\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\\r\\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\\r\\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\\r\\neu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\\r\\nsunt in culpa qui officia deserunt mollit <\\/p>\\r\\n<\\/div><\\/h2>\\n","excerpt":"Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.","counter":95,"date":"2023-03-10","status":1,"created_at":"2022-04-28 07:19:02","updated_at":"2023-05-04 22:17:22","user_id":1}',
            ),
            222 => 
            array (
                'id' => 766,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:17:39',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":5,"nama":"Iklan 5","foto":"20230324234545.jpg","status":1,"ditampilkan":49,"created_at":"2023-03-24 23:45:45","updated_at":"2023-05-04 22:14:56"}',
            ),
            223 => 
            array (
                'id' => 767,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:17:51',
                'table_name' => 'artikel',
                'log_type' => 'edit',
                'data' => '{"id":36,"nama":"IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD","slug":"ideal-cocktails-from-our-barmen-for-pefect-mood","foto":"\\/assets\\/artikel\\/ideal-cock16784303220.png","detail":"<h2 class=\\"title mb-10\\" style=\\"text-align: center; \\"><img data-bs-filename=\\"blog-post-1.jpg\\" style=\\"width: 748px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16784303220.png\\"><br>\\r\\n\\n<h2 class=\\"title mb-10\\">ideal cocktails from our barmen for pefect mood<\\/h2><div class=\\"mt-10\\">\\r\\n<p>For those of us who want to say thank you to our moms, it\'s not always easy\\r\\nto put those big feelings in words. Which is where Dribbble comes in.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>These eight shots crystallize the hard work moms put into keeping their kids\\r\\nalive, happy, and healthy. They might give you the inspiration you need for\\r\\nfilling out that card&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;or stand alone for your mom\'s interpretation.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to\\r\\ntake care of us as we get older&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;often sacrificing their own needs so they\\r\\ncan help with ours. Cruising on a bike <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>A supermarket worker was spat at by a customer attempting to stockpile Pot\\r\\nNoodles while another was told: &Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;I hope you get the virus and die&Atilde;&cent;&acirc;&#130;&not;&Acirc;&#157;, as\\r\\npanic-buying blighted the nations response to coronavirus pandemic.<img data-filename=\\"wkg-roastery.png\\" style=\\"width: 885.578px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16817970281.png\\"><\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,\\r\\nMerseyside, on Saturday, as a man in his 30s attempted to buy more than the\\r\\nthree Pot Noodles allowed by the <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was\\r\\njust one of the horrendous cases of abuse revealed by supermarket workers in\\r\\nrecent days as some customers grow angry over restrictions and empty\\r\\nshelves.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>The doctor was exposed to the virus when the 38-year-old woman visited the\\r\\nclinic on March 12, the minister said. Five days later, she tested positive.\\r\\nThat day, the doctor was also admitted in hospital.Lorem ipsum dolor sit\\r\\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\\r\\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\\r\\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\\r\\neu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\\r\\nsunt in culpa qui officia deserunt mollit <\\/p>\\r\\n<\\/div><\\/h2>\\n","excerpt":"Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.","counter":96,"date":"2023-03-10","status":1,"created_at":"2022-04-28 07:19:02","updated_at":"2023-05-04 22:17:39","user_id":1}',
            ),
            224 => 
            array (
                'id' => 768,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:17:51',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":5,"nama":"Iklan 5","foto":"20230324234545.jpg","status":1,"ditampilkan":50,"created_at":"2023-03-24 23:45:45","updated_at":"2023-05-04 22:17:39"}',
            ),
            225 => 
            array (
                'id' => 769,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:19:02',
                'table_name' => 'artikel',
                'log_type' => 'edit',
                'data' => '{"id":36,"nama":"IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD","slug":"ideal-cocktails-from-our-barmen-for-pefect-mood","foto":"\\/assets\\/artikel\\/ideal-cock16784303220.png","detail":"<h2 class=\\"title mb-10\\" style=\\"text-align: center; \\"><img data-bs-filename=\\"blog-post-1.jpg\\" style=\\"width: 748px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16784303220.png\\"><br>\\r\\n\\n<h2 class=\\"title mb-10\\">ideal cocktails from our barmen for pefect mood<\\/h2><div class=\\"mt-10\\">\\r\\n<p>For those of us who want to say thank you to our moms, it\'s not always easy\\r\\nto put those big feelings in words. Which is where Dribbble comes in.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>These eight shots crystallize the hard work moms put into keeping their kids\\r\\nalive, happy, and healthy. They might give you the inspiration you need for\\r\\nfilling out that card&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;or stand alone for your mom\'s interpretation.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to\\r\\ntake care of us as we get older&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;often sacrificing their own needs so they\\r\\ncan help with ours. Cruising on a bike <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>A supermarket worker was spat at by a customer attempting to stockpile Pot\\r\\nNoodles while another was told: &Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;I hope you get the virus and die&Atilde;&cent;&acirc;&#130;&not;&Acirc;&#157;, as\\r\\npanic-buying blighted the nations response to coronavirus pandemic.<img data-filename=\\"wkg-roastery.png\\" style=\\"width: 885.578px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16817970281.png\\"><\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,\\r\\nMerseyside, on Saturday, as a man in his 30s attempted to buy more than the\\r\\nthree Pot Noodles allowed by the <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was\\r\\njust one of the horrendous cases of abuse revealed by supermarket workers in\\r\\nrecent days as some customers grow angry over restrictions and empty\\r\\nshelves.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>The doctor was exposed to the virus when the 38-year-old woman visited the\\r\\nclinic on March 12, the minister said. Five days later, she tested positive.\\r\\nThat day, the doctor was also admitted in hospital.Lorem ipsum dolor sit\\r\\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\\r\\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\\r\\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\\r\\neu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\\r\\nsunt in culpa qui officia deserunt mollit <\\/p>\\r\\n<\\/div><\\/h2>\\n","excerpt":"Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.","counter":97,"date":"2023-03-10","status":1,"created_at":"2022-04-28 07:19:02","updated_at":"2023-05-04 22:17:51","user_id":1}',
            ),
            226 => 
            array (
                'id' => 770,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:19:02',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":42,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 22:17:22"}',
            ),
            227 => 
            array (
                'id' => 771,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:19:10',
                'table_name' => 'artikel',
                'log_type' => 'edit',
                'data' => '{"id":36,"nama":"IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD","slug":"ideal-cocktails-from-our-barmen-for-pefect-mood","foto":"\\/assets\\/artikel\\/ideal-cock16784303220.png","detail":"<h2 class=\\"title mb-10\\" style=\\"text-align: center; \\"><img data-bs-filename=\\"blog-post-1.jpg\\" style=\\"width: 748px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16784303220.png\\"><br>\\r\\n\\n<h2 class=\\"title mb-10\\">ideal cocktails from our barmen for pefect mood<\\/h2><div class=\\"mt-10\\">\\r\\n<p>For those of us who want to say thank you to our moms, it\'s not always easy\\r\\nto put those big feelings in words. Which is where Dribbble comes in.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>These eight shots crystallize the hard work moms put into keeping their kids\\r\\nalive, happy, and healthy. They might give you the inspiration you need for\\r\\nfilling out that card&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;or stand alone for your mom\'s interpretation.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to\\r\\ntake care of us as we get older&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;often sacrificing their own needs so they\\r\\ncan help with ours. Cruising on a bike <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>A supermarket worker was spat at by a customer attempting to stockpile Pot\\r\\nNoodles while another was told: &Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;I hope you get the virus and die&Atilde;&cent;&acirc;&#130;&not;&Acirc;&#157;, as\\r\\npanic-buying blighted the nations response to coronavirus pandemic.<img data-filename=\\"wkg-roastery.png\\" style=\\"width: 885.578px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16817970281.png\\"><\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,\\r\\nMerseyside, on Saturday, as a man in his 30s attempted to buy more than the\\r\\nthree Pot Noodles allowed by the <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was\\r\\njust one of the horrendous cases of abuse revealed by supermarket workers in\\r\\nrecent days as some customers grow angry over restrictions and empty\\r\\nshelves.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>The doctor was exposed to the virus when the 38-year-old woman visited the\\r\\nclinic on March 12, the minister said. Five days later, she tested positive.\\r\\nThat day, the doctor was also admitted in hospital.Lorem ipsum dolor sit\\r\\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\\r\\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\\r\\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\\r\\neu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\\r\\nsunt in culpa qui officia deserunt mollit <\\/p>\\r\\n<\\/div><\\/h2>\\n","excerpt":"Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.","counter":98,"date":"2023-03-10","status":1,"created_at":"2022-04-28 07:19:02","updated_at":"2023-05-04 22:19:02","user_id":1}',
            ),
            228 => 
            array (
                'id' => 772,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:19:10',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":5,"nama":"Iklan 5","foto":"20230324234545.jpg","status":1,"ditampilkan":51,"created_at":"2023-03-24 23:45:45","updated_at":"2023-05-04 22:17:51"}',
            ),
            229 => 
            array (
                'id' => 773,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:19:56',
                'table_name' => 'artikel',
                'log_type' => 'edit',
                'data' => '{"id":36,"nama":"IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD","slug":"ideal-cocktails-from-our-barmen-for-pefect-mood","foto":"\\/assets\\/artikel\\/ideal-cock16784303220.png","detail":"<h2 class=\\"title mb-10\\" style=\\"text-align: center; \\"><img data-bs-filename=\\"blog-post-1.jpg\\" style=\\"width: 748px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16784303220.png\\"><br>\\r\\n\\n<h2 class=\\"title mb-10\\">ideal cocktails from our barmen for pefect mood<\\/h2><div class=\\"mt-10\\">\\r\\n<p>For those of us who want to say thank you to our moms, it\'s not always easy\\r\\nto put those big feelings in words. Which is where Dribbble comes in.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>These eight shots crystallize the hard work moms put into keeping their kids\\r\\nalive, happy, and healthy. They might give you the inspiration you need for\\r\\nfilling out that card&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;or stand alone for your mom\'s interpretation.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to\\r\\ntake care of us as we get older&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;often sacrificing their own needs so they\\r\\ncan help with ours. Cruising on a bike <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>A supermarket worker was spat at by a customer attempting to stockpile Pot\\r\\nNoodles while another was told: &Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;I hope you get the virus and die&Atilde;&cent;&acirc;&#130;&not;&Acirc;&#157;, as\\r\\npanic-buying blighted the nations response to coronavirus pandemic.<img data-filename=\\"wkg-roastery.png\\" style=\\"width: 885.578px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16817970281.png\\"><\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,\\r\\nMerseyside, on Saturday, as a man in his 30s attempted to buy more than the\\r\\nthree Pot Noodles allowed by the <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was\\r\\njust one of the horrendous cases of abuse revealed by supermarket workers in\\r\\nrecent days as some customers grow angry over restrictions and empty\\r\\nshelves.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>The doctor was exposed to the virus when the 38-year-old woman visited the\\r\\nclinic on March 12, the minister said. Five days later, she tested positive.\\r\\nThat day, the doctor was also admitted in hospital.Lorem ipsum dolor sit\\r\\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\\r\\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\\r\\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\\r\\neu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\\r\\nsunt in culpa qui officia deserunt mollit <\\/p>\\r\\n<\\/div><\\/h2>\\n","excerpt":"Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.","counter":99,"date":"2023-03-10","status":1,"created_at":"2022-04-28 07:19:02","updated_at":"2023-05-04 22:19:10","user_id":1}',
            ),
            230 => 
            array (
                'id' => 774,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:19:56',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":43,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 22:19:02"}',
            ),
            231 => 
            array (
                'id' => 775,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:20:26',
                'table_name' => 'artikel',
                'log_type' => 'edit',
                'data' => '{"id":36,"nama":"IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD","slug":"ideal-cocktails-from-our-barmen-for-pefect-mood","foto":"\\/assets\\/artikel\\/ideal-cock16784303220.png","detail":"<h2 class=\\"title mb-10\\" style=\\"text-align: center; \\"><img data-bs-filename=\\"blog-post-1.jpg\\" style=\\"width: 748px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16784303220.png\\"><br>\\r\\n\\n<h2 class=\\"title mb-10\\">ideal cocktails from our barmen for pefect mood<\\/h2><div class=\\"mt-10\\">\\r\\n<p>For those of us who want to say thank you to our moms, it\'s not always easy\\r\\nto put those big feelings in words. Which is where Dribbble comes in.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>These eight shots crystallize the hard work moms put into keeping their kids\\r\\nalive, happy, and healthy. They might give you the inspiration you need for\\r\\nfilling out that card&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;or stand alone for your mom\'s interpretation.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to\\r\\ntake care of us as we get older&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;often sacrificing their own needs so they\\r\\ncan help with ours. Cruising on a bike <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>A supermarket worker was spat at by a customer attempting to stockpile Pot\\r\\nNoodles while another was told: &Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;I hope you get the virus and die&Atilde;&cent;&acirc;&#130;&not;&Acirc;&#157;, as\\r\\npanic-buying blighted the nations response to coronavirus pandemic.<img data-filename=\\"wkg-roastery.png\\" style=\\"width: 885.578px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16817970281.png\\"><\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,\\r\\nMerseyside, on Saturday, as a man in his 30s attempted to buy more than the\\r\\nthree Pot Noodles allowed by the <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was\\r\\njust one of the horrendous cases of abuse revealed by supermarket workers in\\r\\nrecent days as some customers grow angry over restrictions and empty\\r\\nshelves.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>The doctor was exposed to the virus when the 38-year-old woman visited the\\r\\nclinic on March 12, the minister said. Five days later, she tested positive.\\r\\nThat day, the doctor was also admitted in hospital.Lorem ipsum dolor sit\\r\\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\\r\\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\\r\\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\\r\\neu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\\r\\nsunt in culpa qui officia deserunt mollit <\\/p>\\r\\n<\\/div><\\/h2>\\n","excerpt":"Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.","counter":100,"date":"2023-03-10","status":1,"created_at":"2022-04-28 07:19:02","updated_at":"2023-05-04 22:19:56","user_id":1}',
            ),
            232 => 
            array (
                'id' => 776,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:20:26',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":47,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 22:15:08"}',
            ),
            233 => 
            array (
                'id' => 777,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:20:41',
                'table_name' => 'artikel',
                'log_type' => 'edit',
                'data' => '{"id":36,"nama":"IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD","slug":"ideal-cocktails-from-our-barmen-for-pefect-mood","foto":"\\/assets\\/artikel\\/ideal-cock16784303220.png","detail":"<h2 class=\\"title mb-10\\" style=\\"text-align: center; \\"><img data-bs-filename=\\"blog-post-1.jpg\\" style=\\"width: 748px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16784303220.png\\"><br>\\r\\n\\n<h2 class=\\"title mb-10\\">ideal cocktails from our barmen for pefect mood<\\/h2><div class=\\"mt-10\\">\\r\\n<p>For those of us who want to say thank you to our moms, it\'s not always easy\\r\\nto put those big feelings in words. Which is where Dribbble comes in.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>These eight shots crystallize the hard work moms put into keeping their kids\\r\\nalive, happy, and healthy. They might give you the inspiration you need for\\r\\nfilling out that card&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;or stand alone for your mom\'s interpretation.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to\\r\\ntake care of us as we get older&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;often sacrificing their own needs so they\\r\\ncan help with ours. Cruising on a bike <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>A supermarket worker was spat at by a customer attempting to stockpile Pot\\r\\nNoodles while another was told: &Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;I hope you get the virus and die&Atilde;&cent;&acirc;&#130;&not;&Acirc;&#157;, as\\r\\npanic-buying blighted the nations response to coronavirus pandemic.<img data-filename=\\"wkg-roastery.png\\" style=\\"width: 885.578px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16817970281.png\\"><\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,\\r\\nMerseyside, on Saturday, as a man in his 30s attempted to buy more than the\\r\\nthree Pot Noodles allowed by the <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was\\r\\njust one of the horrendous cases of abuse revealed by supermarket workers in\\r\\nrecent days as some customers grow angry over restrictions and empty\\r\\nshelves.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>The doctor was exposed to the virus when the 38-year-old woman visited the\\r\\nclinic on March 12, the minister said. Five days later, she tested positive.\\r\\nThat day, the doctor was also admitted in hospital.Lorem ipsum dolor sit\\r\\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\\r\\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\\r\\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\\r\\neu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\\r\\nsunt in culpa qui officia deserunt mollit <\\/p>\\r\\n<\\/div><\\/h2>\\n","excerpt":"Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.","counter":101,"date":"2023-03-10","status":1,"created_at":"2022-04-28 07:19:02","updated_at":"2023-05-04 22:20:26","user_id":1}',
            ),
            234 => 
            array (
                'id' => 778,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:20:41',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":44,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 22:19:56"}',
            ),
            235 => 
            array (
                'id' => 779,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:22:29',
                'table_name' => 'artikel',
                'log_type' => 'edit',
                'data' => '{"id":36,"nama":"IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD","slug":"ideal-cocktails-from-our-barmen-for-pefect-mood","foto":"\\/assets\\/artikel\\/ideal-cock16784303220.png","detail":"<h2 class=\\"title mb-10\\" style=\\"text-align: center; \\"><img data-bs-filename=\\"blog-post-1.jpg\\" style=\\"width: 748px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16784303220.png\\"><br>\\r\\n\\n<h2 class=\\"title mb-10\\">ideal cocktails from our barmen for pefect mood<\\/h2><div class=\\"mt-10\\">\\r\\n<p>For those of us who want to say thank you to our moms, it\'s not always easy\\r\\nto put those big feelings in words. Which is where Dribbble comes in.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>These eight shots crystallize the hard work moms put into keeping their kids\\r\\nalive, happy, and healthy. They might give you the inspiration you need for\\r\\nfilling out that card&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;or stand alone for your mom\'s interpretation.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to\\r\\ntake care of us as we get older&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;often sacrificing their own needs so they\\r\\ncan help with ours. Cruising on a bike <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>A supermarket worker was spat at by a customer attempting to stockpile Pot\\r\\nNoodles while another was told: &Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;I hope you get the virus and die&Atilde;&cent;&acirc;&#130;&not;&Acirc;&#157;, as\\r\\npanic-buying blighted the nations response to coronavirus pandemic.<img data-filename=\\"wkg-roastery.png\\" style=\\"width: 885.578px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16817970281.png\\"><\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,\\r\\nMerseyside, on Saturday, as a man in his 30s attempted to buy more than the\\r\\nthree Pot Noodles allowed by the <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was\\r\\njust one of the horrendous cases of abuse revealed by supermarket workers in\\r\\nrecent days as some customers grow angry over restrictions and empty\\r\\nshelves.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>The doctor was exposed to the virus when the 38-year-old woman visited the\\r\\nclinic on March 12, the minister said. Five days later, she tested positive.\\r\\nThat day, the doctor was also admitted in hospital.Lorem ipsum dolor sit\\r\\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\\r\\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\\r\\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\\r\\neu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\\r\\nsunt in culpa qui officia deserunt mollit <\\/p>\\r\\n<\\/div><\\/h2>\\n","excerpt":"Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.","counter":102,"date":"2023-03-10","status":1,"created_at":"2022-04-28 07:19:02","updated_at":"2023-05-04 22:20:41","user_id":1}',
            ),
            236 => 
            array (
                'id' => 780,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:22:29',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":45,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 22:20:41"}',
            ),
            237 => 
            array (
                'id' => 781,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:22:48',
                'table_name' => 'artikel',
                'log_type' => 'edit',
                'data' => '{"id":36,"nama":"IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD","slug":"ideal-cocktails-from-our-barmen-for-pefect-mood","foto":"\\/assets\\/artikel\\/ideal-cock16784303220.png","detail":"<h2 class=\\"title mb-10\\" style=\\"text-align: center; \\"><img data-bs-filename=\\"blog-post-1.jpg\\" style=\\"width: 748px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16784303220.png\\"><br>\\r\\n\\n<h2 class=\\"title mb-10\\">ideal cocktails from our barmen for pefect mood<\\/h2><div class=\\"mt-10\\">\\r\\n<p>For those of us who want to say thank you to our moms, it\'s not always easy\\r\\nto put those big feelings in words. Which is where Dribbble comes in.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>These eight shots crystallize the hard work moms put into keeping their kids\\r\\nalive, happy, and healthy. They might give you the inspiration you need for\\r\\nfilling out that card&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;or stand alone for your mom\'s interpretation.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to\\r\\ntake care of us as we get older&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;often sacrificing their own needs so they\\r\\ncan help with ours. Cruising on a bike <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>A supermarket worker was spat at by a customer attempting to stockpile Pot\\r\\nNoodles while another was told: &Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;I hope you get the virus and die&Atilde;&cent;&acirc;&#130;&not;&Acirc;&#157;, as\\r\\npanic-buying blighted the nations response to coronavirus pandemic.<img data-filename=\\"wkg-roastery.png\\" style=\\"width: 885.578px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16817970281.png\\"><\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,\\r\\nMerseyside, on Saturday, as a man in his 30s attempted to buy more than the\\r\\nthree Pot Noodles allowed by the <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was\\r\\njust one of the horrendous cases of abuse revealed by supermarket workers in\\r\\nrecent days as some customers grow angry over restrictions and empty\\r\\nshelves.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>The doctor was exposed to the virus when the 38-year-old woman visited the\\r\\nclinic on March 12, the minister said. Five days later, she tested positive.\\r\\nThat day, the doctor was also admitted in hospital.Lorem ipsum dolor sit\\r\\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\\r\\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\\r\\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\\r\\neu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\\r\\nsunt in culpa qui officia deserunt mollit <\\/p>\\r\\n<\\/div><\\/h2>\\n","excerpt":"Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.","counter":103,"date":"2023-03-10","status":1,"created_at":"2022-04-28 07:19:02","updated_at":"2023-05-04 22:22:29","user_id":1}',
            ),
            238 => 
            array (
                'id' => 782,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:22:48',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":46,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 22:22:29"}',
            ),
            239 => 
            array (
                'id' => 783,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:23:11',
                'table_name' => 'artikel',
                'log_type' => 'edit',
                'data' => '{"id":36,"nama":"IDEAL COCKTAILS FROM OUR BARMEN FOR PEFECT MOOD","slug":"ideal-cocktails-from-our-barmen-for-pefect-mood","foto":"\\/assets\\/artikel\\/ideal-cock16784303220.png","detail":"<h2 class=\\"title mb-10\\" style=\\"text-align: center; \\"><img data-bs-filename=\\"blog-post-1.jpg\\" style=\\"width: 748px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16784303220.png\\"><br>\\r\\n\\n<h2 class=\\"title mb-10\\">ideal cocktails from our barmen for pefect mood<\\/h2><div class=\\"mt-10\\">\\r\\n<p>For those of us who want to say thank you to our moms, it\'s not always easy\\r\\nto put those big feelings in words. Which is where Dribbble comes in.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>These eight shots crystallize the hard work moms put into keeping their kids\\r\\nalive, happy, and healthy. They might give you the inspiration you need for\\r\\nfilling out that card&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;or stand alone for your mom\'s interpretation.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Moms are the ones who bandage our boo-boos when we\'re little and continue to\\r\\ntake care of us as we get older&Atilde;&cent;&acirc;&#130;&not;&acirc;&#128;&#157;often sacrificing their own needs so they\\r\\ncan help with ours. Cruising on a bike <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>A supermarket worker was spat at by a customer attempting to stockpile Pot\\r\\nNoodles while another was told: &Atilde;&cent;&acirc;&#130;&not;&Aring;&#147;I hope you get the virus and die&Atilde;&cent;&acirc;&#130;&not;&Acirc;&#157;, as\\r\\npanic-buying blighted the nations response to coronavirus pandemic.<img data-filename=\\"wkg-roastery.png\\" style=\\"width: 885.578px;\\" src=\\"\\/assets\\/artikel\\/ideal-cock16817970281.png\\"><\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>An eyewitness described the scene at a packed branch of Asda in the Wirral,\\r\\nMerseyside, on Saturday, as a man in his 30s attempted to buy more than the\\r\\nthree Pot Noodles allowed by the <\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<h3>Here come the moms in space<\\/h3>\\r\\n<p>The incident, which was raised in parliament by Labour MP Bill Esterson, was\\r\\njust one of the horrendous cases of abuse revealed by supermarket workers in\\r\\nrecent days as some customers grow angry over restrictions and empty\\r\\nshelves.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>The doctor was exposed to the virus when the 38-year-old woman visited the\\r\\nclinic on March 12, the minister said. Five days later, she tested positive.\\r\\nThat day, the doctor was also admitted in hospital.Lorem ipsum dolor sit\\r\\namet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut\\r\\nlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud\\r\\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<\\/p>\\r\\n<\\/div><div class=\\"mt-20\\">\\r\\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore\\r\\neu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,\\r\\nsunt in culpa qui officia deserunt mollit <\\/p>\\r\\n<\\/div><\\/h2>\\n","excerpt":"Ronec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum id tellus mmodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper. Lorem ipsum.","counter":104,"date":"2023-03-10","status":1,"created_at":"2022-04-28 07:19:02","updated_at":"2023-05-04 22:22:48","user_id":1}',
            ),
            240 => 
            array (
                'id' => 784,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:23:11',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":3,"nama":"Iklan 3","foto":"20230324234525.jpg","status":1,"ditampilkan":47,"created_at":"2023-03-24 23:45:25","updated_at":"2023-05-04 22:22:48"}',
            ),
            241 => 
            array (
                'id' => 785,
                'user_id' => 1,
                'log_date' => '2023-05-04 22:23:34',
                'table_name' => 'banners',
                'log_type' => 'edit',
                'data' => '{"id":4,"nama":"Iklan 4","foto":"20230324234534.jpg","status":1,"ditampilkan":48,"created_at":"2023-03-24 23:45:34","updated_at":"2023-05-04 22:20:26"}',
            ),
            242 => 
            array (
                'id' => 786,
                'user_id' => 1,
                'log_date' => '2023-05-05 09:28:50',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.35","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.68"}',
            ),
            243 => 
            array (
                'id' => 787,
                'user_id' => 1,
                'log_date' => '2023-05-05 09:29:26',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'delete',
                'data' => '{"id":"94","kategori_id":"16","urutan":"1","nama":"Bug Fixes","judul":null,"sub_judul":null,"foto":"20230504024552.png","tampilkan_client":"1","tampilkan_testimoni":"1","slug":"bug-fixes","keterangan":"<p><br><\\/p>\\n","created_at":"2023-05-03 21:54:54","updated_at":"2023-05-04 02:47:59"}',
            ),
            244 => 
            array (
                'id' => 788,
                'user_id' => 1,
                'log_date' => '2023-05-05 09:29:30',
                'table_name' => 'portfolio_sub_kategori',
                'log_type' => 'delete',
                'data' => '{"id":"95","kategori_id":"16","urutan":"2","nama":"Other Website & Development Work","judul":null,"sub_judul":null,"foto":null,"tampilkan_client":"0","tampilkan_testimoni":"0","slug":"other-website-development-work","keterangan":null,"created_at":"2023-05-03 21:54:54","updated_at":"2023-05-03 21:54:54"}',
            ),
            245 => 
            array (
                'id' => 789,
                'user_id' => 1,
                'log_date' => '2023-05-05 09:29:40',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'edit',
                'data' => '{"id":"16","urutan":"2","nama":"Web & Programming","slug":"web-programming","keterangan":null,"created_at":"2023-04-14 02:25:53","updated_at":"2023-05-03 21:33:41"}',
            ),
            246 => 
            array (
                'id' => 790,
                'user_id' => 4,
                'log_date' => '2023-05-09 11:47:20',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"140.213.107.162","user_agent":"Mozilla\\/5.0 (Linux; Android 13; TECNO KI7) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Mobile Safari\\/537.36"}',
            ),
            247 => 
            array (
                'id' => 791,
                'user_id' => 4,
                'log_date' => '2023-05-10 14:57:41',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"112.215.211.1","user_agent":"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36"}',
            ),
            248 => 
            array (
                'id' => 792,
                'user_id' => 1,
                'log_date' => '2023-05-12 20:14:41',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.133","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/113.0.0.0 Safari\\/537.36 Edg\\/113.0.1774.35"}',
            ),
            249 => 
            array (
                'id' => 793,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:40',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.69","visitors_id":1591,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:23:40.000000Z","created_at":"2023-05-12T17:23:40.000000Z","id":1}',
            ),
            250 => 
            array (
                'id' => 794,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.90","visitors_id":1539,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:23:50.000000Z","created_at":"2023-05-12T17:23:50.000000Z","id":2}',
            ),
            251 => 
            array (
                'id' => 795,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:53',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.0","visitors_id":1749,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:23:53.000000Z","created_at":"2023-05-12T17:23:53.000000Z","id":3}',
            ),
            252 => 
            array (
                'id' => 796,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:55',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"103.147.8.35","visitors_id":138,"city":"Bandung","region":"West Java","country_code":"ID","country":"Indonesia","loc":"-6.9222,107.6069","timezone":"Asia\\/Jakarta","updated_at":"2023-05-12T17:23:55.000000Z","created_at":"2023-05-12T17:23:55.000000Z","id":4}',
            ),
            253 => 
            array (
                'id' => 797,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:56',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.79.173","visitors_id":139,"city":"Salem","region":"Oregon","country_code":"US","country":"United States of America","loc":"44.9429,-123.0351","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:23:56.000000Z","created_at":"2023-05-12T17:23:56.000000Z","id":5}',
            ),
            254 => 
            array (
                'id' => 798,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:56',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":140,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2868,103.8488","timezone":"Asia\\/Singapore","updated_at":"2023-05-12T17:23:56.000000Z","created_at":"2023-05-12T17:23:56.000000Z","id":6}',
            ),
            255 => 
            array (
                'id' => 799,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:56',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"40.77.167.228","visitors_id":141,"city":"Boydton","region":"Virginia","country_code":"US","country":"United States of America","loc":"36.6676,-78.3875","timezone":"America\\/New_York","updated_at":"2023-05-12T17:23:56.000000Z","created_at":"2023-05-12T17:23:56.000000Z","id":7}',
            ),
            256 => 
            array (
                'id' => 800,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:57',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.79.166","visitors_id":142,"city":"Salem","region":"Oregon","country_code":"US","country":"United States of America","loc":"44.9429,-123.0351","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:23:57.000000Z","created_at":"2023-05-12T17:23:57.000000Z","id":8}',
            ),
            257 => 
            array (
                'id' => 801,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:57',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.139","visitors_id":143,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:23:57.000000Z","created_at":"2023-05-12T17:23:57.000000Z","id":9}',
            ),
            258 => 
            array (
                'id' => 802,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:57',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.135","visitors_id":144,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:23:57.000000Z","created_at":"2023-05-12T17:23:57.000000Z","id":10}',
            ),
            259 => 
            array (
                'id' => 803,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:58',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.137","visitors_id":145,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:23:58.000000Z","created_at":"2023-05-12T17:23:58.000000Z","id":11}',
            ),
            260 => 
            array (
                'id' => 804,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:58',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.79.169","visitors_id":146,"city":"Salem","region":"Oregon","country_code":"US","country":"United States of America","loc":"44.9429,-123.0351","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:23:58.000000Z","created_at":"2023-05-12T17:23:58.000000Z","id":12}',
            ),
            261 => 
            array (
                'id' => 805,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:58',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.137","visitors_id":147,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:23:58.000000Z","created_at":"2023-05-12T17:23:58.000000Z","id":13}',
            ),
            262 => 
            array (
                'id' => 806,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:58',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"74.84.150.150","visitors_id":148,"city":"North Kansas City","region":"Missouri","country_code":"US","country":"United States of America","loc":"39.1300,-94.5622","timezone":"America\\/Chicago","updated_at":"2023-05-12T17:23:58.000000Z","created_at":"2023-05-12T17:23:58.000000Z","id":14}',
            ),
            263 => 
            array (
                'id' => 807,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:59',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.3","visitors_id":149,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:23:59.000000Z","created_at":"2023-05-12T17:23:59.000000Z","id":15}',
            ),
            264 => 
            array (
                'id' => 808,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:59',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"193.235.141.60","visitors_id":150,"city":"M\\u00e4rsta","region":"Stockholm","country_code":"SE","country":"Sweden","loc":"59.6216,17.8548","timezone":"Europe\\/Stockholm","updated_at":"2023-05-12T17:23:59.000000Z","created_at":"2023-05-12T17:23:59.000000Z","id":16}',
            ),
            265 => 
            array (
                'id' => 809,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:23:59',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"193.235.141.152","visitors_id":151,"city":"M\\u00e4rsta","region":"Stockholm","country_code":"SE","country":"Sweden","loc":"59.6216,17.8548","timezone":"Europe\\/Stockholm","updated_at":"2023-05-12T17:23:59.000000Z","created_at":"2023-05-12T17:23:59.000000Z","id":17}',
            ),
            266 => 
            array (
                'id' => 810,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:00',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"135.148.195.6","visitors_id":152,"city":"Washington","region":"Washington, D.C.","country_code":"US","country":"United States of America","loc":"38.8951,-77.0364","timezone":"America\\/New_York","updated_at":"2023-05-12T17:24:00.000000Z","created_at":"2023-05-12T17:24:00.000000Z","id":18}',
            ),
            267 => 
            array (
                'id' => 811,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:00',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.201","visitors_id":153,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:00.000000Z","created_at":"2023-05-12T17:24:00.000000Z","id":19}',
            ),
            268 => 
            array (
                'id' => 812,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:00',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.122","visitors_id":154,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:00.000000Z","created_at":"2023-05-12T17:24:00.000000Z","id":20}',
            ),
            269 => 
            array (
                'id' => 813,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:00',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.144","visitors_id":155,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:00.000000Z","created_at":"2023-05-12T17:24:00.000000Z","id":21}',
            ),
            270 => 
            array (
                'id' => 814,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:01',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.33","visitors_id":156,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:01.000000Z","created_at":"2023-05-12T17:24:01.000000Z","id":22}',
            ),
            271 => 
            array (
                'id' => 815,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:01',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.34","visitors_id":157,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:01.000000Z","created_at":"2023-05-12T17:24:01.000000Z","id":23}',
            ),
            272 => 
            array (
                'id' => 816,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:01',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.11","visitors_id":158,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:01.000000Z","created_at":"2023-05-12T17:24:01.000000Z","id":24}',
            ),
            273 => 
            array (
                'id' => 817,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:02',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.2","visitors_id":159,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:02.000000Z","created_at":"2023-05-12T17:24:02.000000Z","id":25}',
            ),
            274 => 
            array (
                'id' => 818,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:02',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.54","visitors_id":160,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:02.000000Z","created_at":"2023-05-12T17:24:02.000000Z","id":26}',
            ),
            275 => 
            array (
                'id' => 819,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:02',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.210","visitors_id":161,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:02.000000Z","created_at":"2023-05-12T17:24:02.000000Z","id":27}',
            ),
            276 => 
            array (
                'id' => 820,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:03',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.38","visitors_id":162,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:03.000000Z","created_at":"2023-05-12T17:24:03.000000Z","id":28}',
            ),
            277 => 
            array (
                'id' => 821,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:03',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.27","visitors_id":163,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:03.000000Z","created_at":"2023-05-12T17:24:03.000000Z","id":29}',
            ),
            278 => 
            array (
                'id' => 822,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:03',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"52.88.162.229","visitors_id":164,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:03.000000Z","created_at":"2023-05-12T17:24:03.000000Z","id":30}',
            ),
            279 => 
            array (
                'id' => 823,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:03',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"52.10.148.58","visitors_id":165,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:03.000000Z","created_at":"2023-05-12T17:24:03.000000Z","id":31}',
            ),
            280 => 
            array (
                'id' => 824,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:04',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.103","visitors_id":166,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:04.000000Z","created_at":"2023-05-12T17:24:04.000000Z","id":32}',
            ),
            281 => 
            array (
                'id' => 825,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:04',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.70.132","visitors_id":167,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-05-12T17:24:04.000000Z","created_at":"2023-05-12T17:24:04.000000Z","id":33}',
            ),
            282 => 
            array (
                'id' => 826,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:04',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"46.228.199.158","visitors_id":168,"city":"D\\u00fcsseldorf","region":"North Rhine-Westphalia","country_code":"DE","country":"Germany","loc":"51.2686,6.8100","timezone":"Europe\\/Berlin","updated_at":"2023-05-12T17:24:04.000000Z","created_at":"2023-05-12T17:24:04.000000Z","id":34}',
            ),
            283 => 
            array (
                'id' => 827,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:05',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.51","visitors_id":169,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:05.000000Z","created_at":"2023-05-12T17:24:05.000000Z","id":35}',
            ),
            284 => 
            array (
                'id' => 828,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:05',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.60","visitors_id":170,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:05.000000Z","created_at":"2023-05-12T17:24:05.000000Z","id":36}',
            ),
            285 => 
            array (
                'id' => 829,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:05',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.236","visitors_id":171,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:05.000000Z","created_at":"2023-05-12T17:24:05.000000Z","id":37}',
            ),
            286 => 
            array (
                'id' => 830,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:06',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.98","visitors_id":172,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:06.000000Z","created_at":"2023-05-12T17:24:06.000000Z","id":38}',
            ),
            287 => 
            array (
                'id' => 831,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:06',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.66","visitors_id":173,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:06.000000Z","created_at":"2023-05-12T17:24:06.000000Z","id":39}',
            ),
            288 => 
            array (
                'id' => 832,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:06',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.70","visitors_id":174,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:06.000000Z","created_at":"2023-05-12T17:24:06.000000Z","id":40}',
            ),
            289 => 
            array (
                'id' => 833,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:07',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.35","visitors_id":175,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:07.000000Z","created_at":"2023-05-12T17:24:07.000000Z","id":41}',
            ),
            290 => 
            array (
                'id' => 834,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:07',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.217","visitors_id":176,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:07.000000Z","created_at":"2023-05-12T17:24:07.000000Z","id":42}',
            ),
            291 => 
            array (
                'id' => 835,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:07',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.50","visitors_id":177,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:07.000000Z","created_at":"2023-05-12T17:24:07.000000Z","id":43}',
            ),
            292 => 
            array (
                'id' => 836,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:08',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.111","visitors_id":178,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:08.000000Z","created_at":"2023-05-12T17:24:08.000000Z","id":44}',
            ),
            293 => 
            array (
                'id' => 837,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:08',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.222","visitors_id":179,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:08.000000Z","created_at":"2023-05-12T17:24:08.000000Z","id":45}',
            ),
            294 => 
            array (
                'id' => 838,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:08',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.98","visitors_id":180,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:08.000000Z","created_at":"2023-05-12T17:24:08.000000Z","id":46}',
            ),
            295 => 
            array (
                'id' => 839,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:08',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.125","visitors_id":181,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:08.000000Z","created_at":"2023-05-12T17:24:08.000000Z","id":47}',
            ),
            296 => 
            array (
                'id' => 840,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:09',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.225","visitors_id":182,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:09.000000Z","created_at":"2023-05-12T17:24:09.000000Z","id":48}',
            ),
            297 => 
            array (
                'id' => 841,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:09',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.4","visitors_id":183,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:09.000000Z","created_at":"2023-05-12T17:24:09.000000Z","id":49}',
            ),
            298 => 
            array (
                'id' => 842,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:09',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.80","visitors_id":184,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:09.000000Z","created_at":"2023-05-12T17:24:09.000000Z","id":50}',
            ),
            299 => 
            array (
                'id' => 843,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:10',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.47","visitors_id":185,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:10.000000Z","created_at":"2023-05-12T17:24:10.000000Z","id":51}',
            ),
            300 => 
            array (
                'id' => 844,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:10',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.76","visitors_id":186,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:10.000000Z","created_at":"2023-05-12T17:24:10.000000Z","id":52}',
            ),
            301 => 
            array (
                'id' => 845,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:10',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.116","visitors_id":187,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:10.000000Z","created_at":"2023-05-12T17:24:10.000000Z","id":53}',
            ),
            302 => 
            array (
                'id' => 846,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:10',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":188,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2868,103.8488","timezone":"Asia\\/Singapore","updated_at":"2023-05-12T17:24:10.000000Z","created_at":"2023-05-12T17:24:10.000000Z","id":54}',
            ),
            303 => 
            array (
                'id' => 847,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:11',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.70.132","visitors_id":189,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-05-12T17:24:11.000000Z","created_at":"2023-05-12T17:24:11.000000Z","id":55}',
            ),
            304 => 
            array (
                'id' => 848,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:11',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.218","visitors_id":190,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:11.000000Z","created_at":"2023-05-12T17:24:11.000000Z","id":56}',
            ),
            305 => 
            array (
                'id' => 849,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:11',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.2","visitors_id":191,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:11.000000Z","created_at":"2023-05-12T17:24:11.000000Z","id":57}',
            ),
            306 => 
            array (
                'id' => 850,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:12',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.139","visitors_id":192,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:12.000000Z","created_at":"2023-05-12T17:24:12.000000Z","id":58}',
            ),
            307 => 
            array (
                'id' => 851,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:12',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.71","visitors_id":193,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:12.000000Z","created_at":"2023-05-12T17:24:12.000000Z","id":59}',
            ),
            308 => 
            array (
                'id' => 852,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:12',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.191","visitors_id":194,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:12.000000Z","created_at":"2023-05-12T17:24:12.000000Z","id":60}',
            ),
            309 => 
            array (
                'id' => 853,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:12',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"164.90.184.41","visitors_id":195,"city":"Frankfurt am Main","region":"Hesse","country_code":"DE","country":"Germany","loc":"50.1155,8.6842","timezone":"Europe\\/Berlin","updated_at":"2023-05-12T17:24:12.000000Z","created_at":"2023-05-12T17:24:12.000000Z","id":61}',
            ),
            310 => 
            array (
                'id' => 854,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:13',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.13","visitors_id":196,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:13.000000Z","created_at":"2023-05-12T17:24:13.000000Z","id":62}',
            ),
            311 => 
            array (
                'id' => 855,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:13',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.20","visitors_id":197,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:13.000000Z","created_at":"2023-05-12T17:24:13.000000Z","id":63}',
            ),
            312 => 
            array (
                'id' => 856,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:13',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"173.252.79.24","visitors_id":198,"city":"Los Lunas","region":"New Mexico","country_code":"US","country":"United States of America","loc":"34.8062,-106.7334","timezone":"America\\/Denver","updated_at":"2023-05-12T17:24:13.000000Z","created_at":"2023-05-12T17:24:13.000000Z","id":64}',
            ),
            313 => 
            array (
                'id' => 857,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:14',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.135","visitors_id":199,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:14.000000Z","created_at":"2023-05-12T17:24:14.000000Z","id":65}',
            ),
            314 => 
            array (
                'id' => 858,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:14',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.6","visitors_id":200,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:14.000000Z","created_at":"2023-05-12T17:24:14.000000Z","id":66}',
            ),
            315 => 
            array (
                'id' => 859,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:14',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.10","visitors_id":201,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:14.000000Z","created_at":"2023-05-12T17:24:14.000000Z","id":67}',
            ),
            316 => 
            array (
                'id' => 860,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:14',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.70.131","visitors_id":202,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-05-12T17:24:14.000000Z","created_at":"2023-05-12T17:24:14.000000Z","id":68}',
            ),
            317 => 
            array (
                'id' => 861,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:15',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.9","visitors_id":203,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:15.000000Z","created_at":"2023-05-12T17:24:15.000000Z","id":69}',
            ),
            318 => 
            array (
                'id' => 862,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:15',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.254.199.11","visitors_id":204,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:15.000000Z","created_at":"2023-05-12T17:24:15.000000Z","id":70}',
            ),
            319 => 
            array (
                'id' => 863,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:15',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.200","visitors_id":205,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:15.000000Z","created_at":"2023-05-12T17:24:15.000000Z","id":71}',
            ),
            320 => 
            array (
                'id' => 864,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:16',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.107","visitors_id":206,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:16.000000Z","created_at":"2023-05-12T17:24:16.000000Z","id":72}',
            ),
            321 => 
            array (
                'id' => 865,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:16',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.42","visitors_id":207,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:16.000000Z","created_at":"2023-05-12T17:24:16.000000Z","id":73}',
            ),
            322 => 
            array (
                'id' => 866,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:16',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.92","visitors_id":208,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:16.000000Z","created_at":"2023-05-12T17:24:16.000000Z","id":74}',
            ),
            323 => 
            array (
                'id' => 867,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:17',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.137","visitors_id":209,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:17.000000Z","created_at":"2023-05-12T17:24:17.000000Z","id":75}',
            ),
            324 => 
            array (
                'id' => 868,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:17',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.154","visitors_id":210,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:17.000000Z","created_at":"2023-05-12T17:24:17.000000Z","id":76}',
            ),
            325 => 
            array (
                'id' => 869,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:17',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.70","visitors_id":211,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:17.000000Z","created_at":"2023-05-12T17:24:17.000000Z","id":77}',
            ),
            326 => 
            array (
                'id' => 870,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:17',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.25","visitors_id":212,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:17.000000Z","created_at":"2023-05-12T17:24:17.000000Z","id":78}',
            ),
            327 => 
            array (
                'id' => 871,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:18',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.183","visitors_id":213,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:18.000000Z","created_at":"2023-05-12T17:24:18.000000Z","id":79}',
            ),
            328 => 
            array (
                'id' => 872,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:18',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.26","visitors_id":214,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:18.000000Z","created_at":"2023-05-12T17:24:18.000000Z","id":80}',
            ),
            329 => 
            array (
                'id' => 873,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:18',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.51","visitors_id":215,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:18.000000Z","created_at":"2023-05-12T17:24:18.000000Z","id":81}',
            ),
            330 => 
            array (
                'id' => 874,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:19',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"52.167.144.62","visitors_id":216,"city":"Boydton","region":"Virginia","country_code":"US","country":"United States of America","loc":"36.6676,-78.3875","timezone":"America\\/New_York","updated_at":"2023-05-12T17:24:19.000000Z","created_at":"2023-05-12T17:24:19.000000Z","id":82}',
            ),
            331 => 
            array (
                'id' => 875,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:19',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.196","visitors_id":217,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:19.000000Z","created_at":"2023-05-12T17:24:19.000000Z","id":83}',
            ),
            332 => 
            array (
                'id' => 876,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:19',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.79","visitors_id":218,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:19.000000Z","created_at":"2023-05-12T17:24:19.000000Z","id":84}',
            ),
            333 => 
            array (
                'id' => 877,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:19',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.28","visitors_id":219,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:19.000000Z","created_at":"2023-05-12T17:24:19.000000Z","id":85}',
            ),
            334 => 
            array (
                'id' => 878,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:20',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.13","visitors_id":220,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:20.000000Z","created_at":"2023-05-12T17:24:20.000000Z","id":86}',
            ),
            335 => 
            array (
                'id' => 879,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:20',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.49","visitors_id":221,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:20.000000Z","created_at":"2023-05-12T17:24:20.000000Z","id":87}',
            ),
            336 => 
            array (
                'id' => 880,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:20',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.12","visitors_id":222,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:20.000000Z","created_at":"2023-05-12T17:24:20.000000Z","id":88}',
            ),
            337 => 
            array (
                'id' => 881,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:21',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"35.88.187.56","visitors_id":223,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:21.000000Z","created_at":"2023-05-12T17:24:21.000000Z","id":89}',
            ),
            338 => 
            array (
                'id' => 882,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:21',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"52.43.69.31","visitors_id":224,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:21.000000Z","created_at":"2023-05-12T17:24:21.000000Z","id":90}',
            ),
            339 => 
            array (
                'id' => 883,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:21',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.15","visitors_id":225,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:21.000000Z","created_at":"2023-05-12T17:24:21.000000Z","id":91}',
            ),
            340 => 
            array (
                'id' => 884,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:22',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.10","visitors_id":226,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:22.000000Z","created_at":"2023-05-12T17:24:22.000000Z","id":92}',
            ),
            341 => 
            array (
                'id' => 885,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:22',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.74","visitors_id":227,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:22.000000Z","created_at":"2023-05-12T17:24:22.000000Z","id":93}',
            ),
            342 => 
            array (
                'id' => 886,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:22',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.223","visitors_id":228,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:22.000000Z","created_at":"2023-05-12T17:24:22.000000Z","id":94}',
            ),
            343 => 
            array (
                'id' => 887,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:23',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.1","visitors_id":229,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:23.000000Z","created_at":"2023-05-12T17:24:23.000000Z","id":95}',
            ),
            344 => 
            array (
                'id' => 888,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:23',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.149.173.2","visitors_id":230,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:23.000000Z","created_at":"2023-05-12T17:24:23.000000Z","id":96}',
            ),
            345 => 
            array (
                'id' => 889,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:23',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.12","visitors_id":231,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:23.000000Z","created_at":"2023-05-12T17:24:23.000000Z","id":97}',
            ),
            346 => 
            array (
                'id' => 890,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:23',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.15","visitors_id":232,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:23.000000Z","created_at":"2023-05-12T17:24:23.000000Z","id":98}',
            ),
            347 => 
            array (
                'id' => 891,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:24',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.70.130","visitors_id":233,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-05-12T17:24:24.000000Z","created_at":"2023-05-12T17:24:24.000000Z","id":99}',
            ),
            348 => 
            array (
                'id' => 892,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:24',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.14","visitors_id":234,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:24.000000Z","created_at":"2023-05-12T17:24:24.000000Z","id":100}',
            ),
            349 => 
            array (
                'id' => 893,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:24',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.19","visitors_id":235,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:24.000000Z","created_at":"2023-05-12T17:24:24.000000Z","id":101}',
            ),
            350 => 
            array (
                'id' => 894,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:25',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.18","visitors_id":236,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:25.000000Z","created_at":"2023-05-12T17:24:25.000000Z","id":102}',
            ),
            351 => 
            array (
                'id' => 895,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:25',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.17","visitors_id":237,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:25.000000Z","created_at":"2023-05-12T17:24:25.000000Z","id":103}',
            ),
            352 => 
            array (
                'id' => 896,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:25',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"40.77.167.228","visitors_id":238,"city":"Boydton","region":"Virginia","country_code":"US","country":"United States of America","loc":"36.6676,-78.3875","timezone":"America\\/New_York","updated_at":"2023-05-12T17:24:25.000000Z","created_at":"2023-05-12T17:24:25.000000Z","id":104}',
            ),
            353 => 
            array (
                'id' => 897,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:25',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.158","visitors_id":239,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:25.000000Z","created_at":"2023-05-12T17:24:25.000000Z","id":105}',
            ),
            354 => 
            array (
                'id' => 898,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:26',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.16","visitors_id":240,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:26.000000Z","created_at":"2023-05-12T17:24:26.000000Z","id":106}',
            ),
            355 => 
            array (
                'id' => 899,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:26',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.139","visitors_id":241,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:26.000000Z","created_at":"2023-05-12T17:24:26.000000Z","id":107}',
            ),
            356 => 
            array (
                'id' => 900,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:26',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.7","visitors_id":242,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:26.000000Z","created_at":"2023-05-12T17:24:26.000000Z","id":108}',
            ),
            357 => 
            array (
                'id' => 901,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:27',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.8","visitors_id":243,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:27.000000Z","created_at":"2023-05-12T17:24:27.000000Z","id":109}',
            ),
            358 => 
            array (
                'id' => 902,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:27',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.3","visitors_id":244,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:27.000000Z","created_at":"2023-05-12T17:24:27.000000Z","id":110}',
            ),
            359 => 
            array (
                'id' => 903,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:28',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.5","visitors_id":245,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:28.000000Z","created_at":"2023-05-12T17:24:28.000000Z","id":111}',
            ),
            360 => 
            array (
                'id' => 904,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:28',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.4","visitors_id":246,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:28.000000Z","created_at":"2023-05-12T17:24:28.000000Z","id":112}',
            ),
            361 => 
            array (
                'id' => 905,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:28',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.239","visitors_id":247,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:28.000000Z","created_at":"2023-05-12T17:24:28.000000Z","id":113}',
            ),
            362 => 
            array (
                'id' => 906,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:28',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.211","visitors_id":248,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:28.000000Z","created_at":"2023-05-12T17:24:28.000000Z","id":114}',
            ),
            363 => 
            array (
                'id' => 907,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:29',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.158","visitors_id":249,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:29.000000Z","created_at":"2023-05-12T17:24:29.000000Z","id":115}',
            ),
            364 => 
            array (
                'id' => 908,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:30',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.105","visitors_id":250,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:30.000000Z","created_at":"2023-05-12T17:24:30.000000Z","id":116}',
            ),
            365 => 
            array (
                'id' => 909,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:30',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"42.83.147.56","visitors_id":251,"city":"Beijing","region":"Beijing","country_code":"CN","country":"China","loc":"39.9075,116.3972","timezone":"Asia\\/Shanghai","updated_at":"2023-05-12T17:24:30.000000Z","created_at":"2023-05-12T17:24:30.000000Z","id":117}',
            ),
            366 => 
            array (
                'id' => 910,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:30',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.215","visitors_id":252,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:30.000000Z","created_at":"2023-05-12T17:24:30.000000Z","id":118}',
            ),
            367 => 
            array (
                'id' => 911,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:31',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.185","visitors_id":253,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:31.000000Z","created_at":"2023-05-12T17:24:31.000000Z","id":119}',
            ),
            368 => 
            array (
                'id' => 912,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:31',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.17","visitors_id":254,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:31.000000Z","created_at":"2023-05-12T17:24:31.000000Z","id":120}',
            ),
            369 => 
            array (
                'id' => 913,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:31',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.8","visitors_id":255,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:31.000000Z","created_at":"2023-05-12T17:24:31.000000Z","id":121}',
            ),
            370 => 
            array (
                'id' => 914,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:31',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.22","visitors_id":256,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:31.000000Z","created_at":"2023-05-12T17:24:31.000000Z","id":122}',
            ),
            371 => 
            array (
                'id' => 915,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:32',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"52.167.144.36","visitors_id":257,"city":"Boydton","region":"Virginia","country_code":"US","country":"United States of America","loc":"36.6676,-78.3875","timezone":"America\\/New_York","updated_at":"2023-05-12T17:24:32.000000Z","created_at":"2023-05-12T17:24:32.000000Z","id":123}',
            ),
            372 => 
            array (
                'id' => 916,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:32',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.48","visitors_id":258,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:32.000000Z","created_at":"2023-05-12T17:24:32.000000Z","id":124}',
            ),
            373 => 
            array (
                'id' => 917,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:32',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.199","visitors_id":259,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:32.000000Z","created_at":"2023-05-12T17:24:32.000000Z","id":125}',
            ),
            374 => 
            array (
                'id' => 918,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:33',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.246","visitors_id":260,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:33.000000Z","created_at":"2023-05-12T17:24:33.000000Z","id":126}',
            ),
            375 => 
            array (
                'id' => 919,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:33',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.206","visitors_id":261,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:33.000000Z","created_at":"2023-05-12T17:24:33.000000Z","id":127}',
            ),
            376 => 
            array (
                'id' => 920,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:33',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.195","visitors_id":262,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:33.000000Z","created_at":"2023-05-12T17:24:33.000000Z","id":128}',
            ),
            377 => 
            array (
                'id' => 921,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:33',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.98","visitors_id":263,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:33.000000Z","created_at":"2023-05-12T17:24:33.000000Z","id":129}',
            ),
            378 => 
            array (
                'id' => 922,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:34',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.233","visitors_id":264,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:34.000000Z","created_at":"2023-05-12T17:24:34.000000Z","id":130}',
            ),
            379 => 
            array (
                'id' => 923,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:34',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.24","visitors_id":265,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:34.000000Z","created_at":"2023-05-12T17:24:34.000000Z","id":131}',
            ),
            380 => 
            array (
                'id' => 924,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:34',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.10","visitors_id":266,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:34.000000Z","created_at":"2023-05-12T17:24:34.000000Z","id":132}',
            ),
            381 => 
            array (
                'id' => 925,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:35',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.152","visitors_id":267,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:35.000000Z","created_at":"2023-05-12T17:24:35.000000Z","id":133}',
            ),
            382 => 
            array (
                'id' => 926,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:35',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.72","visitors_id":268,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:35.000000Z","created_at":"2023-05-12T17:24:35.000000Z","id":134}',
            ),
            383 => 
            array (
                'id' => 927,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:35',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.40","visitors_id":269,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:35.000000Z","created_at":"2023-05-12T17:24:35.000000Z","id":135}',
            ),
            384 => 
            array (
                'id' => 928,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:36',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.62","visitors_id":270,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:36.000000Z","created_at":"2023-05-12T17:24:36.000000Z","id":136}',
            ),
            385 => 
            array (
                'id' => 929,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:36',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.106","visitors_id":271,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:36.000000Z","created_at":"2023-05-12T17:24:36.000000Z","id":137}',
            ),
            386 => 
            array (
                'id' => 930,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:36',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.193","visitors_id":272,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:36.000000Z","created_at":"2023-05-12T17:24:36.000000Z","id":138}',
            ),
            387 => 
            array (
                'id' => 931,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:37',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.23","visitors_id":273,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:37.000000Z","created_at":"2023-05-12T17:24:37.000000Z","id":139}',
            ),
            388 => 
            array (
                'id' => 932,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:37',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.204","visitors_id":274,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:37.000000Z","created_at":"2023-05-12T17:24:37.000000Z","id":140}',
            ),
            389 => 
            array (
                'id' => 933,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:37',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.72","visitors_id":275,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:37.000000Z","created_at":"2023-05-12T17:24:37.000000Z","id":141}',
            ),
            390 => 
            array (
                'id' => 934,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:37',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.174","visitors_id":276,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:37.000000Z","created_at":"2023-05-12T17:24:37.000000Z","id":142}',
            ),
            391 => 
            array (
                'id' => 935,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:38',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.50","visitors_id":277,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:38.000000Z","created_at":"2023-05-12T17:24:38.000000Z","id":143}',
            ),
            392 => 
            array (
                'id' => 936,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:38',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.93","visitors_id":278,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:38.000000Z","created_at":"2023-05-12T17:24:38.000000Z","id":144}',
            ),
            393 => 
            array (
                'id' => 937,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:38',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.226","visitors_id":279,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:38.000000Z","created_at":"2023-05-12T17:24:38.000000Z","id":145}',
            ),
            394 => 
            array (
                'id' => 938,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:39',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.8","visitors_id":280,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:39.000000Z","created_at":"2023-05-12T17:24:39.000000Z","id":146}',
            ),
            395 => 
            array (
                'id' => 939,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:39',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.219","visitors_id":281,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:39.000000Z","created_at":"2023-05-12T17:24:39.000000Z","id":147}',
            ),
            396 => 
            array (
                'id' => 940,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:39',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.30","visitors_id":282,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:39.000000Z","created_at":"2023-05-12T17:24:39.000000Z","id":148}',
            ),
            397 => 
            array (
                'id' => 941,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:39',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.192","visitors_id":283,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:39.000000Z","created_at":"2023-05-12T17:24:39.000000Z","id":149}',
            ),
            398 => 
            array (
                'id' => 942,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:40',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.207","visitors_id":284,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:40.000000Z","created_at":"2023-05-12T17:24:40.000000Z","id":150}',
            ),
            399 => 
            array (
                'id' => 943,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:40',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.112","visitors_id":285,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:40.000000Z","created_at":"2023-05-12T17:24:40.000000Z","id":151}',
            ),
            400 => 
            array (
                'id' => 944,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:40',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.96","visitors_id":286,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:40.000000Z","created_at":"2023-05-12T17:24:40.000000Z","id":152}',
            ),
            401 => 
            array (
                'id' => 945,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:41',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.52","visitors_id":287,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:41.000000Z","created_at":"2023-05-12T17:24:41.000000Z","id":153}',
            ),
            402 => 
            array (
                'id' => 946,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:41',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.67","visitors_id":288,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:41.000000Z","created_at":"2023-05-12T17:24:41.000000Z","id":154}',
            ),
            403 => 
            array (
                'id' => 947,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:41',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.177","visitors_id":289,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:41.000000Z","created_at":"2023-05-12T17:24:41.000000Z","id":155}',
            ),
            404 => 
            array (
                'id' => 948,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:42',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.37","visitors_id":290,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:42.000000Z","created_at":"2023-05-12T17:24:42.000000Z","id":156}',
            ),
            405 => 
            array (
                'id' => 949,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:42',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.212","visitors_id":291,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:42.000000Z","created_at":"2023-05-12T17:24:42.000000Z","id":157}',
            ),
            406 => 
            array (
                'id' => 950,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:42',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.70.128","visitors_id":292,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-05-12T17:24:42.000000Z","created_at":"2023-05-12T17:24:42.000000Z","id":158}',
            ),
            407 => 
            array (
                'id' => 951,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:42',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.73","visitors_id":293,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:42.000000Z","created_at":"2023-05-12T17:24:42.000000Z","id":159}',
            ),
            408 => 
            array (
                'id' => 952,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:43',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.80","visitors_id":294,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:43.000000Z","created_at":"2023-05-12T17:24:43.000000Z","id":160}',
            ),
            409 => 
            array (
                'id' => 953,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:43',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.88","visitors_id":295,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:43.000000Z","created_at":"2023-05-12T17:24:43.000000Z","id":161}',
            ),
            410 => 
            array (
                'id' => 954,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:43',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.147","visitors_id":296,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:43.000000Z","created_at":"2023-05-12T17:24:43.000000Z","id":162}',
            ),
            411 => 
            array (
                'id' => 955,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:44',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.11","visitors_id":297,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:44.000000Z","created_at":"2023-05-12T17:24:44.000000Z","id":163}',
            ),
            412 => 
            array (
                'id' => 956,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:44',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.201","visitors_id":298,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:44.000000Z","created_at":"2023-05-12T17:24:44.000000Z","id":164}',
            ),
            413 => 
            array (
                'id' => 957,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:44',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.167","visitors_id":299,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:44.000000Z","created_at":"2023-05-12T17:24:44.000000Z","id":165}',
            ),
            414 => 
            array (
                'id' => 958,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:44',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.203","visitors_id":300,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:44.000000Z","created_at":"2023-05-12T17:24:44.000000Z","id":166}',
            ),
            415 => 
            array (
                'id' => 959,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:45',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.203","visitors_id":301,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:45.000000Z","created_at":"2023-05-12T17:24:45.000000Z","id":167}',
            ),
            416 => 
            array (
                'id' => 960,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:45',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.107","visitors_id":302,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:45.000000Z","created_at":"2023-05-12T17:24:45.000000Z","id":168}',
            ),
            417 => 
            array (
                'id' => 961,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:45',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.76","visitors_id":303,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:45.000000Z","created_at":"2023-05-12T17:24:45.000000Z","id":169}',
            ),
            418 => 
            array (
                'id' => 962,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:46',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.16","visitors_id":304,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:46.000000Z","created_at":"2023-05-12T17:24:46.000000Z","id":170}',
            ),
            419 => 
            array (
                'id' => 963,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:46',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.113","visitors_id":305,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:46.000000Z","created_at":"2023-05-12T17:24:46.000000Z","id":171}',
            ),
            420 => 
            array (
                'id' => 964,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:46',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.101","visitors_id":306,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:46.000000Z","created_at":"2023-05-12T17:24:46.000000Z","id":172}',
            ),
            421 => 
            array (
                'id' => 965,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:46',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.2","visitors_id":307,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:46.000000Z","created_at":"2023-05-12T17:24:46.000000Z","id":173}',
            ),
            422 => 
            array (
                'id' => 966,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:47',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"18.237.136.159","visitors_id":308,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:47.000000Z","created_at":"2023-05-12T17:24:47.000000Z","id":174}',
            ),
            423 => 
            array (
                'id' => 967,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:47',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.171","visitors_id":309,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:47.000000Z","created_at":"2023-05-12T17:24:47.000000Z","id":175}',
            ),
            424 => 
            array (
                'id' => 968,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:47',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.218.73.171","visitors_id":310,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:47.000000Z","created_at":"2023-05-12T17:24:47.000000Z","id":176}',
            ),
            425 => 
            array (
                'id' => 969,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:48',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"34.221.79.167","visitors_id":311,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:48.000000Z","created_at":"2023-05-12T17:24:48.000000Z","id":177}',
            ),
            426 => 
            array (
                'id' => 970,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:48',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.19","visitors_id":312,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:48.000000Z","created_at":"2023-05-12T17:24:48.000000Z","id":178}',
            ),
            427 => 
            array (
                'id' => 971,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:48',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.221","visitors_id":313,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:48.000000Z","created_at":"2023-05-12T17:24:48.000000Z","id":179}',
            ),
            428 => 
            array (
                'id' => 972,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"213.180.203.171","visitors_id":314,"city":"Moscow","region":"Moscow","country_code":"RU","country":"Russian Federation","loc":"55.7522,37.6156","timezone":"Europe\\/Moscow","updated_at":"2023-05-12T17:24:49.000000Z","created_at":"2023-05-12T17:24:49.000000Z","id":180}',
            ),
            429 => 
            array (
                'id' => 973,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.59","visitors_id":315,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:49.000000Z","created_at":"2023-05-12T17:24:49.000000Z","id":181}',
            ),
            430 => 
            array (
                'id' => 974,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.189","visitors_id":316,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:49.000000Z","created_at":"2023-05-12T17:24:49.000000Z","id":182}',
            ),
            431 => 
            array (
                'id' => 975,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":317,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2868,103.8488","timezone":"Asia\\/Singapore","updated_at":"2023-05-12T17:24:49.000000Z","created_at":"2023-05-12T17:24:49.000000Z","id":183}',
            ),
            432 => 
            array (
                'id' => 976,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.17","visitors_id":318,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:50.000000Z","created_at":"2023-05-12T17:24:50.000000Z","id":184}',
            ),
            433 => 
            array (
                'id' => 977,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.194","visitors_id":319,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:50.000000Z","created_at":"2023-05-12T17:24:50.000000Z","id":185}',
            ),
            434 => 
            array (
                'id' => 978,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.18","visitors_id":320,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:50.000000Z","created_at":"2023-05-12T17:24:50.000000Z","id":186}',
            ),
            435 => 
            array (
                'id' => 979,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:51',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.16","visitors_id":321,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:51.000000Z","created_at":"2023-05-12T17:24:51.000000Z","id":187}',
            ),
            436 => 
            array (
                'id' => 980,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:51',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.8","visitors_id":322,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:51.000000Z","created_at":"2023-05-12T17:24:51.000000Z","id":188}',
            ),
            437 => 
            array (
                'id' => 981,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:51',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.5","visitors_id":323,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:51.000000Z","created_at":"2023-05-12T17:24:51.000000Z","id":189}',
            ),
            438 => 
            array (
                'id' => 982,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:52',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.17","visitors_id":324,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:52.000000Z","created_at":"2023-05-12T17:24:52.000000Z","id":190}',
            ),
            439 => 
            array (
                'id' => 983,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:52',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.10","visitors_id":325,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:24:52.000000Z","created_at":"2023-05-12T17:24:52.000000Z","id":191}',
            ),
            440 => 
            array (
                'id' => 984,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:52',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.139","visitors_id":326,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:52.000000Z","created_at":"2023-05-12T17:24:52.000000Z","id":192}',
            ),
            441 => 
            array (
                'id' => 985,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:53',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.164","visitors_id":327,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:53.000000Z","created_at":"2023-05-12T17:24:53.000000Z","id":193}',
            ),
            442 => 
            array (
                'id' => 986,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:53',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.97","visitors_id":328,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:53.000000Z","created_at":"2023-05-12T17:24:53.000000Z","id":194}',
            ),
            443 => 
            array (
                'id' => 987,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:53',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.223","visitors_id":329,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:53.000000Z","created_at":"2023-05-12T17:24:53.000000Z","id":195}',
            ),
            444 => 
            array (
                'id' => 988,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:53',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.58","visitors_id":330,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:53.000000Z","created_at":"2023-05-12T17:24:53.000000Z","id":196}',
            ),
            445 => 
            array (
                'id' => 989,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:54',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.225","visitors_id":331,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:54.000000Z","created_at":"2023-05-12T17:24:54.000000Z","id":197}',
            ),
            446 => 
            array (
                'id' => 990,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:54',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.180","visitors_id":332,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:54.000000Z","created_at":"2023-05-12T17:24:54.000000Z","id":198}',
            ),
            447 => 
            array (
                'id' => 991,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:54',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.28","visitors_id":333,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:54.000000Z","created_at":"2023-05-12T17:24:54.000000Z","id":199}',
            ),
            448 => 
            array (
                'id' => 992,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:55',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.78","visitors_id":334,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:55.000000Z","created_at":"2023-05-12T17:24:55.000000Z","id":200}',
            ),
            449 => 
            array (
                'id' => 993,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:55',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.79","visitors_id":335,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:55.000000Z","created_at":"2023-05-12T17:24:55.000000Z","id":201}',
            ),
            450 => 
            array (
                'id' => 994,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:55',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.19","visitors_id":336,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:55.000000Z","created_at":"2023-05-12T17:24:55.000000Z","id":202}',
            ),
            451 => 
            array (
                'id' => 995,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:56',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.102","visitors_id":337,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:56.000000Z","created_at":"2023-05-12T17:24:56.000000Z","id":203}',
            ),
            452 => 
            array (
                'id' => 996,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:56',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.69","visitors_id":338,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:56.000000Z","created_at":"2023-05-12T17:24:56.000000Z","id":204}',
            ),
            453 => 
            array (
                'id' => 997,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:56',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.129","visitors_id":339,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:24:56.000000Z","created_at":"2023-05-12T17:24:56.000000Z","id":205}',
            ),
            454 => 
            array (
                'id' => 998,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:57',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.245","visitors_id":340,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:57.000000Z","created_at":"2023-05-12T17:24:57.000000Z","id":206}',
            ),
            455 => 
            array (
                'id' => 999,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:57',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.52","visitors_id":341,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:57.000000Z","created_at":"2023-05-12T17:24:57.000000Z","id":207}',
            ),
            456 => 
            array (
                'id' => 1000,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:57',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.122","visitors_id":342,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:57.000000Z","created_at":"2023-05-12T17:24:57.000000Z","id":208}',
            ),
            457 => 
            array (
                'id' => 1001,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:58',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.207","visitors_id":343,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:58.000000Z","created_at":"2023-05-12T17:24:58.000000Z","id":209}',
            ),
            458 => 
            array (
                'id' => 1002,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:58',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.102","visitors_id":344,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:58.000000Z","created_at":"2023-05-12T17:24:58.000000Z","id":210}',
            ),
            459 => 
            array (
                'id' => 1003,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:58',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.141","visitors_id":345,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:58.000000Z","created_at":"2023-05-12T17:24:58.000000Z","id":211}',
            ),
            460 => 
            array (
                'id' => 1004,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:59',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.103","visitors_id":346,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:59.000000Z","created_at":"2023-05-12T17:24:59.000000Z","id":212}',
            ),
            461 => 
            array (
                'id' => 1005,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:59',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.68","visitors_id":347,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:59.000000Z","created_at":"2023-05-12T17:24:59.000000Z","id":213}',
            ),
            462 => 
            array (
                'id' => 1006,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:59',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.49","visitors_id":348,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:59.000000Z","created_at":"2023-05-12T17:24:59.000000Z","id":214}',
            ),
            463 => 
            array (
                'id' => 1007,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:24:59',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.193","visitors_id":349,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:24:59.000000Z","created_at":"2023-05-12T17:24:59.000000Z","id":215}',
            ),
            464 => 
            array (
                'id' => 1008,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:00',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.73","visitors_id":350,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:00.000000Z","created_at":"2023-05-12T17:25:00.000000Z","id":216}',
            ),
            465 => 
            array (
                'id' => 1009,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:00',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.8","visitors_id":351,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:00.000000Z","created_at":"2023-05-12T17:25:00.000000Z","id":217}',
            ),
            466 => 
            array (
                'id' => 1010,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:00',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.22","visitors_id":352,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:00.000000Z","created_at":"2023-05-12T17:25:00.000000Z","id":218}',
            ),
            467 => 
            array (
                'id' => 1011,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:01',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.18","visitors_id":353,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:01.000000Z","created_at":"2023-05-12T17:25:01.000000Z","id":219}',
            ),
            468 => 
            array (
                'id' => 1012,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:01',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.14","visitors_id":354,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:01.000000Z","created_at":"2023-05-12T17:25:01.000000Z","id":220}',
            ),
            469 => 
            array (
                'id' => 1013,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:01',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.1","visitors_id":355,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:01.000000Z","created_at":"2023-05-12T17:25:01.000000Z","id":221}',
            ),
            470 => 
            array (
                'id' => 1014,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:02',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.12","visitors_id":356,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:25:02.000000Z","created_at":"2023-05-12T17:25:02.000000Z","id":222}',
            ),
            471 => 
            array (
                'id' => 1015,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:02',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.9","visitors_id":357,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:25:02.000000Z","created_at":"2023-05-12T17:25:02.000000Z","id":223}',
            ),
            472 => 
            array (
                'id' => 1016,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:02',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.45","visitors_id":358,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:02.000000Z","created_at":"2023-05-12T17:25:02.000000Z","id":224}',
            ),
            473 => 
            array (
                'id' => 1017,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:02',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.121","visitors_id":359,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:02.000000Z","created_at":"2023-05-12T17:25:02.000000Z","id":225}',
            ),
            474 => 
            array (
                'id' => 1018,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:03',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.91","visitors_id":360,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:03.000000Z","created_at":"2023-05-12T17:25:03.000000Z","id":226}',
            ),
            475 => 
            array (
                'id' => 1019,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:03',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.69","visitors_id":361,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:03.000000Z","created_at":"2023-05-12T17:25:03.000000Z","id":227}',
            ),
            476 => 
            array (
                'id' => 1020,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:03',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.135","visitors_id":362,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:25:03.000000Z","created_at":"2023-05-12T17:25:03.000000Z","id":228}',
            ),
            477 => 
            array (
                'id' => 1021,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:04',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.11","visitors_id":363,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:25:04.000000Z","created_at":"2023-05-12T17:25:04.000000Z","id":229}',
            ),
            478 => 
            array (
                'id' => 1022,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:04',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.248","visitors_id":364,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:04.000000Z","created_at":"2023-05-12T17:25:04.000000Z","id":230}',
            ),
            479 => 
            array (
                'id' => 1023,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:04',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.199","visitors_id":365,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:04.000000Z","created_at":"2023-05-12T17:25:04.000000Z","id":231}',
            ),
            480 => 
            array (
                'id' => 1024,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:04',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.94","visitors_id":366,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:04.000000Z","created_at":"2023-05-12T17:25:04.000000Z","id":232}',
            ),
            481 => 
            array (
                'id' => 1025,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:05',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.40","visitors_id":367,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:05.000000Z","created_at":"2023-05-12T17:25:05.000000Z","id":233}',
            ),
            482 => 
            array (
                'id' => 1026,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:05',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.68","visitors_id":368,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:05.000000Z","created_at":"2023-05-12T17:25:05.000000Z","id":234}',
            ),
            483 => 
            array (
                'id' => 1027,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:05',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.6","visitors_id":369,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:25:05.000000Z","created_at":"2023-05-12T17:25:05.000000Z","id":235}',
            ),
            484 => 
            array (
                'id' => 1028,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:06',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.19","visitors_id":370,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:25:06.000000Z","created_at":"2023-05-12T17:25:06.000000Z","id":236}',
            ),
            485 => 
            array (
                'id' => 1029,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:06',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"52.167.144.62","visitors_id":371,"city":"Boydton","region":"Virginia","country_code":"US","country":"United States of America","loc":"36.6676,-78.3875","timezone":"America\\/New_York","updated_at":"2023-05-12T17:25:06.000000Z","created_at":"2023-05-12T17:25:06.000000Z","id":237}',
            ),
            486 => 
            array (
                'id' => 1030,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:07',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.2","visitors_id":372,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:25:07.000000Z","created_at":"2023-05-12T17:25:07.000000Z","id":238}',
            ),
            487 => 
            array (
                'id' => 1031,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:07',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.4","visitors_id":373,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:25:07.000000Z","created_at":"2023-05-12T17:25:07.000000Z","id":239}',
            ),
            488 => 
            array (
                'id' => 1032,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:07',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.14","visitors_id":374,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:25:07.000000Z","created_at":"2023-05-12T17:25:07.000000Z","id":240}',
            ),
            489 => 
            array (
                'id' => 1033,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:08',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.158","visitors_id":375,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:07.000000Z","created_at":"2023-05-12T17:25:07.000000Z","id":241}',
            ),
            490 => 
            array (
                'id' => 1034,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:08',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.38","visitors_id":376,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:08.000000Z","created_at":"2023-05-12T17:25:08.000000Z","id":242}',
            ),
            491 => 
            array (
                'id' => 1035,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:08',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.70.132","visitors_id":377,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-05-12T17:25:08.000000Z","created_at":"2023-05-12T17:25:08.000000Z","id":243}',
            ),
            492 => 
            array (
                'id' => 1036,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:08',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.197","visitors_id":378,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:08.000000Z","created_at":"2023-05-12T17:25:08.000000Z","id":244}',
            ),
            493 => 
            array (
                'id' => 1037,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:09',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.9","visitors_id":379,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:09.000000Z","created_at":"2023-05-12T17:25:09.000000Z","id":245}',
            ),
            494 => 
            array (
                'id' => 1038,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:09',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.110","visitors_id":380,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:09.000000Z","created_at":"2023-05-12T17:25:09.000000Z","id":246}',
            ),
            495 => 
            array (
                'id' => 1039,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:09',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.63","visitors_id":381,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:09.000000Z","created_at":"2023-05-12T17:25:09.000000Z","id":247}',
            ),
            496 => 
            array (
                'id' => 1040,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:10',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.137","visitors_id":382,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:25:10.000000Z","created_at":"2023-05-12T17:25:10.000000Z","id":248}',
            ),
            497 => 
            array (
                'id' => 1041,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:10',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.70.130","visitors_id":383,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-05-12T17:25:10.000000Z","created_at":"2023-05-12T17:25:10.000000Z","id":249}',
            ),
            498 => 
            array (
                'id' => 1042,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:10',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.70.131","visitors_id":384,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-05-12T17:25:10.000000Z","created_at":"2023-05-12T17:25:10.000000Z","id":250}',
            ),
            499 => 
            array (
                'id' => 1043,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:10',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.13","visitors_id":385,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:25:10.000000Z","created_at":"2023-05-12T17:25:10.000000Z","id":251}',
            ),
        ));
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 1044,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:11',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"35.93.78.67","visitors_id":386,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:25:11.000000Z","created_at":"2023-05-12T17:25:11.000000Z","id":252}',
            ),
            1 => 
            array (
                'id' => 1045,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:11',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"52.13.45.86","visitors_id":387,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:25:11.000000Z","created_at":"2023-05-12T17:25:11.000000Z","id":253}',
            ),
            2 => 
            array (
                'id' => 1046,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:11',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.201","visitors_id":388,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:11.000000Z","created_at":"2023-05-12T17:25:11.000000Z","id":254}',
            ),
            3 => 
            array (
                'id' => 1047,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:12',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.62","visitors_id":389,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:12.000000Z","created_at":"2023-05-12T17:25:12.000000Z","id":255}',
            ),
            4 => 
            array (
                'id' => 1048,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:12',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.13","visitors_id":390,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:12.000000Z","created_at":"2023-05-12T17:25:12.000000Z","id":256}',
            ),
            5 => 
            array (
                'id' => 1049,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:12',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.46","visitors_id":391,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:12.000000Z","created_at":"2023-05-12T17:25:12.000000Z","id":257}',
            ),
            6 => 
            array (
                'id' => 1050,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:13',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"34.221.114.249","visitors_id":392,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:25:13.000000Z","created_at":"2023-05-12T17:25:13.000000Z","id":258}',
            ),
            7 => 
            array (
                'id' => 1051,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:13',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.1","visitors_id":393,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:25:13.000000Z","created_at":"2023-05-12T17:25:13.000000Z","id":259}',
            ),
            8 => 
            array (
                'id' => 1052,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:13',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.15","visitors_id":394,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:25:13.000000Z","created_at":"2023-05-12T17:25:13.000000Z","id":260}',
            ),
            9 => 
            array (
                'id' => 1053,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:14',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.7","visitors_id":395,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:25:14.000000Z","created_at":"2023-05-12T17:25:14.000000Z","id":261}',
            ),
            10 => 
            array (
                'id' => 1054,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:14',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.42","visitors_id":396,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:14.000000Z","created_at":"2023-05-12T17:25:14.000000Z","id":262}',
            ),
            11 => 
            array (
                'id' => 1055,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:14',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.35","visitors_id":397,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:14.000000Z","created_at":"2023-05-12T17:25:14.000000Z","id":263}',
            ),
            12 => 
            array (
                'id' => 1056,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:14',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.29","visitors_id":398,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:14.000000Z","created_at":"2023-05-12T17:25:14.000000Z","id":264}',
            ),
            13 => 
            array (
                'id' => 1057,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:15',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.13","visitors_id":399,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:15.000000Z","created_at":"2023-05-12T17:25:15.000000Z","id":265}',
            ),
            14 => 
            array (
                'id' => 1058,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:15',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.233","visitors_id":400,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:15.000000Z","created_at":"2023-05-12T17:25:15.000000Z","id":266}',
            ),
            15 => 
            array (
                'id' => 1059,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:15',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.208","visitors_id":401,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:15.000000Z","created_at":"2023-05-12T17:25:15.000000Z","id":267}',
            ),
            16 => 
            array (
                'id' => 1060,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:16',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.21","visitors_id":402,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:16.000000Z","created_at":"2023-05-12T17:25:16.000000Z","id":268}',
            ),
            17 => 
            array (
                'id' => 1061,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:16',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.163","visitors_id":403,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:16.000000Z","created_at":"2023-05-12T17:25:16.000000Z","id":269}',
            ),
            18 => 
            array (
                'id' => 1062,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:16',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.30","visitors_id":404,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:16.000000Z","created_at":"2023-05-12T17:25:16.000000Z","id":270}',
            ),
            19 => 
            array (
                'id' => 1063,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:16',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.92","visitors_id":405,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:16.000000Z","created_at":"2023-05-12T17:25:16.000000Z","id":271}',
            ),
            20 => 
            array (
                'id' => 1064,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:17',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.239","visitors_id":406,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:17.000000Z","created_at":"2023-05-12T17:25:17.000000Z","id":272}',
            ),
            21 => 
            array (
                'id' => 1065,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:17',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"164.90.140.1","visitors_id":407,"city":"Clifton","region":"New Jersey","country_code":"US","country":"United States of America","loc":"40.8344,-74.1377","timezone":"America\\/New_York","updated_at":"2023-05-12T17:25:17.000000Z","created_at":"2023-05-12T17:25:17.000000Z","id":273}',
            ),
            22 => 
            array (
                'id' => 1066,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:17',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.112","visitors_id":408,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:17.000000Z","created_at":"2023-05-12T17:25:17.000000Z","id":274}',
            ),
            23 => 
            array (
                'id' => 1067,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:18',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.98","visitors_id":409,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:18.000000Z","created_at":"2023-05-12T17:25:18.000000Z","id":275}',
            ),
            24 => 
            array (
                'id' => 1068,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:18',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.86","visitors_id":410,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:18.000000Z","created_at":"2023-05-12T17:25:18.000000Z","id":276}',
            ),
            25 => 
            array (
                'id' => 1069,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:18',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.17","visitors_id":411,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:18.000000Z","created_at":"2023-05-12T17:25:18.000000Z","id":277}',
            ),
            26 => 
            array (
                'id' => 1070,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:19',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.31","visitors_id":412,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:19.000000Z","created_at":"2023-05-12T17:25:19.000000Z","id":278}',
            ),
            27 => 
            array (
                'id' => 1071,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:19',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.59","visitors_id":413,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:19.000000Z","created_at":"2023-05-12T17:25:19.000000Z","id":279}',
            ),
            28 => 
            array (
                'id' => 1072,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:19',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.187","visitors_id":414,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:19.000000Z","created_at":"2023-05-12T17:25:19.000000Z","id":280}',
            ),
            29 => 
            array (
                'id' => 1073,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:19',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.11","visitors_id":415,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:19.000000Z","created_at":"2023-05-12T17:25:19.000000Z","id":281}',
            ),
            30 => 
            array (
                'id' => 1074,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:20',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.3","visitors_id":416,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:25:20.000000Z","created_at":"2023-05-12T17:25:20.000000Z","id":282}',
            ),
            31 => 
            array (
                'id' => 1075,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:20',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.82","visitors_id":417,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:20.000000Z","created_at":"2023-05-12T17:25:20.000000Z","id":283}',
            ),
            32 => 
            array (
                'id' => 1076,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:20',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.254","visitors_id":418,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:20.000000Z","created_at":"2023-05-12T17:25:20.000000Z","id":284}',
            ),
            33 => 
            array (
                'id' => 1077,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:21',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.154","visitors_id":419,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:21.000000Z","created_at":"2023-05-12T17:25:21.000000Z","id":285}',
            ),
            34 => 
            array (
                'id' => 1078,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:21',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.113","visitors_id":420,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:21.000000Z","created_at":"2023-05-12T17:25:21.000000Z","id":286}',
            ),
            35 => 
            array (
                'id' => 1079,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:21',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.104","visitors_id":421,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:21.000000Z","created_at":"2023-05-12T17:25:21.000000Z","id":287}',
            ),
            36 => 
            array (
                'id' => 1080,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:22',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.249","visitors_id":422,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:22.000000Z","created_at":"2023-05-12T17:25:22.000000Z","id":288}',
            ),
            37 => 
            array (
                'id' => 1081,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:22',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.134","visitors_id":423,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:22.000000Z","created_at":"2023-05-12T17:25:22.000000Z","id":289}',
            ),
            38 => 
            array (
                'id' => 1082,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:22',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.143","visitors_id":424,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:22.000000Z","created_at":"2023-05-12T17:25:22.000000Z","id":290}',
            ),
            39 => 
            array (
                'id' => 1083,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:23',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.34","visitors_id":425,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:23.000000Z","created_at":"2023-05-12T17:25:23.000000Z","id":291}',
            ),
            40 => 
            array (
                'id' => 1084,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:23',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.124","visitors_id":426,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:23.000000Z","created_at":"2023-05-12T17:25:23.000000Z","id":292}',
            ),
            41 => 
            array (
                'id' => 1085,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:23',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.104","visitors_id":427,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:23.000000Z","created_at":"2023-05-12T17:25:23.000000Z","id":293}',
            ),
            42 => 
            array (
                'id' => 1086,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:24',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.105","visitors_id":428,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:24.000000Z","created_at":"2023-05-12T17:25:24.000000Z","id":294}',
            ),
            43 => 
            array (
                'id' => 1087,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:24',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.2","visitors_id":429,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:24.000000Z","created_at":"2023-05-12T17:25:24.000000Z","id":295}',
            ),
            44 => 
            array (
                'id' => 1088,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:24',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.188","visitors_id":430,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:24.000000Z","created_at":"2023-05-12T17:25:24.000000Z","id":296}',
            ),
            45 => 
            array (
                'id' => 1089,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:25',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.162","visitors_id":431,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:25.000000Z","created_at":"2023-05-12T17:25:25.000000Z","id":297}',
            ),
            46 => 
            array (
                'id' => 1090,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:25',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"40.77.167.228","visitors_id":432,"city":"Boydton","region":"Virginia","country_code":"US","country":"United States of America","loc":"36.6676,-78.3875","timezone":"America\\/New_York","updated_at":"2023-05-12T17:25:25.000000Z","created_at":"2023-05-12T17:25:25.000000Z","id":298}',
            ),
            47 => 
            array (
                'id' => 1091,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:25',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.96","visitors_id":433,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:25.000000Z","created_at":"2023-05-12T17:25:25.000000Z","id":299}',
            ),
            48 => 
            array (
                'id' => 1092,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:26',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.15","visitors_id":434,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:26.000000Z","created_at":"2023-05-12T17:25:26.000000Z","id":300}',
            ),
            49 => 
            array (
                'id' => 1093,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:26',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.183","visitors_id":435,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:26.000000Z","created_at":"2023-05-12T17:25:26.000000Z","id":301}',
            ),
            50 => 
            array (
                'id' => 1094,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:26',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.89","visitors_id":436,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:26.000000Z","created_at":"2023-05-12T17:25:26.000000Z","id":302}',
            ),
            51 => 
            array (
                'id' => 1095,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:26',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.230","visitors_id":437,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:26.000000Z","created_at":"2023-05-12T17:25:26.000000Z","id":303}',
            ),
            52 => 
            array (
                'id' => 1096,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:27',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.189","visitors_id":438,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:27.000000Z","created_at":"2023-05-12T17:25:27.000000Z","id":304}',
            ),
            53 => 
            array (
                'id' => 1097,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:27',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.166","visitors_id":439,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:27.000000Z","created_at":"2023-05-12T17:25:27.000000Z","id":305}',
            ),
            54 => 
            array (
                'id' => 1098,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:27',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.118","visitors_id":440,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:27.000000Z","created_at":"2023-05-12T17:25:27.000000Z","id":306}',
            ),
            55 => 
            array (
                'id' => 1099,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:28',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.213","visitors_id":441,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:28.000000Z","created_at":"2023-05-12T17:25:28.000000Z","id":307}',
            ),
            56 => 
            array (
                'id' => 1100,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:28',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.18","visitors_id":442,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:28.000000Z","created_at":"2023-05-12T17:25:28.000000Z","id":308}',
            ),
            57 => 
            array (
                'id' => 1101,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:28',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.61","visitors_id":443,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:28.000000Z","created_at":"2023-05-12T17:25:28.000000Z","id":309}',
            ),
            58 => 
            array (
                'id' => 1102,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:29',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.38","visitors_id":444,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:28.000000Z","created_at":"2023-05-12T17:25:28.000000Z","id":310}',
            ),
            59 => 
            array (
                'id' => 1103,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:29',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.204","visitors_id":445,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:29.000000Z","created_at":"2023-05-12T17:25:29.000000Z","id":311}',
            ),
            60 => 
            array (
                'id' => 1104,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:29',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.137","visitors_id":446,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:29.000000Z","created_at":"2023-05-12T17:25:29.000000Z","id":312}',
            ),
            61 => 
            array (
                'id' => 1105,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:29',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.228","visitors_id":447,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:29.000000Z","created_at":"2023-05-12T17:25:29.000000Z","id":313}',
            ),
            62 => 
            array (
                'id' => 1106,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:30',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.131","visitors_id":448,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:30.000000Z","created_at":"2023-05-12T17:25:30.000000Z","id":314}',
            ),
            63 => 
            array (
                'id' => 1107,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:30',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.101","visitors_id":449,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:30.000000Z","created_at":"2023-05-12T17:25:30.000000Z","id":315}',
            ),
            64 => 
            array (
                'id' => 1108,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:30',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.2","visitors_id":450,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:30.000000Z","created_at":"2023-05-12T17:25:30.000000Z","id":316}',
            ),
            65 => 
            array (
                'id' => 1109,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:31',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.147","visitors_id":451,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:30.000000Z","created_at":"2023-05-12T17:25:30.000000Z","id":317}',
            ),
            66 => 
            array (
                'id' => 1110,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:31',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.255","visitors_id":452,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:31.000000Z","created_at":"2023-05-12T17:25:31.000000Z","id":318}',
            ),
            67 => 
            array (
                'id' => 1111,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:31',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.33","visitors_id":453,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:31.000000Z","created_at":"2023-05-12T17:25:31.000000Z","id":319}',
            ),
            68 => 
            array (
                'id' => 1112,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:31',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.16","visitors_id":454,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:31.000000Z","created_at":"2023-05-12T17:25:31.000000Z","id":320}',
            ),
            69 => 
            array (
                'id' => 1113,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:32',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.151","visitors_id":455,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:32.000000Z","created_at":"2023-05-12T17:25:32.000000Z","id":321}',
            ),
            70 => 
            array (
                'id' => 1114,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:32',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.222","visitors_id":456,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:32.000000Z","created_at":"2023-05-12T17:25:32.000000Z","id":322}',
            ),
            71 => 
            array (
                'id' => 1115,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:32',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.20","visitors_id":457,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:25:32.000000Z","created_at":"2023-05-12T17:25:32.000000Z","id":323}',
            ),
            72 => 
            array (
                'id' => 1116,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:33',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.74","visitors_id":458,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:33.000000Z","created_at":"2023-05-12T17:25:33.000000Z","id":324}',
            ),
            73 => 
            array (
                'id' => 1117,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:33',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.240","visitors_id":459,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:33.000000Z","created_at":"2023-05-12T17:25:33.000000Z","id":325}',
            ),
            74 => 
            array (
                'id' => 1118,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:33',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.12","visitors_id":460,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:33.000000Z","created_at":"2023-05-12T17:25:33.000000Z","id":326}',
            ),
            75 => 
            array (
                'id' => 1119,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:33',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.6","visitors_id":461,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:33.000000Z","created_at":"2023-05-12T17:25:33.000000Z","id":327}',
            ),
            76 => 
            array (
                'id' => 1120,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:34',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.209","visitors_id":462,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:34.000000Z","created_at":"2023-05-12T17:25:34.000000Z","id":328}',
            ),
            77 => 
            array (
                'id' => 1121,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:34',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.114","visitors_id":463,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:34.000000Z","created_at":"2023-05-12T17:25:34.000000Z","id":329}',
            ),
            78 => 
            array (
                'id' => 1122,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:34',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.229","visitors_id":464,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:34.000000Z","created_at":"2023-05-12T17:25:34.000000Z","id":330}',
            ),
            79 => 
            array (
                'id' => 1123,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:35',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.106","visitors_id":465,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:35.000000Z","created_at":"2023-05-12T17:25:35.000000Z","id":331}',
            ),
            80 => 
            array (
                'id' => 1124,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:35',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.139","visitors_id":466,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:35.000000Z","created_at":"2023-05-12T17:25:35.000000Z","id":332}',
            ),
            81 => 
            array (
                'id' => 1125,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:35',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.107","visitors_id":467,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:35.000000Z","created_at":"2023-05-12T17:25:35.000000Z","id":333}',
            ),
            82 => 
            array (
                'id' => 1126,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:36',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.133","visitors_id":468,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:36.000000Z","created_at":"2023-05-12T17:25:36.000000Z","id":334}',
            ),
            83 => 
            array (
                'id' => 1127,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:36',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.47","visitors_id":469,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:36.000000Z","created_at":"2023-05-12T17:25:36.000000Z","id":335}',
            ),
            84 => 
            array (
                'id' => 1128,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:36',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.24","visitors_id":470,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:36.000000Z","created_at":"2023-05-12T17:25:36.000000Z","id":336}',
            ),
            85 => 
            array (
                'id' => 1129,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:36',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.232","visitors_id":471,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:36.000000Z","created_at":"2023-05-12T17:25:36.000000Z","id":337}',
            ),
            86 => 
            array (
                'id' => 1130,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:37',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.96","visitors_id":472,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:37.000000Z","created_at":"2023-05-12T17:25:37.000000Z","id":338}',
            ),
            87 => 
            array (
                'id' => 1131,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:37',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.171","visitors_id":473,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:37.000000Z","created_at":"2023-05-12T17:25:37.000000Z","id":339}',
            ),
            88 => 
            array (
                'id' => 1132,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:37',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.94","visitors_id":474,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:37.000000Z","created_at":"2023-05-12T17:25:37.000000Z","id":340}',
            ),
            89 => 
            array (
                'id' => 1133,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:38',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.184","visitors_id":475,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:38.000000Z","created_at":"2023-05-12T17:25:38.000000Z","id":341}',
            ),
            90 => 
            array (
                'id' => 1134,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:38',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.244","visitors_id":476,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:38.000000Z","created_at":"2023-05-12T17:25:38.000000Z","id":342}',
            ),
            91 => 
            array (
                'id' => 1135,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:38',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.221","visitors_id":477,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:38.000000Z","created_at":"2023-05-12T17:25:38.000000Z","id":343}',
            ),
            92 => 
            array (
                'id' => 1136,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:39',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.30","visitors_id":478,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:39.000000Z","created_at":"2023-05-12T17:25:39.000000Z","id":344}',
            ),
            93 => 
            array (
                'id' => 1137,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:39',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.64","visitors_id":479,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:39.000000Z","created_at":"2023-05-12T17:25:39.000000Z","id":345}',
            ),
            94 => 
            array (
                'id' => 1138,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:39',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.3","visitors_id":480,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:39.000000Z","created_at":"2023-05-12T17:25:39.000000Z","id":346}',
            ),
            95 => 
            array (
                'id' => 1139,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:39',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.123","visitors_id":481,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:39.000000Z","created_at":"2023-05-12T17:25:39.000000Z","id":347}',
            ),
            96 => 
            array (
                'id' => 1140,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:40',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.72","visitors_id":482,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:40.000000Z","created_at":"2023-05-12T17:25:40.000000Z","id":348}',
            ),
            97 => 
            array (
                'id' => 1141,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:40',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.39","visitors_id":483,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:40.000000Z","created_at":"2023-05-12T17:25:40.000000Z","id":349}',
            ),
            98 => 
            array (
                'id' => 1142,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:40',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.15","visitors_id":484,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:40.000000Z","created_at":"2023-05-12T17:25:40.000000Z","id":350}',
            ),
            99 => 
            array (
                'id' => 1143,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:41',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.145","visitors_id":485,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:41.000000Z","created_at":"2023-05-12T17:25:41.000000Z","id":351}',
            ),
            100 => 
            array (
                'id' => 1144,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:41',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.231","visitors_id":486,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:41.000000Z","created_at":"2023-05-12T17:25:41.000000Z","id":352}',
            ),
            101 => 
            array (
                'id' => 1145,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:41',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.98","visitors_id":487,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:41.000000Z","created_at":"2023-05-12T17:25:41.000000Z","id":353}',
            ),
            102 => 
            array (
                'id' => 1146,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:41',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.202","visitors_id":488,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:41.000000Z","created_at":"2023-05-12T17:25:41.000000Z","id":354}',
            ),
            103 => 
            array (
                'id' => 1147,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:42',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.78","visitors_id":489,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:42.000000Z","created_at":"2023-05-12T17:25:42.000000Z","id":355}',
            ),
            104 => 
            array (
                'id' => 1148,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:42',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"164.90.184.41","visitors_id":490,"city":"Frankfurt am Main","region":"Hesse","country_code":"DE","country":"Germany","loc":"50.1155,8.6842","timezone":"Europe\\/Berlin","updated_at":"2023-05-12T17:25:42.000000Z","created_at":"2023-05-12T17:25:42.000000Z","id":356}',
            ),
            105 => 
            array (
                'id' => 1149,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:42',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"40.77.167.237","visitors_id":491,"city":"Boydton","region":"Virginia","country_code":"US","country":"United States of America","loc":"36.6676,-78.3875","timezone":"America\\/New_York","updated_at":"2023-05-12T17:25:42.000000Z","created_at":"2023-05-12T17:25:42.000000Z","id":357}',
            ),
            106 => 
            array (
                'id' => 1150,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:43',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.172","visitors_id":492,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:43.000000Z","created_at":"2023-05-12T17:25:43.000000Z","id":358}',
            ),
            107 => 
            array (
                'id' => 1151,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:43',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.4","visitors_id":493,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:43.000000Z","created_at":"2023-05-12T17:25:43.000000Z","id":359}',
            ),
            108 => 
            array (
                'id' => 1152,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:43',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.35","visitors_id":494,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:43.000000Z","created_at":"2023-05-12T17:25:43.000000Z","id":360}',
            ),
            109 => 
            array (
                'id' => 1153,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:43',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.20","visitors_id":495,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:43.000000Z","created_at":"2023-05-12T17:25:43.000000Z","id":361}',
            ),
            110 => 
            array (
                'id' => 1154,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:44',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.148","visitors_id":496,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:44.000000Z","created_at":"2023-05-12T17:25:44.000000Z","id":362}',
            ),
            111 => 
            array (
                'id' => 1155,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:44',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.203","visitors_id":497,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:44.000000Z","created_at":"2023-05-12T17:25:44.000000Z","id":363}',
            ),
            112 => 
            array (
                'id' => 1156,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:44',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.198","visitors_id":498,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:44.000000Z","created_at":"2023-05-12T17:25:44.000000Z","id":364}',
            ),
            113 => 
            array (
                'id' => 1157,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:45',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.0","visitors_id":499,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:45.000000Z","created_at":"2023-05-12T17:25:45.000000Z","id":365}',
            ),
            114 => 
            array (
                'id' => 1158,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:45',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.135","visitors_id":500,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:45.000000Z","created_at":"2023-05-12T17:25:45.000000Z","id":366}',
            ),
            115 => 
            array (
                'id' => 1159,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:45',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.226","visitors_id":501,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:45.000000Z","created_at":"2023-05-12T17:25:45.000000Z","id":367}',
            ),
            116 => 
            array (
                'id' => 1160,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:46',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.50","visitors_id":502,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:46.000000Z","created_at":"2023-05-12T17:25:46.000000Z","id":368}',
            ),
            117 => 
            array (
                'id' => 1161,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:46',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.44","visitors_id":503,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:46.000000Z","created_at":"2023-05-12T17:25:46.000000Z","id":369}',
            ),
            118 => 
            array (
                'id' => 1162,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:46',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.48","visitors_id":504,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:46.000000Z","created_at":"2023-05-12T17:25:46.000000Z","id":370}',
            ),
            119 => 
            array (
                'id' => 1163,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:47',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.111","visitors_id":505,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:47.000000Z","created_at":"2023-05-12T17:25:47.000000Z","id":371}',
            ),
            120 => 
            array (
                'id' => 1164,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:47',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.41","visitors_id":506,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:47.000000Z","created_at":"2023-05-12T17:25:47.000000Z","id":372}',
            ),
            121 => 
            array (
                'id' => 1165,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:47',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.99","visitors_id":507,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:47.000000Z","created_at":"2023-05-12T17:25:47.000000Z","id":373}',
            ),
            122 => 
            array (
                'id' => 1166,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:48',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.125","visitors_id":508,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:48.000000Z","created_at":"2023-05-12T17:25:48.000000Z","id":374}',
            ),
            123 => 
            array (
                'id' => 1167,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:48',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.57","visitors_id":509,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:48.000000Z","created_at":"2023-05-12T17:25:48.000000Z","id":375}',
            ),
            124 => 
            array (
                'id' => 1168,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:48',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.1","visitors_id":510,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:48.000000Z","created_at":"2023-05-12T17:25:48.000000Z","id":376}',
            ),
            125 => 
            array (
                'id' => 1169,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.161","visitors_id":511,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:49.000000Z","created_at":"2023-05-12T17:25:49.000000Z","id":377}',
            ),
            126 => 
            array (
                'id' => 1170,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.105","visitors_id":512,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:49.000000Z","created_at":"2023-05-12T17:25:49.000000Z","id":378}',
            ),
            127 => 
            array (
                'id' => 1171,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.10","visitors_id":513,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:49.000000Z","created_at":"2023-05-12T17:25:49.000000Z","id":379}',
            ),
            128 => 
            array (
                'id' => 1172,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.95","visitors_id":514,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:49.000000Z","created_at":"2023-05-12T17:25:49.000000Z","id":380}',
            ),
            129 => 
            array (
                'id' => 1173,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.73","visitors_id":515,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:50.000000Z","created_at":"2023-05-12T17:25:50.000000Z","id":381}',
            ),
            130 => 
            array (
                'id' => 1174,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.3","visitors_id":516,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:50.000000Z","created_at":"2023-05-12T17:25:50.000000Z","id":382}',
            ),
            131 => 
            array (
                'id' => 1175,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.211","visitors_id":517,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:50.000000Z","created_at":"2023-05-12T17:25:50.000000Z","id":383}',
            ),
            132 => 
            array (
                'id' => 1176,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:51',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.85","visitors_id":518,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:51.000000Z","created_at":"2023-05-12T17:25:51.000000Z","id":384}',
            ),
            133 => 
            array (
                'id' => 1177,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:51',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.65","visitors_id":519,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:51.000000Z","created_at":"2023-05-12T17:25:51.000000Z","id":385}',
            ),
            134 => 
            array (
                'id' => 1178,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:51',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.253","visitors_id":520,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:51.000000Z","created_at":"2023-05-12T17:25:51.000000Z","id":386}',
            ),
            135 => 
            array (
                'id' => 1179,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:52',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.216","visitors_id":521,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:52.000000Z","created_at":"2023-05-12T17:25:52.000000Z","id":387}',
            ),
            136 => 
            array (
                'id' => 1180,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:52',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.71","visitors_id":522,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:52.000000Z","created_at":"2023-05-12T17:25:52.000000Z","id":388}',
            ),
            137 => 
            array (
                'id' => 1181,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:52',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.75","visitors_id":523,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:52.000000Z","created_at":"2023-05-12T17:25:52.000000Z","id":389}',
            ),
            138 => 
            array (
                'id' => 1182,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:52',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.215","visitors_id":524,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:52.000000Z","created_at":"2023-05-12T17:25:52.000000Z","id":390}',
            ),
            139 => 
            array (
                'id' => 1183,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:53',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.192","visitors_id":525,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:53.000000Z","created_at":"2023-05-12T17:25:53.000000Z","id":391}',
            ),
            140 => 
            array (
                'id' => 1184,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:53',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.76","visitors_id":526,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:53.000000Z","created_at":"2023-05-12T17:25:53.000000Z","id":392}',
            ),
            141 => 
            array (
                'id' => 1185,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:53',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.130","visitors_id":527,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:53.000000Z","created_at":"2023-05-12T17:25:53.000000Z","id":393}',
            ),
            142 => 
            array (
                'id' => 1186,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:54',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.45","visitors_id":528,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:53.000000Z","created_at":"2023-05-12T17:25:53.000000Z","id":394}',
            ),
            143 => 
            array (
                'id' => 1187,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:54',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.171","visitors_id":529,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:25:54.000000Z","created_at":"2023-05-12T17:25:54.000000Z","id":395}',
            ),
            144 => 
            array (
                'id' => 1188,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:54',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.165","visitors_id":530,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:54.000000Z","created_at":"2023-05-12T17:25:54.000000Z","id":396}',
            ),
            145 => 
            array (
                'id' => 1189,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:55',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.243","visitors_id":531,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:54.000000Z","created_at":"2023-05-12T17:25:54.000000Z","id":397}',
            ),
            146 => 
            array (
                'id' => 1190,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:25:55',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.149","visitors_id":532,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:25:55.000000Z","created_at":"2023-05-12T17:25:55.000000Z","id":398}',
            ),
            147 => 
            array (
                'id' => 1191,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:30',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.222","visitors_id":1609,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:30.000000Z","created_at":"2023-05-12T17:26:30.000000Z","id":399}',
            ),
            148 => 
            array (
                'id' => 1192,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:41',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.234","visitors_id":533,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:41.000000Z","created_at":"2023-05-12T17:26:41.000000Z","id":400}',
            ),
            149 => 
            array (
                'id' => 1193,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:41',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.11","visitors_id":534,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:41.000000Z","created_at":"2023-05-12T17:26:41.000000Z","id":401}',
            ),
            150 => 
            array (
                'id' => 1194,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:42',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.12","visitors_id":535,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:42.000000Z","created_at":"2023-05-12T17:26:42.000000Z","id":402}',
            ),
            151 => 
            array (
                'id' => 1195,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:42',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.90","visitors_id":536,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:42.000000Z","created_at":"2023-05-12T17:26:42.000000Z","id":403}',
            ),
            152 => 
            array (
                'id' => 1196,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:42',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.150","visitors_id":537,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:42.000000Z","created_at":"2023-05-12T17:26:42.000000Z","id":404}',
            ),
            153 => 
            array (
                'id' => 1197,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:43',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.23","visitors_id":538,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:43.000000Z","created_at":"2023-05-12T17:26:43.000000Z","id":405}',
            ),
            154 => 
            array (
                'id' => 1198,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:43',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.174","visitors_id":539,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:43.000000Z","created_at":"2023-05-12T17:26:43.000000Z","id":406}',
            ),
            155 => 
            array (
                'id' => 1199,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:43',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.196","visitors_id":540,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:43.000000Z","created_at":"2023-05-12T17:26:43.000000Z","id":407}',
            ),
            156 => 
            array (
                'id' => 1200,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:44',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.44","visitors_id":541,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:44.000000Z","created_at":"2023-05-12T17:26:44.000000Z","id":408}',
            ),
            157 => 
            array (
                'id' => 1201,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:44',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.4","visitors_id":542,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:44.000000Z","created_at":"2023-05-12T17:26:44.000000Z","id":409}',
            ),
            158 => 
            array (
                'id' => 1202,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:44',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.57","visitors_id":543,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:44.000000Z","created_at":"2023-05-12T17:26:44.000000Z","id":410}',
            ),
            159 => 
            array (
                'id' => 1203,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:45',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.89","visitors_id":544,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:45.000000Z","created_at":"2023-05-12T17:26:45.000000Z","id":411}',
            ),
            160 => 
            array (
                'id' => 1204,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:45',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.56","visitors_id":545,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:45.000000Z","created_at":"2023-05-12T17:26:45.000000Z","id":412}',
            ),
            161 => 
            array (
                'id' => 1205,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:45',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.182","visitors_id":546,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:45.000000Z","created_at":"2023-05-12T17:26:45.000000Z","id":413}',
            ),
            162 => 
            array (
                'id' => 1206,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:46',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.224","visitors_id":547,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:46.000000Z","created_at":"2023-05-12T17:26:46.000000Z","id":414}',
            ),
            163 => 
            array (
                'id' => 1207,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:46',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.196","visitors_id":548,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:26:46.000000Z","created_at":"2023-05-12T17:26:46.000000Z","id":415}',
            ),
            164 => 
            array (
                'id' => 1208,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:46',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.220","visitors_id":549,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:46.000000Z","created_at":"2023-05-12T17:26:46.000000Z","id":416}',
            ),
            165 => 
            array (
                'id' => 1209,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:47',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.43","visitors_id":550,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:47.000000Z","created_at":"2023-05-12T17:26:47.000000Z","id":417}',
            ),
            166 => 
            array (
                'id' => 1210,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:47',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.254.199.11","visitors_id":551,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:47.000000Z","created_at":"2023-05-12T17:26:47.000000Z","id":418}',
            ),
            167 => 
            array (
                'id' => 1211,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:47',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.63","visitors_id":552,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:47.000000Z","created_at":"2023-05-12T17:26:47.000000Z","id":419}',
            ),
            168 => 
            array (
                'id' => 1212,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:48',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.191","visitors_id":553,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:48.000000Z","created_at":"2023-05-12T17:26:48.000000Z","id":420}',
            ),
            169 => 
            array (
                'id' => 1213,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:48',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.10","visitors_id":554,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:48.000000Z","created_at":"2023-05-12T17:26:48.000000Z","id":421}',
            ),
            170 => 
            array (
                'id' => 1214,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:48',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.176","visitors_id":555,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:48.000000Z","created_at":"2023-05-12T17:26:48.000000Z","id":422}',
            ),
            171 => 
            array (
                'id' => 1215,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:48',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.7","visitors_id":556,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:48.000000Z","created_at":"2023-05-12T17:26:48.000000Z","id":423}',
            ),
            172 => 
            array (
                'id' => 1216,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.56","visitors_id":557,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:49.000000Z","created_at":"2023-05-12T17:26:49.000000Z","id":424}',
            ),
            173 => 
            array (
                'id' => 1217,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.39","visitors_id":558,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:49.000000Z","created_at":"2023-05-12T17:26:49.000000Z","id":425}',
            ),
            174 => 
            array (
                'id' => 1218,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.246","visitors_id":559,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:49.000000Z","created_at":"2023-05-12T17:26:49.000000Z","id":426}',
            ),
            175 => 
            array (
                'id' => 1219,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.75","visitors_id":560,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:50.000000Z","created_at":"2023-05-12T17:26:50.000000Z","id":427}',
            ),
            176 => 
            array (
                'id' => 1220,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.81","visitors_id":561,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:50.000000Z","created_at":"2023-05-12T17:26:50.000000Z","id":428}',
            ),
            177 => 
            array (
                'id' => 1221,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.229.118.32","visitors_id":562,"city":"Singapore","region":"Singapore","country_code":"SG","country":"Singapore","loc":"1.2868,103.8488","timezone":"Asia\\/Singapore","updated_at":"2023-05-12T17:26:50.000000Z","created_at":"2023-05-12T17:26:50.000000Z","id":429}',
            ),
            178 => 
            array (
                'id' => 1222,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.70.130","visitors_id":563,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-05-12T17:26:50.000000Z","created_at":"2023-05-12T17:26:50.000000Z","id":430}',
            ),
            179 => 
            array (
                'id' => 1223,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:51',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.70.142","visitors_id":564,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-05-12T17:26:51.000000Z","created_at":"2023-05-12T17:26:51.000000Z","id":431}',
            ),
            180 => 
            array (
                'id' => 1224,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:51',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.247","visitors_id":565,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:51.000000Z","created_at":"2023-05-12T17:26:51.000000Z","id":432}',
            ),
            181 => 
            array (
                'id' => 1225,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:51',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.86","visitors_id":566,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:51.000000Z","created_at":"2023-05-12T17:26:51.000000Z","id":433}',
            ),
            182 => 
            array (
                'id' => 1226,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:52',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.18","visitors_id":567,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:52.000000Z","created_at":"2023-05-12T17:26:52.000000Z","id":434}',
            ),
            183 => 
            array (
                'id' => 1227,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:52',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.36","visitors_id":568,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:52.000000Z","created_at":"2023-05-12T17:26:52.000000Z","id":435}',
            ),
            184 => 
            array (
                'id' => 1228,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:52',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.46","visitors_id":569,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:52.000000Z","created_at":"2023-05-12T17:26:52.000000Z","id":436}',
            ),
            185 => 
            array (
                'id' => 1229,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:53',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.72","visitors_id":570,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:53.000000Z","created_at":"2023-05-12T17:26:53.000000Z","id":437}',
            ),
            186 => 
            array (
                'id' => 1230,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:53',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.150","visitors_id":571,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:53.000000Z","created_at":"2023-05-12T17:26:53.000000Z","id":438}',
            ),
            187 => 
            array (
                'id' => 1231,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:53',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.98","visitors_id":572,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:53.000000Z","created_at":"2023-05-12T17:26:53.000000Z","id":439}',
            ),
            188 => 
            array (
                'id' => 1232,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:54',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.106","visitors_id":573,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:54.000000Z","created_at":"2023-05-12T17:26:54.000000Z","id":440}',
            ),
            189 => 
            array (
                'id' => 1233,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:54',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.112","visitors_id":574,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:54.000000Z","created_at":"2023-05-12T17:26:54.000000Z","id":441}',
            ),
            190 => 
            array (
                'id' => 1234,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:54',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.154","visitors_id":575,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:54.000000Z","created_at":"2023-05-12T17:26:54.000000Z","id":442}',
            ),
            191 => 
            array (
                'id' => 1235,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:54',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.56","visitors_id":576,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:54.000000Z","created_at":"2023-05-12T17:26:54.000000Z","id":443}',
            ),
            192 => 
            array (
                'id' => 1236,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:55',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.37","visitors_id":577,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:55.000000Z","created_at":"2023-05-12T17:26:55.000000Z","id":444}',
            ),
            193 => 
            array (
                'id' => 1237,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:55',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.214","visitors_id":578,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:55.000000Z","created_at":"2023-05-12T17:26:55.000000Z","id":445}',
            ),
            194 => 
            array (
                'id' => 1238,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:55',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.237","visitors_id":579,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:55.000000Z","created_at":"2023-05-12T17:26:55.000000Z","id":446}',
            ),
            195 => 
            array (
                'id' => 1239,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:56',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.89","visitors_id":580,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:56.000000Z","created_at":"2023-05-12T17:26:56.000000Z","id":447}',
            ),
            196 => 
            array (
                'id' => 1240,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:56',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.103","visitors_id":581,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:56.000000Z","created_at":"2023-05-12T17:26:56.000000Z","id":448}',
            ),
            197 => 
            array (
                'id' => 1241,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:57',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.67","visitors_id":582,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:57.000000Z","created_at":"2023-05-12T17:26:57.000000Z","id":449}',
            ),
            198 => 
            array (
                'id' => 1242,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:58',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.70","visitors_id":583,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:58.000000Z","created_at":"2023-05-12T17:26:58.000000Z","id":450}',
            ),
            199 => 
            array (
                'id' => 1243,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:58',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.158","visitors_id":584,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:26:58.000000Z","created_at":"2023-05-12T17:26:58.000000Z","id":451}',
            ),
            200 => 
            array (
                'id' => 1244,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:59',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.110","visitors_id":585,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:59.000000Z","created_at":"2023-05-12T17:26:59.000000Z","id":452}',
            ),
            201 => 
            array (
                'id' => 1245,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:59',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.52","visitors_id":586,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:26:59.000000Z","created_at":"2023-05-12T17:26:59.000000Z","id":453}',
            ),
            202 => 
            array (
                'id' => 1246,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:26:59',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.135","visitors_id":587,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:26:59.000000Z","created_at":"2023-05-12T17:26:59.000000Z","id":454}',
            ),
            203 => 
            array (
                'id' => 1247,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:00',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.71","visitors_id":588,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:00.000000Z","created_at":"2023-05-12T17:27:00.000000Z","id":455}',
            ),
            204 => 
            array (
                'id' => 1248,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:00',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.39","visitors_id":589,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:00.000000Z","created_at":"2023-05-12T17:27:00.000000Z","id":456}',
            ),
            205 => 
            array (
                'id' => 1249,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:00',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.40","visitors_id":590,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:00.000000Z","created_at":"2023-05-12T17:27:00.000000Z","id":457}',
            ),
            206 => 
            array (
                'id' => 1250,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:01',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.64","visitors_id":591,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:01.000000Z","created_at":"2023-05-12T17:27:01.000000Z","id":458}',
            ),
            207 => 
            array (
                'id' => 1251,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:01',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.5","visitors_id":592,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:01.000000Z","created_at":"2023-05-12T17:27:01.000000Z","id":459}',
            ),
            208 => 
            array (
                'id' => 1252,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:02',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.55","visitors_id":593,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:02.000000Z","created_at":"2023-05-12T17:27:02.000000Z","id":460}',
            ),
            209 => 
            array (
                'id' => 1253,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:02',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.45","visitors_id":594,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:02.000000Z","created_at":"2023-05-12T17:27:02.000000Z","id":461}',
            ),
            210 => 
            array (
                'id' => 1254,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:02',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.80","visitors_id":595,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:02.000000Z","created_at":"2023-05-12T17:27:02.000000Z","id":462}',
            ),
            211 => 
            array (
                'id' => 1255,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:02',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.53","visitors_id":596,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:02.000000Z","created_at":"2023-05-12T17:27:02.000000Z","id":463}',
            ),
            212 => 
            array (
                'id' => 1256,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:03',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.45","visitors_id":597,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:03.000000Z","created_at":"2023-05-12T17:27:03.000000Z","id":464}',
            ),
            213 => 
            array (
                'id' => 1257,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:03',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.153","visitors_id":598,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:03.000000Z","created_at":"2023-05-12T17:27:03.000000Z","id":465}',
            ),
            214 => 
            array (
                'id' => 1258,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:03',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.146","visitors_id":599,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:03.000000Z","created_at":"2023-05-12T17:27:03.000000Z","id":466}',
            ),
            215 => 
            array (
                'id' => 1259,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:04',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.61","visitors_id":600,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:04.000000Z","created_at":"2023-05-12T17:27:04.000000Z","id":467}',
            ),
            216 => 
            array (
                'id' => 1260,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:04',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.243","visitors_id":601,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:04.000000Z","created_at":"2023-05-12T17:27:04.000000Z","id":468}',
            ),
            217 => 
            array (
                'id' => 1261,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:04',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.211","visitors_id":602,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:04.000000Z","created_at":"2023-05-12T17:27:04.000000Z","id":469}',
            ),
            218 => 
            array (
                'id' => 1262,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:05',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.14","visitors_id":603,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:05.000000Z","created_at":"2023-05-12T17:27:05.000000Z","id":470}',
            ),
            219 => 
            array (
                'id' => 1263,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:05',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.7","visitors_id":604,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:05.000000Z","created_at":"2023-05-12T17:27:05.000000Z","id":471}',
            ),
            220 => 
            array (
                'id' => 1264,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:05',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.4","visitors_id":605,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:05.000000Z","created_at":"2023-05-12T17:27:05.000000Z","id":472}',
            ),
            221 => 
            array (
                'id' => 1265,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:06',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.10","visitors_id":606,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:06.000000Z","created_at":"2023-05-12T17:27:06.000000Z","id":473}',
            ),
            222 => 
            array (
                'id' => 1266,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:06',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.32","visitors_id":607,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:06.000000Z","created_at":"2023-05-12T17:27:06.000000Z","id":474}',
            ),
            223 => 
            array (
                'id' => 1267,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:06',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.86","visitors_id":608,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:06.000000Z","created_at":"2023-05-12T17:27:06.000000Z","id":475}',
            ),
            224 => 
            array (
                'id' => 1268,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:07',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.70.131","visitors_id":609,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-05-12T17:27:07.000000Z","created_at":"2023-05-12T17:27:07.000000Z","id":476}',
            ),
            225 => 
            array (
                'id' => 1269,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:07',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.70.132","visitors_id":610,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-05-12T17:27:07.000000Z","created_at":"2023-05-12T17:27:07.000000Z","id":477}',
            ),
            226 => 
            array (
                'id' => 1270,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:07',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.164","visitors_id":611,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:07.000000Z","created_at":"2023-05-12T17:27:07.000000Z","id":478}',
            ),
            227 => 
            array (
                'id' => 1271,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:08',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.102","visitors_id":612,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:08.000000Z","created_at":"2023-05-12T17:27:08.000000Z","id":479}',
            ),
            228 => 
            array (
                'id' => 1272,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:08',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.71.139","visitors_id":613,"city":"Mountain View","region":"California","country_code":"US","country":"United States of America","loc":"37.4056,-122.0775","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:27:08.000000Z","created_at":"2023-05-12T17:27:08.000000Z","id":480}',
            ),
            229 => 
            array (
                'id' => 1273,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:08',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"52.167.144.162","visitors_id":614,"city":"Boydton","region":"Virginia","country_code":"US","country":"United States of America","loc":"36.6676,-78.3875","timezone":"America\\/New_York","updated_at":"2023-05-12T17:27:08.000000Z","created_at":"2023-05-12T17:27:08.000000Z","id":481}',
            ),
            230 => 
            array (
                'id' => 1274,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:08',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.101","visitors_id":615,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:08.000000Z","created_at":"2023-05-12T17:27:08.000000Z","id":482}',
            ),
            231 => 
            array (
                'id' => 1275,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:09',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.27","visitors_id":616,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:09.000000Z","created_at":"2023-05-12T17:27:09.000000Z","id":483}',
            ),
            232 => 
            array (
                'id' => 1276,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:09',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.2","visitors_id":617,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:09.000000Z","created_at":"2023-05-12T17:27:09.000000Z","id":484}',
            ),
            233 => 
            array (
                'id' => 1277,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:09',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.91","visitors_id":618,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:09.000000Z","created_at":"2023-05-12T17:27:09.000000Z","id":485}',
            ),
            234 => 
            array (
                'id' => 1278,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:10',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.189","visitors_id":619,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:10.000000Z","created_at":"2023-05-12T17:27:10.000000Z","id":486}',
            ),
            235 => 
            array (
                'id' => 1279,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:10',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.160","visitors_id":620,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:10.000000Z","created_at":"2023-05-12T17:27:10.000000Z","id":487}',
            ),
            236 => 
            array (
                'id' => 1280,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:10',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.202","visitors_id":621,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:10.000000Z","created_at":"2023-05-12T17:27:10.000000Z","id":488}',
            ),
            237 => 
            array (
                'id' => 1281,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:10',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.65","visitors_id":622,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:10.000000Z","created_at":"2023-05-12T17:27:10.000000Z","id":489}',
            ),
            238 => 
            array (
                'id' => 1282,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:11',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.122","visitors_id":623,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:11.000000Z","created_at":"2023-05-12T17:27:11.000000Z","id":490}',
            ),
            239 => 
            array (
                'id' => 1283,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:11',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.94","visitors_id":624,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:11.000000Z","created_at":"2023-05-12T17:27:11.000000Z","id":491}',
            ),
            240 => 
            array (
                'id' => 1284,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:11',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.109","visitors_id":625,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:11.000000Z","created_at":"2023-05-12T17:27:11.000000Z","id":492}',
            ),
            241 => 
            array (
                'id' => 1285,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:12',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.92","visitors_id":626,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:12.000000Z","created_at":"2023-05-12T17:27:12.000000Z","id":493}',
            ),
            242 => 
            array (
                'id' => 1286,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:12',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.9","visitors_id":627,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:12.000000Z","created_at":"2023-05-12T17:27:12.000000Z","id":494}',
            ),
            243 => 
            array (
                'id' => 1287,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:12',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.119","visitors_id":628,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:12.000000Z","created_at":"2023-05-12T17:27:12.000000Z","id":495}',
            ),
            244 => 
            array (
                'id' => 1288,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:13',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.46","visitors_id":629,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:13.000000Z","created_at":"2023-05-12T17:27:13.000000Z","id":496}',
            ),
            245 => 
            array (
                'id' => 1289,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:13',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.93","visitors_id":630,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:13.000000Z","created_at":"2023-05-12T17:27:13.000000Z","id":497}',
            ),
            246 => 
            array (
                'id' => 1290,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:13',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.149","visitors_id":631,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:13.000000Z","created_at":"2023-05-12T17:27:13.000000Z","id":498}',
            ),
            247 => 
            array (
                'id' => 1291,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:13',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.171","visitors_id":632,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:13.000000Z","created_at":"2023-05-12T17:27:13.000000Z","id":499}',
            ),
            248 => 
            array (
                'id' => 1292,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:14',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.230","visitors_id":633,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:14.000000Z","created_at":"2023-05-12T17:27:14.000000Z","id":500}',
            ),
            249 => 
            array (
                'id' => 1293,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:14',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.51","visitors_id":634,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:14.000000Z","created_at":"2023-05-12T17:27:14.000000Z","id":501}',
            ),
            250 => 
            array (
                'id' => 1294,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:14',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.178","visitors_id":635,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:14.000000Z","created_at":"2023-05-12T17:27:14.000000Z","id":502}',
            ),
            251 => 
            array (
                'id' => 1295,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:15',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"35.91.84.59","visitors_id":636,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:27:15.000000Z","created_at":"2023-05-12T17:27:15.000000Z","id":503}',
            ),
            252 => 
            array (
                'id' => 1296,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:15',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"52.32.110.125","visitors_id":637,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:27:15.000000Z","created_at":"2023-05-12T17:27:15.000000Z","id":504}',
            ),
            253 => 
            array (
                'id' => 1297,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:15',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.213.244.191","visitors_id":638,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:27:15.000000Z","created_at":"2023-05-12T17:27:15.000000Z","id":505}',
            ),
            254 => 
            array (
                'id' => 1298,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:15',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.166","visitors_id":639,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:15.000000Z","created_at":"2023-05-12T17:27:15.000000Z","id":506}',
            ),
            255 => 
            array (
                'id' => 1299,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:16',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.177","visitors_id":640,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:16.000000Z","created_at":"2023-05-12T17:27:16.000000Z","id":507}',
            ),
            256 => 
            array (
                'id' => 1300,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:16',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.62","visitors_id":641,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:16.000000Z","created_at":"2023-05-12T17:27:16.000000Z","id":508}',
            ),
            257 => 
            array (
                'id' => 1301,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:16',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"40.77.167.228","visitors_id":642,"city":"Boydton","region":"Virginia","country_code":"US","country":"United States of America","loc":"36.6676,-78.3875","timezone":"America\\/New_York","updated_at":"2023-05-12T17:27:16.000000Z","created_at":"2023-05-12T17:27:16.000000Z","id":509}',
            ),
            258 => 
            array (
                'id' => 1302,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:17',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.218","visitors_id":643,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:17.000000Z","created_at":"2023-05-12T17:27:17.000000Z","id":510}',
            ),
            259 => 
            array (
                'id' => 1303,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:17',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.204","visitors_id":644,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:17.000000Z","created_at":"2023-05-12T17:27:17.000000Z","id":511}',
            ),
            260 => 
            array (
                'id' => 1304,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:17',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.180","visitors_id":645,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:17.000000Z","created_at":"2023-05-12T17:27:17.000000Z","id":512}',
            ),
            261 => 
            array (
                'id' => 1305,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:17',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.60","visitors_id":646,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:17.000000Z","created_at":"2023-05-12T17:27:17.000000Z","id":513}',
            ),
            262 => 
            array (
                'id' => 1306,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:18',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.22","visitors_id":647,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:18.000000Z","created_at":"2023-05-12T17:27:18.000000Z","id":514}',
            ),
            263 => 
            array (
                'id' => 1307,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:18',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.30","visitors_id":648,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:18.000000Z","created_at":"2023-05-12T17:27:18.000000Z","id":515}',
            ),
            264 => 
            array (
                'id' => 1308,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:18',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.29","visitors_id":649,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:18.000000Z","created_at":"2023-05-12T17:27:18.000000Z","id":516}',
            ),
            265 => 
            array (
                'id' => 1309,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:19',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.118","visitors_id":650,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:19.000000Z","created_at":"2023-05-12T17:27:19.000000Z","id":517}',
            ),
            266 => 
            array (
                'id' => 1310,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:19',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.83","visitors_id":651,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:19.000000Z","created_at":"2023-05-12T17:27:19.000000Z","id":518}',
            ),
            267 => 
            array (
                'id' => 1311,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:19',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.200","visitors_id":652,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:19.000000Z","created_at":"2023-05-12T17:27:19.000000Z","id":519}',
            ),
            268 => 
            array (
                'id' => 1312,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:20',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.75","visitors_id":653,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:20.000000Z","created_at":"2023-05-12T17:27:20.000000Z","id":520}',
            ),
            269 => 
            array (
                'id' => 1313,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:20',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.120","visitors_id":654,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:20.000000Z","created_at":"2023-05-12T17:27:20.000000Z","id":521}',
            ),
            270 => 
            array (
                'id' => 1314,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:20',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.93","visitors_id":655,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:20.000000Z","created_at":"2023-05-12T17:27:20.000000Z","id":522}',
            ),
            271 => 
            array (
                'id' => 1315,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:20',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.57","visitors_id":656,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:20.000000Z","created_at":"2023-05-12T17:27:20.000000Z","id":523}',
            ),
            272 => 
            array (
                'id' => 1316,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:21',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.235","visitors_id":657,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:21.000000Z","created_at":"2023-05-12T17:27:21.000000Z","id":524}',
            ),
            273 => 
            array (
                'id' => 1317,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:21',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.79","visitors_id":658,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:21.000000Z","created_at":"2023-05-12T17:27:21.000000Z","id":525}',
            ),
            274 => 
            array (
                'id' => 1318,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:21',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.190","visitors_id":659,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:21.000000Z","created_at":"2023-05-12T17:27:21.000000Z","id":526}',
            ),
            275 => 
            array (
                'id' => 1319,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:22',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.227","visitors_id":660,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:22.000000Z","created_at":"2023-05-12T17:27:22.000000Z","id":527}',
            ),
            276 => 
            array (
                'id' => 1320,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:22',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.144","visitors_id":661,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:22.000000Z","created_at":"2023-05-12T17:27:22.000000Z","id":528}',
            ),
            277 => 
            array (
                'id' => 1321,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:22',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.81","visitors_id":662,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:22.000000Z","created_at":"2023-05-12T17:27:22.000000Z","id":529}',
            ),
            278 => 
            array (
                'id' => 1322,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:23',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.15","visitors_id":663,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:23.000000Z","created_at":"2023-05-12T17:27:23.000000Z","id":530}',
            ),
            279 => 
            array (
                'id' => 1323,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:23',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.77","visitors_id":664,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:23.000000Z","created_at":"2023-05-12T17:27:23.000000Z","id":531}',
            ),
            280 => 
            array (
                'id' => 1324,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:23',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.31","visitors_id":665,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:23.000000Z","created_at":"2023-05-12T17:27:23.000000Z","id":532}',
            ),
            281 => 
            array (
                'id' => 1325,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:24',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.191","visitors_id":666,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:24.000000Z","created_at":"2023-05-12T17:27:24.000000Z","id":533}',
            ),
            282 => 
            array (
                'id' => 1326,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:24',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.49","visitors_id":667,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:24.000000Z","created_at":"2023-05-12T17:27:24.000000Z","id":534}',
            ),
            283 => 
            array (
                'id' => 1327,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:24',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.55","visitors_id":668,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:24.000000Z","created_at":"2023-05-12T17:27:24.000000Z","id":535}',
            ),
            284 => 
            array (
                'id' => 1328,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:25',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.74","visitors_id":669,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:25.000000Z","created_at":"2023-05-12T17:27:25.000000Z","id":536}',
            ),
            285 => 
            array (
                'id' => 1329,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:25',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.105","visitors_id":670,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:25.000000Z","created_at":"2023-05-12T17:27:25.000000Z","id":537}',
            ),
            286 => 
            array (
                'id' => 1330,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:25',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.99","visitors_id":671,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:25.000000Z","created_at":"2023-05-12T17:27:25.000000Z","id":538}',
            ),
            287 => 
            array (
                'id' => 1331,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:26',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.7","visitors_id":672,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:26.000000Z","created_at":"2023-05-12T17:27:26.000000Z","id":539}',
            ),
            288 => 
            array (
                'id' => 1332,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:26',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.37","visitors_id":673,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:26.000000Z","created_at":"2023-05-12T17:27:26.000000Z","id":540}',
            ),
            289 => 
            array (
                'id' => 1333,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:26',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.126","visitors_id":674,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:26.000000Z","created_at":"2023-05-12T17:27:26.000000Z","id":541}',
            ),
            290 => 
            array (
                'id' => 1334,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:27',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.188.164.229","visitors_id":675,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:27:27.000000Z","created_at":"2023-05-12T17:27:27.000000Z","id":542}',
            ),
            291 => 
            array (
                'id' => 1335,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:27',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"34.222.155.237","visitors_id":676,"city":"Boardman","region":"Oregon","country_code":"US","country":"United States of America","loc":"45.8399,-119.7006","timezone":"America\\/Los_Angeles","updated_at":"2023-05-12T17:27:27.000000Z","created_at":"2023-05-12T17:27:27.000000Z","id":543}',
            ),
            292 => 
            array (
                'id' => 1336,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:27',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.24","visitors_id":677,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:27.000000Z","created_at":"2023-05-12T17:27:27.000000Z","id":544}',
            ),
            293 => 
            array (
                'id' => 1337,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:27',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.58","visitors_id":678,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:27.000000Z","created_at":"2023-05-12T17:27:27.000000Z","id":545}',
            ),
            294 => 
            array (
                'id' => 1338,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:28',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.90","visitors_id":679,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:28.000000Z","created_at":"2023-05-12T17:27:28.000000Z","id":546}',
            ),
            295 => 
            array (
                'id' => 1339,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:28',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.69","visitors_id":680,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:28.000000Z","created_at":"2023-05-12T17:27:28.000000Z","id":547}',
            ),
            296 => 
            array (
                'id' => 1340,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:28',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.29","visitors_id":681,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:28.000000Z","created_at":"2023-05-12T17:27:28.000000Z","id":548}',
            ),
            297 => 
            array (
                'id' => 1341,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:29',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.76","visitors_id":682,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:29.000000Z","created_at":"2023-05-12T17:27:29.000000Z","id":549}',
            ),
            298 => 
            array (
                'id' => 1342,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:29',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.104","visitors_id":683,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:29.000000Z","created_at":"2023-05-12T17:27:29.000000Z","id":550}',
            ),
            299 => 
            array (
                'id' => 1343,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:29',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.240","visitors_id":684,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:29.000000Z","created_at":"2023-05-12T17:27:29.000000Z","id":551}',
            ),
            300 => 
            array (
                'id' => 1344,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:29',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.36","visitors_id":685,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:29.000000Z","created_at":"2023-05-12T17:27:29.000000Z","id":552}',
            ),
            301 => 
            array (
                'id' => 1345,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:30',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.58","visitors_id":686,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:30.000000Z","created_at":"2023-05-12T17:27:30.000000Z","id":553}',
            ),
            302 => 
            array (
                'id' => 1346,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:30',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.47","visitors_id":687,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:30.000000Z","created_at":"2023-05-12T17:27:30.000000Z","id":554}',
            ),
            303 => 
            array (
                'id' => 1347,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:30',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.85","visitors_id":688,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:30.000000Z","created_at":"2023-05-12T17:27:30.000000Z","id":555}',
            ),
            304 => 
            array (
                'id' => 1348,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:31',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.135","visitors_id":689,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:31.000000Z","created_at":"2023-05-12T17:27:31.000000Z","id":556}',
            ),
            305 => 
            array (
                'id' => 1349,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:31',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.8","visitors_id":690,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:31.000000Z","created_at":"2023-05-12T17:27:31.000000Z","id":557}',
            ),
            306 => 
            array (
                'id' => 1350,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:31',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.107","visitors_id":691,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:31.000000Z","created_at":"2023-05-12T17:27:31.000000Z","id":558}',
            ),
            307 => 
            array (
                'id' => 1351,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:32',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.84","visitors_id":692,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:32.000000Z","created_at":"2023-05-12T17:27:32.000000Z","id":559}',
            ),
            308 => 
            array (
                'id' => 1352,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:32',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"193.235.141.150","visitors_id":693,"city":"M\\u00e4rsta","region":"Stockholm","country_code":"SE","country":"Sweden","loc":"59.6216,17.8548","timezone":"Europe\\/Stockholm","updated_at":"2023-05-12T17:27:32.000000Z","created_at":"2023-05-12T17:27:32.000000Z","id":560}',
            ),
            309 => 
            array (
                'id' => 1353,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:32',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.88","visitors_id":694,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:32.000000Z","created_at":"2023-05-12T17:27:32.000000Z","id":561}',
            ),
            310 => 
            array (
                'id' => 1354,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:32',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.21","visitors_id":695,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:32.000000Z","created_at":"2023-05-12T17:27:32.000000Z","id":562}',
            ),
            311 => 
            array (
                'id' => 1355,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:33',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.8","visitors_id":696,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:27:33.000000Z","created_at":"2023-05-12T17:27:33.000000Z","id":563}',
            ),
            312 => 
            array (
                'id' => 1356,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:33',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.2","visitors_id":697,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:27:33.000000Z","created_at":"2023-05-12T17:27:33.000000Z","id":564}',
            ),
            313 => 
            array (
                'id' => 1357,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:33',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.76","visitors_id":698,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:33.000000Z","created_at":"2023-05-12T17:27:33.000000Z","id":565}',
            ),
            314 => 
            array (
                'id' => 1358,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:34',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.132","visitors_id":699,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:34.000000Z","created_at":"2023-05-12T17:27:34.000000Z","id":566}',
            ),
            315 => 
            array (
                'id' => 1359,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:34',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.87","visitors_id":700,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:34.000000Z","created_at":"2023-05-12T17:27:34.000000Z","id":567}',
            ),
            316 => 
            array (
                'id' => 1360,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:34',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.23","visitors_id":701,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:34.000000Z","created_at":"2023-05-12T17:27:34.000000Z","id":568}',
            ),
            317 => 
            array (
                'id' => 1361,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:34',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.156","visitors_id":702,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:34.000000Z","created_at":"2023-05-12T17:27:34.000000Z","id":569}',
            ),
            318 => 
            array (
                'id' => 1362,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:35',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"193.235.141.60","visitors_id":703,"city":"M\\u00e4rsta","region":"Stockholm","country_code":"SE","country":"Sweden","loc":"59.6216,17.8548","timezone":"Europe\\/Stockholm","updated_at":"2023-05-12T17:27:35.000000Z","created_at":"2023-05-12T17:27:35.000000Z","id":570}',
            ),
            319 => 
            array (
                'id' => 1363,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:35',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.64","visitors_id":704,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:35.000000Z","created_at":"2023-05-12T17:27:35.000000Z","id":571}',
            ),
            320 => 
            array (
                'id' => 1364,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:35',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.236","visitors_id":705,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:35.000000Z","created_at":"2023-05-12T17:27:35.000000Z","id":572}',
            ),
            321 => 
            array (
                'id' => 1365,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:36',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.196","visitors_id":706,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:36.000000Z","created_at":"2023-05-12T17:27:36.000000Z","id":573}',
            ),
            322 => 
            array (
                'id' => 1366,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:36',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.97","visitors_id":707,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:36.000000Z","created_at":"2023-05-12T17:27:36.000000Z","id":574}',
            ),
            323 => 
            array (
                'id' => 1367,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:36',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.15","visitors_id":708,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:36.000000Z","created_at":"2023-05-12T17:27:36.000000Z","id":575}',
            ),
            324 => 
            array (
                'id' => 1368,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:37',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.38","visitors_id":709,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:37.000000Z","created_at":"2023-05-12T17:27:37.000000Z","id":576}',
            ),
            325 => 
            array (
                'id' => 1369,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:37',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.2","visitors_id":710,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:37.000000Z","created_at":"2023-05-12T17:27:37.000000Z","id":577}',
            ),
            326 => 
            array (
                'id' => 1370,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:37',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.25","visitors_id":711,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:37.000000Z","created_at":"2023-05-12T17:27:37.000000Z","id":578}',
            ),
            327 => 
            array (
                'id' => 1371,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:38',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.255","visitors_id":712,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:38.000000Z","created_at":"2023-05-12T17:27:38.000000Z","id":579}',
            ),
            328 => 
            array (
                'id' => 1372,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:38',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.43","visitors_id":713,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:38.000000Z","created_at":"2023-05-12T17:27:38.000000Z","id":580}',
            ),
            329 => 
            array (
                'id' => 1373,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:38',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.95","visitors_id":714,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:38.000000Z","created_at":"2023-05-12T17:27:38.000000Z","id":581}',
            ),
            330 => 
            array (
                'id' => 1374,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:38',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.114","visitors_id":715,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:38.000000Z","created_at":"2023-05-12T17:27:38.000000Z","id":582}',
            ),
            331 => 
            array (
                'id' => 1375,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:39',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.53","visitors_id":716,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:39.000000Z","created_at":"2023-05-12T17:27:39.000000Z","id":583}',
            ),
            332 => 
            array (
                'id' => 1376,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:39',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.155","visitors_id":717,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:39.000000Z","created_at":"2023-05-12T17:27:39.000000Z","id":584}',
            ),
            333 => 
            array (
                'id' => 1377,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:39',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.165","visitors_id":718,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:39.000000Z","created_at":"2023-05-12T17:27:39.000000Z","id":585}',
            ),
            334 => 
            array (
                'id' => 1378,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:40',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.100","visitors_id":719,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:40.000000Z","created_at":"2023-05-12T17:27:40.000000Z","id":586}',
            ),
            335 => 
            array (
                'id' => 1379,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:40',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.41","visitors_id":720,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:40.000000Z","created_at":"2023-05-12T17:27:40.000000Z","id":587}',
            ),
            336 => 
            array (
                'id' => 1380,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:40',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.219","visitors_id":721,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:40.000000Z","created_at":"2023-05-12T17:27:40.000000Z","id":588}',
            ),
            337 => 
            array (
                'id' => 1381,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:41',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.12","visitors_id":722,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:41.000000Z","created_at":"2023-05-12T17:27:41.000000Z","id":589}',
            ),
            338 => 
            array (
                'id' => 1382,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:41',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.9","visitors_id":723,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:41.000000Z","created_at":"2023-05-12T17:27:41.000000Z","id":590}',
            ),
            339 => 
            array (
                'id' => 1383,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:41',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.94","visitors_id":724,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:41.000000Z","created_at":"2023-05-12T17:27:41.000000Z","id":591}',
            ),
            340 => 
            array (
                'id' => 1384,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:41',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"192.188.88.237","visitors_id":725,"city":"Kansas City","region":"Missouri","country_code":"US","country":"United States of America","loc":"39.1479,-94.5680","timezone":"America\\/Chicago","updated_at":"2023-05-12T17:27:41.000000Z","created_at":"2023-05-12T17:27:41.000000Z","id":592}',
            ),
            341 => 
            array (
                'id' => 1385,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:42',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.73","visitors_id":726,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:42.000000Z","created_at":"2023-05-12T17:27:42.000000Z","id":593}',
            ),
            342 => 
            array (
                'id' => 1386,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:42',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.43","visitors_id":727,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:42.000000Z","created_at":"2023-05-12T17:27:42.000000Z","id":594}',
            ),
            343 => 
            array (
                'id' => 1387,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:42',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.42","visitors_id":728,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:42.000000Z","created_at":"2023-05-12T17:27:42.000000Z","id":595}',
            ),
            344 => 
            array (
                'id' => 1388,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:43',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.245","visitors_id":729,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:43.000000Z","created_at":"2023-05-12T17:27:43.000000Z","id":596}',
            ),
            345 => 
            array (
                'id' => 1389,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:43',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.26","visitors_id":730,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:43.000000Z","created_at":"2023-05-12T17:27:43.000000Z","id":597}',
            ),
            346 => 
            array (
                'id' => 1390,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:43',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.66","visitors_id":731,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:43.000000Z","created_at":"2023-05-12T17:27:43.000000Z","id":598}',
            ),
            347 => 
            array (
                'id' => 1391,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:43',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.233","visitors_id":732,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:43.000000Z","created_at":"2023-05-12T17:27:43.000000Z","id":599}',
            ),
            348 => 
            array (
                'id' => 1392,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:44',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.187","visitors_id":733,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:44.000000Z","created_at":"2023-05-12T17:27:44.000000Z","id":600}',
            ),
            349 => 
            array (
                'id' => 1393,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:44',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.212","visitors_id":734,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:44.000000Z","created_at":"2023-05-12T17:27:44.000000Z","id":601}',
            ),
            350 => 
            array (
                'id' => 1394,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:44',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.34","visitors_id":735,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:44.000000Z","created_at":"2023-05-12T17:27:44.000000Z","id":602}',
            ),
            351 => 
            array (
                'id' => 1395,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:45',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.75","visitors_id":736,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:45.000000Z","created_at":"2023-05-12T17:27:45.000000Z","id":603}',
            ),
            352 => 
            array (
                'id' => 1396,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:45',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.173","visitors_id":737,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:45.000000Z","created_at":"2023-05-12T17:27:45.000000Z","id":604}',
            ),
            353 => 
            array (
                'id' => 1397,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:45',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.24","visitors_id":738,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:45.000000Z","created_at":"2023-05-12T17:27:45.000000Z","id":605}',
            ),
            354 => 
            array (
                'id' => 1398,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:45',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.203","visitors_id":739,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:45.000000Z","created_at":"2023-05-12T17:27:45.000000Z","id":606}',
            ),
            355 => 
            array (
                'id' => 1399,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:46',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.133","visitors_id":740,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:46.000000Z","created_at":"2023-05-12T17:27:46.000000Z","id":607}',
            ),
            356 => 
            array (
                'id' => 1400,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:46',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.0","visitors_id":741,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:46.000000Z","created_at":"2023-05-12T17:27:46.000000Z","id":608}',
            ),
            357 => 
            array (
                'id' => 1401,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:46',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.108","visitors_id":742,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:46.000000Z","created_at":"2023-05-12T17:27:46.000000Z","id":609}',
            ),
            358 => 
            array (
                'id' => 1402,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:47',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.104","visitors_id":743,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:47.000000Z","created_at":"2023-05-12T17:27:47.000000Z","id":610}',
            ),
            359 => 
            array (
                'id' => 1403,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:47',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.149.80","visitors_id":744,"city":"Lille","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6330,3.0586","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:47.000000Z","created_at":"2023-05-12T17:27:47.000000Z","id":611}',
            ),
            360 => 
            array (
                'id' => 1404,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:47',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"66.249.70.129","visitors_id":745,"city":"Columbia","region":"South Carolina","country_code":"US","country":"United States of America","loc":"34.0007,-81.0348","timezone":"America\\/New_York","updated_at":"2023-05-12T17:27:47.000000Z","created_at":"2023-05-12T17:27:47.000000Z","id":612}',
            ),
            361 => 
            array (
                'id' => 1405,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:48',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"185.191.171.35","visitors_id":746,"city":"Washington","region":"Washington, D.C.","country_code":"US","country":"United States of America","loc":"38.8951,-77.0364","timezone":"America\\/New_York","updated_at":"2023-05-12T17:27:48.000000Z","created_at":"2023-05-12T17:27:48.000000Z","id":613}',
            ),
            362 => 
            array (
                'id' => 1406,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:48',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.16","visitors_id":747,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:27:48.000000Z","created_at":"2023-05-12T17:27:48.000000Z","id":614}',
            ),
            363 => 
            array (
                'id' => 1407,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.10","visitors_id":748,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:27:49.000000Z","created_at":"2023-05-12T17:27:49.000000Z","id":615}',
            ),
            364 => 
            array (
                'id' => 1408,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.14","visitors_id":749,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:27:49.000000Z","created_at":"2023-05-12T17:27:49.000000Z","id":616}',
            ),
            365 => 
            array (
                'id' => 1409,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:49',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.12","visitors_id":750,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:27:49.000000Z","created_at":"2023-05-12T17:27:49.000000Z","id":617}',
            ),
            366 => 
            array (
                'id' => 1410,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.5","visitors_id":751,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:27:50.000000Z","created_at":"2023-05-12T17:27:50.000000Z","id":618}',
            ),
            367 => 
            array (
                'id' => 1411,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.60","visitors_id":752,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:50.000000Z","created_at":"2023-05-12T17:27:50.000000Z","id":619}',
            ),
            368 => 
            array (
                'id' => 1412,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"54.36.148.170","visitors_id":753,"city":"Roubaix","region":"Hauts-de-France","country_code":"FR","country":"France, French Republic","loc":"50.6942,3.1746","timezone":"Europe\\/Paris","updated_at":"2023-05-12T17:27:50.000000Z","created_at":"2023-05-12T17:27:50.000000Z","id":620}',
            ),
            369 => 
            array (
                'id' => 1413,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:50',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.1","visitors_id":754,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:27:50.000000Z","created_at":"2023-05-12T17:27:50.000000Z","id":621}',
            ),
            370 => 
            array (
                'id' => 1414,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:51',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.18","visitors_id":755,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:27:51.000000Z","created_at":"2023-05-12T17:27:51.000000Z","id":622}',
            ),
            371 => 
            array (
                'id' => 1415,
                'user_id' => 1,
                'log_date' => '2023-05-13 00:27:51',
                'table_name' => 'visitors_ip_detail',
                'log_type' => 'create',
                'data' => '{"ip":"51.222.253.4","visitors_id":756,"city":"Montr\\u00e9al","region":"Quebec","country_code":"CA","country":"Canada","loc":"45.5088,-73.5878","timezone":"America\\/Toronto","updated_at":"2023-05-12T17:27:51.000000Z","created_at":"2023-05-12T17:27:51.000000Z","id":624}',
            ),
        ));
        
        
    }
}