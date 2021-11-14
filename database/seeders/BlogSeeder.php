<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use IntlRuleBasedBreakIterator;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10000; $i++) { 
            DB::table('posts')->insert([
                'titleText' => Str::random(17),
                'h1Text' => Str::random(5).' '.Str::random(10),
                'keywordsText' => Str::random(50),
                'prevText' => Str::random(50).' '. Str::random(50),
                'DescText' => Str::random(10).' '.Str::random(100).' '.Str::random(900),
                'smallPicture' => "https://sun7-9.userapi.com/s/v1/ig2/BO3i2xqa8zWecGotTBoybzheKKQV0j4Qb8IO-GgPde2OxQMFsSG97K17A8eamGlh0NtDJzBBFdkIwpUUecSrBLRr.jpg?size=200x200&quality=96&crop=215,26,369,369&ava=1",
                'bigPicture' => "https://sun9-52.userapi.com/impg/94sjvzQCgjNKQ3XjyZvT7qUs9_wMuJvchvsmDA/EJd8jjeTJ9I.jpg?size=800x421&quality=96&sign=b4c6d3d629eba32af84645efbf60ca35&type=album",
                'oneHashTag' => Str::random(4), 
                'twoHashTag' => Str::random(5), 
                'threeHashTag' => Str::random(6), 
                'fooHashTag' => Str::random(7), 
                'fiveHashTag' => Str::random(8),
                'type_sport_id' => random_int(1, 5)
            ]);
        }
       // DB::table('blogs')->insert($arr);
    }
}
