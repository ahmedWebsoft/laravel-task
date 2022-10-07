<?php

namespace Database\Seeders;

use App\Menu;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $um_menus = array(
            array('id' => '1', 'parent_id' => '0', 'icon' => 'ti-user', 'name' => 'User Management', 'route' => NULL, 'sort' => '2', 'status' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('id' => '2', 'parent_id' => '1', 'icon' => NULL, 'name' => 'Users', 'route' => 'users', 'sort' => '1', 'status' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('id' => '3', 'parent_id' => '1', 'icon' => NULL, 'name' => 'Roles', 'route' => 'roles', 'sort' => '2', 'status' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('id' => '13', 'parent_id' => '0', 'icon' => 'ti-home', 'name' => 'Dashboard', 'route' => 'dashboard', 'sort' => '1', 'status' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
        );

        Menu::insert($um_menus);
        //
    }
}
