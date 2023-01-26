<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['id' => 1,
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123') ,
            'current_team_id' => '1' ],
        ];
        DB::table('users')->insert($users);

        $this->call([
            team::class,
        ]);
    }
}
