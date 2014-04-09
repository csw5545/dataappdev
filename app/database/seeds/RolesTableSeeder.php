<?php

class RolesTableSeeder extends Seeder 
{
    public function run() 
    {   
        DB::table('roles')->delete();
        
        $roles= array(
    
            array('name' => 'Admin'),
            array('name' => 'Scheduler'),
            array('name' => 'Volunteer')
            
        );

        DB::table('roles')->insert($roles);
        
    }
    
}