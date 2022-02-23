<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('User_Comments')->insert([
            'name' => 'Слава',
            'comment' => 'Спасибо за Ваше тестовое задание. Оно, действительно, изумительное',
            'date' => '2014-02-07 18:05:16'
        ]);

        DB::table('User_Comments')->insert([
            'name' => 'Евдоким',
            'comment' => 'Если включить мозги, то все элементарно Ватсон!',
            'date' => '2014-02-07 17:42:16'
        ]);

        DB::table('User_Comments')->insert([
            'name' => 'Артемий',
            'comment' => 'Почему такое сложное задание??? Мне кажется, нужно быть первоклассным программистом, чтобы выполнить его  :(',
            'date' => '2014-02-07 16:10:16'
        ]);

    }
}
