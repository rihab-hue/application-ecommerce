<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class Nbr_exemplairePermissionsSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['title' => 'nbr_exemplaire_access']);
        Permission::create(['title' => 'nbr_exemplaire_create']);
        Permission::create(['title' => 'nbr_exemplaire_edit']);
        Permission::create(['title' => 'nbr_exemplaire_show']);
        Permission::create(['title' => 'nbr_exemplaire_delete']);
    }
}
