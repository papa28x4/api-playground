<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'phone_code' => 93,
                'country_code' => 'AF',
                'country_name' => 'Afghanistan',
            ),
            1 => 
            array (
                'id' => 2,
                'phone_code' => 358,
                'country_code' => 'AX',
                'country_name' => 'Aland Islands',
            ),
            2 => 
            array (
                'id' => 3,
                'phone_code' => 355,
                'country_code' => 'AL',
                'country_name' => 'Albania',
            ),
            3 => 
            array (
                'id' => 4,
                'phone_code' => 213,
                'country_code' => 'DZ',
                'country_name' => 'Algeria',
            ),
            4 => 
            array (
                'id' => 5,
                'phone_code' => 1684,
                'country_code' => 'AS',
                'country_name' => 'American Samoa',
            ),
            5 => 
            array (
                'id' => 6,
                'phone_code' => 376,
                'country_code' => 'AD',
                'country_name' => 'Andorra',
            ),
            6 => 
            array (
                'id' => 7,
                'phone_code' => 244,
                'country_code' => 'AO',
                'country_name' => 'Angola',
            ),
            7 => 
            array (
                'id' => 8,
                'phone_code' => 1264,
                'country_code' => 'AI',
                'country_name' => 'Anguilla',
            ),
            8 => 
            array (
                'id' => 9,
                'phone_code' => 672,
                'country_code' => 'AQ',
                'country_name' => 'Antarctica',
            ),
            9 => 
            array (
                'id' => 10,
                'phone_code' => 1268,
                'country_code' => 'AG',
                'country_name' => 'Antigua and Barbuda',
            ),
            10 => 
            array (
                'id' => 11,
                'phone_code' => 54,
                'country_code' => 'AR',
                'country_name' => 'Argentina',
            ),
            11 => 
            array (
                'id' => 12,
                'phone_code' => 374,
                'country_code' => 'AM',
                'country_name' => 'Armenia',
            ),
            12 => 
            array (
                'id' => 13,
                'phone_code' => 297,
                'country_code' => 'AW',
                'country_name' => 'Aruba',
            ),
            13 => 
            array (
                'id' => 14,
                'phone_code' => 61,
                'country_code' => 'AU',
                'country_name' => 'Australia',
            ),
            14 => 
            array (
                'id' => 15,
                'phone_code' => 43,
                'country_code' => 'AT',
                'country_name' => 'Austria',
            ),
            15 => 
            array (
                'id' => 16,
                'phone_code' => 994,
                'country_code' => 'AZ',
                'country_name' => 'Azerbaijan',
            ),
            16 => 
            array (
                'id' => 17,
                'phone_code' => 1242,
                'country_code' => 'BS',
                'country_name' => 'Bahamas',
            ),
            17 => 
            array (
                'id' => 18,
                'phone_code' => 973,
                'country_code' => 'BH',
                'country_name' => 'Bahrain',
            ),
            18 => 
            array (
                'id' => 19,
                'phone_code' => 880,
                'country_code' => 'BD',
                'country_name' => 'Bangladesh',
            ),
            19 => 
            array (
                'id' => 20,
                'phone_code' => 1246,
                'country_code' => 'BB',
                'country_name' => 'Barbados',
            ),
            20 => 
            array (
                'id' => 21,
                'phone_code' => 375,
                'country_code' => 'BY',
                'country_name' => 'Belarus',
            ),
            21 => 
            array (
                'id' => 22,
                'phone_code' => 32,
                'country_code' => 'BE',
                'country_name' => 'Belgium',
            ),
            22 => 
            array (
                'id' => 23,
                'phone_code' => 501,
                'country_code' => 'BZ',
                'country_name' => 'Belize',
            ),
            23 => 
            array (
                'id' => 24,
                'phone_code' => 229,
                'country_code' => 'BJ',
                'country_name' => 'Benin',
            ),
            24 => 
            array (
                'id' => 25,
                'phone_code' => 1441,
                'country_code' => 'BM',
                'country_name' => 'Bermuda',
            ),
            25 => 
            array (
                'id' => 26,
                'phone_code' => 975,
                'country_code' => 'BT',
                'country_name' => 'Bhutan',
            ),
            26 => 
            array (
                'id' => 27,
                'phone_code' => 591,
                'country_code' => 'BO',
                'country_name' => 'Bolivia',
            ),
            27 => 
            array (
                'id' => 28,
                'phone_code' => 599,
                'country_code' => 'BQ',
                'country_name' => 'Bonaire, Sint Eustatius and Saba',
            ),
            28 => 
            array (
                'id' => 29,
                'phone_code' => 387,
                'country_code' => 'BA',
                'country_name' => 'Bosnia and Herzegovina',
            ),
            29 => 
            array (
                'id' => 30,
                'phone_code' => 267,
                'country_code' => 'BW',
                'country_name' => 'Botswana',
            ),
            30 => 
            array (
                'id' => 31,
                'phone_code' => 55,
                'country_code' => 'BV',
                'country_name' => 'Bouvet Island',
            ),
            31 => 
            array (
                'id' => 32,
                'phone_code' => 55,
                'country_code' => 'BR',
                'country_name' => 'Brazil',
            ),
            32 => 
            array (
                'id' => 33,
                'phone_code' => 246,
                'country_code' => 'IO',
                'country_name' => 'British Indian Ocean Territory',
            ),
            33 => 
            array (
                'id' => 34,
                'phone_code' => 673,
                'country_code' => 'BN',
                'country_name' => 'Brunei Darussalam',
            ),
            34 => 
            array (
                'id' => 35,
                'phone_code' => 359,
                'country_code' => 'BG',
                'country_name' => 'Bulgaria',
            ),
            35 => 
            array (
                'id' => 36,
                'phone_code' => 226,
                'country_code' => 'BF',
                'country_name' => 'Burkina Faso',
            ),
            36 => 
            array (
                'id' => 37,
                'phone_code' => 257,
                'country_code' => 'BI',
                'country_name' => 'Burundi',
            ),
            37 => 
            array (
                'id' => 38,
                'phone_code' => 855,
                'country_code' => 'KH',
                'country_name' => 'Cambodia',
            ),
            38 => 
            array (
                'id' => 39,
                'phone_code' => 237,
                'country_code' => 'CM',
                'country_name' => 'Cameroon',
            ),
            39 => 
            array (
                'id' => 40,
                'phone_code' => 1,
                'country_code' => 'CA',
                'country_name' => 'Canada',
            ),
            40 => 
            array (
                'id' => 41,
                'phone_code' => 238,
                'country_code' => 'CV',
                'country_name' => 'Cape Verde',
            ),
            41 => 
            array (
                'id' => 42,
                'phone_code' => 1345,
                'country_code' => 'KY',
                'country_name' => 'Cayman Islands',
            ),
            42 => 
            array (
                'id' => 43,
                'phone_code' => 236,
                'country_code' => 'CF',
                'country_name' => 'Central African Republic',
            ),
            43 => 
            array (
                'id' => 44,
                'phone_code' => 235,
                'country_code' => 'TD',
                'country_name' => 'Chad',
            ),
            44 => 
            array (
                'id' => 45,
                'phone_code' => 56,
                'country_code' => 'CL',
                'country_name' => 'Chile',
            ),
            45 => 
            array (
                'id' => 46,
                'phone_code' => 86,
                'country_code' => 'CN',
                'country_name' => 'China',
            ),
            46 => 
            array (
                'id' => 47,
                'phone_code' => 61,
                'country_code' => 'CX',
                'country_name' => 'Christmas Island',
            ),
            47 => 
            array (
                'id' => 48,
                'phone_code' => 672,
                'country_code' => 'CC',
            'country_name' => 'Cocos (Keeling) Islands',
            ),
            48 => 
            array (
                'id' => 49,
                'phone_code' => 57,
                'country_code' => 'CO',
                'country_name' => 'Colombia',
            ),
            49 => 
            array (
                'id' => 50,
                'phone_code' => 269,
                'country_code' => 'KM',
                'country_name' => 'Comoros',
            ),
            50 => 
            array (
                'id' => 51,
                'phone_code' => 242,
                'country_code' => 'CG',
                'country_name' => 'Congo',
            ),
            51 => 
            array (
                'id' => 52,
                'phone_code' => 242,
                'country_code' => 'CD',
                'country_name' => 'Congo, Democratic Republic of the Congo',
            ),
            52 => 
            array (
                'id' => 53,
                'phone_code' => 682,
                'country_code' => 'CK',
                'country_name' => 'Cook Islands',
            ),
            53 => 
            array (
                'id' => 54,
                'phone_code' => 506,
                'country_code' => 'CR',
                'country_name' => 'Costa Rica',
            ),
            54 => 
            array (
                'id' => 55,
                'phone_code' => 225,
                'country_code' => 'CI',
                'country_name' => 'Cote D\'Ivoire',
            ),
            55 => 
            array (
                'id' => 56,
                'phone_code' => 385,
                'country_code' => 'HR',
                'country_name' => 'Croatia',
            ),
            56 => 
            array (
                'id' => 57,
                'phone_code' => 53,
                'country_code' => 'CU',
                'country_name' => 'Cuba',
            ),
            57 => 
            array (
                'id' => 58,
                'phone_code' => 599,
                'country_code' => 'CW',
                'country_name' => 'Curacao',
            ),
            58 => 
            array (
                'id' => 59,
                'phone_code' => 357,
                'country_code' => 'CY',
                'country_name' => 'Cyprus',
            ),
            59 => 
            array (
                'id' => 60,
                'phone_code' => 420,
                'country_code' => 'CZ',
                'country_name' => 'Czech Republic',
            ),
            60 => 
            array (
                'id' => 61,
                'phone_code' => 45,
                'country_code' => 'DK',
                'country_name' => 'Denmark',
            ),
            61 => 
            array (
                'id' => 62,
                'phone_code' => 253,
                'country_code' => 'DJ',
                'country_name' => 'Djibouti',
            ),
            62 => 
            array (
                'id' => 63,
                'phone_code' => 1767,
                'country_code' => 'DM',
                'country_name' => 'Dominica',
            ),
            63 => 
            array (
                'id' => 64,
                'phone_code' => 1809,
                'country_code' => 'DO',
                'country_name' => 'Dominican Republic',
            ),
            64 => 
            array (
                'id' => 65,
                'phone_code' => 593,
                'country_code' => 'EC',
                'country_name' => 'Ecuador',
            ),
            65 => 
            array (
                'id' => 66,
                'phone_code' => 20,
                'country_code' => 'EG',
                'country_name' => 'Egypt',
            ),
            66 => 
            array (
                'id' => 67,
                'phone_code' => 503,
                'country_code' => 'SV',
                'country_name' => 'El Salvador',
            ),
            67 => 
            array (
                'id' => 68,
                'phone_code' => 240,
                'country_code' => 'GQ',
                'country_name' => 'Equatorial Guinea',
            ),
            68 => 
            array (
                'id' => 69,
                'phone_code' => 291,
                'country_code' => 'ER',
                'country_name' => 'Eritrea',
            ),
            69 => 
            array (
                'id' => 70,
                'phone_code' => 372,
                'country_code' => 'EE',
                'country_name' => 'Estonia',
            ),
            70 => 
            array (
                'id' => 71,
                'phone_code' => 251,
                'country_code' => 'ET',
                'country_name' => 'Ethiopia',
            ),
            71 => 
            array (
                'id' => 72,
                'phone_code' => 500,
                'country_code' => 'FK',
            'country_name' => 'Falkland Islands (Malvinas)',
            ),
            72 => 
            array (
                'id' => 73,
                'phone_code' => 298,
                'country_code' => 'FO',
                'country_name' => 'Faroe Islands',
            ),
            73 => 
            array (
                'id' => 74,
                'phone_code' => 679,
                'country_code' => 'FJ',
                'country_name' => 'Fiji',
            ),
            74 => 
            array (
                'id' => 75,
                'phone_code' => 358,
                'country_code' => 'FI',
                'country_name' => 'Finland',
            ),
            75 => 
            array (
                'id' => 76,
                'phone_code' => 33,
                'country_code' => 'FR',
                'country_name' => 'France',
            ),
            76 => 
            array (
                'id' => 77,
                'phone_code' => 594,
                'country_code' => 'GF',
                'country_name' => 'French Guiana',
            ),
            77 => 
            array (
                'id' => 78,
                'phone_code' => 689,
                'country_code' => 'PF',
                'country_name' => 'French Polynesia',
            ),
            78 => 
            array (
                'id' => 79,
                'phone_code' => 262,
                'country_code' => 'TF',
                'country_name' => 'French Southern Territories',
            ),
            79 => 
            array (
                'id' => 80,
                'phone_code' => 241,
                'country_code' => 'GA',
                'country_name' => 'Gabon',
            ),
            80 => 
            array (
                'id' => 81,
                'phone_code' => 220,
                'country_code' => 'GM',
                'country_name' => 'Gambia',
            ),
            81 => 
            array (
                'id' => 82,
                'phone_code' => 995,
                'country_code' => 'GE',
                'country_name' => 'Georgia',
            ),
            82 => 
            array (
                'id' => 83,
                'phone_code' => 49,
                'country_code' => 'DE',
                'country_name' => 'Germany',
            ),
            83 => 
            array (
                'id' => 84,
                'phone_code' => 233,
                'country_code' => 'GH',
                'country_name' => 'Ghana',
            ),
            84 => 
            array (
                'id' => 85,
                'phone_code' => 350,
                'country_code' => 'GI',
                'country_name' => 'Gibraltar',
            ),
            85 => 
            array (
                'id' => 86,
                'phone_code' => 30,
                'country_code' => 'GR',
                'country_name' => 'Greece',
            ),
            86 => 
            array (
                'id' => 87,
                'phone_code' => 299,
                'country_code' => 'GL',
                'country_name' => 'Greenland',
            ),
            87 => 
            array (
                'id' => 88,
                'phone_code' => 1473,
                'country_code' => 'GD',
                'country_name' => 'Grenada',
            ),
            88 => 
            array (
                'id' => 89,
                'phone_code' => 590,
                'country_code' => 'GP',
                'country_name' => 'Guadeloupe',
            ),
            89 => 
            array (
                'id' => 90,
                'phone_code' => 1671,
                'country_code' => 'GU',
                'country_name' => 'Guam',
            ),
            90 => 
            array (
                'id' => 91,
                'phone_code' => 502,
                'country_code' => 'GT',
                'country_name' => 'Guatemala',
            ),
            91 => 
            array (
                'id' => 92,
                'phone_code' => 44,
                'country_code' => 'GG',
                'country_name' => 'Guernsey',
            ),
            92 => 
            array (
                'id' => 93,
                'phone_code' => 224,
                'country_code' => 'GN',
                'country_name' => 'Guinea',
            ),
            93 => 
            array (
                'id' => 94,
                'phone_code' => 245,
                'country_code' => 'GW',
                'country_name' => 'Guinea-Bissau',
            ),
            94 => 
            array (
                'id' => 95,
                'phone_code' => 592,
                'country_code' => 'GY',
                'country_name' => 'Guyana',
            ),
            95 => 
            array (
                'id' => 96,
                'phone_code' => 509,
                'country_code' => 'HT',
                'country_name' => 'Haiti',
            ),
            96 => 
            array (
                'id' => 97,
                'phone_code' => 0,
                'country_code' => 'HM',
                'country_name' => 'Heard Island and Mcdonald Islands',
            ),
            97 => 
            array (
                'id' => 98,
                'phone_code' => 39,
                'country_code' => 'VA',
            'country_name' => 'Holy See (Vatican City State)',
            ),
            98 => 
            array (
                'id' => 99,
                'phone_code' => 504,
                'country_code' => 'HN',
                'country_name' => 'Honduras',
            ),
            99 => 
            array (
                'id' => 100,
                'phone_code' => 852,
                'country_code' => 'HK',
                'country_name' => 'Hong Kong',
            ),
            100 => 
            array (
                'id' => 101,
                'phone_code' => 36,
                'country_code' => 'HU',
                'country_name' => 'Hungary',
            ),
            101 => 
            array (
                'id' => 102,
                'phone_code' => 354,
                'country_code' => 'IS',
                'country_name' => 'Iceland',
            ),
            102 => 
            array (
                'id' => 103,
                'phone_code' => 91,
                'country_code' => 'IN',
                'country_name' => 'India',
            ),
            103 => 
            array (
                'id' => 104,
                'phone_code' => 62,
                'country_code' => 'ID',
                'country_name' => 'Indonesia',
            ),
            104 => 
            array (
                'id' => 105,
                'phone_code' => 98,
                'country_code' => 'IR',
                'country_name' => 'Iran, Islamic Republic of',
            ),
            105 => 
            array (
                'id' => 106,
                'phone_code' => 964,
                'country_code' => 'IQ',
                'country_name' => 'Iraq',
            ),
            106 => 
            array (
                'id' => 107,
                'phone_code' => 353,
                'country_code' => 'IE',
                'country_name' => 'Ireland',
            ),
            107 => 
            array (
                'id' => 108,
                'phone_code' => 44,
                'country_code' => 'IM',
                'country_name' => 'Isle of Man',
            ),
            108 => 
            array (
                'id' => 109,
                'phone_code' => 972,
                'country_code' => 'IL',
                'country_name' => 'Israel',
            ),
            109 => 
            array (
                'id' => 110,
                'phone_code' => 39,
                'country_code' => 'IT',
                'country_name' => 'Italy',
            ),
            110 => 
            array (
                'id' => 111,
                'phone_code' => 1876,
                'country_code' => 'JM',
                'country_name' => 'Jamaica',
            ),
            111 => 
            array (
                'id' => 112,
                'phone_code' => 81,
                'country_code' => 'JP',
                'country_name' => 'Japan',
            ),
            112 => 
            array (
                'id' => 113,
                'phone_code' => 44,
                'country_code' => 'JE',
                'country_name' => 'Jersey',
            ),
            113 => 
            array (
                'id' => 114,
                'phone_code' => 962,
                'country_code' => 'JO',
                'country_name' => 'Jordan',
            ),
            114 => 
            array (
                'id' => 115,
                'phone_code' => 7,
                'country_code' => 'KZ',
                'country_name' => 'Kazakhstan',
            ),
            115 => 
            array (
                'id' => 116,
                'phone_code' => 254,
                'country_code' => 'KE',
                'country_name' => 'Kenya',
            ),
            116 => 
            array (
                'id' => 117,
                'phone_code' => 686,
                'country_code' => 'KI',
                'country_name' => 'Kiribati',
            ),
            117 => 
            array (
                'id' => 118,
                'phone_code' => 850,
                'country_code' => 'KP',
                'country_name' => 'Korea, Democratic People\'s Republic of',
            ),
            118 => 
            array (
                'id' => 119,
                'phone_code' => 82,
                'country_code' => 'KR',
                'country_name' => 'Korea, Republic of',
            ),
            119 => 
            array (
                'id' => 120,
                'phone_code' => 381,
                'country_code' => 'XK',
                'country_name' => 'Kosovo',
            ),
            120 => 
            array (
                'id' => 121,
                'phone_code' => 965,
                'country_code' => 'KW',
                'country_name' => 'Kuwait',
            ),
            121 => 
            array (
                'id' => 122,
                'phone_code' => 996,
                'country_code' => 'KG',
                'country_name' => 'Kyrgyzstan',
            ),
            122 => 
            array (
                'id' => 123,
                'phone_code' => 856,
                'country_code' => 'LA',
                'country_name' => 'Lao People\'s Democratic Republic',
            ),
            123 => 
            array (
                'id' => 124,
                'phone_code' => 371,
                'country_code' => 'LV',
                'country_name' => 'Latvia',
            ),
            124 => 
            array (
                'id' => 125,
                'phone_code' => 961,
                'country_code' => 'LB',
                'country_name' => 'Lebanon',
            ),
            125 => 
            array (
                'id' => 126,
                'phone_code' => 266,
                'country_code' => 'LS',
                'country_name' => 'Lesotho',
            ),
            126 => 
            array (
                'id' => 127,
                'phone_code' => 231,
                'country_code' => 'LR',
                'country_name' => 'Liberia',
            ),
            127 => 
            array (
                'id' => 128,
                'phone_code' => 218,
                'country_code' => 'LY',
                'country_name' => 'Libyan Arab Jamahiriya',
            ),
            128 => 
            array (
                'id' => 129,
                'phone_code' => 423,
                'country_code' => 'LI',
                'country_name' => 'Liechtenstein',
            ),
            129 => 
            array (
                'id' => 130,
                'phone_code' => 370,
                'country_code' => 'LT',
                'country_name' => 'Lithuania',
            ),
            130 => 
            array (
                'id' => 131,
                'phone_code' => 352,
                'country_code' => 'LU',
                'country_name' => 'Luxembourg',
            ),
            131 => 
            array (
                'id' => 132,
                'phone_code' => 853,
                'country_code' => 'MO',
                'country_name' => 'Macao',
            ),
            132 => 
            array (
                'id' => 133,
                'phone_code' => 389,
                'country_code' => 'MK',
                'country_name' => 'Macedonia, the Former Yugoslav Republic of',
            ),
            133 => 
            array (
                'id' => 134,
                'phone_code' => 261,
                'country_code' => 'MG',
                'country_name' => 'Madagascar',
            ),
            134 => 
            array (
                'id' => 135,
                'phone_code' => 265,
                'country_code' => 'MW',
                'country_name' => 'Malawi',
            ),
            135 => 
            array (
                'id' => 136,
                'phone_code' => 60,
                'country_code' => 'MY',
                'country_name' => 'Malaysia',
            ),
            136 => 
            array (
                'id' => 137,
                'phone_code' => 960,
                'country_code' => 'MV',
                'country_name' => 'Maldives',
            ),
            137 => 
            array (
                'id' => 138,
                'phone_code' => 223,
                'country_code' => 'ML',
                'country_name' => 'Mali',
            ),
            138 => 
            array (
                'id' => 139,
                'phone_code' => 356,
                'country_code' => 'MT',
                'country_name' => 'Malta',
            ),
            139 => 
            array (
                'id' => 140,
                'phone_code' => 692,
                'country_code' => 'MH',
                'country_name' => 'Marshall Islands',
            ),
            140 => 
            array (
                'id' => 141,
                'phone_code' => 596,
                'country_code' => 'MQ',
                'country_name' => 'Martinique',
            ),
            141 => 
            array (
                'id' => 142,
                'phone_code' => 222,
                'country_code' => 'MR',
                'country_name' => 'Mauritania',
            ),
            142 => 
            array (
                'id' => 143,
                'phone_code' => 230,
                'country_code' => 'MU',
                'country_name' => 'Mauritius',
            ),
            143 => 
            array (
                'id' => 144,
                'phone_code' => 269,
                'country_code' => 'YT',
                'country_name' => 'Mayotte',
            ),
            144 => 
            array (
                'id' => 145,
                'phone_code' => 52,
                'country_code' => 'MX',
                'country_name' => 'Mexico',
            ),
            145 => 
            array (
                'id' => 146,
                'phone_code' => 691,
                'country_code' => 'FM',
                'country_name' => 'Micronesia, Federated States of',
            ),
            146 => 
            array (
                'id' => 147,
                'phone_code' => 373,
                'country_code' => 'MD',
                'country_name' => 'Moldova, Republic of',
            ),
            147 => 
            array (
                'id' => 148,
                'phone_code' => 377,
                'country_code' => 'MC',
                'country_name' => 'Monaco',
            ),
            148 => 
            array (
                'id' => 149,
                'phone_code' => 976,
                'country_code' => 'MN',
                'country_name' => 'Mongolia',
            ),
            149 => 
            array (
                'id' => 150,
                'phone_code' => 382,
                'country_code' => 'ME',
                'country_name' => 'Montenegro',
            ),
            150 => 
            array (
                'id' => 151,
                'phone_code' => 1664,
                'country_code' => 'MS',
                'country_name' => 'Montserrat',
            ),
            151 => 
            array (
                'id' => 152,
                'phone_code' => 212,
                'country_code' => 'MA',
                'country_name' => 'Morocco',
            ),
            152 => 
            array (
                'id' => 153,
                'phone_code' => 258,
                'country_code' => 'MZ',
                'country_name' => 'Mozambique',
            ),
            153 => 
            array (
                'id' => 154,
                'phone_code' => 95,
                'country_code' => 'MM',
                'country_name' => 'Myanmar',
            ),
            154 => 
            array (
                'id' => 155,
                'phone_code' => 264,
                'country_code' => 'NA',
                'country_name' => 'Namibia',
            ),
            155 => 
            array (
                'id' => 156,
                'phone_code' => 674,
                'country_code' => 'NR',
                'country_name' => 'Nauru',
            ),
            156 => 
            array (
                'id' => 157,
                'phone_code' => 977,
                'country_code' => 'NP',
                'country_name' => 'Nepal',
            ),
            157 => 
            array (
                'id' => 158,
                'phone_code' => 31,
                'country_code' => 'NL',
                'country_name' => 'Netherlands',
            ),
            158 => 
            array (
                'id' => 159,
                'phone_code' => 599,
                'country_code' => 'AN',
                'country_name' => 'Netherlands Antilles',
            ),
            159 => 
            array (
                'id' => 160,
                'phone_code' => 687,
                'country_code' => 'NC',
                'country_name' => 'New Caledonia',
            ),
            160 => 
            array (
                'id' => 161,
                'phone_code' => 64,
                'country_code' => 'NZ',
                'country_name' => 'New Zealand',
            ),
            161 => 
            array (
                'id' => 162,
                'phone_code' => 505,
                'country_code' => 'NI',
                'country_name' => 'Nicaragua',
            ),
            162 => 
            array (
                'id' => 163,
                'phone_code' => 227,
                'country_code' => 'NE',
                'country_name' => 'Niger',
            ),
            163 => 
            array (
                'id' => 164,
                'phone_code' => 234,
                'country_code' => 'NG',
                'country_name' => 'Nigeria',
            ),
            164 => 
            array (
                'id' => 165,
                'phone_code' => 683,
                'country_code' => 'NU',
                'country_name' => 'Niue',
            ),
            165 => 
            array (
                'id' => 166,
                'phone_code' => 672,
                'country_code' => 'NF',
                'country_name' => 'Norfolk Island',
            ),
            166 => 
            array (
                'id' => 167,
                'phone_code' => 1670,
                'country_code' => 'MP',
                'country_name' => 'Northern Mariana Islands',
            ),
            167 => 
            array (
                'id' => 168,
                'phone_code' => 47,
                'country_code' => 'NO',
                'country_name' => 'Norway',
            ),
            168 => 
            array (
                'id' => 169,
                'phone_code' => 968,
                'country_code' => 'OM',
                'country_name' => 'Oman',
            ),
            169 => 
            array (
                'id' => 170,
                'phone_code' => 92,
                'country_code' => 'PK',
                'country_name' => 'Pakistan',
            ),
            170 => 
            array (
                'id' => 171,
                'phone_code' => 680,
                'country_code' => 'PW',
                'country_name' => 'Palau',
            ),
            171 => 
            array (
                'id' => 172,
                'phone_code' => 970,
                'country_code' => 'PS',
                'country_name' => 'Palestinian Territory, Occupied',
            ),
            172 => 
            array (
                'id' => 173,
                'phone_code' => 507,
                'country_code' => 'PA',
                'country_name' => 'Panama',
            ),
            173 => 
            array (
                'id' => 174,
                'phone_code' => 675,
                'country_code' => 'PG',
                'country_name' => 'Papua New Guinea',
            ),
            174 => 
            array (
                'id' => 175,
                'phone_code' => 595,
                'country_code' => 'PY',
                'country_name' => 'Paraguay',
            ),
            175 => 
            array (
                'id' => 176,
                'phone_code' => 51,
                'country_code' => 'PE',
                'country_name' => 'Peru',
            ),
            176 => 
            array (
                'id' => 177,
                'phone_code' => 63,
                'country_code' => 'PH',
                'country_name' => 'Philippines',
            ),
            177 => 
            array (
                'id' => 178,
                'phone_code' => 64,
                'country_code' => 'PN',
                'country_name' => 'Pitcairn',
            ),
            178 => 
            array (
                'id' => 179,
                'phone_code' => 48,
                'country_code' => 'PL',
                'country_name' => 'Poland',
            ),
            179 => 
            array (
                'id' => 180,
                'phone_code' => 351,
                'country_code' => 'PT',
                'country_name' => 'Portugal',
            ),
            180 => 
            array (
                'id' => 181,
                'phone_code' => 1787,
                'country_code' => 'PR',
                'country_name' => 'Puerto Rico',
            ),
            181 => 
            array (
                'id' => 182,
                'phone_code' => 974,
                'country_code' => 'QA',
                'country_name' => 'Qatar',
            ),
            182 => 
            array (
                'id' => 183,
                'phone_code' => 262,
                'country_code' => 'RE',
                'country_name' => 'Reunion',
            ),
            183 => 
            array (
                'id' => 184,
                'phone_code' => 40,
                'country_code' => 'RO',
                'country_name' => 'Romania',
            ),
            184 => 
            array (
                'id' => 185,
                'phone_code' => 70,
                'country_code' => 'RU',
                'country_name' => 'Russian Federation',
            ),
            185 => 
            array (
                'id' => 186,
                'phone_code' => 250,
                'country_code' => 'RW',
                'country_name' => 'Rwanda',
            ),
            186 => 
            array (
                'id' => 187,
                'phone_code' => 590,
                'country_code' => 'BL',
                'country_name' => 'Saint Barthelemy',
            ),
            187 => 
            array (
                'id' => 188,
                'phone_code' => 290,
                'country_code' => 'SH',
                'country_name' => 'Saint Helena',
            ),
            188 => 
            array (
                'id' => 189,
                'phone_code' => 1869,
                'country_code' => 'KN',
                'country_name' => 'Saint Kitts and Nevis',
            ),
            189 => 
            array (
                'id' => 190,
                'phone_code' => 1758,
                'country_code' => 'LC',
                'country_name' => 'Saint Lucia',
            ),
            190 => 
            array (
                'id' => 191,
                'phone_code' => 590,
                'country_code' => 'MF',
                'country_name' => 'Saint Martin',
            ),
            191 => 
            array (
                'id' => 192,
                'phone_code' => 508,
                'country_code' => 'PM',
                'country_name' => 'Saint Pierre and Miquelon',
            ),
            192 => 
            array (
                'id' => 193,
                'phone_code' => 1784,
                'country_code' => 'VC',
                'country_name' => 'Saint Vincent and the Grenadines',
            ),
            193 => 
            array (
                'id' => 194,
                'phone_code' => 684,
                'country_code' => 'WS',
                'country_name' => 'Samoa',
            ),
            194 => 
            array (
                'id' => 195,
                'phone_code' => 378,
                'country_code' => 'SM',
                'country_name' => 'San Marino',
            ),
            195 => 
            array (
                'id' => 196,
                'phone_code' => 239,
                'country_code' => 'ST',
                'country_name' => 'Sao Tome and Principe',
            ),
            196 => 
            array (
                'id' => 197,
                'phone_code' => 966,
                'country_code' => 'SA',
                'country_name' => 'Saudi Arabia',
            ),
            197 => 
            array (
                'id' => 198,
                'phone_code' => 221,
                'country_code' => 'SN',
                'country_name' => 'Senegal',
            ),
            198 => 
            array (
                'id' => 199,
                'phone_code' => 381,
                'country_code' => 'RS',
                'country_name' => 'Serbia',
            ),
            199 => 
            array (
                'id' => 200,
                'phone_code' => 381,
                'country_code' => 'CS',
                'country_name' => 'Serbia and Montenegro',
            ),
            200 => 
            array (
                'id' => 201,
                'phone_code' => 248,
                'country_code' => 'SC',
                'country_name' => 'Seychelles',
            ),
            201 => 
            array (
                'id' => 202,
                'phone_code' => 232,
                'country_code' => 'SL',
                'country_name' => 'Sierra Leone',
            ),
            202 => 
            array (
                'id' => 203,
                'phone_code' => 65,
                'country_code' => 'SG',
                'country_name' => 'Singapore',
            ),
            203 => 
            array (
                'id' => 204,
                'phone_code' => 1,
                'country_code' => 'SX',
                'country_name' => 'Sint Maarten',
            ),
            204 => 
            array (
                'id' => 205,
                'phone_code' => 421,
                'country_code' => 'SK',
                'country_name' => 'Slovakia',
            ),
            205 => 
            array (
                'id' => 206,
                'phone_code' => 386,
                'country_code' => 'SI',
                'country_name' => 'Slovenia',
            ),
            206 => 
            array (
                'id' => 207,
                'phone_code' => 677,
                'country_code' => 'SB',
                'country_name' => 'Solomon Islands',
            ),
            207 => 
            array (
                'id' => 208,
                'phone_code' => 252,
                'country_code' => 'SO',
                'country_name' => 'Somalia',
            ),
            208 => 
            array (
                'id' => 209,
                'phone_code' => 27,
                'country_code' => 'ZA',
                'country_name' => 'South Africa',
            ),
            209 => 
            array (
                'id' => 210,
                'phone_code' => 500,
                'country_code' => 'GS',
                'country_name' => 'South Georgia and the South Sandwich Islands',
            ),
            210 => 
            array (
                'id' => 211,
                'phone_code' => 211,
                'country_code' => 'SS',
                'country_name' => 'South Sudan',
            ),
            211 => 
            array (
                'id' => 212,
                'phone_code' => 34,
                'country_code' => 'ES',
                'country_name' => 'Spain',
            ),
            212 => 
            array (
                'id' => 213,
                'phone_code' => 94,
                'country_code' => 'LK',
                'country_name' => 'Sri Lanka',
            ),
            213 => 
            array (
                'id' => 214,
                'phone_code' => 249,
                'country_code' => 'SD',
                'country_name' => 'Sudan',
            ),
            214 => 
            array (
                'id' => 215,
                'phone_code' => 597,
                'country_code' => 'SR',
                'country_name' => 'Suriname',
            ),
            215 => 
            array (
                'id' => 216,
                'phone_code' => 47,
                'country_code' => 'SJ',
                'country_name' => 'Svalbard and Jan Mayen',
            ),
            216 => 
            array (
                'id' => 217,
                'phone_code' => 268,
                'country_code' => 'SZ',
                'country_name' => 'Swaziland',
            ),
            217 => 
            array (
                'id' => 218,
                'phone_code' => 46,
                'country_code' => 'SE',
                'country_name' => 'Sweden',
            ),
            218 => 
            array (
                'id' => 219,
                'phone_code' => 41,
                'country_code' => 'CH',
                'country_name' => 'Switzerland',
            ),
            219 => 
            array (
                'id' => 220,
                'phone_code' => 963,
                'country_code' => 'SY',
                'country_name' => 'Syrian Arab Republic',
            ),
            220 => 
            array (
                'id' => 221,
                'phone_code' => 886,
                'country_code' => 'TW',
                'country_name' => 'Taiwan, Province of China',
            ),
            221 => 
            array (
                'id' => 222,
                'phone_code' => 992,
                'country_code' => 'TJ',
                'country_name' => 'Tajikistan',
            ),
            222 => 
            array (
                'id' => 223,
                'phone_code' => 255,
                'country_code' => 'TZ',
                'country_name' => 'Tanzania, United Republic of',
            ),
            223 => 
            array (
                'id' => 224,
                'phone_code' => 66,
                'country_code' => 'TH',
                'country_name' => 'Thailand',
            ),
            224 => 
            array (
                'id' => 225,
                'phone_code' => 670,
                'country_code' => 'TL',
                'country_name' => 'Timor-Leste',
            ),
            225 => 
            array (
                'id' => 226,
                'phone_code' => 228,
                'country_code' => 'TG',
                'country_name' => 'Togo',
            ),
            226 => 
            array (
                'id' => 227,
                'phone_code' => 690,
                'country_code' => 'TK',
                'country_name' => 'Tokelau',
            ),
            227 => 
            array (
                'id' => 228,
                'phone_code' => 676,
                'country_code' => 'TO',
                'country_name' => 'Tonga',
            ),
            228 => 
            array (
                'id' => 229,
                'phone_code' => 1868,
                'country_code' => 'TT',
                'country_name' => 'Trinidad and Tobago',
            ),
            229 => 
            array (
                'id' => 230,
                'phone_code' => 216,
                'country_code' => 'TN',
                'country_name' => 'Tunisia',
            ),
            230 => 
            array (
                'id' => 231,
                'phone_code' => 90,
                'country_code' => 'TR',
                'country_name' => 'Turkey',
            ),
            231 => 
            array (
                'id' => 232,
                'phone_code' => 7370,
                'country_code' => 'TM',
                'country_name' => 'Turkmenistan',
            ),
            232 => 
            array (
                'id' => 233,
                'phone_code' => 1649,
                'country_code' => 'TC',
                'country_name' => 'Turks and Caicos Islands',
            ),
            233 => 
            array (
                'id' => 234,
                'phone_code' => 688,
                'country_code' => 'TV',
                'country_name' => 'Tuvalu',
            ),
            234 => 
            array (
                'id' => 235,
                'phone_code' => 256,
                'country_code' => 'UG',
                'country_name' => 'Uganda',
            ),
            235 => 
            array (
                'id' => 236,
                'phone_code' => 380,
                'country_code' => 'UA',
                'country_name' => 'Ukraine',
            ),
            236 => 
            array (
                'id' => 237,
                'phone_code' => 971,
                'country_code' => 'AE',
                'country_name' => 'United Arab Emirates',
            ),
            237 => 
            array (
                'id' => 238,
                'phone_code' => 44,
                'country_code' => 'GB',
                'country_name' => 'United Kingdom',
            ),
            238 => 
            array (
                'id' => 239,
                'phone_code' => 1,
                'country_code' => 'US',
                'country_name' => 'United States',
            ),
            239 => 
            array (
                'id' => 240,
                'phone_code' => 1,
                'country_code' => 'UM',
                'country_name' => 'United States Minor Outlying Islands',
            ),
            240 => 
            array (
                'id' => 241,
                'phone_code' => 598,
                'country_code' => 'UY',
                'country_name' => 'Uruguay',
            ),
            241 => 
            array (
                'id' => 242,
                'phone_code' => 998,
                'country_code' => 'UZ',
                'country_name' => 'Uzbekistan',
            ),
            242 => 
            array (
                'id' => 243,
                'phone_code' => 678,
                'country_code' => 'VU',
                'country_name' => 'Vanuatu',
            ),
            243 => 
            array (
                'id' => 244,
                'phone_code' => 58,
                'country_code' => 'VE',
                'country_name' => 'Venezuela',
            ),
            244 => 
            array (
                'id' => 245,
                'phone_code' => 84,
                'country_code' => 'VN',
                'country_name' => 'Viet Nam',
            ),
            245 => 
            array (
                'id' => 246,
                'phone_code' => 1284,
                'country_code' => 'VG',
                'country_name' => 'Virgin Islands, British',
            ),
            246 => 
            array (
                'id' => 247,
                'phone_code' => 1340,
                'country_code' => 'VI',
                'country_name' => 'Virgin Islands, U.s.',
            ),
            247 => 
            array (
                'id' => 248,
                'phone_code' => 681,
                'country_code' => 'WF',
                'country_name' => 'Wallis and Futuna',
            ),
            248 => 
            array (
                'id' => 249,
                'phone_code' => 212,
                'country_code' => 'EH',
                'country_name' => 'Western Sahara',
            ),
            249 => 
            array (
                'id' => 250,
                'phone_code' => 967,
                'country_code' => 'YE',
                'country_name' => 'Yemen',
            ),
            250 => 
            array (
                'id' => 251,
                'phone_code' => 260,
                'country_code' => 'ZM',
                'country_name' => 'Zambia',
            ),
            251 => 
            array (
                'id' => 252,
                'phone_code' => 263,
                'country_code' => 'ZW',
                'country_name' => 'Zimbabwe',
            ),
        ));
        
        
    }
}