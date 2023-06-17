<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            ArticlePermissionsSeeder::class,
            CommandePermissionsSeeder::class,
            FormatPermissionsSeeder::class,
            PapierPermissionsSeeder::class,
            ImpressionPermissionsSeeder::class,
            Nbr_couleurPermissionsSeeder::class,
            Nbr_exemplairePermissionsSeeder::class,
        ]);
    }
}
