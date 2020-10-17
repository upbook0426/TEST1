<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yahoo',
            'age' => 12,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanako',
            'mail' => 'hanako@yahoo',
            'age' => 15,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'seiji',
            'mail' => 'seiji@yahoo',
            'age' => 32,
        ];
        DB::table('people')->insert($param);


    }
}
