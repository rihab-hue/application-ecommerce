<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class ContactPermissionsSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['title' => 'contact_access']);
        Permission::create(['title' => 'contact_show']);
    }
}
