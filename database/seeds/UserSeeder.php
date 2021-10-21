<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname' => 'Lenteria',
                'fname' => 'Benjie',
                'address' => 'Pob. Centro, Clarin, Bohol',
                'phone' => '0909.089.2350',
                'email' => 'benjielenteria@yahoo.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Reyes',
                'fname' => 'Angelie Mae',
                'address' => 'Lajog, Clarin, Bohol',
                'phone' => '0909.087.6675',
                'email' => 'angeliemaereyes@yahoo.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Bautista',
                'fname' => 'Roland Glenn',
                'address' => 'Ubojan, Tubigon, Bohol',
                'phone' => '0908.665.2240',
                'email' => 'rgbautista@yahoo.com',
                'password' => bcrypt('password123')
            ]
        ];

        foreach($data as $user){
            \App\User::create($user);
        }
    }
}
