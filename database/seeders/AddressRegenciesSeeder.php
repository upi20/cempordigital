<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address\Regencie;

class AddressRegenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {

        self::import_1();
        self::import_2();
        self::import_3();
        self::import_4();
        self::import_5();
        self::import_6();
        self::import_7();
        self::import_8();
        self::import_9();
        self::import_10();
        self::import_11();
        self::import_12();
        self::import_13();
        self::import_14();
        self::import_15();
        self::import_16();
        self::import_17();
        self::import_18();
        self::import_19();
        self::import_20();
        self::import_21();
        self::import_22();
        self::import_23();
        self::import_24();
        self::import_25();
        self::import_26();
        self::import_27();
        self::import_28();
        self::import_29();
        self::import_30();
        self::import_31();
        self::import_32();
        self::import_33();
        self::import_34();
        self::import_35();
        self::import_36();
        self::import_37();
        self::import_38();
        self::import_39();
        self::import_40();
        self::import_41();
        self::import_42();
        self::import_43();
        self::import_44();
        self::import_45();
        self::import_46();
        self::import_47();
        self::import_48();
        self::import_49();
        self::import_50();
        self::import_51();
        self::import_52();
        self::import_53();
        self::import_54();
        self::import_55();
        self::import_56();
        self::import_57();
        self::import_58();
        self::import_59();
        self::import_60();
        self::import_61();
        self::import_62();
        self::import_63();
        self::import_64();
        self::import_65();
        self::import_66();
        self::import_67();
        self::import_68();
        self::import_69();
        self::import_70();
        self::import_71();
        self::import_72();
        self::import_73();
        self::import_74();
        self::import_75();
        self::import_76();
        self::import_77();
        self::import_78();
        self::import_79();
        self::import_80();
        self::import_81();
        self::import_82();
        self::import_83();
        self::import_84();
        self::import_85();
        self::import_86();
    }


    public static function import_1()
    {
        echo 'Import address regencies: 1%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1101', 'province_id' => '11', 'name' => 'KABUPATEN SIMEULUE'],
            ['id' => '1102', 'province_id' => '11', 'name' => 'KABUPATEN ACEH SINGKIL'],
            ['id' => '1103', 'province_id' => '11', 'name' => 'KABUPATEN ACEH SELATAN'],
            ['id' => '1104', 'province_id' => '11', 'name' => 'KABUPATEN ACEH TENGGARA'],
            ['id' => '1105', 'province_id' => '11', 'name' => 'KABUPATEN ACEH TIMUR'],
            ['id' => '1106', 'province_id' => '11', 'name' => 'KABUPATEN ACEH TENGAH'],
            ['id' => '1107', 'province_id' => '11', 'name' => 'KABUPATEN ACEH BARAT'],

        ]);
    }

    public static function import_2()
    {
        echo 'Import address regencies: 2%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1108', 'province_id' => '11', 'name' => 'KABUPATEN ACEH BESAR'],
            ['id' => '1109', 'province_id' => '11', 'name' => 'KABUPATEN PIDIE'],
            ['id' => '1110', 'province_id' => '11', 'name' => 'KABUPATEN BIREUEN'],
            ['id' => '1111', 'province_id' => '11', 'name' => 'KABUPATEN ACEH UTARA'],
            ['id' => '1112', 'province_id' => '11', 'name' => 'KABUPATEN ACEH BARAT DAYA'],
            ['id' => '1113', 'province_id' => '11', 'name' => 'KABUPATEN GAYO LUES'],

        ]);
    }

    public static function import_3()
    {
        echo 'Import address regencies: 3%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1114', 'province_id' => '11', 'name' => 'KABUPATEN ACEH TAMIANG'],
            ['id' => '1115', 'province_id' => '11', 'name' => 'KABUPATEN NAGAN RAYA'],
            ['id' => '1116', 'province_id' => '11', 'name' => 'KABUPATEN ACEH JAYA'],
            ['id' => '1117', 'province_id' => '11', 'name' => 'KABUPATEN BENER MERIAH'],
            ['id' => '1118', 'province_id' => '11', 'name' => 'KABUPATEN PIDIE JAYA'],
            ['id' => '1171', 'province_id' => '11', 'name' => 'KOTA BANDA ACEH'],

        ]);
    }

    public static function import_4()
    {
        echo 'Import address regencies: 4%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1172', 'province_id' => '11', 'name' => 'KOTA SABANG'],
            ['id' => '1173', 'province_id' => '11', 'name' => 'KOTA LANGSA'],
            ['id' => '1174', 'province_id' => '11', 'name' => 'KOTA LHOKSEUMAWE'],
            ['id' => '1175', 'province_id' => '11', 'name' => 'KOTA SUBULUSSALAM'],
            ['id' => '1201', 'province_id' => '12', 'name' => 'KABUPATEN NIAS'],
            ['id' => '1202', 'province_id' => '12', 'name' => 'KABUPATEN MANDAILING NATAL'],

        ]);
    }

    public static function import_5()
    {
        echo 'Import address regencies: 5%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1203', 'province_id' => '12', 'name' => 'KABUPATEN TAPANULI SELATAN'],
            ['id' => '1204', 'province_id' => '12', 'name' => 'KABUPATEN TAPANULI TENGAH'],
            ['id' => '1205', 'province_id' => '12', 'name' => 'KABUPATEN TAPANULI UTARA'],
            ['id' => '1206', 'province_id' => '12', 'name' => 'KABUPATEN TOBA SAMOSIR'],
            ['id' => '1207', 'province_id' => '12', 'name' => 'KABUPATEN LABUHAN BATU'],
            ['id' => '1208', 'province_id' => '12', 'name' => 'KABUPATEN ASAHAN'],

        ]);
    }

    public static function import_6()
    {
        echo 'Import address regencies: 6%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1209', 'province_id' => '12', 'name' => 'KABUPATEN SIMALUNGUN'],
            ['id' => '1210', 'province_id' => '12', 'name' => 'KABUPATEN DAIRI'],
            ['id' => '1211', 'province_id' => '12', 'name' => 'KABUPATEN KARO'],
            ['id' => '1212', 'province_id' => '12', 'name' => 'KABUPATEN DELI SERDANG'],
            ['id' => '1213', 'province_id' => '12', 'name' => 'KABUPATEN LANGKAT'],
            ['id' => '1214', 'province_id' => '12', 'name' => 'KABUPATEN NIAS SELATAN'],

        ]);
    }

    public static function import_7()
    {
        echo 'Import address regencies: 7%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1215', 'province_id' => '12', 'name' => 'KABUPATEN HUMBANG HASUNDUTAN'],
            ['id' => '1216', 'province_id' => '12', 'name' => 'KABUPATEN PAKPAK BHARAT'],
            ['id' => '1217', 'province_id' => '12', 'name' => 'KABUPATEN SAMOSIR'],
            ['id' => '1218', 'province_id' => '12', 'name' => 'KABUPATEN SERDANG BEDAGAI'],
            ['id' => '1219', 'province_id' => '12', 'name' => 'KABUPATEN BATU BARA'],
            ['id' => '1220', 'province_id' => '12', 'name' => 'KABUPATEN PADANG LAWAS UTARA'],

        ]);
    }

    public static function import_8()
    {
        echo 'Import address regencies: 8%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1221', 'province_id' => '12', 'name' => 'KABUPATEN PADANG LAWAS'],
            ['id' => '1222', 'province_id' => '12', 'name' => 'KABUPATEN LABUHAN BATU SELATAN'],
            ['id' => '1223', 'province_id' => '12', 'name' => 'KABUPATEN LABUHAN BATU UTARA'],
            ['id' => '1224', 'province_id' => '12', 'name' => 'KABUPATEN NIAS UTARA'],
            ['id' => '1225', 'province_id' => '12', 'name' => 'KABUPATEN NIAS BARAT'],
            ['id' => '1271', 'province_id' => '12', 'name' => 'KOTA SIBOLGA'],

        ]);
    }

    public static function import_9()
    {
        echo 'Import address regencies: 9%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1272', 'province_id' => '12', 'name' => 'KOTA TANJUNG BALAI'],
            ['id' => '1273', 'province_id' => '12', 'name' => 'KOTA PEMATANG SIANTAR'],
            ['id' => '1274', 'province_id' => '12', 'name' => 'KOTA TEBING TINGGI'],
            ['id' => '1275', 'province_id' => '12', 'name' => 'KOTA MEDAN'],
            ['id' => '1276', 'province_id' => '12', 'name' => 'KOTA BINJAI'],
            ['id' => '1277', 'province_id' => '12', 'name' => 'KOTA PADANGSIDIMPUAN'],

        ]);
    }

    public static function import_10()
    {
        echo 'Import address regencies: 10%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1278', 'province_id' => '12', 'name' => 'KOTA GUNUNGSITOLI'],
            ['id' => '1301', 'province_id' => '13', 'name' => 'KABUPATEN KEPULAUAN MENTAWAI'],
            ['id' => '1302', 'province_id' => '13', 'name' => 'KABUPATEN PESISIR SELATAN'],
            ['id' => '1303', 'province_id' => '13', 'name' => 'KABUPATEN SOLOK'],
            ['id' => '1304', 'province_id' => '13', 'name' => 'KABUPATEN SIJUNJUNG'],
            ['id' => '1305', 'province_id' => '13', 'name' => 'KABUPATEN TANAH DATAR'],

        ]);
    }

    public static function import_11()
    {
        echo 'Import address regencies: 11%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1306', 'province_id' => '13', 'name' => 'KABUPATEN PADANG PARIAMAN'],
            ['id' => '1307', 'province_id' => '13', 'name' => 'KABUPATEN AGAM'],
            ['id' => '1308', 'province_id' => '13', 'name' => 'KABUPATEN LIMA PULUH KOTA'],
            ['id' => '1309', 'province_id' => '13', 'name' => 'KABUPATEN PASAMAN'],
            ['id' => '1310', 'province_id' => '13', 'name' => 'KABUPATEN SOLOK SELATAN'],
            ['id' => '1311', 'province_id' => '13', 'name' => 'KABUPATEN DHARMASRAYA'],

        ]);
    }

    public static function import_12()
    {
        echo 'Import address regencies: 12%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1312', 'province_id' => '13', 'name' => 'KABUPATEN PASAMAN BARAT'],
            ['id' => '1371', 'province_id' => '13', 'name' => 'KOTA PADANG'],
            ['id' => '1372', 'province_id' => '13', 'name' => 'KOTA SOLOK'],
            ['id' => '1373', 'province_id' => '13', 'name' => 'KOTA SAWAH LUNTO'],
            ['id' => '1374', 'province_id' => '13', 'name' => 'KOTA PADANG PANJANG'],
            ['id' => '1375', 'province_id' => '13', 'name' => 'KOTA BUKITTINGGI'],

        ]);
    }

    public static function import_13()
    {
        echo 'Import address regencies: 13%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1376', 'province_id' => '13', 'name' => 'KOTA PAYAKUMBUH'],
            ['id' => '1377', 'province_id' => '13', 'name' => 'KOTA PARIAMAN'],
            ['id' => '1401', 'province_id' => '14', 'name' => 'KABUPATEN KUANTAN SINGINGI'],
            ['id' => '1402', 'province_id' => '14', 'name' => 'KABUPATEN INDRAGIRI HULU'],
            ['id' => '1403', 'province_id' => '14', 'name' => 'KABUPATEN INDRAGIRI HILIR'],
            ['id' => '1404', 'province_id' => '14', 'name' => 'KABUPATEN PELALAWAN'],

        ]);
    }

    public static function import_14()
    {
        echo 'Import address regencies: 14%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1405', 'province_id' => '14', 'name' => 'KABUPATEN S I A K'],
            ['id' => '1406', 'province_id' => '14', 'name' => 'KABUPATEN KAMPAR'],
            ['id' => '1407', 'province_id' => '14', 'name' => 'KABUPATEN ROKAN HULU'],
            ['id' => '1408', 'province_id' => '14', 'name' => 'KABUPATEN BENGKALIS'],
            ['id' => '1409', 'province_id' => '14', 'name' => 'KABUPATEN ROKAN HILIR'],
            ['id' => '1410', 'province_id' => '14', 'name' => 'KABUPATEN KEPULAUAN MERANTI'],

        ]);
    }

    public static function import_15()
    {
        echo 'Import address regencies: 15%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1471', 'province_id' => '14', 'name' => 'KOTA PEKANBARU'],
            ['id' => '1473', 'province_id' => '14', 'name' => 'KOTA D U M A I'],
            ['id' => '1501', 'province_id' => '15', 'name' => 'KABUPATEN KERINCI'],
            ['id' => '1502', 'province_id' => '15', 'name' => 'KABUPATEN MERANGIN'],
            ['id' => '1503', 'province_id' => '15', 'name' => 'KABUPATEN SAROLANGUN'],
            ['id' => '1504', 'province_id' => '15', 'name' => 'KABUPATEN BATANG HARI'],

        ]);
    }

    public static function import_16()
    {
        echo 'Import address regencies: 16%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1505', 'province_id' => '15', 'name' => 'KABUPATEN MUARO JAMBI'],
            ['id' => '1506', 'province_id' => '15', 'name' => 'KABUPATEN TANJUNG JABUNG TIMUR'],
            ['id' => '1507', 'province_id' => '15', 'name' => 'KABUPATEN TANJUNG JABUNG BARAT'],
            ['id' => '1508', 'province_id' => '15', 'name' => 'KABUPATEN TEBO'],
            ['id' => '1509', 'province_id' => '15', 'name' => 'KABUPATEN BUNGO'],
            ['id' => '1571', 'province_id' => '15', 'name' => 'KOTA JAMBI'],

        ]);
    }

    public static function import_17()
    {
        echo 'Import address regencies: 17%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1572', 'province_id' => '15', 'name' => 'KOTA SUNGAI PENUH'],
            ['id' => '1601', 'province_id' => '16', 'name' => 'KABUPATEN OGAN KOMERING ULU'],
            ['id' => '1602', 'province_id' => '16', 'name' => 'KABUPATEN OGAN KOMERING ILIR'],
            ['id' => '1603', 'province_id' => '16', 'name' => 'KABUPATEN MUARA ENIM'],
            ['id' => '1604', 'province_id' => '16', 'name' => 'KABUPATEN LAHAT'],
            ['id' => '1605', 'province_id' => '16', 'name' => 'KABUPATEN MUSI RAWAS'],

        ]);
    }

    public static function import_18()
    {
        echo 'Import address regencies: 18%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1606', 'province_id' => '16', 'name' => 'KABUPATEN MUSI BANYUASIN'],
            ['id' => '1607', 'province_id' => '16', 'name' => 'KABUPATEN BANYU ASIN'],
            ['id' => '1608', 'province_id' => '16', 'name' => 'KABUPATEN OGAN KOMERING ULU SELATAN'],
            ['id' => '1609', 'province_id' => '16', 'name' => 'KABUPATEN OGAN KOMERING ULU TIMUR'],
            ['id' => '1610', 'province_id' => '16', 'name' => 'KABUPATEN OGAN ILIR'],
            ['id' => '1611', 'province_id' => '16', 'name' => 'KABUPATEN EMPAT LAWANG'],

        ]);
    }

    public static function import_19()
    {
        echo 'Import address regencies: 19%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1612', 'province_id' => '16', 'name' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR'],
            ['id' => '1613', 'province_id' => '16', 'name' => 'KABUPATEN MUSI RAWAS UTARA'],
            ['id' => '1671', 'province_id' => '16', 'name' => 'KOTA PALEMBANG'],
            ['id' => '1672', 'province_id' => '16', 'name' => 'KOTA PRABUMULIH'],
            ['id' => '1673', 'province_id' => '16', 'name' => 'KOTA PAGAR ALAM'],
            ['id' => '1674', 'province_id' => '16', 'name' => 'KOTA LUBUKLINGGAU'],

        ]);
    }

    public static function import_20()
    {
        echo 'Import address regencies: 20%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1701', 'province_id' => '17', 'name' => 'KABUPATEN BENGKULU SELATAN'],
            ['id' => '1702', 'province_id' => '17', 'name' => 'KABUPATEN REJANG LEBONG'],
            ['id' => '1703', 'province_id' => '17', 'name' => 'KABUPATEN BENGKULU UTARA'],
            ['id' => '1704', 'province_id' => '17', 'name' => 'KABUPATEN KAUR'],
            ['id' => '1705', 'province_id' => '17', 'name' => 'KABUPATEN SELUMA'],
            ['id' => '1706', 'province_id' => '17', 'name' => 'KABUPATEN MUKOMUKO'],

        ]);
    }

    public static function import_21()
    {
        echo 'Import address regencies: 21%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1707', 'province_id' => '17', 'name' => 'KABUPATEN LEBONG'],
            ['id' => '1708', 'province_id' => '17', 'name' => 'KABUPATEN KEPAHIANG'],
            ['id' => '1709', 'province_id' => '17', 'name' => 'KABUPATEN BENGKULU TENGAH'],
            ['id' => '1771', 'province_id' => '17', 'name' => 'KOTA BENGKULU'],
            ['id' => '1801', 'province_id' => '18', 'name' => 'KABUPATEN LAMPUNG BARAT'],
            ['id' => '1802', 'province_id' => '18', 'name' => 'KABUPATEN TANGGAMUS'],

        ]);
    }

    public static function import_22()
    {
        echo 'Import address regencies: 22%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1803', 'province_id' => '18', 'name' => 'KABUPATEN LAMPUNG SELATAN'],
            ['id' => '1804', 'province_id' => '18', 'name' => 'KABUPATEN LAMPUNG TIMUR'],
            ['id' => '1805', 'province_id' => '18', 'name' => 'KABUPATEN LAMPUNG TENGAH'],
            ['id' => '1806', 'province_id' => '18', 'name' => 'KABUPATEN LAMPUNG UTARA'],
            ['id' => '1807', 'province_id' => '18', 'name' => 'KABUPATEN WAY KANAN'],
            ['id' => '1808', 'province_id' => '18', 'name' => 'KABUPATEN TULANGBAWANG'],

        ]);
    }

    public static function import_23()
    {
        echo 'Import address regencies: 23%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1809', 'province_id' => '18', 'name' => 'KABUPATEN PESAWARAN'],
            ['id' => '1810', 'province_id' => '18', 'name' => 'KABUPATEN PRINGSEWU'],
            ['id' => '1811', 'province_id' => '18', 'name' => 'KABUPATEN MESUJI'],
            ['id' => '1812', 'province_id' => '18', 'name' => 'KABUPATEN TULANG BAWANG BARAT'],
            ['id' => '1813', 'province_id' => '18', 'name' => 'KABUPATEN PESISIR BARAT'],
            ['id' => '1871', 'province_id' => '18', 'name' => 'KOTA BANDAR LAMPUNG'],

        ]);
    }

    public static function import_24()
    {
        echo 'Import address regencies: 24%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1872', 'province_id' => '18', 'name' => 'KOTA METRO'],
            ['id' => '1901', 'province_id' => '19', 'name' => 'KABUPATEN BANGKA'],
            ['id' => '1902', 'province_id' => '19', 'name' => 'KABUPATEN BELITUNG'],
            ['id' => '1903', 'province_id' => '19', 'name' => 'KABUPATEN BANGKA BARAT'],
            ['id' => '1904', 'province_id' => '19', 'name' => 'KABUPATEN BANGKA TENGAH'],
            ['id' => '1905', 'province_id' => '19', 'name' => 'KABUPATEN BANGKA SELATAN'],

        ]);
    }

    public static function import_25()
    {
        echo 'Import address regencies: 25%' . PHP_EOL;
        Regencie::insert([
            ['id' => '1906', 'province_id' => '19', 'name' => 'KABUPATEN BELITUNG TIMUR'],
            ['id' => '1971', 'province_id' => '19', 'name' => 'KOTA PANGKAL PINANG'],
            ['id' => '2101', 'province_id' => '21', 'name' => 'KABUPATEN KARIMUN'],
            ['id' => '2102', 'province_id' => '21', 'name' => 'KABUPATEN BINTAN'],
            ['id' => '2103', 'province_id' => '21', 'name' => 'KABUPATEN NATUNA'],
            ['id' => '2104', 'province_id' => '21', 'name' => 'KABUPATEN LINGGA'],

        ]);
    }

    public static function import_26()
    {
        echo 'Import address regencies: 26%' . PHP_EOL;
        Regencie::insert([
            ['id' => '2105', 'province_id' => '21', 'name' => 'KABUPATEN KEPULAUAN ANAMBAS'],
            ['id' => '2171', 'province_id' => '21', 'name' => 'KOTA B A T A M'],
            ['id' => '2172', 'province_id' => '21', 'name' => 'KOTA TANJUNG PINANG'],
            ['id' => '3101', 'province_id' => '31', 'name' => 'KABUPATEN KEPULAUAN SERIBU'],
            ['id' => '3171', 'province_id' => '31', 'name' => 'KOTA JAKARTA SELATAN'],
            ['id' => '3172', 'province_id' => '31', 'name' => 'KOTA JAKARTA TIMUR'],

        ]);
    }

    public static function import_27()
    {
        echo 'Import address regencies: 27%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3173', 'province_id' => '31', 'name' => 'KOTA JAKARTA PUSAT'],
            ['id' => '3174', 'province_id' => '31', 'name' => 'KOTA JAKARTA BARAT'],
            ['id' => '3175', 'province_id' => '31', 'name' => 'KOTA JAKARTA UTARA'],
            ['id' => '3201', 'province_id' => '32', 'name' => 'KABUPATEN BOGOR'],
            ['id' => '3202', 'province_id' => '32', 'name' => 'KABUPATEN SUKABUMI'],
            ['id' => '3203', 'province_id' => '32', 'name' => 'KABUPATEN CIANJUR'],

        ]);
    }

    public static function import_28()
    {
        echo 'Import address regencies: 28%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3204', 'province_id' => '32', 'name' => 'KABUPATEN BANDUNG'],
            ['id' => '3205', 'province_id' => '32', 'name' => 'KABUPATEN GARUT'],
            ['id' => '3206', 'province_id' => '32', 'name' => 'KABUPATEN TASIKMALAYA'],
            ['id' => '3207', 'province_id' => '32', 'name' => 'KABUPATEN CIAMIS'],
            ['id' => '3208', 'province_id' => '32', 'name' => 'KABUPATEN KUNINGAN'],
            ['id' => '3209', 'province_id' => '32', 'name' => 'KABUPATEN CIREBON'],

        ]);
    }

    public static function import_29()
    {
        echo 'Import address regencies: 29%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3210', 'province_id' => '32', 'name' => 'KABUPATEN MAJALENGKA'],
            ['id' => '3211', 'province_id' => '32', 'name' => 'KABUPATEN SUMEDANG'],
            ['id' => '3212', 'province_id' => '32', 'name' => 'KABUPATEN INDRAMAYU'],
            ['id' => '3213', 'province_id' => '32', 'name' => 'KABUPATEN SUBANG'],
            ['id' => '3214', 'province_id' => '32', 'name' => 'KABUPATEN PURWAKARTA'],
            ['id' => '3215', 'province_id' => '32', 'name' => 'KABUPATEN KARAWANG'],

        ]);
    }

    public static function import_30()
    {
        echo 'Import address regencies: 30%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3216', 'province_id' => '32', 'name' => 'KABUPATEN BEKASI'],
            ['id' => '3217', 'province_id' => '32', 'name' => 'KABUPATEN BANDUNG BARAT'],
            ['id' => '3218', 'province_id' => '32', 'name' => 'KABUPATEN PANGANDARAN'],
            ['id' => '3271', 'province_id' => '32', 'name' => 'KOTA BOGOR'],
            ['id' => '3272', 'province_id' => '32', 'name' => 'KOTA SUKABUMI'],
            ['id' => '3273', 'province_id' => '32', 'name' => 'KOTA BANDUNG'],

        ]);
    }

    public static function import_31()
    {
        echo 'Import address regencies: 31%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3274', 'province_id' => '32', 'name' => 'KOTA CIREBON'],
            ['id' => '3275', 'province_id' => '32', 'name' => 'KOTA BEKASI'],
            ['id' => '3276', 'province_id' => '32', 'name' => 'KOTA DEPOK'],
            ['id' => '3277', 'province_id' => '32', 'name' => 'KOTA CIMAHI'],
            ['id' => '3278', 'province_id' => '32', 'name' => 'KOTA TASIKMALAYA'],
            ['id' => '3279', 'province_id' => '32', 'name' => 'KOTA BANJAR'],

        ]);
    }

    public static function import_32()
    {
        echo 'Import address regencies: 32%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3301', 'province_id' => '33', 'name' => 'KABUPATEN CILACAP'],
            ['id' => '3302', 'province_id' => '33', 'name' => 'KABUPATEN BANYUMAS'],
            ['id' => '3303', 'province_id' => '33', 'name' => 'KABUPATEN PURBALINGGA'],
            ['id' => '3304', 'province_id' => '33', 'name' => 'KABUPATEN BANJARNEGARA'],
            ['id' => '3305', 'province_id' => '33', 'name' => 'KABUPATEN KEBUMEN'],
            ['id' => '3306', 'province_id' => '33', 'name' => 'KABUPATEN PURWOREJO'],

        ]);
    }

    public static function import_33()
    {
        echo 'Import address regencies: 33%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3307', 'province_id' => '33', 'name' => 'KABUPATEN WONOSOBO'],
            ['id' => '3308', 'province_id' => '33', 'name' => 'KABUPATEN MAGELANG'],
            ['id' => '3309', 'province_id' => '33', 'name' => 'KABUPATEN BOYOLALI'],
            ['id' => '3310', 'province_id' => '33', 'name' => 'KABUPATEN KLATEN'],
            ['id' => '3311', 'province_id' => '33', 'name' => 'KABUPATEN SUKOHARJO'],
            ['id' => '3312', 'province_id' => '33', 'name' => 'KABUPATEN WONOGIRI'],

        ]);
    }

    public static function import_34()
    {
        echo 'Import address regencies: 34%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3313', 'province_id' => '33', 'name' => 'KABUPATEN KARANGANYAR'],
            ['id' => '3314', 'province_id' => '33', 'name' => 'KABUPATEN SRAGEN'],
            ['id' => '3315', 'province_id' => '33', 'name' => 'KABUPATEN GROBOGAN'],
            ['id' => '3316', 'province_id' => '33', 'name' => 'KABUPATEN BLORA'],
            ['id' => '3317', 'province_id' => '33', 'name' => 'KABUPATEN REMBANG'],
            ['id' => '3318', 'province_id' => '33', 'name' => 'KABUPATEN PATI'],

        ]);
    }

    public static function import_35()
    {
        echo 'Import address regencies: 35%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3319', 'province_id' => '33', 'name' => 'KABUPATEN KUDUS'],
            ['id' => '3320', 'province_id' => '33', 'name' => 'KABUPATEN JEPARA'],
            ['id' => '3321', 'province_id' => '33', 'name' => 'KABUPATEN DEMAK'],
            ['id' => '3322', 'province_id' => '33', 'name' => 'KABUPATEN SEMARANG'],
            ['id' => '3323', 'province_id' => '33', 'name' => 'KABUPATEN TEMANGGUNG'],
            ['id' => '3324', 'province_id' => '33', 'name' => 'KABUPATEN KENDAL'],

        ]);
    }

    public static function import_36()
    {
        echo 'Import address regencies: 36%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3325', 'province_id' => '33', 'name' => 'KABUPATEN BATANG'],
            ['id' => '3326', 'province_id' => '33', 'name' => 'KABUPATEN PEKALONGAN'],
            ['id' => '3327', 'province_id' => '33', 'name' => 'KABUPATEN PEMALANG'],
            ['id' => '3328', 'province_id' => '33', 'name' => 'KABUPATEN TEGAL'],
            ['id' => '3329', 'province_id' => '33', 'name' => 'KABUPATEN BREBES'],
            ['id' => '3371', 'province_id' => '33', 'name' => 'KOTA MAGELANG'],

        ]);
    }

    public static function import_37()
    {
        echo 'Import address regencies: 37%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3372', 'province_id' => '33', 'name' => 'KOTA SURAKARTA'],
            ['id' => '3373', 'province_id' => '33', 'name' => 'KOTA SALATIGA'],
            ['id' => '3374', 'province_id' => '33', 'name' => 'KOTA SEMARANG'],
            ['id' => '3375', 'province_id' => '33', 'name' => 'KOTA PEKALONGAN'],
            ['id' => '3376', 'province_id' => '33', 'name' => 'KOTA TEGAL'],
            ['id' => '3401', 'province_id' => '34', 'name' => 'KABUPATEN KULON PROGO'],

        ]);
    }

    public static function import_38()
    {
        echo 'Import address regencies: 38%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3402', 'province_id' => '34', 'name' => 'KABUPATEN BANTUL'],
            ['id' => '3403', 'province_id' => '34', 'name' => 'KABUPATEN GUNUNG KIDUL'],
            ['id' => '3404', 'province_id' => '34', 'name' => 'KABUPATEN SLEMAN'],
            ['id' => '3471', 'province_id' => '34', 'name' => 'KOTA YOGYAKARTA'],
            ['id' => '3501', 'province_id' => '35', 'name' => 'KABUPATEN PACITAN'],
            ['id' => '3502', 'province_id' => '35', 'name' => 'KABUPATEN PONOROGO'],

        ]);
    }

    public static function import_39()
    {
        echo 'Import address regencies: 39%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3503', 'province_id' => '35', 'name' => 'KABUPATEN TRENGGALEK'],
            ['id' => '3504', 'province_id' => '35', 'name' => 'KABUPATEN TULUNGAGUNG'],
            ['id' => '3505', 'province_id' => '35', 'name' => 'KABUPATEN BLITAR'],
            ['id' => '3506', 'province_id' => '35', 'name' => 'KABUPATEN KEDIRI'],
            ['id' => '3507', 'province_id' => '35', 'name' => 'KABUPATEN MALANG'],
            ['id' => '3508', 'province_id' => '35', 'name' => 'KABUPATEN LUMAJANG'],

        ]);
    }

    public static function import_40()
    {
        echo 'Import address regencies: 40%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3509', 'province_id' => '35', 'name' => 'KABUPATEN JEMBER'],
            ['id' => '3510', 'province_id' => '35', 'name' => 'KABUPATEN BANYUWANGI'],
            ['id' => '3511', 'province_id' => '35', 'name' => 'KABUPATEN BONDOWOSO'],
            ['id' => '3512', 'province_id' => '35', 'name' => 'KABUPATEN SITUBONDO'],
            ['id' => '3513', 'province_id' => '35', 'name' => 'KABUPATEN PROBOLINGGO'],
            ['id' => '3514', 'province_id' => '35', 'name' => 'KABUPATEN PASURUAN'],

        ]);
    }

    public static function import_41()
    {
        echo 'Import address regencies: 41%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3515', 'province_id' => '35', 'name' => 'KABUPATEN SIDOARJO'],
            ['id' => '3516', 'province_id' => '35', 'name' => 'KABUPATEN MOJOKERTO'],
            ['id' => '3517', 'province_id' => '35', 'name' => 'KABUPATEN JOMBANG'],
            ['id' => '3518', 'province_id' => '35', 'name' => 'KABUPATEN NGANJUK'],
            ['id' => '3519', 'province_id' => '35', 'name' => 'KABUPATEN MADIUN'],
            ['id' => '3520', 'province_id' => '35', 'name' => 'KABUPATEN MAGETAN'],

        ]);
    }

    public static function import_42()
    {
        echo 'Import address regencies: 42%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3521', 'province_id' => '35', 'name' => 'KABUPATEN NGAWI'],
            ['id' => '3522', 'province_id' => '35', 'name' => 'KABUPATEN BOJONEGORO'],
            ['id' => '3523', 'province_id' => '35', 'name' => 'KABUPATEN TUBAN'],
            ['id' => '3524', 'province_id' => '35', 'name' => 'KABUPATEN LAMONGAN'],
            ['id' => '3525', 'province_id' => '35', 'name' => 'KABUPATEN GRESIK'],
            ['id' => '3526', 'province_id' => '35', 'name' => 'KABUPATEN BANGKALAN'],

        ]);
    }

    public static function import_43()
    {
        echo 'Import address regencies: 43%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3527', 'province_id' => '35', 'name' => 'KABUPATEN SAMPANG'],
            ['id' => '3528', 'province_id' => '35', 'name' => 'KABUPATEN PAMEKASAN'],
            ['id' => '3529', 'province_id' => '35', 'name' => 'KABUPATEN SUMENEP'],
            ['id' => '3571', 'province_id' => '35', 'name' => 'KOTA KEDIRI'],
            ['id' => '3572', 'province_id' => '35', 'name' => 'KOTA BLITAR'],
            ['id' => '3573', 'province_id' => '35', 'name' => 'KOTA MALANG'],

        ]);
    }

    public static function import_44()
    {
        echo 'Import address regencies: 44%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3574', 'province_id' => '35', 'name' => 'KOTA PROBOLINGGO'],
            ['id' => '3575', 'province_id' => '35', 'name' => 'KOTA PASURUAN'],
            ['id' => '3576', 'province_id' => '35', 'name' => 'KOTA MOJOKERTO'],
            ['id' => '3577', 'province_id' => '35', 'name' => 'KOTA MADIUN'],
            ['id' => '3578', 'province_id' => '35', 'name' => 'KOTA SURABAYA'],
            ['id' => '3579', 'province_id' => '35', 'name' => 'KOTA BATU'],

        ]);
    }

    public static function import_45()
    {
        echo 'Import address regencies: 45%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3601', 'province_id' => '36', 'name' => 'KABUPATEN PANDEGLANG'],
            ['id' => '3602', 'province_id' => '36', 'name' => 'KABUPATEN LEBAK'],
            ['id' => '3603', 'province_id' => '36', 'name' => 'KABUPATEN TANGERANG'],
            ['id' => '3604', 'province_id' => '36', 'name' => 'KABUPATEN SERANG'],
            ['id' => '3671', 'province_id' => '36', 'name' => 'KOTA TANGERANG'],
            ['id' => '3672', 'province_id' => '36', 'name' => 'KOTA CILEGON'],

        ]);
    }

    public static function import_46()
    {
        echo 'Import address regencies: 46%' . PHP_EOL;
        Regencie::insert([
            ['id' => '3673', 'province_id' => '36', 'name' => 'KOTA SERANG'],
            ['id' => '3674', 'province_id' => '36', 'name' => 'KOTA TANGERANG SELATAN'],
            ['id' => '5101', 'province_id' => '51', 'name' => 'KABUPATEN JEMBRANA'],
            ['id' => '5102', 'province_id' => '51', 'name' => 'KABUPATEN TABANAN'],
            ['id' => '5103', 'province_id' => '51', 'name' => 'KABUPATEN BADUNG'],
            ['id' => '5104', 'province_id' => '51', 'name' => 'KABUPATEN GIANYAR'],

        ]);
    }

    public static function import_47()
    {
        echo 'Import address regencies: 47%' . PHP_EOL;
        Regencie::insert([
            ['id' => '5105', 'province_id' => '51', 'name' => 'KABUPATEN KLUNGKUNG'],
            ['id' => '5106', 'province_id' => '51', 'name' => 'KABUPATEN BANGLI'],
            ['id' => '5107', 'province_id' => '51', 'name' => 'KABUPATEN KARANG ASEM'],
            ['id' => '5108', 'province_id' => '51', 'name' => 'KABUPATEN BULELENG'],
            ['id' => '5171', 'province_id' => '51', 'name' => 'KOTA DENPASAR'],
            ['id' => '5201', 'province_id' => '52', 'name' => 'KABUPATEN LOMBOK BARAT'],

        ]);
    }

    public static function import_48()
    {
        echo 'Import address regencies: 48%' . PHP_EOL;
        Regencie::insert([
            ['id' => '5202', 'province_id' => '52', 'name' => 'KABUPATEN LOMBOK TENGAH'],
            ['id' => '5203', 'province_id' => '52', 'name' => 'KABUPATEN LOMBOK TIMUR'],
            ['id' => '5204', 'province_id' => '52', 'name' => 'KABUPATEN SUMBAWA'],
            ['id' => '5205', 'province_id' => '52', 'name' => 'KABUPATEN DOMPU'],
            ['id' => '5206', 'province_id' => '52', 'name' => 'KABUPATEN BIMA'],
            ['id' => '5207', 'province_id' => '52', 'name' => 'KABUPATEN SUMBAWA BARAT'],

        ]);
    }

    public static function import_49()
    {
        echo 'Import address regencies: 49%' . PHP_EOL;
        Regencie::insert([
            ['id' => '5208', 'province_id' => '52', 'name' => 'KABUPATEN LOMBOK UTARA'],
            ['id' => '5271', 'province_id' => '52', 'name' => 'KOTA MATARAM'],
            ['id' => '5272', 'province_id' => '52', 'name' => 'KOTA BIMA'],
            ['id' => '5301', 'province_id' => '53', 'name' => 'KABUPATEN SUMBA BARAT'],
            ['id' => '5302', 'province_id' => '53', 'name' => 'KABUPATEN SUMBA TIMUR'],
            ['id' => '5303', 'province_id' => '53', 'name' => 'KABUPATEN KUPANG'],

        ]);
    }

    public static function import_50()
    {
        echo 'Import address regencies: 50%' . PHP_EOL;
        Regencie::insert([
            ['id' => '5304', 'province_id' => '53', 'name' => 'KABUPATEN TIMOR TENGAH SELATAN'],
            ['id' => '5305', 'province_id' => '53', 'name' => 'KABUPATEN TIMOR TENGAH UTARA'],
            ['id' => '5306', 'province_id' => '53', 'name' => 'KABUPATEN BELU'],
            ['id' => '5307', 'province_id' => '53', 'name' => 'KABUPATEN ALOR'],
            ['id' => '5308', 'province_id' => '53', 'name' => 'KABUPATEN LEMBATA'],
            ['id' => '5309', 'province_id' => '53', 'name' => 'KABUPATEN FLORES TIMUR'],

        ]);
    }

    public static function import_51()
    {
        echo 'Import address regencies: 51%' . PHP_EOL;
        Regencie::insert([
            ['id' => '5310', 'province_id' => '53', 'name' => 'KABUPATEN SIKKA'],
            ['id' => '5311', 'province_id' => '53', 'name' => 'KABUPATEN ENDE'],
            ['id' => '5312', 'province_id' => '53', 'name' => 'KABUPATEN NGADA'],
            ['id' => '5313', 'province_id' => '53', 'name' => 'KABUPATEN MANGGARAI'],
            ['id' => '5314', 'province_id' => '53', 'name' => 'KABUPATEN ROTE NDAO'],
            ['id' => '5315', 'province_id' => '53', 'name' => 'KABUPATEN MANGGARAI BARAT'],

        ]);
    }

    public static function import_52()
    {
        echo 'Import address regencies: 52%' . PHP_EOL;
        Regencie::insert([
            ['id' => '5316', 'province_id' => '53', 'name' => 'KABUPATEN SUMBA TENGAH'],
            ['id' => '5317', 'province_id' => '53', 'name' => 'KABUPATEN SUMBA BARAT DAYA'],
            ['id' => '5318', 'province_id' => '53', 'name' => 'KABUPATEN NAGEKEO'],
            ['id' => '5319', 'province_id' => '53', 'name' => 'KABUPATEN MANGGARAI TIMUR'],
            ['id' => '5320', 'province_id' => '53', 'name' => 'KABUPATEN SABU RAIJUA'],
            ['id' => '5321', 'province_id' => '53', 'name' => 'KABUPATEN MALAKA'],

        ]);
    }

    public static function import_53()
    {
        echo 'Import address regencies: 53%' . PHP_EOL;
        Regencie::insert([
            ['id' => '5371', 'province_id' => '53', 'name' => 'KOTA KUPANG'],
            ['id' => '6101', 'province_id' => '61', 'name' => 'KABUPATEN SAMBAS'],
            ['id' => '6102', 'province_id' => '61', 'name' => 'KABUPATEN BENGKAYANG'],
            ['id' => '6103', 'province_id' => '61', 'name' => 'KABUPATEN LANDAK'],
            ['id' => '6104', 'province_id' => '61', 'name' => 'KABUPATEN MEMPAWAH'],
            ['id' => '6105', 'province_id' => '61', 'name' => 'KABUPATEN SANGGAU'],

        ]);
    }

    public static function import_54()
    {
        echo 'Import address regencies: 54%' . PHP_EOL;
        Regencie::insert([
            ['id' => '6106', 'province_id' => '61', 'name' => 'KABUPATEN KETAPANG'],
            ['id' => '6107', 'province_id' => '61', 'name' => 'KABUPATEN SINTANG'],
            ['id' => '6108', 'province_id' => '61', 'name' => 'KABUPATEN KAPUAS HULU'],
            ['id' => '6109', 'province_id' => '61', 'name' => 'KABUPATEN SEKADAU'],
            ['id' => '6110', 'province_id' => '61', 'name' => 'KABUPATEN MELAWI'],
            ['id' => '6111', 'province_id' => '61', 'name' => 'KABUPATEN KAYONG UTARA'],

        ]);
    }

    public static function import_55()
    {
        echo 'Import address regencies: 55%' . PHP_EOL;
        Regencie::insert([
            ['id' => '6112', 'province_id' => '61', 'name' => 'KABUPATEN KUBU RAYA'],
            ['id' => '6171', 'province_id' => '61', 'name' => 'KOTA PONTIANAK'],
            ['id' => '6172', 'province_id' => '61', 'name' => 'KOTA SINGKAWANG'],
            ['id' => '6201', 'province_id' => '62', 'name' => 'KABUPATEN KOTAWARINGIN BARAT'],
            ['id' => '6202', 'province_id' => '62', 'name' => 'KABUPATEN KOTAWARINGIN TIMUR'],
            ['id' => '6203', 'province_id' => '62', 'name' => 'KABUPATEN KAPUAS'],

        ]);
    }

    public static function import_56()
    {
        echo 'Import address regencies: 56%' . PHP_EOL;
        Regencie::insert([
            ['id' => '6204', 'province_id' => '62', 'name' => 'KABUPATEN BARITO SELATAN'],
            ['id' => '6205', 'province_id' => '62', 'name' => 'KABUPATEN BARITO UTARA'],
            ['id' => '6206', 'province_id' => '62', 'name' => 'KABUPATEN SUKAMARA'],
            ['id' => '6207', 'province_id' => '62', 'name' => 'KABUPATEN LAMANDAU'],
            ['id' => '6208', 'province_id' => '62', 'name' => 'KABUPATEN SERUYAN'],
            ['id' => '6209', 'province_id' => '62', 'name' => 'KABUPATEN KATINGAN'],

        ]);
    }

    public static function import_57()
    {
        echo 'Import address regencies: 57%' . PHP_EOL;
        Regencie::insert([
            ['id' => '6210', 'province_id' => '62', 'name' => 'KABUPATEN PULANG PISAU'],
            ['id' => '6211', 'province_id' => '62', 'name' => 'KABUPATEN GUNUNG MAS'],
            ['id' => '6212', 'province_id' => '62', 'name' => 'KABUPATEN BARITO TIMUR'],
            ['id' => '6213', 'province_id' => '62', 'name' => 'KABUPATEN MURUNG RAYA'],
            ['id' => '6271', 'province_id' => '62', 'name' => 'KOTA PALANGKA RAYA'],
            ['id' => '6301', 'province_id' => '63', 'name' => 'KABUPATEN TANAH LAUT'],

        ]);
    }

    public static function import_58()
    {
        echo 'Import address regencies: 58%' . PHP_EOL;
        Regencie::insert([
            ['id' => '6302', 'province_id' => '63', 'name' => 'KABUPATEN KOTA BARU'],
            ['id' => '6303', 'province_id' => '63', 'name' => 'KABUPATEN BANJAR'],
            ['id' => '6304', 'province_id' => '63', 'name' => 'KABUPATEN BARITO KUALA'],
            ['id' => '6305', 'province_id' => '63', 'name' => 'KABUPATEN TAPIN'],
            ['id' => '6306', 'province_id' => '63', 'name' => 'KABUPATEN HULU SUNGAI SELATAN'],
            ['id' => '6307', 'province_id' => '63', 'name' => 'KABUPATEN HULU SUNGAI TENGAH'],

        ]);
    }

    public static function import_59()
    {
        echo 'Import address regencies: 59%' . PHP_EOL;
        Regencie::insert([
            ['id' => '6308', 'province_id' => '63', 'name' => 'KABUPATEN HULU SUNGAI UTARA'],
            ['id' => '6309', 'province_id' => '63', 'name' => 'KABUPATEN TABALONG'],
            ['id' => '6310', 'province_id' => '63', 'name' => 'KABUPATEN TANAH BUMBU'],
            ['id' => '6311', 'province_id' => '63', 'name' => 'KABUPATEN BALANGAN'],
            ['id' => '6371', 'province_id' => '63', 'name' => 'KOTA BANJARMASIN'],
            ['id' => '6372', 'province_id' => '63', 'name' => 'KOTA BANJAR BARU'],

        ]);
    }

    public static function import_60()
    {
        echo 'Import address regencies: 60%' . PHP_EOL;
        Regencie::insert([
            ['id' => '6401', 'province_id' => '64', 'name' => 'KABUPATEN PASER'],
            ['id' => '6402', 'province_id' => '64', 'name' => 'KABUPATEN KUTAI BARAT'],
            ['id' => '6403', 'province_id' => '64', 'name' => 'KABUPATEN KUTAI KARTANEGARA'],
            ['id' => '6404', 'province_id' => '64', 'name' => 'KABUPATEN KUTAI TIMUR'],
            ['id' => '6405', 'province_id' => '64', 'name' => 'KABUPATEN BERAU'],
            ['id' => '6409', 'province_id' => '64', 'name' => 'KABUPATEN PENAJAM PASER UTARA'],

        ]);
    }

    public static function import_61()
    {
        echo 'Import address regencies: 61%' . PHP_EOL;
        Regencie::insert([
            ['id' => '6411', 'province_id' => '64', 'name' => 'KABUPATEN MAHAKAM HULU'],
            ['id' => '6471', 'province_id' => '64', 'name' => 'KOTA BALIKPAPAN'],
            ['id' => '6472', 'province_id' => '64', 'name' => 'KOTA SAMARINDA'],
            ['id' => '6474', 'province_id' => '64', 'name' => 'KOTA BONTANG'],
            ['id' => '6501', 'province_id' => '65', 'name' => 'KABUPATEN MALINAU'],
            ['id' => '6502', 'province_id' => '65', 'name' => 'KABUPATEN BULUNGAN'],

        ]);
    }

    public static function import_62()
    {
        echo 'Import address regencies: 62%' . PHP_EOL;
        Regencie::insert([
            ['id' => '6503', 'province_id' => '65', 'name' => 'KABUPATEN TANA TIDUNG'],
            ['id' => '6504', 'province_id' => '65', 'name' => 'KABUPATEN NUNUKAN'],
            ['id' => '6571', 'province_id' => '65', 'name' => 'KOTA TARAKAN'],
            ['id' => '7101', 'province_id' => '71', 'name' => 'KABUPATEN BOLAANG MONGONDOW'],
            ['id' => '7102', 'province_id' => '71', 'name' => 'KABUPATEN MINAHASA'],
            ['id' => '7103', 'province_id' => '71', 'name' => 'KABUPATEN KEPULAUAN SANGIHE'],

        ]);
    }

    public static function import_63()
    {
        echo 'Import address regencies: 63%' . PHP_EOL;
        Regencie::insert([
            ['id' => '7104', 'province_id' => '71', 'name' => 'KABUPATEN KEPULAUAN TALAUD'],
            ['id' => '7105', 'province_id' => '71', 'name' => 'KABUPATEN MINAHASA SELATAN'],
            ['id' => '7106', 'province_id' => '71', 'name' => 'KABUPATEN MINAHASA UTARA'],
            ['id' => '7107', 'province_id' => '71', 'name' => 'KABUPATEN BOLAANG MONGONDOW UTARA'],
            ['id' => '7108', 'province_id' => '71', 'name' => 'KABUPATEN SIAU TAGULANDANG BIARO'],
            ['id' => '7109', 'province_id' => '71', 'name' => 'KABUPATEN MINAHASA TENGGARA'],

        ]);
    }

    public static function import_64()
    {
        echo 'Import address regencies: 64%' . PHP_EOL;
        Regencie::insert([
            ['id' => '7110', 'province_id' => '71', 'name' => 'KABUPATEN BOLAANG MONGONDOW SELATAN'],
            ['id' => '7111', 'province_id' => '71', 'name' => 'KABUPATEN BOLAANG MONGONDOW TIMUR'],
            ['id' => '7171', 'province_id' => '71', 'name' => 'KOTA MANADO'],
            ['id' => '7172', 'province_id' => '71', 'name' => 'KOTA BITUNG'],
            ['id' => '7173', 'province_id' => '71', 'name' => 'KOTA TOMOHON'],
            ['id' => '7174', 'province_id' => '71', 'name' => 'KOTA KOTAMOBAGU'],

        ]);
    }

    public static function import_65()
    {
        echo 'Import address regencies: 65%' . PHP_EOL;
        Regencie::insert([
            ['id' => '7201', 'province_id' => '72', 'name' => 'KABUPATEN BANGGAI KEPULAUAN'],
            ['id' => '7202', 'province_id' => '72', 'name' => 'KABUPATEN BANGGAI'],
            ['id' => '7203', 'province_id' => '72', 'name' => 'KABUPATEN MOROWALI'],
            ['id' => '7204', 'province_id' => '72', 'name' => 'KABUPATEN POSO'],
            ['id' => '7205', 'province_id' => '72', 'name' => 'KABUPATEN DONGGALA'],
            ['id' => '7206', 'province_id' => '72', 'name' => 'KABUPATEN TOLI-TOLI'],

        ]);
    }

    public static function import_66()
    {
        echo 'Import address regencies: 66%' . PHP_EOL;
        Regencie::insert([
            ['id' => '7207', 'province_id' => '72', 'name' => 'KABUPATEN BUOL'],
            ['id' => '7208', 'province_id' => '72', 'name' => 'KABUPATEN PARIGI MOUTONG'],
            ['id' => '7209', 'province_id' => '72', 'name' => 'KABUPATEN TOJO UNA-UNA'],
            ['id' => '7210', 'province_id' => '72', 'name' => 'KABUPATEN SIGI'],
            ['id' => '7211', 'province_id' => '72', 'name' => 'KABUPATEN BANGGAI LAUT'],
            ['id' => '7212', 'province_id' => '72', 'name' => 'KABUPATEN MOROWALI UTARA'],

        ]);
    }

    public static function import_67()
    {
        echo 'Import address regencies: 67%' . PHP_EOL;
        Regencie::insert([
            ['id' => '7271', 'province_id' => '72', 'name' => 'KOTA PALU'],
            ['id' => '7301', 'province_id' => '73', 'name' => 'KABUPATEN KEPULAUAN SELAYAR'],
            ['id' => '7302', 'province_id' => '73', 'name' => 'KABUPATEN BULUKUMBA'],
            ['id' => '7303', 'province_id' => '73', 'name' => 'KABUPATEN BANTAENG'],
            ['id' => '7304', 'province_id' => '73', 'name' => 'KABUPATEN JENEPONTO'],
            ['id' => '7305', 'province_id' => '73', 'name' => 'KABUPATEN TAKALAR'],

        ]);
    }

    public static function import_68()
    {
        echo 'Import address regencies: 68%' . PHP_EOL;
        Regencie::insert([
            ['id' => '7306', 'province_id' => '73', 'name' => 'KABUPATEN GOWA'],
            ['id' => '7307', 'province_id' => '73', 'name' => 'KABUPATEN SINJAI'],
            ['id' => '7308', 'province_id' => '73', 'name' => 'KABUPATEN MAROS'],
            ['id' => '7309', 'province_id' => '73', 'name' => 'KABUPATEN PANGKAJENE DAN KEPULAUAN'],
            ['id' => '7310', 'province_id' => '73', 'name' => 'KABUPATEN BARRU'],
            ['id' => '7311', 'province_id' => '73', 'name' => 'KABUPATEN BONE'],

        ]);
    }

    public static function import_69()
    {
        echo 'Import address regencies: 69%' . PHP_EOL;
        Regencie::insert([
            ['id' => '7312', 'province_id' => '73', 'name' => 'KABUPATEN SOPPENG'],
            ['id' => '7313', 'province_id' => '73', 'name' => 'KABUPATEN WAJO'],
            ['id' => '7314', 'province_id' => '73', 'name' => 'KABUPATEN SIDENRENG RAPPANG'],
            ['id' => '7315', 'province_id' => '73', 'name' => 'KABUPATEN PINRANG'],
            ['id' => '7316', 'province_id' => '73', 'name' => 'KABUPATEN ENREKANG'],
            ['id' => '7317', 'province_id' => '73', 'name' => 'KABUPATEN LUWU'],

        ]);
    }

    public static function import_70()
    {
        echo 'Import address regencies: 70%' . PHP_EOL;
        Regencie::insert([
            ['id' => '7318', 'province_id' => '73', 'name' => 'KABUPATEN TANA TORAJA'],
            ['id' => '7322', 'province_id' => '73', 'name' => 'KABUPATEN LUWU UTARA'],
            ['id' => '7325', 'province_id' => '73', 'name' => 'KABUPATEN LUWU TIMUR'],
            ['id' => '7326', 'province_id' => '73', 'name' => 'KABUPATEN TORAJA UTARA'],
            ['id' => '7371', 'province_id' => '73', 'name' => 'KOTA MAKASSAR'],
            ['id' => '7372', 'province_id' => '73', 'name' => 'KOTA PAREPARE'],

        ]);
    }

    public static function import_71()
    {
        echo 'Import address regencies: 71%' . PHP_EOL;
        Regencie::insert([
            ['id' => '7373', 'province_id' => '73', 'name' => 'KOTA PALOPO'],
            ['id' => '7401', 'province_id' => '74', 'name' => 'KABUPATEN BUTON'],
            ['id' => '7402', 'province_id' => '74', 'name' => 'KABUPATEN MUNA'],
            ['id' => '7403', 'province_id' => '74', 'name' => 'KABUPATEN KONAWE'],
            ['id' => '7404', 'province_id' => '74', 'name' => 'KABUPATEN KOLAKA'],
            ['id' => '7405', 'province_id' => '74', 'name' => 'KABUPATEN KONAWE SELATAN'],

        ]);
    }

    public static function import_72()
    {
        echo 'Import address regencies: 72%' . PHP_EOL;
        Regencie::insert([
            ['id' => '7406', 'province_id' => '74', 'name' => 'KABUPATEN BOMBANA'],
            ['id' => '7407', 'province_id' => '74', 'name' => 'KABUPATEN WAKATOBI'],
            ['id' => '7408', 'province_id' => '74', 'name' => 'KABUPATEN KOLAKA UTARA'],
            ['id' => '7409', 'province_id' => '74', 'name' => 'KABUPATEN BUTON UTARA'],
            ['id' => '7410', 'province_id' => '74', 'name' => 'KABUPATEN KONAWE UTARA'],
            ['id' => '7411', 'province_id' => '74', 'name' => 'KABUPATEN KOLAKA TIMUR'],

        ]);
    }

    public static function import_73()
    {
        echo 'Import address regencies: 73%' . PHP_EOL;
        Regencie::insert([
            ['id' => '7412', 'province_id' => '74', 'name' => 'KABUPATEN KONAWE KEPULAUAN'],
            ['id' => '7413', 'province_id' => '74', 'name' => 'KABUPATEN MUNA BARAT'],
            ['id' => '7414', 'province_id' => '74', 'name' => 'KABUPATEN BUTON TENGAH'],
            ['id' => '7415', 'province_id' => '74', 'name' => 'KABUPATEN BUTON SELATAN'],
            ['id' => '7471', 'province_id' => '74', 'name' => 'KOTA KENDARI'],
            ['id' => '7472', 'province_id' => '74', 'name' => 'KOTA BAUBAU'],

        ]);
    }

    public static function import_74()
    {
        echo 'Import address regencies: 74%' . PHP_EOL;
        Regencie::insert([
            ['id' => '7501', 'province_id' => '75', 'name' => 'KABUPATEN BOALEMO'],
            ['id' => '7502', 'province_id' => '75', 'name' => 'KABUPATEN GORONTALO'],
            ['id' => '7503', 'province_id' => '75', 'name' => 'KABUPATEN POHUWATO'],
            ['id' => '7504', 'province_id' => '75', 'name' => 'KABUPATEN BONE BOLANGO'],
            ['id' => '7505', 'province_id' => '75', 'name' => 'KABUPATEN GORONTALO UTARA'],
            ['id' => '7571', 'province_id' => '75', 'name' => 'KOTA GORONTALO'],

        ]);
    }

    public static function import_75()
    {
        echo 'Import address regencies: 75%' . PHP_EOL;
        Regencie::insert([
            ['id' => '7601', 'province_id' => '76', 'name' => 'KABUPATEN MAJENE'],
            ['id' => '7602', 'province_id' => '76', 'name' => 'KABUPATEN POLEWALI MANDAR'],
            ['id' => '7603', 'province_id' => '76', 'name' => 'KABUPATEN MAMASA'],
            ['id' => '7604', 'province_id' => '76', 'name' => 'KABUPATEN MAMUJU'],
            ['id' => '7605', 'province_id' => '76', 'name' => 'KABUPATEN MAMUJU UTARA'],
            ['id' => '7606', 'province_id' => '76', 'name' => 'KABUPATEN MAMUJU TENGAH'],

        ]);
    }

    public static function import_76()
    {
        echo 'Import address regencies: 76%' . PHP_EOL;
        Regencie::insert([
            ['id' => '8101', 'province_id' => '81', 'name' => 'KABUPATEN MALUKU TENGGARA BARAT'],
            ['id' => '8102', 'province_id' => '81', 'name' => 'KABUPATEN MALUKU TENGGARA'],
            ['id' => '8103', 'province_id' => '81', 'name' => 'KABUPATEN MALUKU TENGAH'],
            ['id' => '8104', 'province_id' => '81', 'name' => 'KABUPATEN BURU'],
            ['id' => '8105', 'province_id' => '81', 'name' => 'KABUPATEN KEPULAUAN ARU'],
            ['id' => '8106', 'province_id' => '81', 'name' => 'KABUPATEN SERAM BAGIAN BARAT'],

        ]);
    }

    public static function import_77()
    {
        echo 'Import address regencies: 77%' . PHP_EOL;
        Regencie::insert([
            ['id' => '8107', 'province_id' => '81', 'name' => 'KABUPATEN SERAM BAGIAN TIMUR'],
            ['id' => '8108', 'province_id' => '81', 'name' => 'KABUPATEN MALUKU BARAT DAYA'],
            ['id' => '8109', 'province_id' => '81', 'name' => 'KABUPATEN BURU SELATAN'],
            ['id' => '8171', 'province_id' => '81', 'name' => 'KOTA AMBON'],
            ['id' => '8172', 'province_id' => '81', 'name' => 'KOTA TUAL'],
            ['id' => '8201', 'province_id' => '82', 'name' => 'KABUPATEN HALMAHERA BARAT'],

        ]);
    }

    public static function import_78()
    {
        echo 'Import address regencies: 78%' . PHP_EOL;
        Regencie::insert([
            ['id' => '8202', 'province_id' => '82', 'name' => 'KABUPATEN HALMAHERA TENGAH'],
            ['id' => '8203', 'province_id' => '82', 'name' => 'KABUPATEN KEPULAUAN SULA'],
            ['id' => '8204', 'province_id' => '82', 'name' => 'KABUPATEN HALMAHERA SELATAN'],
            ['id' => '8205', 'province_id' => '82', 'name' => 'KABUPATEN HALMAHERA UTARA'],
            ['id' => '8206', 'province_id' => '82', 'name' => 'KABUPATEN HALMAHERA TIMUR'],
            ['id' => '8207', 'province_id' => '82', 'name' => 'KABUPATEN PULAU MOROTAI'],

        ]);
    }

    public static function import_79()
    {
        echo 'Import address regencies: 79%' . PHP_EOL;
        Regencie::insert([
            ['id' => '8208', 'province_id' => '82', 'name' => 'KABUPATEN PULAU TALIABU'],
            ['id' => '8271', 'province_id' => '82', 'name' => 'KOTA TERNATE'],
            ['id' => '8272', 'province_id' => '82', 'name' => 'KOTA TIDORE KEPULAUAN'],
            ['id' => '9101', 'province_id' => '91', 'name' => 'KABUPATEN FAKFAK'],
            ['id' => '9102', 'province_id' => '91', 'name' => 'KABUPATEN KAIMANA'],
            ['id' => '9103', 'province_id' => '91', 'name' => 'KABUPATEN TELUK WONDAMA'],

        ]);
    }

    public static function import_80()
    {
        echo 'Import address regencies: 80%' . PHP_EOL;
        Regencie::insert([
            ['id' => '9104', 'province_id' => '91', 'name' => 'KABUPATEN TELUK BINTUNI'],
            ['id' => '9105', 'province_id' => '91', 'name' => 'KABUPATEN MANOKWARI'],
            ['id' => '9106', 'province_id' => '91', 'name' => 'KABUPATEN SORONG SELATAN'],
            ['id' => '9107', 'province_id' => '91', 'name' => 'KABUPATEN SORONG'],
            ['id' => '9108', 'province_id' => '91', 'name' => 'KABUPATEN RAJA AMPAT'],
            ['id' => '9109', 'province_id' => '91', 'name' => 'KABUPATEN TAMBRAUW'],

        ]);
    }

    public static function import_81()
    {
        echo 'Import address regencies: 81%' . PHP_EOL;
        Regencie::insert([
            ['id' => '9110', 'province_id' => '91', 'name' => 'KABUPATEN MAYBRAT'],
            ['id' => '9111', 'province_id' => '91', 'name' => 'KABUPATEN MANOKWARI SELATAN'],
            ['id' => '9112', 'province_id' => '91', 'name' => 'KABUPATEN PEGUNUNGAN ARFAK'],
            ['id' => '9171', 'province_id' => '91', 'name' => 'KOTA SORONG'],
            ['id' => '9401', 'province_id' => '94', 'name' => 'KABUPATEN MERAUKE'],
            ['id' => '9402', 'province_id' => '94', 'name' => 'KABUPATEN JAYAWIJAYA'],

        ]);
    }

    public static function import_82()
    {
        echo 'Import address regencies: 82%' . PHP_EOL;
        Regencie::insert([
            ['id' => '9403', 'province_id' => '94', 'name' => 'KABUPATEN JAYAPURA'],
            ['id' => '9404', 'province_id' => '94', 'name' => 'KABUPATEN NABIRE'],
            ['id' => '9408', 'province_id' => '94', 'name' => 'KABUPATEN KEPULAUAN YAPEN'],
            ['id' => '9409', 'province_id' => '94', 'name' => 'KABUPATEN BIAK NUMFOR'],
            ['id' => '9410', 'province_id' => '94', 'name' => 'KABUPATEN PANIAI'],
            ['id' => '9411', 'province_id' => '94', 'name' => 'KABUPATEN PUNCAK JAYA'],

        ]);
    }

    public static function import_83()
    {
        echo 'Import address regencies: 83%' . PHP_EOL;
        Regencie::insert([
            ['id' => '9412', 'province_id' => '94', 'name' => 'KABUPATEN MIMIKA'],
            ['id' => '9413', 'province_id' => '94', 'name' => 'KABUPATEN BOVEN DIGOEL'],
            ['id' => '9414', 'province_id' => '94', 'name' => 'KABUPATEN MAPPI'],
            ['id' => '9415', 'province_id' => '94', 'name' => 'KABUPATEN ASMAT'],
            ['id' => '9416', 'province_id' => '94', 'name' => 'KABUPATEN YAHUKIMO'],
            ['id' => '9417', 'province_id' => '94', 'name' => 'KABUPATEN PEGUNUNGAN BINTANG'],

        ]);
    }

    public static function import_84()
    {
        echo 'Import address regencies: 84%' . PHP_EOL;
        Regencie::insert([
            ['id' => '9418', 'province_id' => '94', 'name' => 'KABUPATEN TOLIKARA'],
            ['id' => '9419', 'province_id' => '94', 'name' => 'KABUPATEN SARMI'],
            ['id' => '9420', 'province_id' => '94', 'name' => 'KABUPATEN KEEROM'],
            ['id' => '9426', 'province_id' => '94', 'name' => 'KABUPATEN WAROPEN'],
            ['id' => '9427', 'province_id' => '94', 'name' => 'KABUPATEN SUPIORI'],
            ['id' => '9428', 'province_id' => '94', 'name' => 'KABUPATEN MAMBERAMO RAYA'],

        ]);
    }

    public static function import_85()
    {
        echo 'Import address regencies: 85%' . PHP_EOL;
        Regencie::insert([
            ['id' => '9429', 'province_id' => '94', 'name' => 'KABUPATEN NDUGA'],
            ['id' => '9430', 'province_id' => '94', 'name' => 'KABUPATEN LANNY JAYA'],
            ['id' => '9431', 'province_id' => '94', 'name' => 'KABUPATEN MAMBERAMO TENGAH'],
            ['id' => '9432', 'province_id' => '94', 'name' => 'KABUPATEN YALIMO'],
            ['id' => '9433', 'province_id' => '94', 'name' => 'KABUPATEN PUNCAK'],
            ['id' => '9434', 'province_id' => '94', 'name' => 'KABUPATEN DOGIYAI'],

        ]);
    }

    public static function import_86()
    {
        echo 'Import address regencies: 100%' . PHP_EOL;
        Regencie::insert([
            ['id' => '9435', 'province_id' => '94', 'name' => 'KABUPATEN INTAN JAYA'],
            ['id' => '9436', 'province_id' => '94', 'name' => 'KABUPATEN DEIYAI'],
            ['id' => '9471', 'province_id' => '94', 'name' => 'KOTA JAYAPURA'],

        ]);
    }
}
