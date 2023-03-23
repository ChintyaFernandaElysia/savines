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
                'title'       => 'Get Angpao',
                'status'      => 'Income',
                'amount'      => 2000000,
                'description' => 'Get angpao from father, mother, grandfather, grandmother, two aunties, and 2 uncles',
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
                'amount'      => 500000,
                'description' => 'Get paid from designing an application on figma',
                'date'        => '2023-03-06',
            ],
        ]);

        DB::table('tbnotes')->insertOrIgnore([
            [
                'id'          => '1',
                'user_id'     => '1',
                'date'        => '2023-01-02',
                'created_at'  => '2023-01-02',
                'updated_at'  => '2023-01-02',
                'title'       => 'Pay off the debt to angel',
                'description' => 'Pay 300000 to angel tomorrow',
            ],
            [
                'id'          => '2',
                'user_id'     => '1',
                'date'        => '2023-01-20',
                'created_at'  => '2023-01-20',
                'updated_at'  => '2023-01-20',
                'title'       => 'Pay off the debt to vanessa',
                'description' => 'Pay 500000 to vanessa on Wednesday',
            ],
            [
                'id'          => '3',
                'user_id'     => '1',
                'date'        => '2023-02-09',
                'created_at'  => '2023-02-09',
                'updated_at'  => '2023-02-09',
                'title'       => 'Buy a flower bouquet',
                'description' => 'Buy a flower bouquet for Neva on her birthday ',
            ],
            [
                'id'          => '4',
                'user_id'     => '1',
                'date'        => '2023-02-17',
                'created_at'  => '2023-02-17',
                'updated_at'  => '2023-02-17',
                'title'       => 'Buy a new headset',
                'description' => 'Buy a new headset for my little sister ',
            ],
            [
                'id'          => '5',
                'user_id'     => '1',
                'date'        => '2023-02-21',
                'created_at'  => '2023-02-21',
                'updated_at'  => '2023-02-21',
                'title'       => 'Collect debt from Dean',
                'description' => 'collect 1000000 from Dean because the due date is one month',
            ],
            [
                'id'          => '6',
                'user_id'     => '1',
                'date'        => '2023-03-05',
                'created_at'  => '2023-03-05',
                'updated_at'  => '2023-03-05',
                'title'       => 'Buy property',
                'description' => 'Tell Dean to buy property for school event',
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
                'target' => '18500000',
                'collected' => '500000',
            ]
        ]);
        DB::table('tbdebtandloan')->insertOrIgnore([
            [
                'id'             => '1',
                'user_id'        => '1',
                'created_at'     => '2023-01-02',
                'updated_at'     => '2023-01-02',
                'date'           => '2023-01-02',
                'due_date'       => '2023-02-02',
                'title'          => 'Owe 500000 from angel',
                'status'         => 'Debt',
                'amount'         => '500000',  
                'description'    => 'Buy laptop ASUS ZenBook',
                'person_name'    => 'Angel',
                'person_telp'    => '083290002122',
                'person_address' => 'Jl. Sutoyo No. 5',
            ]
        ]);
    }
}
