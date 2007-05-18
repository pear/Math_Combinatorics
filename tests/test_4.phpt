--TEST--
Check subset size equal to zero
--FILE--
<?php

require_once 'Math/Combinatorics.php';

$combinatorics = new Math_Combinatorics;
var_dump($combinatorics->combinations(array('a','b'), 0));
var_dump($combinatorics->permutations(array('a','b'), 0));

?>
--EXPECT--
array(0) {
}
array(0) {
}
