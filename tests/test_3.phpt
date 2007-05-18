--TEST--
Check subset size larger than array size
--FILE--
<?php

require_once 'Math/Combinatorics.php';

$combinatorics = new Math_Combinatorics;
var_dump($combinatorics->combinations(array('a','b'), 3));
var_dump($combinatorics->permutations(array('a','b'), 3));

?>
--EXPECT--
array(1) {
  [0]=>
  array(2) {
    [0]=>
    string(1) "a"
    [1]=>
    string(1) "b"
  }
}
array(2) {
  [0]=>
  array(2) {
    [0]=>
    string(1) "a"
    [1]=>
    string(1) "b"
  }
  [1]=>
  array(2) {
    [0]=>
    string(1) "b"
    [1]=>
    string(1) "a"
  }
}
