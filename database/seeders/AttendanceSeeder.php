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
        //1
        Attendance::create([
            'event_id' => 1,
            'name' => 'Attendance 1',
            'email' => 'zainab@gmail.com',
        ]);
    }
}
