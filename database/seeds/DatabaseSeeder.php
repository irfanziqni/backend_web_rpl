<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'nama' => 'admin',
          'username' => 'admin',
          'email' => 'admin@gmail.com',
          'password' => bcrypt('admin'),
          'status' => 'active',
      ]);
    }
}