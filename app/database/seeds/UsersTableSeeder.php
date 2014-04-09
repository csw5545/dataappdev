<?php

class UsersTableSeeder extends Seeder 
{
    public function run() 
    {   
        DB::table('users')->delete();
        
        $users = array(
    
            array(
                'first_name'    => 'Hassan',
                'last_name'     => 'Robinson',
                'address'       => 'RIT',
                'phone'         => '585-555-2525',
                'email'         => 'hnr1928@rit.edu',
                'password'      => Hash::make('hassandev'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),

            array(
                'first_name'    => 'Jason',
                'last_name'     => 'Pomana',
                'address'       => 'RIT',
                'phone'         => '585-555-2525',
                'email'         => 'jcp3313@rit.edu',
                'password'      => Hash::make('jasondev'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),

            array(
                'first_name'    => 'Christopher',
                'last_name'     => 'Wong',
                'address'       => 'RIT',
                'phone'         => '585-555-2525',
                'email'         => 'csw5545@rit.edu',
                'password'      => Hash::make('chrisdev'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),

            array(
                'first_name'    => 'Matt',
                'last_name'     => 'Brady',
                'address'       => 'RIT',
                'phone'         => '585-555-2525',
                'email'         => 'msb5987@rit.edu',
                'password'      => Hash::make('mattdev'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            
            array(
                'first_name'    => 'Fred',
                'last_name'     => 'Smith',
                'address'       => 'RIT',
                'phone'         => '585-555-2525',
                'email'         => 'fred@rit.edu',
                'password'      => Hash::make('freddev'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            
            array(
                'first_name'    => 'Will',
                'last_name'     => 'Ford',
                'address'       => 'RIT',
                'phone'         => '585-555-2525',
                'email'         => 'will@rit.edu',
                'password'      => Hash::make('willdev'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            )

        );

        DB::table('users')->insert($users);
        
    }
    
}
