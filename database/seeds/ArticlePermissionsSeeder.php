<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class ArticlePermissionsSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['title' => 'article_access']);
        Permission::create(['title' => 'article_create']);
        Permission::create(['title' => 'article_edit']);
        Permission::create(['title' => 'article_show']);
        Permission::create(['title' => 'article_delete']);
    }
}
