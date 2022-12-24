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
            'start_at' => '2021-01-01',
            'end_at' => '2021-01-01',
        ]);
    }
}
