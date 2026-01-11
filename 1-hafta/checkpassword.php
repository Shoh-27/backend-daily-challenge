<?php
function checkPassword(string $password): bool {
    $length = strlen($password);
   if($length < 8){
    return false;
   }

   $kataharf = false;
   $raqam = false ;

  for ($i=0; $i < $length; $i++) { 
    $char = $password[$i];
    if ($char >= 'A' && $char <= 'Z') {
        $kataharf = true;
    }elseif ($char >= '0' && $char <= '9') {
        $raqam = true;
    }
  }

  return $raqam && $kataharf ; 
}

var_dump(checkPassword("Abc123!x"));