<?php
# @Author: izzy
# @Date:   2019-12-06T17:32:06+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T20:18:22+00:00




use Illuminate\Database\Seeder;
use App\Visit;
use App\Patient;
use App\Doctor;

class VisitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $visit = new Visit();

        $visit->date = "2019-12-20";
        $visit->time = "12:20:00";
        $visit->duration = 45;
        $visit->cost = 125.00;
        $visit->doctor_id = $doctor->id;
        $visit->patient_id = $patient->id;
        $visit->save();

    }
}
