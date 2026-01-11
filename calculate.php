<?php
function calculate(float $a, float $b, string $op): ?float
{
    switch ($op) {
        case '+':
            return $a + $b;

        case '-':
            return $a - $b;

        case '*':
            return $a * $b;

        case '/':
            if ($b == 0.0) {
                return null;
            }
            return $a / $b;

        default:
            return null;
    }
}
