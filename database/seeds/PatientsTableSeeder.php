<?php
# @Author: izzy
# @Date:   2019-12-06T17:32:17+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T19:14:41+00:00




use Illuminate\Database\Seeder;
use App\Role;
use App\Patient;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_patient = Role::where('name', 'patient')->first();

        foreach ($role_patient->users as $user)
        {
          $patient = new Patient();

          $patient->address = "1 Elm Street";
          $patient->phone = "0833555888";
          $patient->insurance = 1;
          $patient->company = "Green Mountain SA";
          $patient->policy = "98877665556";
          $patient->user_id = $user->id;
          $patient->save();

        }
    }
}
