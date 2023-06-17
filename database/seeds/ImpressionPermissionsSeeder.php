<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class ImpressionPermissionsSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['title' => 'impression_access']);
        Permission::create(['title' => 'impression_create']);
        Permission::create(['title' => 'impression_edit']);
        Permission::create(['title' => 'impression_show']);
        Permission::create(['title' => 'impression_delete']);
    }
}
