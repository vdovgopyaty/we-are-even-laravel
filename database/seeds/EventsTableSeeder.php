<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'name' => 'Event 1',
                'place' => 'Place',
                'description' => 'Description',
                'user_id' => 1,
            ],
            [
                'name' => 'Event 2',
                'place' => 'Place',
                'description' => 'Description',
                'user_id' => 1,
            ],
            [
                'name' => 'User 2 Event 1',
                'place' => 'Place',
                'description' => 'Description',
                'user_id' => 2,
            ],
        ]);
    }
}