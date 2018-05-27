<?php

use Illuminate\Database\Seeder;
use DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_users')->insert([
            'username' => 'admin',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        DB::table('admin_roles')->insert([
            'name' => 'Administrator',
            'slug' => 'Administrator'

        ]);

        DB::table('admin_role_users')->insert([
            'user_id' => '1',
            'role_id' => '1'

        ]);

    }
}
