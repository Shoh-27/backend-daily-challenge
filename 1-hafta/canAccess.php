<?php

function canAccess(string $role, string $route): bool
{
    $permissions = [
        'admin'  => ['*'],
        'editor' => ['/posts', '/dashboard'],
        'user'   => ['/dashboard'],
    ];

    if (!isset($permissions[$role])) {
        return false;
    }

    if (in_array('*', $permissions[$role], true)) {
        return true;
    }

    return in_array($route, $permissions[$role], true);
}


// echo canAccess('editor', '/posts');      // true ✅
echo canAccess('editor', '/dashboard');  // true
echo canAccess('editor', '/users');      // false

// echo canAccess('user', '/dashboard');    // true
echo canAccess('user', '/posts');        // false

// echo canAccess('admin', '/anything');    // true
echo canAccess('guest', '/dashboard');   // false
