<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CitySeeder extends Seeder
{
    public function run()
    {
        $cities = [
            'Karachi',
            'Lahore',
            'Faisalabad',
            'Rawalpindi',
            'Gujranwala',
            'Peshawar',
            'Multan',
            'Islamabad',
            'Quetta',
            'Sialkot',
            'Bahawalpur',
            'Sargodha',
            'Jhang',
            'Sheikhupura',
            'Gujrat',
            'Kasur',
            'Mardan',
            'Mingora',
            'Chiniot',
            'Dera Ghazi Khan',
            'Kamoke',
            'Okara',
            'Wah Cantt',
            'Sahiwal',
            'Bhawalnagar',
            'Turbat',
            'Muzaffargarh',
            'Jacobabad',
            'Dera Ismail Khan',
            'Kohat',
            'Chaman',
            'Kharian',
            'Narowal',
            'Hafizabad',
            'Khuzdar',
            'Toba Tek Singh',
            'Larkana',
            'Moro',
            'Rahim Yar Khan',
            'Sadiqabad',
            'Mirpur Khas',
            'Shikarpur',
            'Khairpur',
            'Thatta',
            'Umerkot',
            'Ghotki',
            'Nawabshah',
            'Badin',
            'Jhelum',
            'Khushab',
            'Sibi',
            'Dadu',
            'Buner',
            'Charsadda',
            'Haripur',
            'Nowshera',
            'Batkhela',
            'Karak',
            'Swabi',
            'Musa Khel',
            'Lakki Marwat',
            'Tank',
            'Hangu',
            'Bannu',
            'Chakwal',
            'Attock',
            'Kalat',
            'Zhob',
            'Jaffarabad',
            'Naseerabad',
            'Mastung',
            'Lasbela',
            'Awaran',
            'Kech',
            'Gwadar',
            'Kharan',
            'Nushki',
            'Abbottabad',
            'Haroonabad',
            'Daska',
            'Sambrial',
            'Khairpur Mir’s',
            'Tando Adam',
            'Tando Allahyar',
            'Gojra',
            'Fateh Jang',
            'Mandi Bahauddin',
            'Hasilpur',
            'Dipalpur',
            'Kot Adu',
            'Kohlu',
            'Lodhran',
            'Mandi',
            'Nankana Sahib',
            'Rohri',
            'Sanghar',
            'Shahdadkot',
            'Shahkot',
            'Shikarpur',
            'Shorkot',
            'Talagang',
            'Talhar',
            'Tandlianwala',
            'Thul',
            'Vehari',
            'Wazirabad',
            'Ziarat',
        ];

        $now = Carbon::now();

        $data = [];

        foreach ($cities as $city) {
            $data[] = [
                'name' => $city,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('cities')->insertOrIgnore($data);
    }
}
