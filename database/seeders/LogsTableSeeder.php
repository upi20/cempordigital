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
                'id' => '1',
                'user_id' => '1',
                'log_date' => '2023-04-13 14:22:56',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"103","ip":"103.147.8.161","date":"2023-04-13","time":"12:20:31","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.39","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39","hits":"5","has_detail":"0"}',
            ),
            1 => 
            array (
                'id' => '2',
                'user_id' => '1',
                'log_date' => '2023-04-13 20:44:45',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.161","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39"}',
            ),
            2 => 
            array (
                'id' => '3',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:06:18',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.9.27","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36"}',
            ),
            3 => 
            array (
                'id' => '4',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:08:40',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":"11","kategori_id":"8","nama":"App Design","slug":"app-design","foto":"20230413015201.jpg","keterangan":null,"is_insert":"1","created_by":"1","created_at":"2023-04-13 01:52:01","updated_at":"2023-04-13 01:52:01"}',
            ),
            4 => 
            array (
                'id' => '5',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:08:44',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:08:10","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"1","has_detail":"0"}',
            ),
            5 => 
            array (
                'id' => '6',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:30',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"9","kategori_id":"9","nama":"Branding Design","slug":"branding-design","foto":"20230413015116.jpg","keterangan":null,"is_insert":"1","created_by":"1","created_at":"2023-04-13 01:51:16","updated_at":"2023-04-13 01:51:16"}',
            ),
            6 => 
            array (
                'id' => '7',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:33',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"10","kategori_id":"9","nama":"Branding Design B","slug":"branding-design-b","foto":"20230413015139.jpg","keterangan":null,"is_insert":"1","created_by":"1","created_at":"2023-04-13 01:51:39","updated_at":"2023-04-13 01:51:39"}',
            ),
            7 => 
            array (
                'id' => '8',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:36',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"5","kategori_id":"7","nama":"Design A","slug":"design-a","foto":"20230413014906.jpg","keterangan":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.","is_insert":"1","created_by":"1","created_at":"2023-04-13 01:49:06","updated_at":"2023-04-13 01:49:06"}',
            ),
            8 => 
            array (
                'id' => '9',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:39',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"6","kategori_id":"7","nama":"Design B","slug":"design-b","foto":"20230413014929.jpg","keterangan":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.","is_insert":"1","created_by":"1","created_at":"2023-04-13 01:49:29","updated_at":"2023-04-13 01:49:29"}',
            ),
            9 => 
            array (
                'id' => '10',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:43',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"7","kategori_id":"7","nama":"Design C","slug":"design-c","foto":"20230413015003.jpg","keterangan":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.","is_insert":"1","created_by":"1","created_at":"2023-04-13 01:50:03","updated_at":"2023-04-13 01:50:03"}',
            ),
            10 => 
            array (
                'id' => '11',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:48',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"8","kategori_id":"7","nama":"Design D","slug":"design-d","foto":"20230413015052.jpg","keterangan":null,"is_insert":"1","created_by":"1","created_at":"2023-04-13 01:50:52","updated_at":"2023-04-13 01:50:52"}',
            ),
            11 => 
            array (
                'id' => '12',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:52',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"1","portfolio_id":"1","urutan":"1","nama":"Project Type","keterangan":"Software & App Development","created_at":"2023-04-13 01:10:53","updated_at":"2023-04-13 01:10:53"}',
            ),
            12 => 
            array (
                'id' => '13',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:52',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"2","portfolio_id":"1","urutan":"2","nama":"Client","keterangan":"Sekolah di Malaysia","created_at":"2023-04-13 01:13:53","updated_at":"2023-04-13 01:13:53"}',
            ),
            13 => 
            array (
                'id' => '14',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:52',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"3","portfolio_id":"1","urutan":"3","nama":"Duration","keterangan":"3 Month","created_at":"2023-04-13 01:14:06","updated_at":"2023-04-13 01:14:06"}',
            ),
            14 => 
            array (
                'id' => '15',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:52',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"4","portfolio_id":"1","urutan":"4","nama":"Task","keterangan":"Backend, Frontend","created_at":"2023-04-13 01:14:23","updated_at":"2023-04-13 01:14:23"}',
            ),
            15 => 
            array (
                'id' => '16',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:52',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"5","portfolio_id":"1","urutan":"5","nama":"Budget","keterangan":"Rp 20.000.000","created_at":"2023-04-13 01:14:32","updated_at":"2023-04-13 01:14:32"}',
            ),
            16 => 
            array (
                'id' => '17',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:52',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"1","kategori_id":"6","nama":"RAB Community","slug":"rab-community","foto":"20230413012220.png","keterangan":"Web aplikasi perusahaan, organisasi ataupun komunitas yang mempermudah dalam mengelola RAB dari proses pembuatan, pengajuan, diterima, proses belanja dan sampai kepada laporan yang mudah dibaca.","is_insert":"1","created_by":"1","created_at":"2023-04-13 01:15:09","updated_at":"2023-04-13 01:22:20"}',
            ),
            17 => 
            array (
                'id' => '18',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:55',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"10","portfolio_id":"3","urutan":"1","nama":"Link","keterangan":"<a href=\\"https:\\/\\/warungkopigunungroastery.com\\/\\">Lihat<\\/a>","created_at":"2023-04-13 01:44:29","updated_at":"2023-04-13 01:44:29"}',
            ),
            18 => 
            array (
                'id' => '19',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:55',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"3","kategori_id":"6","nama":"Warung Kopi Gunung","slug":"warung-kopi-gunung","foto":"20230413014353.png","keterangan":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.","is_insert":"1","created_by":"1","created_at":"2023-04-13 01:43:53","updated_at":"2023-04-13 01:43:53"}',
            ),
            19 => 
            array (
                'id' => '20',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:59',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"6","portfolio_id":"2","urutan":"1","nama":"A","keterangan":"B","created_at":"2023-04-13 01:41:44","updated_at":"2023-04-13 01:41:44"}',
            ),
            20 => 
            array (
                'id' => '21',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:59',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"7","portfolio_id":"2","urutan":"2","nama":"C","keterangan":"D","created_at":"2023-04-13 01:41:48","updated_at":"2023-04-13 01:41:48"}',
            ),
            21 => 
            array (
                'id' => '22',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:59',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"8","portfolio_id":"2","urutan":"3","nama":"E","keterangan":"E","created_at":"2023-04-13 01:41:52","updated_at":"2023-04-13 01:41:52"}',
            ),
            22 => 
            array (
                'id' => '23',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:17:59',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"2","kategori_id":"6","nama":"Web 2","slug":"web-2","foto":"20230413014157.jpg","keterangan":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.","is_insert":"1","created_by":"1","created_at":"2023-04-13 01:41:57","updated_at":"2023-04-13 01:41:57"}',
            ),
            23 => 
            array (
                'id' => '24',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:18:02',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"11","kategori_id":"6","nama":"WKG Roastery","slug":"wkg-roastery","foto":"20230414020840.png","keterangan":null,"is_insert":"1","created_by":"1","created_at":"2023-04-13 01:52:01","updated_at":"2023-04-14 02:08:40"}',
            ),
            24 => 
            array (
                'id' => '25',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:18:05',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"11","portfolio_id":"4","urutan":"1","nama":"A","keterangan":"A","created_at":"2023-04-13 01:45:20","updated_at":"2023-04-13 01:45:20"}',
            ),
            25 => 
            array (
                'id' => '26',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:18:05',
                'table_name' => 'portfolio_item',
                'log_type' => 'delete',
                'data' => '{"id":"12","portfolio_id":"4","urutan":"2","nama":"B","keterangan":"B","created_at":"2023-04-13 01:45:25","updated_at":"2023-04-13 01:45:25"}',
            ),
            26 => 
            array (
                'id' => '27',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:18:05',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"4","kategori_id":"6","nama":"WZx","slug":"wzx","foto":"20230413014514.jpg","keterangan":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem labore assumenda magni, soluta aperiam, officiis ipsa dolor omnis provident repudiandae, debitis enim laborum autem corrupti perferendis tempore tenetur harum.","is_insert":"1","created_by":"1","created_at":"2023-04-13 01:45:14","updated_at":"2023-04-13 01:45:14"}',
            ),
            27 => 
            array (
                'id' => '28',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:20:02',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'delete',
                'data' => '{"id":"6","urutan":"1","nama":"Website","slug":"website","keterangan":null,"created_at":"2023-04-12 23:55:18","updated_at":"2023-04-12 23:55:18"}',
            ),
            28 => 
            array (
                'id' => '29',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:20:07',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:08:44","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"2","has_detail":"0"}',
            ),
            29 => 
            array (
                'id' => '30',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:20:54',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":"12","kategori_id":null,"nama":null,"slug":null,"foto":null,"keterangan":null,"is_insert":"0","created_by":"4","created_at":null,"updated_at":null}',
            ),
            30 => 
            array (
                'id' => '31',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:20:57',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:20:07","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"3","has_detail":"0"}',
            ),
            31 => 
            array (
                'id' => '32',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:21:19',
                'table_name' => 'portfolio',
                'log_type' => 'delete',
                'data' => '{"id":"12","kategori_id":"11","nama":"sad","slug":"sad","foto":"20230414022054.png","keterangan":null,"is_insert":"1","created_by":"4","created_at":"2023-04-14 02:20:54","updated_at":"2023-04-14 02:20:54"}',
            ),
            32 => 
            array (
                'id' => '33',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:22:07',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'edit',
                'data' => '{"id":"7","urutan":"2","nama":"Design","slug":"design","keterangan":null,"created_at":"2023-04-12 23:55:26","updated_at":"2023-04-12 23:55:26"}',
            ),
            33 => 
            array (
                'id' => '34',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:22:58',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'edit',
                'data' => '{"id":"8","urutan":"3","nama":"App Design","slug":"app-design","keterangan":null,"created_at":"2023-04-12 23:55:38","updated_at":"2023-04-12 23:55:38"}',
            ),
            34 => 
            array (
                'id' => '35',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:23:14',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'edit',
                'data' => '{"id":"9","urutan":"4","nama":"Branding Design","slug":"branding-design","keterangan":null,"created_at":"2023-04-12 23:55:45","updated_at":"2023-04-12 23:55:45"}',
            ),
            35 => 
            array (
                'id' => '36',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:25:58',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:20:57","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"4","has_detail":"0"}',
            ),
            36 => 
            array (
                'id' => '37',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:30:26',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:25:58","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"5","has_detail":"0"}',
            ),
            37 => 
            array (
                'id' => '38',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:38:45',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:30:26","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"6","has_detail":"0"}',
            ),
            38 => 
            array (
                'id' => '39',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:47:11',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":"13","kategori_id":null,"nama":null,"slug":null,"foto":null,"keterangan":null,"is_insert":"0","created_by":"4","created_at":null,"updated_at":null}',
            ),
            39 => 
            array (
                'id' => '40',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:47:32',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:38:45","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"7","has_detail":"0"}',
            ),
            40 => 
            array (
                'id' => '41',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:47:51',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":"13","kategori_id":"16","nama":"Warung Kopi Gunung Roastery","slug":"warung-kopi-gunung-roastery","foto":"20230414024711.png","keterangan":null,"is_insert":"1","created_by":"4","created_at":"2023-04-14 02:47:11","updated_at":"2023-04-14 02:47:11"}',
            ),
            41 => 
            array (
                'id' => '42',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:48:04',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:47:32","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"8","has_detail":"0"}',
            ),
            42 => 
            array (
                'id' => '43',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:50:39',
                'table_name' => 'portfolio',
                'log_type' => 'edit',
                'data' => '{"id":"13","kategori_id":"16","nama":"Warung Kopi Gunung Roastery","slug":"warung-kopi-gunung-roastery","foto":"20230414024711.png","keterangan":"MAnsdansld","is_insert":"1","created_by":"4","created_at":"2023-04-14 02:47:11","updated_at":"2023-04-14 02:47:51"}',
            ),
            43 => 
            array (
                'id' => '44',
                'user_id' => '4',
                'log_date' => '2023-04-14 02:50:48',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"125","ip":"103.147.9.27","date":"2023-04-14","time":"02:48:04","platform":"Windows","browser":"Chrome","browser_version":"111.0.0.0","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36","hits":"9","has_detail":"0"}',
            ),
            44 => 
            array (
                'id' => '45',
                'user_id' => '1',
                'log_date' => '2023-04-14 09:26:38',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.161","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39"}',
            ),
            45 => 
            array (
                'id' => '46',
                'user_id' => '1',
                'log_date' => '2023-04-14 09:29:29',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.161","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39"}',
            ),
            46 => 
            array (
                'id' => '47',
                'user_id' => '1',
                'log_date' => '2023-04-14 09:29:43',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"128","ip":"103.147.8.161","date":"2023-04-14","time":"09:29:22","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.39","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39","hits":"1","has_detail":"0"}',
            ),
            47 => 
            array (
                'id' => '48',
                'user_id' => '1',
                'log_date' => '2023-04-14 09:31:01',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"128","ip":"103.147.8.161","date":"2023-04-14","time":"09:29:43","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.39","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39","hits":"2","has_detail":"0"}',
            ),
            48 => 
            array (
                'id' => '49',
                'user_id' => '1',
                'log_date' => '2023-04-14 09:34:55',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"128","ip":"103.147.8.161","date":"2023-04-14","time":"09:31:01","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.39","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39","hits":"3","has_detail":"0"}',
            ),
            49 => 
            array (
                'id' => '50',
                'user_id' => '1',
                'log_date' => '2023-04-15 06:57:00',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.111.103","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39"}',
            ),
            50 => 
            array (
                'id' => '51',
                'user_id' => '1',
                'log_date' => '2023-04-15 07:01:09',
                'table_name' => 'visitors',
                'log_type' => 'edit',
            'data' => '{"id":"130","ip":"114.122.111.103","date":"2023-04-15","time":"06:58:43","platform":"Windows","browser":"Edge","browser_version":"112.0.1722.39","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39","hits":"1","has_detail":"0"}',
            ),
            51 => 
            array (
                'id' => '52',
                'user_id' => '1',
                'log_date' => '2023-04-15 15:02:00',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.111.107","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39"}',
            ),
            52 => 
            array (
                'id' => '53',
                'user_id' => '1',
                'log_date' => '2023-04-15 15:39:16',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'edit',
                'data' => '{"id":"16","urutan":"10","nama":"Website","slug":"website","keterangan":null,"created_at":"2023-04-14 02:25:53","updated_at":"2023-04-14 02:25:53"}',
            ),
            53 => 
            array (
                'id' => '54',
                'user_id' => '1',
                'log_date' => '2023-04-15 15:39:26',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'edit',
                'data' => '{"id":"16","urutan":"10","nama":"Websites","slug":"websites","keterangan":null,"created_at":"2023-04-14 02:25:53","updated_at":"2023-04-15 15:39:16"}',
            ),
            54 => 
            array (
                'id' => '55',
                'user_id' => '1',
                'log_date' => '2023-04-15 15:42:20',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'edit',
                'data' => '{"id":"11","urutan":"1","nama":"Logo","slug":"logo","keterangan":null,"created_at":"2023-04-14 02:19:55","updated_at":"2023-04-14 02:19:55"}',
            ),
            55 => 
            array (
                'id' => '56',
                'user_id' => '1',
                'log_date' => '2023-04-15 15:42:34',
                'table_name' => 'portfolio_kategori',
                'log_type' => 'edit',
                'data' => '{"id":"11","urutan":"1","nama":"Logos","slug":"logos","keterangan":null,"created_at":"2023-04-14 02:19:55","updated_at":"2023-04-15 15:42:20"}',
            ),
        ));
        
        
    }
}