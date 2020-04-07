<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'admin-panel' => 'r',
            'api' => 'r',
            'auth-permissions' => 'c,r,u,d',
            'auth-profile' => 'r,u',
            'auth-roles' => 'c,r,u,d',
            'auth-users' => 'c,r,u,d',
        ],
        'administrator' => [
            'admin-panel' => 'r',
            'auth-users' => 'c,r,u,d',
            'auth-profile' => 'r,u'
        ],
        'user' => [
            'client-portal' => 'r',
            'auth-profile' => 'r,u'
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'auth-profile' => 'c,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
