<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attendance;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attendances = [
            [
                'event_id' => 1,
                'name' => 'Attendance 1',
                'email' => 'zainab@gmail.com',
                'adjective' => 'good',
            ],
            [
                'event_id' => 1,
                'name' => 'Attendance 2',
                'email' => 'zainabs@gmail.com',
                'adjective' => 'good',

            ],
            [
                'event_id' => 1,
                'name' => 'Attendance 3',
                'email' => 'zainab@gmail.coms',
                'adjective' => 'good',

            ],
            [
                'event_id' => 2,
                'name' => 'Attendance 4',
                'email' => 'zainab@gmail.comss',
                'adjective' => 'good',

            ],
            [
                'event_id' => 2,
                'name' => 'Attendance 5',
                'email' => 'zainab@gmail.cosm',
                'adjective' => 'good',

            ],
            [
                'event_id' => 2,
                'name' => 'Attendance 6',
                'email' => 'wdszainab@gmail.com',
                'adjective' => 'good',

            ],
            [
                'event_id' => 3,
                'name' => 'Attendance 7',
                'email' => 'zainab@gmail.comssss',
                'adjective' => 'good',

            ]
        ];

    //     foreach ($attendances as $attendance) {
    //         Attendance::create($attendance);
    //     }
    }
}
