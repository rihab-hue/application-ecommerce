<?php

return [
    'next'     => 'Suivant &raquo;',
    'previous' => '&laquo; Précédent',
    'site_title'     => 'Queen Imprime',
    'userManagement' => [
        'title'          => 'Gestion des utilisateurs',
        'title_singular' => 'Gestion des utilisateurs',
        'fields'         => [],
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Titre',
            'title_helper'      => '',
            'created_at'        => 'Crée à',
            'created_at_helper' => '',
            'updated_at'        => 'Mise à jour à',
            'updated_at_helper' => '',
            'deleted_at'        => 'Supprimé à',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Titre',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Crée à',
            'created_at_helper'  => '',
            'updated_at'         => 'Mise à jour à',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Supprimé à',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nom',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'E-mail vérifié à',
            'email_verified_at_helper' => '',
            'password'                 => 'Mot de passe',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Crée à',
            'created_at_helper'        => '',
            'updated_at'               => 'Mise à jour à',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Supprimé à',
            'deleted_at_helper'        => '',
        ],
    ],
];
