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

        DB::table('users')->insertOrIgnore([
            [
                'id' => 1,
                'name' => 'Chintya',
                'email' => 'chintya@gmail.com',
                'password' => '123',
            ],
            [
                'id' => 2,
                'name' => 'Fernanda',
                'email' => 'fernanda@gmail.com',
                'password' => '123',
            ]
        ]);

        // $this->call([
        //     TransactionSeeder::class,
        // ]);
    }
}
