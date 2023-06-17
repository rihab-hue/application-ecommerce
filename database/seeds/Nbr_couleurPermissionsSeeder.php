<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class Nbr_couleurPermissionsSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['title' => 'nbr_couleur_access']);
        Permission::create(['title' => 'nbr_couleur_create']);
        Permission::create(['title' => 'nbr_couleur_edit']);
        Permission::create(['title' => 'nbr_couleur_show']);
        Permission::create(['title' => 'nbr_couleur_delete']);
    }
}
