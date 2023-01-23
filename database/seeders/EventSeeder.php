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
            'title' => 'حسين جاسم فهد',
            'description' => 'Analyze to loT with Learning Deep of lmplementation and Design
            Cit Smart Datain Bi',
            'state' => 1, //مناقشه بحث
            'address' => 'قاعه الدراسات العليا',
            'start' => '2023-01-11',
            'time' => '9:00'
        ]);
        //2
        Event::create([
            'title' => 'علاء ضاحي خليفه',
            'description' => 'Detection of IOT Botnet Cyber Attacks
            Using Machine Learning',
            'state' => 1,
            'address' => 'قاعه الدراسات العليا',
            'start' => '2023-1-16',
            'time' => '10:00'
        ]);
        //3
        Event::create([
            'title' => 'فاطمه باسم كاظم',
            'description' => 'for model implementation and Design
            asthma Detection supported ontology building
            disease',
            'state' => 1, //مناقشه بحث
            'address' => 'قاعه الدراسات العليا',
            'start' => '2023-01-10',
            'time' => '10:30'
        ]);
        //4
        Event::create([
            'title' => 'هيام عباس قاسم',
            'description' => "E-HeaIthcare Patient's for Authentication
            Privacy and Safety :System",
            'state' => 1, //مناقشه بحث
            'address' => 'قاعه الدراسات العليا',
            'start' => '2022-12-27',
            'time' => '10:15'
        ]);
        //5
        Event::create([
            'title' => 'جواد كاظم حسين',
            'description' => 'Computer Network Monitoring to Performance Evaluation for Quality of Services',
            'state' => 1, //مناقشه بحث
            'address' => 'قاعه الدراسات العليا',
            'start' => '2022-12-21',
            'time' => '10:00'
        ]);
        //6
        Event::create([
            'title' => 'حسين جاسم فهد',
            'description' => 'CONGESTION BASED BALANCING LOAD TRAFFIC
            NEN/ORKS SPEED HIGH IN AVOIDING',
            'state' => 1, //مناقشه بحث
            'address' => 'قاعه الدراسات العليا',
            'start' => '2022-12-21',
            'time' => '10:15'
        ]);
    }
}
