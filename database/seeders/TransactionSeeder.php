<?php

namespace Database\Seeders;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbtransactions')->insert([
        ['status' => 'income'],
        ['status' => 'expense'],
        [
            'user_id' => 1
        ]
        ]);
    
    }
}
