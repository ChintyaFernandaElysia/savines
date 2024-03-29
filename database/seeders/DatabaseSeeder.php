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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('tbtransactions')->insert([
            [
                'id'          => '1',
                'user_id'     => '1',
                'created_at'  => '2023-01-02',
                'updated_at'  => '2023-01-02',
                'title'       => 'Buy Skin Care',
                'status'      => 'Expense',
                'amount'      => 300000,
                'description' => 'buy 1 pack of scarlett whitening brightly',
                'date'        => '2023-01-02',
            ],
            [
                'id'          => '2',
                'user_id'     => '1',
                'created_at'  => '2023-01-25',
                'updated_at'  => '2023-01-25',
                'title'       => 'Freelance Design Instagram Feed and Story',
                'status'      => 'Income',
                'amount'      => 4000000,
                'description' => 'Get paid from designing 15 Instagram feeds and 5 Instagram stories',
                'date'        => '2023-01-25',
            ],
            [
                'id'          => '3',
                'user_id'     => '1',
                'created_at'  => '2023-02-07',
                'updated_at'  => '2023-02-07',
                'title'       => 'Buy RAM',
                'status'      => 'Expense',
                'amount'      => 250000,
                'description' => 'RAM DDR4 4GB Laptop',
                'date'        => '2023-02-07',
            ],
            [
                'id'          => '4',
                'user_id'     => '1',
                'created_at'  => '2023-02-27',
                'updated_at'  => '2023-02-27',
                'title'       => 'Freelance Powerpoint Maker',
                'status'      => 'Income',
                'amount'      => 2000000,
                'description' => 'Get paid from making powerpoint',
                'date'        => '2023-02-27',
            ],
            [
                'id'          => '5',
                'user_id'     => '1',
                'created_at'  => '2023-03-01',
                'updated_at'  => '2023-03-01',
                'title'       => 'Buy Totebag',
                'status'      => 'Expense',
                'amount'      => 100000,
                'description' => 'Buy totebag for travelling',
                'date'        => '2023-03-01',
            ],
            [
                'id'          => '6',
                'user_id'     => '1',
                'created_at'  => '2023-03-06',
                'updated_at'  => '2023-03-06',
                'title'       => 'Freelance Design Figma',
                'status'      => 'Income',
                'amount'      => 5000000,
                'description' => 'Get paid from designing an application on figma',
                'date'        => '2023-03-06',
            ],
            [
                'id'          => '7',
                'user_id'     => '1',
                'created_at'  => '2023-04-01',
                'updated_at'  => '2023-04-01',
                'title'       => 'Freelance Design Instagram Feed and Story',
                'status'      => 'Income',
                'amount'      => 6000000,
                'description' => 'Get paid from designing 15 Instagram feeds and 5 Instagram stories',
                'date'        => '2023-04-01',
            ],
            [
                'id'          => '8',
                'user_id'     => '1',
                'created_at'  => '2023-04-02',
                'updated_at'  => '2023-04-02',
                'title'       => 'Buy a dress',
                'status'      => 'Expense',
                'amount'      => 400000,
                'description' => 'Buy a dress for party ',
                'date'        => '2023-04-02',
            ],
        ]);
        DB::table('tbdebtandloan')->insertOrIgnore([
            [
                'id'             => '1',
                'user_id'        => '1',
                'created_at'     => '2023-01-02',
                'updated_at'     => '2023-01-02',
                'date'           => '2023-01-02',
                'due_date'       => '2023-02-02',
                'title'          => 'Owe 500000 from Willy',
                'status'         => 'Debt',
                'amount'         => '500000',  
                'description'    => 'Buy laptop ASUS ZenBook',
                'person_name'    => 'Willy',
                'person_telp'    => '083290002122',
                'person_address' => 'Jl. Sutoyo No. 5',
                'tracking'       => 'Paid',
            ],
            [
                'id'             => '2',
                'user_id'        => '1',
                'created_at'     => '2023-02-27',
                'updated_at'     => '2023-02-27',
                'date'           => '2023-02-27',
                'due_date'       => '2023-03-24',
                'title'          => 'Lend 2000000 to Vanessa',
                'status'         => 'Loan',
                'amount'         => '2000000',  
                'description'    => 'To pay hospital bill',
                'person_name'    => 'Vanessa',
                'person_telp'    => '08546223229',
                'person_address' => 'Jl. Purnama No 11B',
                'tracking'       => 'Paid',
            ],
            [
                'id'             => '3',
                'user_id'        => '1',
                'created_at'     => '2023-03-04',
                'updated_at'     => '2023-03-04',
                'date'           => '2023-03-04',
                'due_date'       => '2023-03-30',
                'title'          => 'Owe 250000 from Yulia',
                'status'         => 'Debt',
                'amount'         => '250000',  
                'description'    => 'To pay food bill',
                'person_name'    => 'Yulia',
                'person_telp'    => '08857492110',
                'person_address' => 'Jl. Gajah Mada No 150',
                'tracking'       => 'Unpaid',
            ],
            [
                'id'             => '4',
                'user_id'        => '1',
                'created_at'     => '2023-03-10',
                'updated_at'     => '2023-03-10',
                'date'           => '2023-03-10',
                'due_date'       => '2023-03-31',
                'title'          => 'Lend 750000 to Chloe',
                'status'         => 'Loan',
                'amount'         => '750000',  
                'description'    => 'To buy fitness equipment',
                'person_name'    => 'Chloe',
                'person_telp'    => '087635423881',
                'person_address' => 'Jl. Adi Sucipto No 16D',
                'tracking'       => 'Unpaid',
            ],
        ]);
        DB::table('tbgoals')->insertOrIgnore([
            [
                'id'          => '1',
                'user_id'     => '1',
                'date'        => '2023-01-02',
                'created_at'  => '2023-01-02',
                'updated_at'  => '2023-01-02',
                'title'       => 'Buy Laptop',
                'description' => 'Buy laptop ASUS ZenBook',
                'target'      => '18500000',
                'collected'   => '4625000',
            ],
            [
                'id'          => '2',
                'user_id'     => '1',
                'date'        => '2023-01-28',
                'created_at'  => '2023-01-28',
                'updated_at'  => '2023-01-28',
                'title'       => 'Buy Ipad',
                'description' => 'Buy Ipad Mini 6',
                'target'      => '9000000',
                'collected'   => '3600000',
            ],
            [
                'id'          => '3',
                'user_id'     => '1',
                'date'        => '2023-02-15',
                'created_at'  => '2023-02-15',
                'updated_at'  => '2023-02-15',
                'title'       => 'Buy Camera',
                'description' => 'Buy Camera Sony Alpha A6000',
                'target'      => '10000000',
                'collected'   => '1000000',
            ],
            [
                'id'          => '4',
                'user_id'     => '1',
                'date'        => '2023-03-25',
                'created_at'  => '2023-03-25',
                'updated_at'  => '2023-03-25',
                'title'       => 'Buy Speaker',
                'description' => 'Buy Speaker Polytron Active PAS 8C28',
                'target'      => '3000000',
                'collected'   => '1500000',
            ],
        ]);
        DB::table('tbnotes')->insertOrIgnore([
            [
                'id'          => '1',
                'user_id'     => '1',
                'date'        => '2023-01-20',
                'created_at'  => '2023-01-20',
                'updated_at'  => '2023-01-20',
                'title'       => 'Pay off the debt',
                'description' => 'Pay 500000 to Willy on Wednesday',
            ],
            [
                'id'          => '2',
                'user_id'     => '1',
                'date'        => '2023-02-09',
                'created_at'  => '2023-02-09',
                'updated_at'  => '2023-02-09',
                'title'       => 'Buy a flower bouquet',
                'description' => 'Buy a flower bouquet for Neva on her birthday ',
            ],
            [
                'id'          => '3',
                'user_id'     => '1',
                'date'        => '2023-02-17',
                'created_at'  => '2023-02-17',
                'updated_at'  => '2023-02-17',
                'title'       => 'Buy a new headset',
                'description' => 'Buy a new headset for my little sister ',
            ],
            [
                'id'          => '4',
                'user_id'     => '1',
                'date'        => '2023-03-16',
                'created_at'  => '2023-03-16',
                'updated_at'  => '2023-03-16',
                'title'       => 'Collect debt',
                'description' => 'Collect 2000000 from Vanessa',
            ],
        ]);
    }
}
