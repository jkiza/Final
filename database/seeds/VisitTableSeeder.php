<?php
# @Author: izzy
# @Date:   2019-12-06T17:32:06+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-15T20:55:30+00:00




use Illuminate\Database\Seeder;
use App\Visit;
use App\Patient;
use App\Doctor;
use App\Role;
class VisitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_patient = Role::where('name', 'patient')->first();
        $role_doctor = Role::where('name', 'doctor')->first();
        $doctors = $role_doctor->users;

        foreach($role_patient->users as $user) {

        $visit = new Visit();
        $doctor = $doctors[rand(0, count($doctors) -1)];

        $visit->date = "2019-12-20";
        $visit->time = "12:20:00";
        $visit->duration = 45;
        $visit->cost = 125.00;
        $visit->doctor_id = $doctor->doctor->id;
        $visit->patient_id = $user->patient->id;
        $visit->save();

      }

    }
}
