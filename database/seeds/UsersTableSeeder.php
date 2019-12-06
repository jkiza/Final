<?php
# @Author: izzy
# @Date:   2019-12-06T13:29:33+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T19:21:23+00:00




use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Auth;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_patient = Role::where('name', 'patient')->first();
        $role_doctor = Role::where('name', 'doctor')->first();

        $admin = new User();
        $admin->name = 'Izabela';
        $admin->email = 'admin@medicalcentre.ie';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $patient = new User();
        $patient->name = 'Mary Louise';
        $patient->email = 'louisem@email.ie';
        $patient->password = bcrypt('marylouise');
        $patient->save();
        $patient->roles()->attach($role_patient);

        $doctor = new User();
        $doctor->name = 'Samantha Byrne';
        $doctor->email = 'byrnesamantha@medicalcentre.ie';
        $doctor->password = bcrypt('whitestripe');
        $doctor->save();
        $doctor->roles()->attach($role_doctor);

    }
}
