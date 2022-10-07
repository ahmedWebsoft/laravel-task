<?php

namespace Database\Seeders;


use App\Configuration;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ven_configurations = array(
            array('id' => '1', 'key' => 'two_factor_authentication', 'value' => '0', 'updated_at' => Carbon::now(), "created_at" => Carbon::now()),
            array('id' => '3', 'key' => 'site_logo_desktop', 'value' => 'YihOaCUsNWJj248XmkfH.png', 'updated_at' => Carbon::now(), "created_at" => Carbon::now()),
            array('id' => '6', 'key' => 'site_name', 'value' => 'CMS', 'updated_at' => Carbon::now(), "created_at" => Carbon::now()),
            array('id' => '7', 'key' => 'mail_host', 'value' => 'test', 'updated_at' => Carbon::now(), "created_at" => Carbon::now()),
            array('id' => '8', 'key' => 'mail_port', 'value' => '465', 'updated_at' => Carbon::now(), "created_at" => Carbon::now()),
            array('id' => '9', 'key' => 'mail_username', 'value' => 'announcements@clientdemo.test', 'updated_at' => Carbon::now(), "created_at" => Carbon::now()),
            array('id' => '10', 'key' => 'mail_password', 'value' => 'pk321#', 'updated_at' => Carbon::now(), "created_at" => Carbon::now()),
            array('id' => '11', 'key' => 'from_address', 'value' => 'no-reply@test', 'updated_at' => Carbon::now(), "created_at" => Carbon::now()),
            array('id' => '12', 'key' => 'from_name', 'value' => 'CMS', 'updated_at' => Carbon::now(), "created_at" => Carbon::now()),
            array('id' => '13', 'key' => 'mail_encryption', 'value' => 'ssl', 'updated_at' => Carbon::now(), "created_at" => Carbon::now()),
            array('id' => '14', 'key' => 'mail_driver', 'value' => 'smtp', 'updated_at' => Carbon::now(), "created_at" => Carbon::now()),
            array('id' => '15', 'key' => 'single_user_session', 'value' => '0', 'updated_at' => Carbon::now(), "created_at" => Carbon::now()),
            array('id' => '16', 'key' => 'site_logo_smartphone', 'value' => 'nwDkGsPSwwRzqUJ6zo4jeh9VInvcAmDgEdsmZped.png', 'updated_at' => Carbon::now(), "created_at" => Carbon::now()),
            array('id' => '17', 'key' => 'text_graphic_logo', 'value' => '1', 'updated_at' => Carbon::now(), "created_at" => Carbon::now()),
            array('id' => '18', 'key' => 'files_link', 'value' => 'http://localhost/admin-panel/public/uploads/images/', 'updated_at' => Carbon::now(), "created_at" => Carbon::now())
        );

        Configuration::insert($ven_configurations);
    }
}
