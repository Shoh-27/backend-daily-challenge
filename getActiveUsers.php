<?php
function getActiveUsers(array $users): array{
    $activeUsers = [];
    foreach ($users as $user) {
        if (isset($user['name'] , $user['active']) && $user['active'] === true) {
            $activeUsers [] = $user ;
        }
    }

    return $activeUsers ;
}

$users = [
    ['name' => 'Ali', 'active' => false],
    ['name' => 'Vali', 'active' => true],
    ['name' => 'Sami', 'active' => false],
  ];

  print_r(getActiveUsers($users));
  
