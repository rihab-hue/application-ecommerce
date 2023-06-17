<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class FormatPermissionsSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['title' => 'format_access']);
        Permission::create(['title' => 'format_create']);
        Permission::create(['title' => 'format_edit']);
        Permission::create(['title' => 'format_show']);
        Permission::create(['title' => 'format_delete']);
    }
}
