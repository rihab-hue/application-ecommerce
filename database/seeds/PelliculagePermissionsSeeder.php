<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PelliculagePermissionsSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['title' => 'pelliculage_access']);
        Permission::create(['title' => 'pelliculage_create']);
        Permission::create(['title' => 'pelliculage_edit']);
        Permission::create(['title' => 'pelliculage_show']);
        Permission::create(['title' => 'pelliculage_delete']);
    }
}
