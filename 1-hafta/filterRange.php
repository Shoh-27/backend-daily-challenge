<?php

function filterRange(array $numbers, int $min, int $max): array{
    $result = [];

    foreach ($numbers as $number) {
        if (is_numeric($number) && $number >= $min && $number <= $max) {
            $result[] = $number;
        }
    }
    sort($result);
    
    return $result ;
}

$numbers = [10, "20", 5, 30, -3, 15, "abc", 25];
print_r(filterRange($numbers, 10, 25));
