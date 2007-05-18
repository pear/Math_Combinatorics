--TEST--
Check correct combinations
--FILE--
<?php

require_once 'Math/Combinatorics.php';

$combinatorics = new Math_Combinatorics;
var_dump($combinatorics->combinations(array(
    'one'   => 'a',
    'two'   => 'b',
    'three' => 'c',
    'four'  => 'd',
    'five'  => 'e',
    'six'   => 'f',
    'seven' => 'g',
    'eight' => 'h',
    ), 3));

?>
--EXPECT--
array(56) {
  [0]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
  }
  [1]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
  }
  [2]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
    ["five"]=>
    string(1) "e"
  }
  [3]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
    ["six"]=>
    string(1) "f"
  }
  [4]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
    ["seven"]=>
    string(1) "g"
  }
  [5]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
    ["eight"]=>
    string(1) "h"
  }
  [6]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
  }
  [7]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
  }
  [8]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["three"]=>
    string(1) "c"
    ["six"]=>
    string(1) "f"
  }
  [9]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["three"]=>
    string(1) "c"
    ["seven"]=>
    string(1) "g"
  }
  [10]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["three"]=>
    string(1) "c"
    ["eight"]=>
    string(1) "h"
  }
  [11]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
  }
  [12]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
  }
  [13]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["four"]=>
    string(1) "d"
    ["seven"]=>
    string(1) "g"
  }
  [14]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["four"]=>
    string(1) "d"
    ["eight"]=>
    string(1) "h"
  }
  [15]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
  }
  [16]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
  }
  [17]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["five"]=>
    string(1) "e"
    ["eight"]=>
    string(1) "h"
  }
  [18]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
  }
  [19]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
  }
  [20]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
  }
  [21]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
  }
  [22]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
  }
  [23]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
    ["six"]=>
    string(1) "f"
  }
  [24]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
    ["seven"]=>
    string(1) "g"
  }
  [25]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
    ["eight"]=>
    string(1) "h"
  }
  [26]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
  }
  [27]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
  }
  [28]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
    ["seven"]=>
    string(1) "g"
  }
  [29]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
    ["eight"]=>
    string(1) "h"
  }
  [30]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
  }
  [31]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
  }
  [32]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["five"]=>
    string(1) "e"
    ["eight"]=>
    string(1) "h"
  }
  [33]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
  }
  [34]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
  }
  [35]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
  }
  [36]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
  }
  [37]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
  }
  [38]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
    ["seven"]=>
    string(1) "g"
  }
  [39]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
    ["eight"]=>
    string(1) "h"
  }
  [40]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
  }
  [41]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
  }
  [42]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
    ["eight"]=>
    string(1) "h"
  }
  [43]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
  }
  [44]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
  }
  [45]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
  }
  [46]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
  }
  [47]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
  }
  [48]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
    ["eight"]=>
    string(1) "h"
  }
  [49]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
  }
  [50]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
  }
  [51]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
  }
  [52]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
  }
  [53]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
  }
  [54]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
  }
  [55]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
  }
}
