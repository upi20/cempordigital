<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'Isep Lutpi Nur',
                'email' => 'iseplutpinur7@gmail.com',
                'foto' => NULL,
                'username' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$DsI7ChQu4aIwEwc0CTlCnO66pBuIukicAIA/oIKwHD4AIGzIHmHZO',
                'active' => '1',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-08-28 20:49:57',
            ),
            1 => 
            array (
                'id' => '3',
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'foto' => NULL,
                'username' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$HL9ziBLtmEaeocsJwvnWveYUyFCMwmEty9H.DBi1Qu4VpR8q4Qyrq',
                'active' => '1',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-22 17:16:25',
                'updated_at' => '2023-03-27 16:23:29',
            ),
            2 => 
            array (
                'id' => '4',
                'name' => 'Super Admin',
                'email' => 'superadmin@mail.com',
                'foto' => NULL,
                'username' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$HszYiA4Yv0TAwsg5QNp3Mu8k730Vu.LEAxebMGUHUSzX4GyPlJG12',
                'active' => '1',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-13 03:26:15',
                'updated_at' => '2023-04-13 03:26:15',
            ),
        ));
        
        
    }
}