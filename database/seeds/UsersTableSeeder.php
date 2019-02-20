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
        factory(\MaximGestor\Models\User::class)->create([
            'firstname' => 'Marcelo',
            'lastname'  => 'Corrêa',
            'name'      => 'Marcelo Corrêa',
            'email'     => 'marcelocorrea229@gmail.com',
            'password'  => bcrypt('Marsc2014'),
        ]);
    }
}
