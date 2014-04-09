<?php

class UserRolesTableSeeder extends Seeder 
{
    public function run() 
    {   
        DB::table('user_roles')->delete();
        
        $roles= array(
    
            array('user_id' => 1, 'role_id' => 1),
            array('user_id' => 2, 'role_id' => 1),
            array('user_id' => 3, 'role_id' => 1),
            array('user_id' => 4, 'role_id' => 1),
            array('user_id' => 5, 'role_id' => 3),
            array('user_id' => 5, 'role_id' => 2),
            array('user_id' => 6, 'role_id' => 3)
            
        );

        DB::table('user_roles')->insert($roles);
        
    }
    
}