<?php
# @Author: izzy
# @Date:   2019-12-06T17:32:06+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T19:14:35+00:00




use Illuminate\Database\Seeder;
use App\Role;
use App\Doctor;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_doctor = Role::where('name', 'doctor')->first();

        foreach ($role_doctor->users as $user)
        {
          $doctor = new Doctor();

          $doctor->address = "12 Oak Lane";
          $doctor->phone = "0836000999";
          $doctor->start = "2018-09-12";
          $doctor->user_id = $user->id;
          $doctor->save();

        }
    }
}
