<?php
# @Author: izzy
# @Date:   2019-12-06T13:29:42+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T13:40:47+00:00




use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'An administrator user';
        $role_admin->save();

        $role_patient = new Role();
        $role_patient->name = 'patient';
        $role_patient->description = 'A patient';
        $role_patient->save();

        $role_doctor = new Role();
        $role_doctor->name = 'doctor';
        $role_doctor->description = 'A doctor';
        $role_doctor->save();

    }
}
