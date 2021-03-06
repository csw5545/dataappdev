<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrimaryKeysForUsersRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('user_roles', function($table) {
           $table->primary(array('user_id', 'role_id')); 
        });		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('user_roles', function($table) {
           $table->dropPrimary(array('user_id', 'role_id'));
        });		
	}

}
