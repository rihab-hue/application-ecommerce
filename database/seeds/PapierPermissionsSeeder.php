<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PapierPermissionsSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['title' => 'papier_access']);
        Permission::create(['title' => 'papier_create']);
        Permission::create(['title' => 'papier_edit']);
        Permission::create(['title' => 'papier_show']);
        Permission::create(['title' => 'papier_delete']);
    }
}
