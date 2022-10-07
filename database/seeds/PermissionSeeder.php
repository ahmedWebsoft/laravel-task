<?php

namespace Database\Seeders;

use App\Permission;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $um_permissions = array(
            array('id' => '1', 'menu_id' => '2', 'name' => 'add', 'route' => 'users.create', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('id' => '2', 'menu_id' => '2', 'name' => 'edit', 'route' => 'users.edit', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('id' => '3', 'menu_id' => '2', 'name' => 'status', 'route' => 'users.status', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('id' => '4', 'menu_id' => '2', 'name' => 'delete', 'route' => 'users.destroy', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('id' => '9', 'menu_id' => '3', 'name' => 'add', 'route' => 'roles.create', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('id' => '10', 'menu_id' => '3', 'name' => 'edit', 'route' => 'roles.edit', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('id' => '12', 'menu_id' => '3', 'name' => 'delete', 'route' => 'roles.destroy', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('id' => '50', 'menu_id' => '2', 'name' => 'settings', 'route' => 'users.settings', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),           
        );

        Permission::insert($um_permissions);
    }
}
