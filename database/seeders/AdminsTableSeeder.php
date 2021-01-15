<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin;
        $admin->name = 'Cristian Borodi';
        $admin->email = 'cristian.borodi27@gmail.com';
        $admin->password = bcrypt($admin['stereotipus192']);
        $admin->save();
    }
}