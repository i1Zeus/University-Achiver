<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //1
        // Event::create([
        //     'title' => 'Event 1',
        //     'description' => 'Event 1 description',
        //     'state' => 1,
        //     'address' => 'Address 1',
        //     'day'=>'2021-01-01',
        //     'start_time' => '2021-01-01',
        //     'end_time' => '2021-01-01',
        // ]);

        // //2
        // Event::create([
        //     'title' => 'Event 2',
        //     'description' => 'Event 2 description',
        //     'state' => 1,
        //     'address' => 'Address 2',
        //     'day'=>'2021-01-01',
        //     'start_time' => '2021-01-01',
        //     'end_time' => '2021-01-01',
        // ]);

        // //3
        // Event::create([
        //     'title' => 'Event 3',
        //     'description' => 'Event 3 description',
        //     'state' => 1,
        //     'address' => 'Address 3',

        //     'day'=>'2021-01-01',
        //     'start_time' => '2021-01-01',
        //     'end_time' => '2021-01-01',
        // ]);
    }
}
