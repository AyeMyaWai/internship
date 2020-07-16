<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [ 'name'=>'ayeaye','email'=>'ayemyawai@gmail.com','password'=>bcrypt('admin'),'role'=>'admin'],
            [ 'name'=>'ayeaye','email'=>'ayemyawaiuser@gmail.com','password'=>bcrypt('user'),'role'=>'guest'],
            ['name'=>'ayeaye','email'=>'ayemyawaiadmin@gmail.com','password'=>bcrypt('user'),'role'=>'editor']]);
    }
}
