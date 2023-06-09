<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRoleHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_role_has_permissions')->delete();
        
        \DB::table('p_role_has_permissions')->insert(array (
            0 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 2,
                'role_id' => 9,
            ),
            2 => 
            array (
                'permission_id' => 2,
                'role_id' => 10,
            ),
            3 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            4 => 
            array (
                'permission_id' => 3,
                'role_id' => 9,
            ),
            5 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            6 => 
            array (
                'permission_id' => 4,
                'role_id' => 9,
            ),
            7 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            8 => 
            array (
                'permission_id' => 5,
                'role_id' => 9,
            ),
            9 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            10 => 
            array (
                'permission_id' => 6,
                'role_id' => 9,
            ),
            11 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            12 => 
            array (
                'permission_id' => 7,
                'role_id' => 9,
            ),
            13 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            14 => 
            array (
                'permission_id' => 8,
                'role_id' => 9,
            ),
            15 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            16 => 
            array (
                'permission_id' => 9,
                'role_id' => 9,
            ),
            17 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            18 => 
            array (
                'permission_id' => 10,
                'role_id' => 9,
            ),
            19 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            20 => 
            array (
                'permission_id' => 11,
                'role_id' => 9,
            ),
            21 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            22 => 
            array (
                'permission_id' => 12,
                'role_id' => 9,
            ),
            23 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            24 => 
            array (
                'permission_id' => 13,
                'role_id' => 9,
            ),
            25 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            26 => 
            array (
                'permission_id' => 14,
                'role_id' => 9,
            ),
            27 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            28 => 
            array (
                'permission_id' => 15,
                'role_id' => 9,
            ),
            29 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            30 => 
            array (
                'permission_id' => 16,
                'role_id' => 9,
            ),
            31 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            32 => 
            array (
                'permission_id' => 17,
                'role_id' => 9,
            ),
            33 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            34 => 
            array (
                'permission_id' => 18,
                'role_id' => 9,
            ),
            35 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            36 => 
            array (
                'permission_id' => 19,
                'role_id' => 9,
            ),
            37 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            38 => 
            array (
                'permission_id' => 20,
                'role_id' => 9,
            ),
            39 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            40 => 
            array (
                'permission_id' => 21,
                'role_id' => 9,
            ),
            41 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            42 => 
            array (
                'permission_id' => 22,
                'role_id' => 9,
            ),
            43 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            44 => 
            array (
                'permission_id' => 23,
                'role_id' => 9,
            ),
            45 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            46 => 
            array (
                'permission_id' => 24,
                'role_id' => 9,
            ),
            47 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            48 => 
            array (
                'permission_id' => 25,
                'role_id' => 9,
            ),
            49 => 
            array (
                'permission_id' => 26,
                'role_id' => 1,
            ),
            50 => 
            array (
                'permission_id' => 26,
                'role_id' => 9,
            ),
            51 => 
            array (
                'permission_id' => 27,
                'role_id' => 1,
            ),
            52 => 
            array (
                'permission_id' => 27,
                'role_id' => 9,
            ),
            53 => 
            array (
                'permission_id' => 28,
                'role_id' => 1,
            ),
            54 => 
            array (
                'permission_id' => 28,
                'role_id' => 9,
            ),
            55 => 
            array (
                'permission_id' => 29,
                'role_id' => 1,
            ),
            56 => 
            array (
                'permission_id' => 29,
                'role_id' => 9,
            ),
            57 => 
            array (
                'permission_id' => 30,
                'role_id' => 1,
            ),
            58 => 
            array (
                'permission_id' => 30,
                'role_id' => 9,
            ),
            59 => 
            array (
                'permission_id' => 31,
                'role_id' => 1,
            ),
            60 => 
            array (
                'permission_id' => 31,
                'role_id' => 9,
            ),
            61 => 
            array (
                'permission_id' => 32,
                'role_id' => 1,
            ),
            62 => 
            array (
                'permission_id' => 32,
                'role_id' => 9,
            ),
            63 => 
            array (
                'permission_id' => 33,
                'role_id' => 1,
            ),
            64 => 
            array (
                'permission_id' => 33,
                'role_id' => 9,
            ),
            65 => 
            array (
                'permission_id' => 34,
                'role_id' => 1,
            ),
            66 => 
            array (
                'permission_id' => 34,
                'role_id' => 9,
            ),
            67 => 
            array (
                'permission_id' => 35,
                'role_id' => 1,
            ),
            68 => 
            array (
                'permission_id' => 35,
                'role_id' => 9,
            ),
            69 => 
            array (
                'permission_id' => 36,
                'role_id' => 1,
            ),
            70 => 
            array (
                'permission_id' => 36,
                'role_id' => 9,
            ),
            71 => 
            array (
                'permission_id' => 37,
                'role_id' => 1,
            ),
            72 => 
            array (
                'permission_id' => 37,
                'role_id' => 9,
            ),
            73 => 
            array (
                'permission_id' => 38,
                'role_id' => 1,
            ),
            74 => 
            array (
                'permission_id' => 38,
                'role_id' => 9,
            ),
            75 => 
            array (
                'permission_id' => 39,
                'role_id' => 1,
            ),
            76 => 
            array (
                'permission_id' => 39,
                'role_id' => 9,
            ),
            77 => 
            array (
                'permission_id' => 40,
                'role_id' => 1,
            ),
            78 => 
            array (
                'permission_id' => 40,
                'role_id' => 9,
            ),
            79 => 
            array (
                'permission_id' => 41,
                'role_id' => 1,
            ),
            80 => 
            array (
                'permission_id' => 41,
                'role_id' => 9,
            ),
            81 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            82 => 
            array (
                'permission_id' => 42,
                'role_id' => 9,
            ),
            83 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            84 => 
            array (
                'permission_id' => 43,
                'role_id' => 9,
            ),
            85 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            86 => 
            array (
                'permission_id' => 44,
                'role_id' => 9,
            ),
            87 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            88 => 
            array (
                'permission_id' => 45,
                'role_id' => 9,
            ),
            89 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            90 => 
            array (
                'permission_id' => 46,
                'role_id' => 9,
            ),
            91 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            92 => 
            array (
                'permission_id' => 47,
                'role_id' => 9,
            ),
            93 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            94 => 
            array (
                'permission_id' => 48,
                'role_id' => 9,
            ),
            95 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            96 => 
            array (
                'permission_id' => 49,
                'role_id' => 9,
            ),
            97 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            98 => 
            array (
                'permission_id' => 50,
                'role_id' => 9,
            ),
            99 => 
            array (
                'permission_id' => 51,
                'role_id' => 1,
            ),
            100 => 
            array (
                'permission_id' => 51,
                'role_id' => 9,
            ),
            101 => 
            array (
                'permission_id' => 52,
                'role_id' => 1,
            ),
            102 => 
            array (
                'permission_id' => 52,
                'role_id' => 9,
            ),
            103 => 
            array (
                'permission_id' => 53,
                'role_id' => 1,
            ),
            104 => 
            array (
                'permission_id' => 53,
                'role_id' => 9,
            ),
            105 => 
            array (
                'permission_id' => 54,
                'role_id' => 1,
            ),
            106 => 
            array (
                'permission_id' => 54,
                'role_id' => 9,
            ),
            107 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            108 => 
            array (
                'permission_id' => 55,
                'role_id' => 9,
            ),
            109 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            110 => 
            array (
                'permission_id' => 56,
                'role_id' => 9,
            ),
            111 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            112 => 
            array (
                'permission_id' => 57,
                'role_id' => 9,
            ),
            113 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            114 => 
            array (
                'permission_id' => 58,
                'role_id' => 9,
            ),
            115 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            116 => 
            array (
                'permission_id' => 59,
                'role_id' => 9,
            ),
            117 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            118 => 
            array (
                'permission_id' => 60,
                'role_id' => 9,
            ),
            119 => 
            array (
                'permission_id' => 61,
                'role_id' => 1,
            ),
            120 => 
            array (
                'permission_id' => 61,
                'role_id' => 9,
            ),
            121 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            122 => 
            array (
                'permission_id' => 62,
                'role_id' => 9,
            ),
            123 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            124 => 
            array (
                'permission_id' => 63,
                'role_id' => 9,
            ),
            125 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            126 => 
            array (
                'permission_id' => 64,
                'role_id' => 9,
            ),
            127 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            128 => 
            array (
                'permission_id' => 65,
                'role_id' => 9,
            ),
            129 => 
            array (
                'permission_id' => 66,
                'role_id' => 1,
            ),
            130 => 
            array (
                'permission_id' => 66,
                'role_id' => 9,
            ),
            131 => 
            array (
                'permission_id' => 67,
                'role_id' => 1,
            ),
            132 => 
            array (
                'permission_id' => 67,
                'role_id' => 9,
            ),
            133 => 
            array (
                'permission_id' => 68,
                'role_id' => 1,
            ),
            134 => 
            array (
                'permission_id' => 68,
                'role_id' => 9,
            ),
            135 => 
            array (
                'permission_id' => 69,
                'role_id' => 1,
            ),
            136 => 
            array (
                'permission_id' => 69,
                'role_id' => 9,
            ),
            137 => 
            array (
                'permission_id' => 70,
                'role_id' => 1,
            ),
            138 => 
            array (
                'permission_id' => 70,
                'role_id' => 9,
            ),
            139 => 
            array (
                'permission_id' => 71,
                'role_id' => 1,
            ),
            140 => 
            array (
                'permission_id' => 71,
                'role_id' => 9,
            ),
            141 => 
            array (
                'permission_id' => 72,
                'role_id' => 1,
            ),
            142 => 
            array (
                'permission_id' => 72,
                'role_id' => 9,
            ),
            143 => 
            array (
                'permission_id' => 73,
                'role_id' => 1,
            ),
            144 => 
            array (
                'permission_id' => 73,
                'role_id' => 9,
            ),
            145 => 
            array (
                'permission_id' => 74,
                'role_id' => 1,
            ),
            146 => 
            array (
                'permission_id' => 74,
                'role_id' => 9,
            ),
            147 => 
            array (
                'permission_id' => 75,
                'role_id' => 1,
            ),
            148 => 
            array (
                'permission_id' => 75,
                'role_id' => 9,
            ),
            149 => 
            array (
                'permission_id' => 76,
                'role_id' => 1,
            ),
            150 => 
            array (
                'permission_id' => 76,
                'role_id' => 9,
            ),
            151 => 
            array (
                'permission_id' => 77,
                'role_id' => 1,
            ),
            152 => 
            array (
                'permission_id' => 77,
                'role_id' => 9,
            ),
            153 => 
            array (
                'permission_id' => 78,
                'role_id' => 1,
            ),
            154 => 
            array (
                'permission_id' => 78,
                'role_id' => 9,
            ),
            155 => 
            array (
                'permission_id' => 79,
                'role_id' => 1,
            ),
            156 => 
            array (
                'permission_id' => 79,
                'role_id' => 9,
            ),
            157 => 
            array (
                'permission_id' => 80,
                'role_id' => 1,
            ),
            158 => 
            array (
                'permission_id' => 80,
                'role_id' => 9,
            ),
            159 => 
            array (
                'permission_id' => 81,
                'role_id' => 1,
            ),
            160 => 
            array (
                'permission_id' => 81,
                'role_id' => 9,
            ),
            161 => 
            array (
                'permission_id' => 82,
                'role_id' => 1,
            ),
            162 => 
            array (
                'permission_id' => 82,
                'role_id' => 9,
            ),
            163 => 
            array (
                'permission_id' => 83,
                'role_id' => 1,
            ),
            164 => 
            array (
                'permission_id' => 83,
                'role_id' => 9,
            ),
            165 => 
            array (
                'permission_id' => 84,
                'role_id' => 1,
            ),
            166 => 
            array (
                'permission_id' => 84,
                'role_id' => 9,
            ),
            167 => 
            array (
                'permission_id' => 85,
                'role_id' => 1,
            ),
            168 => 
            array (
                'permission_id' => 85,
                'role_id' => 9,
            ),
            169 => 
            array (
                'permission_id' => 86,
                'role_id' => 1,
            ),
            170 => 
            array (
                'permission_id' => 86,
                'role_id' => 9,
            ),
            171 => 
            array (
                'permission_id' => 87,
                'role_id' => 1,
            ),
            172 => 
            array (
                'permission_id' => 87,
                'role_id' => 9,
            ),
            173 => 
            array (
                'permission_id' => 88,
                'role_id' => 1,
            ),
            174 => 
            array (
                'permission_id' => 88,
                'role_id' => 9,
            ),
            175 => 
            array (
                'permission_id' => 89,
                'role_id' => 1,
            ),
            176 => 
            array (
                'permission_id' => 89,
                'role_id' => 9,
            ),
            177 => 
            array (
                'permission_id' => 90,
                'role_id' => 1,
            ),
            178 => 
            array (
                'permission_id' => 90,
                'role_id' => 9,
            ),
            179 => 
            array (
                'permission_id' => 91,
                'role_id' => 1,
            ),
            180 => 
            array (
                'permission_id' => 91,
                'role_id' => 9,
            ),
            181 => 
            array (
                'permission_id' => 92,
                'role_id' => 1,
            ),
            182 => 
            array (
                'permission_id' => 92,
                'role_id' => 9,
            ),
            183 => 
            array (
                'permission_id' => 93,
                'role_id' => 1,
            ),
            184 => 
            array (
                'permission_id' => 93,
                'role_id' => 9,
            ),
            185 => 
            array (
                'permission_id' => 94,
                'role_id' => 1,
            ),
            186 => 
            array (
                'permission_id' => 94,
                'role_id' => 9,
            ),
            187 => 
            array (
                'permission_id' => 95,
                'role_id' => 1,
            ),
            188 => 
            array (
                'permission_id' => 95,
                'role_id' => 9,
            ),
            189 => 
            array (
                'permission_id' => 96,
                'role_id' => 1,
            ),
            190 => 
            array (
                'permission_id' => 96,
                'role_id' => 9,
            ),
            191 => 
            array (
                'permission_id' => 97,
                'role_id' => 1,
            ),
            192 => 
            array (
                'permission_id' => 97,
                'role_id' => 9,
            ),
            193 => 
            array (
                'permission_id' => 98,
                'role_id' => 1,
            ),
            194 => 
            array (
                'permission_id' => 98,
                'role_id' => 9,
            ),
            195 => 
            array (
                'permission_id' => 99,
                'role_id' => 1,
            ),
            196 => 
            array (
                'permission_id' => 99,
                'role_id' => 9,
            ),
            197 => 
            array (
                'permission_id' => 100,
                'role_id' => 1,
            ),
            198 => 
            array (
                'permission_id' => 100,
                'role_id' => 9,
            ),
            199 => 
            array (
                'permission_id' => 101,
                'role_id' => 1,
            ),
            200 => 
            array (
                'permission_id' => 101,
                'role_id' => 9,
            ),
            201 => 
            array (
                'permission_id' => 102,
                'role_id' => 1,
            ),
            202 => 
            array (
                'permission_id' => 102,
                'role_id' => 9,
            ),
            203 => 
            array (
                'permission_id' => 103,
                'role_id' => 1,
            ),
            204 => 
            array (
                'permission_id' => 103,
                'role_id' => 9,
            ),
            205 => 
            array (
                'permission_id' => 104,
                'role_id' => 1,
            ),
            206 => 
            array (
                'permission_id' => 104,
                'role_id' => 9,
            ),
            207 => 
            array (
                'permission_id' => 105,
                'role_id' => 1,
            ),
            208 => 
            array (
                'permission_id' => 105,
                'role_id' => 9,
            ),
            209 => 
            array (
                'permission_id' => 106,
                'role_id' => 1,
            ),
            210 => 
            array (
                'permission_id' => 106,
                'role_id' => 9,
            ),
            211 => 
            array (
                'permission_id' => 107,
                'role_id' => 1,
            ),
            212 => 
            array (
                'permission_id' => 107,
                'role_id' => 9,
            ),
            213 => 
            array (
                'permission_id' => 108,
                'role_id' => 9,
            ),
            214 => 
            array (
                'permission_id' => 109,
                'role_id' => 9,
            ),
            215 => 
            array (
                'permission_id' => 110,
                'role_id' => 9,
            ),
            216 => 
            array (
                'permission_id' => 111,
                'role_id' => 9,
            ),
            217 => 
            array (
                'permission_id' => 112,
                'role_id' => 9,
            ),
            218 => 
            array (
                'permission_id' => 113,
                'role_id' => 9,
            ),
            219 => 
            array (
                'permission_id' => 114,
                'role_id' => 9,
            ),
            220 => 
            array (
                'permission_id' => 115,
                'role_id' => 9,
            ),
            221 => 
            array (
                'permission_id' => 116,
                'role_id' => 9,
            ),
            222 => 
            array (
                'permission_id' => 117,
                'role_id' => 9,
            ),
            223 => 
            array (
                'permission_id' => 118,
                'role_id' => 9,
            ),
            224 => 
            array (
                'permission_id' => 119,
                'role_id' => 9,
            ),
            225 => 
            array (
                'permission_id' => 120,
                'role_id' => 9,
            ),
            226 => 
            array (
                'permission_id' => 121,
                'role_id' => 9,
            ),
            227 => 
            array (
                'permission_id' => 122,
                'role_id' => 9,
            ),
            228 => 
            array (
                'permission_id' => 123,
                'role_id' => 9,
            ),
            229 => 
            array (
                'permission_id' => 124,
                'role_id' => 9,
            ),
            230 => 
            array (
                'permission_id' => 125,
                'role_id' => 9,
            ),
            231 => 
            array (
                'permission_id' => 126,
                'role_id' => 9,
            ),
            232 => 
            array (
                'permission_id' => 127,
                'role_id' => 9,
            ),
            233 => 
            array (
                'permission_id' => 128,
                'role_id' => 9,
            ),
            234 => 
            array (
                'permission_id' => 129,
                'role_id' => 9,
            ),
            235 => 
            array (
                'permission_id' => 130,
                'role_id' => 9,
            ),
            236 => 
            array (
                'permission_id' => 131,
                'role_id' => 9,
            ),
            237 => 
            array (
                'permission_id' => 132,
                'role_id' => 9,
            ),
            238 => 
            array (
                'permission_id' => 133,
                'role_id' => 9,
            ),
            239 => 
            array (
                'permission_id' => 134,
                'role_id' => 9,
            ),
            240 => 
            array (
                'permission_id' => 135,
                'role_id' => 9,
            ),
            241 => 
            array (
                'permission_id' => 136,
                'role_id' => 9,
            ),
            242 => 
            array (
                'permission_id' => 137,
                'role_id' => 9,
            ),
            243 => 
            array (
                'permission_id' => 138,
                'role_id' => 9,
            ),
            244 => 
            array (
                'permission_id' => 139,
                'role_id' => 9,
            ),
            245 => 
            array (
                'permission_id' => 140,
                'role_id' => 9,
            ),
            246 => 
            array (
                'permission_id' => 141,
                'role_id' => 9,
            ),
            247 => 
            array (
                'permission_id' => 142,
                'role_id' => 9,
            ),
            248 => 
            array (
                'permission_id' => 143,
                'role_id' => 9,
            ),
            249 => 
            array (
                'permission_id' => 144,
                'role_id' => 9,
            ),
            250 => 
            array (
                'permission_id' => 145,
                'role_id' => 9,
            ),
            251 => 
            array (
                'permission_id' => 146,
                'role_id' => 9,
            ),
            252 => 
            array (
                'permission_id' => 147,
                'role_id' => 9,
            ),
            253 => 
            array (
                'permission_id' => 148,
                'role_id' => 9,
            ),
            254 => 
            array (
                'permission_id' => 149,
                'role_id' => 9,
            ),
            255 => 
            array (
                'permission_id' => 150,
                'role_id' => 9,
            ),
            256 => 
            array (
                'permission_id' => 151,
                'role_id' => 1,
            ),
            257 => 
            array (
                'permission_id' => 151,
                'role_id' => 9,
            ),
            258 => 
            array (
                'permission_id' => 152,
                'role_id' => 1,
            ),
            259 => 
            array (
                'permission_id' => 152,
                'role_id' => 9,
            ),
            260 => 
            array (
                'permission_id' => 153,
                'role_id' => 1,
            ),
            261 => 
            array (
                'permission_id' => 153,
                'role_id' => 9,
            ),
            262 => 
            array (
                'permission_id' => 154,
                'role_id' => 1,
            ),
        ));
        
        
    }
}