<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRoleHasMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_role_has_menu')->delete();
        
        \DB::table('p_role_has_menu')->insert(array (
            0 => 
            array (
                'id' => 26,
                'role_id' => 1,
                'menu_id' => 405,
                'created_at' => '2023-01-15 14:52:15',
                'updated_at' => '2023-01-15 14:52:15',
            ),
            1 => 
            array (
                'id' => 27,
                'role_id' => 1,
                'menu_id' => 406,
                'created_at' => '2023-01-15 14:52:44',
                'updated_at' => '2023-01-15 14:52:44',
            ),
            2 => 
            array (
                'id' => 28,
                'role_id' => 1,
                'menu_id' => 361,
                'created_at' => '2023-01-15 14:52:49',
                'updated_at' => '2023-01-15 14:52:49',
            ),
            3 => 
            array (
                'id' => 47,
                'role_id' => 1,
                'menu_id' => 367,
                'created_at' => '2023-01-17 21:46:02',
                'updated_at' => '2023-01-17 21:46:02',
            ),
            4 => 
            array (
                'id' => 48,
                'role_id' => 1,
                'menu_id' => 368,
                'created_at' => '2023-01-17 21:46:07',
                'updated_at' => '2023-01-17 21:46:07',
            ),
            5 => 
            array (
                'id' => 49,
                'role_id' => 1,
                'menu_id' => 369,
                'created_at' => '2023-01-17 21:46:13',
                'updated_at' => '2023-01-17 21:46:13',
            ),
            6 => 
            array (
                'id' => 50,
                'role_id' => 1,
                'menu_id' => 386,
                'created_at' => '2023-01-17 21:46:58',
                'updated_at' => '2023-01-17 21:46:58',
            ),
            7 => 
            array (
                'id' => 51,
                'role_id' => 9,
                'menu_id' => 386,
                'created_at' => '2023-01-17 21:46:58',
                'updated_at' => '2023-01-17 21:46:58',
            ),
            8 => 
            array (
                'id' => 65,
                'role_id' => 1,
                'menu_id' => 352,
                'created_at' => '2023-01-22 17:12:43',
                'updated_at' => '2023-01-22 17:12:43',
            ),
            9 => 
            array (
                'id' => 66,
                'role_id' => 9,
                'menu_id' => 352,
                'created_at' => '2023-01-22 17:12:43',
                'updated_at' => '2023-01-22 17:12:43',
            ),
            10 => 
            array (
                'id' => 75,
                'role_id' => 1,
                'menu_id' => 363,
                'created_at' => '2023-01-22 17:13:20',
                'updated_at' => '2023-01-22 17:13:20',
            ),
            11 => 
            array (
                'id' => 76,
                'role_id' => 9,
                'menu_id' => 363,
                'created_at' => '2023-01-22 17:13:20',
                'updated_at' => '2023-01-22 17:13:20',
            ),
            12 => 
            array (
                'id' => 79,
                'role_id' => 1,
                'menu_id' => 407,
                'created_at' => '2023-01-22 17:13:44',
                'updated_at' => '2023-01-22 17:13:44',
            ),
            13 => 
            array (
                'id' => 80,
                'role_id' => 9,
                'menu_id' => 407,
                'created_at' => '2023-01-22 17:13:44',
                'updated_at' => '2023-01-22 17:13:44',
            ),
            14 => 
            array (
                'id' => 81,
                'role_id' => 1,
                'menu_id' => 409,
                'created_at' => '2023-01-22 17:13:48',
                'updated_at' => '2023-01-22 17:13:48',
            ),
            15 => 
            array (
                'id' => 82,
                'role_id' => 9,
                'menu_id' => 409,
                'created_at' => '2023-01-22 17:13:48',
                'updated_at' => '2023-01-22 17:13:48',
            ),
            16 => 
            array (
                'id' => 83,
                'role_id' => 1,
                'menu_id' => 408,
                'created_at' => '2023-01-22 17:13:56',
                'updated_at' => '2023-01-22 17:13:56',
            ),
            17 => 
            array (
                'id' => 84,
                'role_id' => 9,
                'menu_id' => 408,
                'created_at' => '2023-01-22 17:13:56',
                'updated_at' => '2023-01-22 17:13:56',
            ),
            18 => 
            array (
                'id' => 85,
                'role_id' => 1,
                'menu_id' => 397,
                'created_at' => '2023-01-22 17:14:03',
                'updated_at' => '2023-01-22 17:14:03',
            ),
            19 => 
            array (
                'id' => 86,
                'role_id' => 9,
                'menu_id' => 397,
                'created_at' => '2023-01-22 17:14:03',
                'updated_at' => '2023-01-22 17:14:03',
            ),
            20 => 
            array (
                'id' => 96,
                'role_id' => 1,
                'menu_id' => 393,
                'created_at' => '2023-01-22 17:14:41',
                'updated_at' => '2023-01-22 17:14:41',
            ),
            21 => 
            array (
                'id' => 97,
                'role_id' => 9,
                'menu_id' => 393,
                'created_at' => '2023-01-22 17:14:41',
                'updated_at' => '2023-01-22 17:14:41',
            ),
            22 => 
            array (
                'id' => 98,
                'role_id' => 1,
                'menu_id' => 402,
                'created_at' => '2023-01-22 17:14:47',
                'updated_at' => '2023-01-22 17:14:47',
            ),
            23 => 
            array (
                'id' => 99,
                'role_id' => 9,
                'menu_id' => 402,
                'created_at' => '2023-01-22 17:14:47',
                'updated_at' => '2023-01-22 17:14:47',
            ),
            24 => 
            array (
                'id' => 100,
                'role_id' => 1,
                'menu_id' => 394,
                'created_at' => '2023-01-22 17:14:55',
                'updated_at' => '2023-01-22 17:14:55',
            ),
            25 => 
            array (
                'id' => 101,
                'role_id' => 9,
                'menu_id' => 394,
                'created_at' => '2023-01-22 17:14:55',
                'updated_at' => '2023-01-22 17:14:55',
            ),
            26 => 
            array (
                'id' => 106,
                'role_id' => 1,
                'menu_id' => 353,
                'created_at' => '2023-01-22 18:04:22',
                'updated_at' => '2023-01-22 18:04:22',
            ),
            27 => 
            array (
                'id' => 107,
                'role_id' => 9,
                'menu_id' => 353,
                'created_at' => '2023-01-22 18:04:22',
                'updated_at' => '2023-01-22 18:04:22',
            ),
            28 => 
            array (
                'id' => 108,
                'role_id' => 1,
                'menu_id' => 354,
                'created_at' => '2023-01-22 18:04:27',
                'updated_at' => '2023-01-22 18:04:27',
            ),
            29 => 
            array (
                'id' => 109,
                'role_id' => 9,
                'menu_id' => 354,
                'created_at' => '2023-01-22 18:04:27',
                'updated_at' => '2023-01-22 18:04:27',
            ),
            30 => 
            array (
                'id' => 133,
                'role_id' => 1,
                'menu_id' => 412,
                'created_at' => '2023-03-10 13:31:08',
                'updated_at' => '2023-03-10 13:31:08',
            ),
            31 => 
            array (
                'id' => 134,
                'role_id' => 9,
                'menu_id' => 412,
                'created_at' => '2023-03-10 13:31:08',
                'updated_at' => '2023-03-10 13:31:08',
            ),
            32 => 
            array (
                'id' => 135,
                'role_id' => 1,
                'menu_id' => 414,
                'created_at' => '2023-03-10 13:31:14',
                'updated_at' => '2023-03-10 13:31:14',
            ),
            33 => 
            array (
                'id' => 136,
                'role_id' => 9,
                'menu_id' => 414,
                'created_at' => '2023-03-10 13:31:14',
                'updated_at' => '2023-03-10 13:31:14',
            ),
            34 => 
            array (
                'id' => 149,
                'role_id' => 1,
                'menu_id' => 421,
                'created_at' => '2023-03-24 23:53:51',
                'updated_at' => '2023-03-24 23:53:51',
            ),
            35 => 
            array (
                'id' => 150,
                'role_id' => 9,
                'menu_id' => 421,
                'created_at' => '2023-03-24 23:53:51',
                'updated_at' => '2023-03-24 23:53:51',
            ),
            36 => 
            array (
                'id' => 151,
                'role_id' => 1,
                'menu_id' => 410,
                'created_at' => '2023-03-24 23:54:00',
                'updated_at' => '2023-03-24 23:54:00',
            ),
            37 => 
            array (
                'id' => 152,
                'role_id' => 9,
                'menu_id' => 410,
                'created_at' => '2023-03-24 23:54:00',
                'updated_at' => '2023-03-24 23:54:00',
            ),
            38 => 
            array (
                'id' => 153,
                'role_id' => 1,
                'menu_id' => 411,
                'created_at' => '2023-03-25 00:09:21',
                'updated_at' => '2023-03-25 00:09:21',
            ),
            39 => 
            array (
                'id' => 154,
                'role_id' => 9,
                'menu_id' => 411,
                'created_at' => '2023-03-25 00:09:21',
                'updated_at' => '2023-03-25 00:09:21',
            ),
            40 => 
            array (
                'id' => 155,
                'role_id' => 1,
                'menu_id' => 398,
                'created_at' => '2023-03-25 00:10:13',
                'updated_at' => '2023-03-25 00:10:13',
            ),
            41 => 
            array (
                'id' => 156,
                'role_id' => 9,
                'menu_id' => 398,
                'created_at' => '2023-03-25 00:10:13',
                'updated_at' => '2023-03-25 00:10:13',
            ),
            42 => 
            array (
                'id' => 157,
                'role_id' => 1,
                'menu_id' => 399,
                'created_at' => '2023-03-25 00:10:18',
                'updated_at' => '2023-03-25 00:10:18',
            ),
            43 => 
            array (
                'id' => 158,
                'role_id' => 9,
                'menu_id' => 399,
                'created_at' => '2023-03-25 00:10:18',
                'updated_at' => '2023-03-25 00:10:18',
            ),
            44 => 
            array (
                'id' => 159,
                'role_id' => 1,
                'menu_id' => 346,
                'created_at' => '2023-03-25 00:12:04',
                'updated_at' => '2023-03-25 00:12:04',
            ),
            45 => 
            array (
                'id' => 184,
                'role_id' => 1,
                'menu_id' => 392,
                'created_at' => '2023-03-26 22:35:52',
                'updated_at' => '2023-03-26 22:35:52',
            ),
            46 => 
            array (
                'id' => 185,
                'role_id' => 9,
                'menu_id' => 392,
                'created_at' => '2023-03-26 22:35:52',
                'updated_at' => '2023-03-26 22:35:52',
            ),
            47 => 
            array (
                'id' => 190,
                'role_id' => 1,
                'menu_id' => 415,
                'created_at' => '2023-04-12 23:57:11',
                'updated_at' => '2023-04-12 23:57:11',
            ),
            48 => 
            array (
                'id' => 191,
                'role_id' => 9,
                'menu_id' => 415,
                'created_at' => '2023-04-12 23:57:11',
                'updated_at' => '2023-04-12 23:57:11',
            ),
            49 => 
            array (
                'id' => 192,
                'role_id' => 1,
                'menu_id' => 419,
                'created_at' => '2023-04-12 23:57:45',
                'updated_at' => '2023-04-12 23:57:45',
            ),
            50 => 
            array (
                'id' => 193,
                'role_id' => 9,
                'menu_id' => 419,
                'created_at' => '2023-04-12 23:57:45',
                'updated_at' => '2023-04-12 23:57:45',
            ),
            51 => 
            array (
                'id' => 198,
                'role_id' => 1,
                'menu_id' => 416,
                'created_at' => '2023-04-12 23:58:42',
                'updated_at' => '2023-04-12 23:58:42',
            ),
            52 => 
            array (
                'id' => 199,
                'role_id' => 9,
                'menu_id' => 416,
                'created_at' => '2023-04-12 23:58:42',
                'updated_at' => '2023-04-12 23:58:42',
            ),
            53 => 
            array (
                'id' => 200,
                'role_id' => 1,
                'menu_id' => 417,
                'created_at' => '2023-04-13 00:44:13',
                'updated_at' => '2023-04-13 00:44:13',
            ),
            54 => 
            array (
                'id' => 201,
                'role_id' => 9,
                'menu_id' => 417,
                'created_at' => '2023-04-13 00:44:13',
                'updated_at' => '2023-04-13 00:44:13',
            ),
            55 => 
            array (
                'id' => 204,
                'role_id' => 1,
                'menu_id' => 422,
                'created_at' => '2023-04-13 03:27:23',
                'updated_at' => '2023-04-13 03:27:23',
            ),
            56 => 
            array (
                'id' => 205,
                'role_id' => 9,
                'menu_id' => 422,
                'created_at' => '2023-04-13 03:27:23',
                'updated_at' => '2023-04-13 03:27:23',
            ),
            57 => 
            array (
                'id' => 206,
                'role_id' => 1,
                'menu_id' => 360,
                'created_at' => '2023-04-13 03:27:29',
                'updated_at' => '2023-04-13 03:27:29',
            ),
            58 => 
            array (
                'id' => 207,
                'role_id' => 9,
                'menu_id' => 360,
                'created_at' => '2023-04-13 03:27:29',
                'updated_at' => '2023-04-13 03:27:29',
            ),
            59 => 
            array (
                'id' => 210,
                'role_id' => 1,
                'menu_id' => 424,
                'created_at' => '2023-04-13 03:27:43',
                'updated_at' => '2023-04-13 03:27:43',
            ),
            60 => 
            array (
                'id' => 211,
                'role_id' => 9,
                'menu_id' => 424,
                'created_at' => '2023-04-13 03:27:43',
                'updated_at' => '2023-04-13 03:27:43',
            ),
            61 => 
            array (
                'id' => 212,
                'role_id' => 1,
                'menu_id' => 364,
                'created_at' => '2023-04-13 03:27:56',
                'updated_at' => '2023-04-13 03:27:56',
            ),
            62 => 
            array (
                'id' => 213,
                'role_id' => 9,
                'menu_id' => 364,
                'created_at' => '2023-04-13 03:27:56',
                'updated_at' => '2023-04-13 03:27:56',
            ),
            63 => 
            array (
                'id' => 214,
                'role_id' => 1,
                'menu_id' => 418,
                'created_at' => '2023-04-13 13:05:41',
                'updated_at' => '2023-04-13 13:05:41',
            ),
            64 => 
            array (
                'id' => 215,
                'role_id' => 9,
                'menu_id' => 418,
                'created_at' => '2023-04-13 13:05:41',
                'updated_at' => '2023-04-13 13:05:41',
            ),
            65 => 
            array (
                'id' => 218,
                'role_id' => 1,
                'menu_id' => 423,
                'created_at' => '2023-04-13 13:06:26',
                'updated_at' => '2023-04-13 13:06:26',
            ),
            66 => 
            array (
                'id' => 219,
                'role_id' => 9,
                'menu_id' => 423,
                'created_at' => '2023-04-13 13:06:26',
                'updated_at' => '2023-04-13 13:06:26',
            ),
            67 => 
            array (
                'id' => 220,
                'role_id' => 1,
                'menu_id' => 413,
                'created_at' => '2023-04-13 13:06:35',
                'updated_at' => '2023-04-13 13:06:35',
            ),
            68 => 
            array (
                'id' => 221,
                'role_id' => 9,
                'menu_id' => 413,
                'created_at' => '2023-04-13 13:06:35',
                'updated_at' => '2023-04-13 13:06:35',
            ),
            69 => 
            array (
                'id' => 224,
                'role_id' => 1,
                'menu_id' => 400,
                'created_at' => '2023-04-13 13:06:46',
                'updated_at' => '2023-04-13 13:06:46',
            ),
            70 => 
            array (
                'id' => 225,
                'role_id' => 9,
                'menu_id' => 400,
                'created_at' => '2023-04-13 13:06:46',
                'updated_at' => '2023-04-13 13:06:46',
            ),
            71 => 
            array (
                'id' => 226,
                'role_id' => 1,
                'menu_id' => 420,
                'created_at' => '2023-04-13 13:06:52',
                'updated_at' => '2023-04-13 13:06:52',
            ),
            72 => 
            array (
                'id' => 227,
                'role_id' => 9,
                'menu_id' => 420,
                'created_at' => '2023-04-13 13:06:52',
                'updated_at' => '2023-04-13 13:06:52',
            ),
            73 => 
            array (
                'id' => 228,
                'role_id' => 1,
                'menu_id' => 345,
                'created_at' => '2023-04-18 05:43:44',
                'updated_at' => '2023-04-18 05:43:44',
            ),
            74 => 
            array (
                'id' => 229,
                'role_id' => 9,
                'menu_id' => 345,
                'created_at' => '2023-04-18 05:43:44',
                'updated_at' => '2023-04-18 05:43:44',
            ),
            75 => 
            array (
                'id' => 230,
                'role_id' => 1,
                'menu_id' => 425,
                'created_at' => '2023-04-18 05:44:21',
                'updated_at' => '2023-04-18 05:44:21',
            ),
            76 => 
            array (
                'id' => 231,
                'role_id' => 9,
                'menu_id' => 425,
                'created_at' => '2023-04-18 05:44:21',
                'updated_at' => '2023-04-18 05:44:21',
            ),
            77 => 
            array (
                'id' => 232,
                'role_id' => 1,
                'menu_id' => 351,
                'created_at' => '2023-04-18 10:52:23',
                'updated_at' => '2023-04-18 10:52:23',
            ),
            78 => 
            array (
                'id' => 233,
                'role_id' => 9,
                'menu_id' => 351,
                'created_at' => '2023-04-18 10:52:23',
                'updated_at' => '2023-04-18 10:52:23',
            ),
            79 => 
            array (
                'id' => 234,
                'role_id' => 1,
                'menu_id' => 373,
                'created_at' => '2023-04-18 21:00:47',
                'updated_at' => '2023-04-18 21:00:47',
            ),
            80 => 
            array (
                'id' => 235,
                'role_id' => 9,
                'menu_id' => 373,
                'created_at' => '2023-04-18 21:00:47',
                'updated_at' => '2023-04-18 21:00:47',
            ),
        ));
        
        
    }
}