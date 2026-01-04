<?php

function validateUser(array $data): array{
   $errors = [] ;

   if (!isset($data['name']) || !is_string($data['name']) || strlen(trim($data['name'])) < 3) {
    $errors [] = 'name kiritilishi va 3 ta dan ortiq belgidan iborat bolishi majburiy' ;
   }

   if (!isset($data['email']) || !filter_var($data['email'] , FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'email notogri formatda';
   }

   if (!isset($data['age']) || !is_numeric($data['age']) || (int)$data['age'] <= 18) {
     $errors[] = 'age 18 dan katta bolishi darkor';
   }

   if (!empty($errors)) {
     return $errors ;
   }

   return ['succses ' => true];
}

$data = [
    'name' => 'Ali',
    'email' => 'ali@gmail.com',
    'age' => 20
];

print_r(validateUser($data));

