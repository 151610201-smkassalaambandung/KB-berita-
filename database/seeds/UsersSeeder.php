<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name ="Admin";
        $adminRole->save();

        //membuat role member
        $memberRole = new Role();
        $memberRole->name = "penulis";
        $memberRole->display_name ="Penulis";
        $memberRole->save();

        //membuat sample admin
        $admin = new User();
        $admin->name = 'Admin Berita';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        //membuat sample member
        $member = new User();
        $member->name = 'Penulis Berita';
        $member->email = 'penulis@gmail.com';
        $member->password = bcrypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);
    }
}
