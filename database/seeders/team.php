<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class team extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = [
            ['id' => 1,
            'user_id' => '1',
            'name' => 'admin groep',
            'personal_team' => '1' ,
            'created_at' => now() ,
            'updated_at' => now() ],
        ];
        DB::table('teams')->insert($team);
    }
}
