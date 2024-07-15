<?php
# Problem: The function might lead to a stack overflow for large values of $n.
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo factorial(5);
?>