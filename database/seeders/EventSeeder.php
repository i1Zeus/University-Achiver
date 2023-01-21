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
        //1
        Event::create([
            'title' => 'Event 1',
            'description' => 'Event 1 description',
            'state' => 1,
            'address' => 'Address 1',
            'time'=>'2021-01-01',
            'start' => '2021-01-01',
            'end' => '2021-01-01',
            'time' => '8:30'
        ]);
        //2
        Event::create([
            'title' => 'Event 2',
            'description' => 'Event 2 description',
            'state' => 1,
            'address' => 'Address 2',
            'time'=>'09:30',
            'start' => '2021-01-01',
            'end' => '2021-01-01',
        ]);

        //3
        Event::create([
            'title' => 'Event 3',
            'description' => 'Event 3 description',
            'state' => 1,
            'address' => 'Address 3',

            'time'=>'09:30',
            'start' => '2021-01-01',
            'end' => '2021-01-01',
        ]);
    }
}
