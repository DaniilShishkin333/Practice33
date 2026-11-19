<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

DB::table('countries')->insert([
           ['name' => 'Россия'],
           ['name' => 'Испания'],
           ['name' => 'Италия'],
       ]);

       DB::table('cities')->insert([
           ['name' => 'Москва', 'country_id' => 1],
           ['name' => 'Мадрид', 'country_id' => 2],
           ['name' => 'Рим', 'country_id' => 3],
       ]);

       DB::table('stadiums')->insert([
           ['name' => 'ВЭБ Арена', 'number_of_seats' => 30000],
           ['name' => 'Сантьяго Бернабеу', 'number_of_seats' => 81000],
           ['name' => 'Стадио Олимпико', 'number_of_seats' => 70000],
       ]);
      DB::table('tournaments')->insert([
           ['name' => 'РПЛ', 'year' => 2026, 'country_id' => 1],
           ['name' => 'Ла Лига', 'year' => 2026, 'country_id' => 2],
           ['name' => 'Серия А', 'year' => 2026, 'country_id' => 3],
       ]);
      DB::table('teams')->insert([
           ['name' => 'ЦСКА', 'year' => 1911, 'city_id' => 1],
           ['name' => 'Реал Мадрид', 'year' => 1902, 'city_id' => 2],
           ['name' => 'Рома', 'year' => 1927, 'city_id' => 3],
       ]);
       DB::table('players')->insert([
           ['name' => 'Игорь Акинфеев', 'year' => 1986, 'number' => 35, 'team_id' => 1, 'city_id' => 1],
           ['name' => 'Килиан Мбаппе', 'year' => 1998, 'number' => 9, 'team_id' => 2, 'city_id' => 2],
           ['name' => 'Пауло Дибала', 'year' => 1993, 'number' => 21, 'team_id' => 3, 'city_id' => 3],
       ]);
       DB::table('treners')->insert([
           ['name' => 'Дмитрий Игдисамов', 'year' => 1986, 'team_id' => 1],
           ['name' => 'Жозе Моуринью', 'year' => 1963, 'team_id' => 2],
           ['name' => 'Джан Пьеро Гасперини', 'year' => 1958, 'team_id' => 3],
       ]);
     DB::table('doctors')->insert([
           ['name' => 'Эдуард Безуглов', 'year' => 1981, 'team_id' => 1],
           ['name' => 'Хуан Гарсия', 'year' => 1975, 'team_id' => 2],
           ['name' => 'Марио Росси', 'year' => 1980, 'team_id' => 3],
       ]);
      DB::table('staffs')->insert([
           ['name' => 'Петр Геллер', 'year' => 1990, 'team_id' => 1],
           ['name' => 'Карлос Лопес', 'year' => 1990, 'team_id' => 2],
           ['name' => 'Луиджи Бьянки', 'year' => 1988, 'team_id' => 3],
       ]);

DB::table('stadiums_has_teams')->insert([
           ['stadium_id' => 1, 'team_id' => 1],
           ['stadium_id' => 2, 'team_id' => 2],
           ['stadium_id' => 3, 'team_id' => 3],
       ]);

       DB::table('teams_has_tournaments')->insert([
           ['team_id' => 1, 'tournament_id' => 1],
           ['team_id' => 2, 'tournament_id' => 2],
           ['team_id' => 3, 'tournament_id' => 3],
       ]);
}
 }

