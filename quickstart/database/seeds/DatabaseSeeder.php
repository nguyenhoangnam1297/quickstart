<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->truncate();
        App\User::create([       
        	'name' => 'NguyenHoangNam',
        	'password' => bcrypt(123456789),
            'email'=>'hoangnamit1297@gmail.com',
        ]) ;
    }
}
