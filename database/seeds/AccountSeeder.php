<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id' => 1,
                'acct_name' => 'Lenteria B. Regular Account',
                'init_invest' => 123232,
                'start_date' => '2020-03-23',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 1,
                'acct_name' => 'Reyes A.M. Regular Account',
                'init_invest' => 324123,
                'start_date' => '2020-05-28',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Bautista Trust Fund	',
                'init_invest' => 890500.00,
                'start_date' => '2020-06-03',
                'remarks' => 'Done with normal transaction'
            ]
        ];

        foreach($data as $acc){
            \App\Account::create($acc);
        }
    }
}
