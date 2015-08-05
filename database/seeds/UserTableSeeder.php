<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $dateTime = new DateTime('now');
//        $dateTime = $dateTime->format('Y-m-d H:i:s'); // on utilise le format timestamp
        DB::table('users')->insert(
            [
                [
                    'name' => 'Alexandre',
                    'email' => 'alexandre@elycee.io',
                    'password' => Hash::make('Alexandre'),
                    'role' => 'teacher',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'Abel',
                    'email' => 'abel@elycee.io',
                    'password' => Hash::make('Abel'),
                    'role' => 'first_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'Al',
                    'email' => 'al@elycee.io',
                    'password' => Hash::make('Al'),
                    'role' => 'first_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'Alan',
                    'email' => 'alan@elycee.io',
                    'password' => Hash::make('Alan'),
                    'role' => 'first_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'Arthur',
                    'email' => 'arthur@elycee.io',
                    'password' => Hash::make('Arthur'),
                    'role' => 'first_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'Carl',
                    'email' => 'carl@elycee.io',
                    'password' => Hash::make('Carl'),
                    'role' => 'first_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'Blaise',
                    'email' => 'blaise@elycee.io',
                    'password' => Hash::make('Blaise'),
                    'role' => 'first_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'Isaac',
                    'email' => 'isaac@elycee.io',
                    'password' => Hash::make('Isaac'),
                    'role' => 'first_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'Steve',
                    'email' => 'steve@elycee.io',
                    'password' => Hash::make('Steve'),
                    'role' => 'first_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'Alfred',
                    'email' => 'alfred@elycee.io',
                    'password' => Hash::make('Alfred'),
                    'role' => 'final_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'Brendan',
                    'email' => 'brendan@elycee.io',
                    'password' => Hash::make('Brendan'),
                    'role' => 'final_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'David',
                    'email' => 'david@elycee.io',
                    'password' => Hash::make('David'),
                    'role' => 'final_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'George',
                    'email' => 'george@elycee.io',
                    'password' => Hash::make('George'),
                    'role' => 'final_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'Jim',
                    'email' => 'jim@elycee.io',
                    'password' => Hash::make('Jim'),
                    'role' => 'final_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'Leslie',
                    'email' => 'leslie@elycee.io',
                    'password' => Hash::make('Leslie'),
                    'role' => 'final_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'Maria',
                    'email' => 'maria@elycee.io',
                    'password' => Hash::make('Maria'),
                    'role' => 'final_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'Rasmus',
                    'email' => 'rasmus@elycee.io',
                    'password' => Hash::make('Rasmus'),
                    'role' => 'final_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],
                [
                    'name' => 'Tim',
                    'email' => 'tim@elycee.io',
                    'password' => Hash::make('Tim'),
                    'role' => 'final_class',
                    'remember_token' => '',
                    'created_at' => $dateTime,
                    'updated_at' => $dateTime,
                ],

            ]
        );
    }
}
