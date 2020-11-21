<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RoleAndPermissionSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
