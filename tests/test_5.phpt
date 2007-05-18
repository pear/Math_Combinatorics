--TEST--
Check subset size equal to one
--FILE--
<?php

require_once 'Math/Combinatorics.php';

$combinatorics = new Math_Combinatorics;
var_dump($combinatorics->combinations(array('a','b'), 1));
var_dump($combinatorics->permutations(array('a','b'), 1));

?>
--EXPECT--
array(2) {
  [0]=>
  array(1) {
    [0]=>
    string(1) "a"
  }
  [1]=>
  array(1) {
    [0]=>
    string(1) "b"
  }
}
array(2) {
  [0]=>
  array(1) {
    [0]=>
    string(1) "a"
  }
  [1]=>
  array(1) {
    [0]=>
    string(1) "b"
  }
}
