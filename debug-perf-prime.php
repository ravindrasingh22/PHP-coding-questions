<?php
# Problem: The function has a performance issue for large numbers.

function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$num = 29;
echo isPrime($num) ? "Prime" : "Not Prime";

?>