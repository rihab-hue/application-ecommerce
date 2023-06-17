<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class CommandePermissionsSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['title' => 'commande_access']);
        Permission::create(['title' => 'commande_create']);
        Permission::create(['title' => 'commande_edit']);
        Permission::create(['title' => 'commande_show']);
        Permission::create(['title' => 'commande_delete']);
    }
}
