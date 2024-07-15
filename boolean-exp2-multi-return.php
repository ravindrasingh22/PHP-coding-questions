<?php
function isEligible($age, $hasPermission) {
    if ($age > 18 && !$hasPermission) {
        return false;
    } elseif ($age > 18 || $hasPermission) {
        return true;
    } else {
        return false;
    }
}

// Simplify the function

?>