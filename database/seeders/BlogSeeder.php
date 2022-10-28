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

            DB::table('posts')->insert([
                'titleText' => "Бой Деррик Льюис (США) vs Кристофер Даукаус (США) ",
                'h1Text' => "Бой Деррик Льюис (США) vs Кристофер Даукаус (США) ",
                'keywordsText' => "MMA, M-1, Бои без правил, ставки на спорт",
                'prevText' => "В настоящее время Даукаус (12-3) выиграл все четыре своих боя в UFC нокаутом техническим нокаутом, и только его последний соперник, Шамиль Абдурахимов прошел первый раунд.",
                'DescText' => "<p>Льюис (25-8, 1 NC) тяжеловес 4-ый в мировом рейтинге</p>
<h2>MMA Fighting</h2>
<p>и сейчас надеется оправиться от потери временного титульного боя от Сирил Гейн в августе этого года на турнире UFC 265 До этого Льюис выиграл четыре боя подряд, и теперь ему поручено передать Даукаусу его первое поражение в UFC.</p>
<p>В настоящее время Даукаус (12-3) выиграл все четыре своих <mark>боя в UFC</mark> нокаутом техническим нокаутом, и только его последний соперник, Шамиль Абдурахимов прошел первый раунд.</p>
<p>На плакате не изображены 15 лучших полусредневесов Стивен Вандербой Томпсон и Белал Мухаммед которые, как ожидается, встретятся в со-главном турнире.</p>",
                'smallPicture' => "https://sun9-87.userapi.com/impg/beV_iNTDyzEF_VG9KdT2D2RUzd6hEq1OosqLfQ/D2akXDIfKzk.jpg?size=604x377&quality=95&sign=60b2d789669fbdb3d0189110a45fb045&amp;type=album",
                'bigPicture' => "https://sun9-87.userapi.com/impg/beV_iNTDyzEF_VG9KdT2D2RUzd6hEq1OosqLfQ/D2akXDIfKzk.jpg?size=604x377&quality=95&sign=60b2d789669fbdb3d0189110a45fb045&amp;type=album",
                'oneHashTag' =>"MMA" ,
                'twoHashTag' => "M-1",
                'threeHashTag' => "Бой в клетке",
                'fooHashTag' => "Деррик Льюис",
                'fiveHashTag' => "Кристофер Даукаус",
                'type_sport_id' => "3",
                'user_id' => 13,
                'public' => 1
            ]);
        }
       // DB::table('blogs')->insert($arr);
}
