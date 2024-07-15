<?php
function checkConditions($x, $y) {
    if (($x > 10 && $y < 5) || ($x > 10 && $y == 3)) {
        return true;
    } else {
        return false;
    }
}

// Simplify the function
?>