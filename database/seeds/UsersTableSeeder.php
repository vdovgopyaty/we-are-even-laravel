<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Владислав',
                'email' => 'vdovgopyaty@gmail.com',
                'api_token' => str_random(60),
                'password' => '$2y$10$3bhiiit5A2o20KLKKq3zTO54STFJPhRXVLMb/RnZtA148ZKUamWg.',
            ],
            [
                'name' => 'Пользователь 2',
                'email' => 'user2@gmail.com',
                'api_token' => str_random(60),
                'password' => '$2y$10$3bhiiit5A2o20KLKKq3zTO54STFJPhRXVLMb/RnZtA148ZKUamWg.',
            ],
        ]);
    }
}
