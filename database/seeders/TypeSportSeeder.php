<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = ['football'=>'Футбол', 'hokey'=>'Хокей', 'mma'=>'MMA', 'tenis'=>'Тенис', 'cybersport'=>'Киберспорт'];
        foreach ($arr as $key => $item) {
            DB::table('type_sport')->insert([
                'name' => $item,
                'urn' => $key
            ]);
        }
    }
}
