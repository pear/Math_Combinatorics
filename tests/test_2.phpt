--TEST--
Check correct permutations
--FILE--
<?php

require_once 'Math/Combinatorics.php';

$combinatorics = new Math_Combinatorics;
var_dump($combinatorics->permutations(array(
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
array(336) {
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
    ["three"]=>
    string(1) "c"
    ["two"]=>
    string(1) "b"
  }
  [2]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
    ["one"]=>
    string(1) "a"
  }
  [3]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["one"]=>
    string(1) "a"
    ["three"]=>
    string(1) "c"
  }
  [4]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
  }
  [5]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["two"]=>
    string(1) "b"
    ["one"]=>
    string(1) "a"
  }
  [6]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
  }
  [7]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["four"]=>
    string(1) "d"
    ["two"]=>
    string(1) "b"
  }
  [8]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
    ["one"]=>
    string(1) "a"
  }
  [9]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["one"]=>
    string(1) "a"
    ["four"]=>
    string(1) "d"
  }
  [10]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
  }
  [11]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["two"]=>
    string(1) "b"
    ["one"]=>
    string(1) "a"
  }
  [12]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
    ["five"]=>
    string(1) "e"
  }
  [13]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["five"]=>
    string(1) "e"
    ["two"]=>
    string(1) "b"
  }
  [14]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["five"]=>
    string(1) "e"
    ["one"]=>
    string(1) "a"
  }
  [15]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["one"]=>
    string(1) "a"
    ["five"]=>
    string(1) "e"
  }
  [16]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
  }
  [17]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["two"]=>
    string(1) "b"
    ["one"]=>
    string(1) "a"
  }
  [18]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
    ["six"]=>
    string(1) "f"
  }
  [19]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["six"]=>
    string(1) "f"
    ["two"]=>
    string(1) "b"
  }
  [20]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["six"]=>
    string(1) "f"
    ["one"]=>
    string(1) "a"
  }
  [21]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["one"]=>
    string(1) "a"
    ["six"]=>
    string(1) "f"
  }
  [22]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
  }
  [23]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["two"]=>
    string(1) "b"
    ["one"]=>
    string(1) "a"
  }
  [24]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
    ["seven"]=>
    string(1) "g"
  }
  [25]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["seven"]=>
    string(1) "g"
    ["two"]=>
    string(1) "b"
  }
  [26]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["seven"]=>
    string(1) "g"
    ["one"]=>
    string(1) "a"
  }
  [27]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["one"]=>
    string(1) "a"
    ["seven"]=>
    string(1) "g"
  }
  [28]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
  }
  [29]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["two"]=>
    string(1) "b"
    ["one"]=>
    string(1) "a"
  }
  [30]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
    ["eight"]=>
    string(1) "h"
  }
  [31]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["eight"]=>
    string(1) "h"
    ["two"]=>
    string(1) "b"
  }
  [32]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["eight"]=>
    string(1) "h"
    ["one"]=>
    string(1) "a"
  }
  [33]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["one"]=>
    string(1) "a"
    ["eight"]=>
    string(1) "h"
  }
  [34]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["one"]=>
    string(1) "a"
    ["two"]=>
    string(1) "b"
  }
  [35]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["two"]=>
    string(1) "b"
    ["one"]=>
    string(1) "a"
  }
  [36]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
  }
  [37]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["four"]=>
    string(1) "d"
    ["three"]=>
    string(1) "c"
  }
  [38]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
    ["one"]=>
    string(1) "a"
  }
  [39]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["one"]=>
    string(1) "a"
    ["four"]=>
    string(1) "d"
  }
  [40]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["one"]=>
    string(1) "a"
    ["three"]=>
    string(1) "c"
  }
  [41]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["three"]=>
    string(1) "c"
    ["one"]=>
    string(1) "a"
  }
  [42]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
  }
  [43]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["five"]=>
    string(1) "e"
    ["three"]=>
    string(1) "c"
  }
  [44]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
    ["one"]=>
    string(1) "a"
  }
  [45]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["one"]=>
    string(1) "a"
    ["five"]=>
    string(1) "e"
  }
  [46]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["one"]=>
    string(1) "a"
    ["three"]=>
    string(1) "c"
  }
  [47]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["three"]=>
    string(1) "c"
    ["one"]=>
    string(1) "a"
  }
  [48]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["three"]=>
    string(1) "c"
    ["six"]=>
    string(1) "f"
  }
  [49]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["six"]=>
    string(1) "f"
    ["three"]=>
    string(1) "c"
  }
  [50]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["six"]=>
    string(1) "f"
    ["one"]=>
    string(1) "a"
  }
  [51]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["one"]=>
    string(1) "a"
    ["six"]=>
    string(1) "f"
  }
  [52]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["one"]=>
    string(1) "a"
    ["three"]=>
    string(1) "c"
  }
  [53]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["three"]=>
    string(1) "c"
    ["one"]=>
    string(1) "a"
  }
  [54]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["three"]=>
    string(1) "c"
    ["seven"]=>
    string(1) "g"
  }
  [55]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["seven"]=>
    string(1) "g"
    ["three"]=>
    string(1) "c"
  }
  [56]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["seven"]=>
    string(1) "g"
    ["one"]=>
    string(1) "a"
  }
  [57]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["one"]=>
    string(1) "a"
    ["seven"]=>
    string(1) "g"
  }
  [58]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["one"]=>
    string(1) "a"
    ["three"]=>
    string(1) "c"
  }
  [59]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["three"]=>
    string(1) "c"
    ["one"]=>
    string(1) "a"
  }
  [60]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["three"]=>
    string(1) "c"
    ["eight"]=>
    string(1) "h"
  }
  [61]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["eight"]=>
    string(1) "h"
    ["three"]=>
    string(1) "c"
  }
  [62]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["eight"]=>
    string(1) "h"
    ["one"]=>
    string(1) "a"
  }
  [63]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["one"]=>
    string(1) "a"
    ["eight"]=>
    string(1) "h"
  }
  [64]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["one"]=>
    string(1) "a"
    ["three"]=>
    string(1) "c"
  }
  [65]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["three"]=>
    string(1) "c"
    ["one"]=>
    string(1) "a"
  }
  [66]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
  }
  [67]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["five"]=>
    string(1) "e"
    ["four"]=>
    string(1) "d"
  }
  [68]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
    ["one"]=>
    string(1) "a"
  }
  [69]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["one"]=>
    string(1) "a"
    ["five"]=>
    string(1) "e"
  }
  [70]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["one"]=>
    string(1) "a"
    ["four"]=>
    string(1) "d"
  }
  [71]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["four"]=>
    string(1) "d"
    ["one"]=>
    string(1) "a"
  }
  [72]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
  }
  [73]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["six"]=>
    string(1) "f"
    ["four"]=>
    string(1) "d"
  }
  [74]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
    ["one"]=>
    string(1) "a"
  }
  [75]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["one"]=>
    string(1) "a"
    ["six"]=>
    string(1) "f"
  }
  [76]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["one"]=>
    string(1) "a"
    ["four"]=>
    string(1) "d"
  }
  [77]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["four"]=>
    string(1) "d"
    ["one"]=>
    string(1) "a"
  }
  [78]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["four"]=>
    string(1) "d"
    ["seven"]=>
    string(1) "g"
  }
  [79]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["seven"]=>
    string(1) "g"
    ["four"]=>
    string(1) "d"
  }
  [80]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["seven"]=>
    string(1) "g"
    ["one"]=>
    string(1) "a"
  }
  [81]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["one"]=>
    string(1) "a"
    ["seven"]=>
    string(1) "g"
  }
  [82]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["one"]=>
    string(1) "a"
    ["four"]=>
    string(1) "d"
  }
  [83]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["four"]=>
    string(1) "d"
    ["one"]=>
    string(1) "a"
  }
  [84]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["four"]=>
    string(1) "d"
    ["eight"]=>
    string(1) "h"
  }
  [85]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["eight"]=>
    string(1) "h"
    ["four"]=>
    string(1) "d"
  }
  [86]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["eight"]=>
    string(1) "h"
    ["one"]=>
    string(1) "a"
  }
  [87]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["one"]=>
    string(1) "a"
    ["eight"]=>
    string(1) "h"
  }
  [88]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["one"]=>
    string(1) "a"
    ["four"]=>
    string(1) "d"
  }
  [89]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["four"]=>
    string(1) "d"
    ["one"]=>
    string(1) "a"
  }
  [90]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
  }
  [91]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["six"]=>
    string(1) "f"
    ["five"]=>
    string(1) "e"
  }
  [92]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
    ["one"]=>
    string(1) "a"
  }
  [93]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["one"]=>
    string(1) "a"
    ["six"]=>
    string(1) "f"
  }
  [94]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["one"]=>
    string(1) "a"
    ["five"]=>
    string(1) "e"
  }
  [95]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["five"]=>
    string(1) "e"
    ["one"]=>
    string(1) "a"
  }
  [96]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
  }
  [97]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["seven"]=>
    string(1) "g"
    ["five"]=>
    string(1) "e"
  }
  [98]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
    ["one"]=>
    string(1) "a"
  }
  [99]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["one"]=>
    string(1) "a"
    ["seven"]=>
    string(1) "g"
  }
  [100]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["one"]=>
    string(1) "a"
    ["five"]=>
    string(1) "e"
  }
  [101]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["five"]=>
    string(1) "e"
    ["one"]=>
    string(1) "a"
  }
  [102]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["five"]=>
    string(1) "e"
    ["eight"]=>
    string(1) "h"
  }
  [103]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["eight"]=>
    string(1) "h"
    ["five"]=>
    string(1) "e"
  }
  [104]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["eight"]=>
    string(1) "h"
    ["one"]=>
    string(1) "a"
  }
  [105]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["one"]=>
    string(1) "a"
    ["eight"]=>
    string(1) "h"
  }
  [106]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["one"]=>
    string(1) "a"
    ["five"]=>
    string(1) "e"
  }
  [107]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["five"]=>
    string(1) "e"
    ["one"]=>
    string(1) "a"
  }
  [108]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
  }
  [109]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["seven"]=>
    string(1) "g"
    ["six"]=>
    string(1) "f"
  }
  [110]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
    ["one"]=>
    string(1) "a"
  }
  [111]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["one"]=>
    string(1) "a"
    ["seven"]=>
    string(1) "g"
  }
  [112]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["one"]=>
    string(1) "a"
    ["six"]=>
    string(1) "f"
  }
  [113]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["six"]=>
    string(1) "f"
    ["one"]=>
    string(1) "a"
  }
  [114]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
  }
  [115]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["eight"]=>
    string(1) "h"
    ["six"]=>
    string(1) "f"
  }
  [116]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
    ["one"]=>
    string(1) "a"
  }
  [117]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["one"]=>
    string(1) "a"
    ["eight"]=>
    string(1) "h"
  }
  [118]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["one"]=>
    string(1) "a"
    ["six"]=>
    string(1) "f"
  }
  [119]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["six"]=>
    string(1) "f"
    ["one"]=>
    string(1) "a"
  }
  [120]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
  }
  [121]=>
  array(3) {
    ["one"]=>
    string(1) "a"
    ["eight"]=>
    string(1) "h"
    ["seven"]=>
    string(1) "g"
  }
  [122]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
    ["one"]=>
    string(1) "a"
  }
  [123]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["one"]=>
    string(1) "a"
    ["eight"]=>
    string(1) "h"
  }
  [124]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["one"]=>
    string(1) "a"
    ["seven"]=>
    string(1) "g"
  }
  [125]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["seven"]=>
    string(1) "g"
    ["one"]=>
    string(1) "a"
  }
  [126]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
  }
  [127]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
    ["three"]=>
    string(1) "c"
  }
  [128]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
    ["two"]=>
    string(1) "b"
  }
  [129]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
  }
  [130]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
  }
  [131]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["three"]=>
    string(1) "c"
    ["two"]=>
    string(1) "b"
  }
  [132]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
  }
  [133]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["five"]=>
    string(1) "e"
    ["three"]=>
    string(1) "c"
  }
  [134]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
    ["two"]=>
    string(1) "b"
  }
  [135]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["two"]=>
    string(1) "b"
    ["five"]=>
    string(1) "e"
  }
  [136]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
  }
  [137]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["three"]=>
    string(1) "c"
    ["two"]=>
    string(1) "b"
  }
  [138]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
    ["six"]=>
    string(1) "f"
  }
  [139]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["six"]=>
    string(1) "f"
    ["three"]=>
    string(1) "c"
  }
  [140]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["six"]=>
    string(1) "f"
    ["two"]=>
    string(1) "b"
  }
  [141]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["two"]=>
    string(1) "b"
    ["six"]=>
    string(1) "f"
  }
  [142]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
  }
  [143]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["three"]=>
    string(1) "c"
    ["two"]=>
    string(1) "b"
  }
  [144]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
    ["seven"]=>
    string(1) "g"
  }
  [145]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["seven"]=>
    string(1) "g"
    ["three"]=>
    string(1) "c"
  }
  [146]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["seven"]=>
    string(1) "g"
    ["two"]=>
    string(1) "b"
  }
  [147]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["two"]=>
    string(1) "b"
    ["seven"]=>
    string(1) "g"
  }
  [148]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
  }
  [149]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["three"]=>
    string(1) "c"
    ["two"]=>
    string(1) "b"
  }
  [150]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
    ["eight"]=>
    string(1) "h"
  }
  [151]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["eight"]=>
    string(1) "h"
    ["three"]=>
    string(1) "c"
  }
  [152]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["eight"]=>
    string(1) "h"
    ["two"]=>
    string(1) "b"
  }
  [153]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["two"]=>
    string(1) "b"
    ["eight"]=>
    string(1) "h"
  }
  [154]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["two"]=>
    string(1) "b"
    ["three"]=>
    string(1) "c"
  }
  [155]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["three"]=>
    string(1) "c"
    ["two"]=>
    string(1) "b"
  }
  [156]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
  }
  [157]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["five"]=>
    string(1) "e"
    ["four"]=>
    string(1) "d"
  }
  [158]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
    ["two"]=>
    string(1) "b"
  }
  [159]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["two"]=>
    string(1) "b"
    ["five"]=>
    string(1) "e"
  }
  [160]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
  }
  [161]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["four"]=>
    string(1) "d"
    ["two"]=>
    string(1) "b"
  }
  [162]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
  }
  [163]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["six"]=>
    string(1) "f"
    ["four"]=>
    string(1) "d"
  }
  [164]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
    ["two"]=>
    string(1) "b"
  }
  [165]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["two"]=>
    string(1) "b"
    ["six"]=>
    string(1) "f"
  }
  [166]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
  }
  [167]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["four"]=>
    string(1) "d"
    ["two"]=>
    string(1) "b"
  }
  [168]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
    ["seven"]=>
    string(1) "g"
  }
  [169]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["seven"]=>
    string(1) "g"
    ["four"]=>
    string(1) "d"
  }
  [170]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["seven"]=>
    string(1) "g"
    ["two"]=>
    string(1) "b"
  }
  [171]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["two"]=>
    string(1) "b"
    ["seven"]=>
    string(1) "g"
  }
  [172]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
  }
  [173]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["four"]=>
    string(1) "d"
    ["two"]=>
    string(1) "b"
  }
  [174]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
    ["eight"]=>
    string(1) "h"
  }
  [175]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["eight"]=>
    string(1) "h"
    ["four"]=>
    string(1) "d"
  }
  [176]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["eight"]=>
    string(1) "h"
    ["two"]=>
    string(1) "b"
  }
  [177]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["two"]=>
    string(1) "b"
    ["eight"]=>
    string(1) "h"
  }
  [178]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["two"]=>
    string(1) "b"
    ["four"]=>
    string(1) "d"
  }
  [179]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["four"]=>
    string(1) "d"
    ["two"]=>
    string(1) "b"
  }
  [180]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
  }
  [181]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["six"]=>
    string(1) "f"
    ["five"]=>
    string(1) "e"
  }
  [182]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
    ["two"]=>
    string(1) "b"
  }
  [183]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["two"]=>
    string(1) "b"
    ["six"]=>
    string(1) "f"
  }
  [184]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["two"]=>
    string(1) "b"
    ["five"]=>
    string(1) "e"
  }
  [185]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["five"]=>
    string(1) "e"
    ["two"]=>
    string(1) "b"
  }
  [186]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
  }
  [187]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["seven"]=>
    string(1) "g"
    ["five"]=>
    string(1) "e"
  }
  [188]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
    ["two"]=>
    string(1) "b"
  }
  [189]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["two"]=>
    string(1) "b"
    ["seven"]=>
    string(1) "g"
  }
  [190]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["two"]=>
    string(1) "b"
    ["five"]=>
    string(1) "e"
  }
  [191]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["five"]=>
    string(1) "e"
    ["two"]=>
    string(1) "b"
  }
  [192]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["five"]=>
    string(1) "e"
    ["eight"]=>
    string(1) "h"
  }
  [193]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["eight"]=>
    string(1) "h"
    ["five"]=>
    string(1) "e"
  }
  [194]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["eight"]=>
    string(1) "h"
    ["two"]=>
    string(1) "b"
  }
  [195]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["two"]=>
    string(1) "b"
    ["eight"]=>
    string(1) "h"
  }
  [196]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["two"]=>
    string(1) "b"
    ["five"]=>
    string(1) "e"
  }
  [197]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["five"]=>
    string(1) "e"
    ["two"]=>
    string(1) "b"
  }
  [198]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
  }
  [199]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["seven"]=>
    string(1) "g"
    ["six"]=>
    string(1) "f"
  }
  [200]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
    ["two"]=>
    string(1) "b"
  }
  [201]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["two"]=>
    string(1) "b"
    ["seven"]=>
    string(1) "g"
  }
  [202]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["two"]=>
    string(1) "b"
    ["six"]=>
    string(1) "f"
  }
  [203]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["six"]=>
    string(1) "f"
    ["two"]=>
    string(1) "b"
  }
  [204]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
  }
  [205]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["eight"]=>
    string(1) "h"
    ["six"]=>
    string(1) "f"
  }
  [206]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
    ["two"]=>
    string(1) "b"
  }
  [207]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["two"]=>
    string(1) "b"
    ["eight"]=>
    string(1) "h"
  }
  [208]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["two"]=>
    string(1) "b"
    ["six"]=>
    string(1) "f"
  }
  [209]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["six"]=>
    string(1) "f"
    ["two"]=>
    string(1) "b"
  }
  [210]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
  }
  [211]=>
  array(3) {
    ["two"]=>
    string(1) "b"
    ["eight"]=>
    string(1) "h"
    ["seven"]=>
    string(1) "g"
  }
  [212]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
    ["two"]=>
    string(1) "b"
  }
  [213]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["two"]=>
    string(1) "b"
    ["eight"]=>
    string(1) "h"
  }
  [214]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["two"]=>
    string(1) "b"
    ["seven"]=>
    string(1) "g"
  }
  [215]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["seven"]=>
    string(1) "g"
    ["two"]=>
    string(1) "b"
  }
  [216]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
  }
  [217]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
    ["four"]=>
    string(1) "d"
  }
  [218]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
    ["three"]=>
    string(1) "c"
  }
  [219]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
  }
  [220]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
  }
  [221]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["four"]=>
    string(1) "d"
    ["three"]=>
    string(1) "c"
  }
  [222]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
  }
  [223]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["six"]=>
    string(1) "f"
    ["four"]=>
    string(1) "d"
  }
  [224]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
    ["three"]=>
    string(1) "c"
  }
  [225]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["three"]=>
    string(1) "c"
    ["six"]=>
    string(1) "f"
  }
  [226]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
  }
  [227]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["four"]=>
    string(1) "d"
    ["three"]=>
    string(1) "c"
  }
  [228]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
    ["seven"]=>
    string(1) "g"
  }
  [229]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["seven"]=>
    string(1) "g"
    ["four"]=>
    string(1) "d"
  }
  [230]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["seven"]=>
    string(1) "g"
    ["three"]=>
    string(1) "c"
  }
  [231]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["three"]=>
    string(1) "c"
    ["seven"]=>
    string(1) "g"
  }
  [232]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
  }
  [233]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["four"]=>
    string(1) "d"
    ["three"]=>
    string(1) "c"
  }
  [234]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
    ["eight"]=>
    string(1) "h"
  }
  [235]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["eight"]=>
    string(1) "h"
    ["four"]=>
    string(1) "d"
  }
  [236]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["eight"]=>
    string(1) "h"
    ["three"]=>
    string(1) "c"
  }
  [237]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["three"]=>
    string(1) "c"
    ["eight"]=>
    string(1) "h"
  }
  [238]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["three"]=>
    string(1) "c"
    ["four"]=>
    string(1) "d"
  }
  [239]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["four"]=>
    string(1) "d"
    ["three"]=>
    string(1) "c"
  }
  [240]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
  }
  [241]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["six"]=>
    string(1) "f"
    ["five"]=>
    string(1) "e"
  }
  [242]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
    ["three"]=>
    string(1) "c"
  }
  [243]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["three"]=>
    string(1) "c"
    ["six"]=>
    string(1) "f"
  }
  [244]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
  }
  [245]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["five"]=>
    string(1) "e"
    ["three"]=>
    string(1) "c"
  }
  [246]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
  }
  [247]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["seven"]=>
    string(1) "g"
    ["five"]=>
    string(1) "e"
  }
  [248]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
    ["three"]=>
    string(1) "c"
  }
  [249]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["three"]=>
    string(1) "c"
    ["seven"]=>
    string(1) "g"
  }
  [250]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
  }
  [251]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["five"]=>
    string(1) "e"
    ["three"]=>
    string(1) "c"
  }
  [252]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
    ["eight"]=>
    string(1) "h"
  }
  [253]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["eight"]=>
    string(1) "h"
    ["five"]=>
    string(1) "e"
  }
  [254]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["eight"]=>
    string(1) "h"
    ["three"]=>
    string(1) "c"
  }
  [255]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["three"]=>
    string(1) "c"
    ["eight"]=>
    string(1) "h"
  }
  [256]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["three"]=>
    string(1) "c"
    ["five"]=>
    string(1) "e"
  }
  [257]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["five"]=>
    string(1) "e"
    ["three"]=>
    string(1) "c"
  }
  [258]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
  }
  [259]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["seven"]=>
    string(1) "g"
    ["six"]=>
    string(1) "f"
  }
  [260]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
    ["three"]=>
    string(1) "c"
  }
  [261]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["three"]=>
    string(1) "c"
    ["seven"]=>
    string(1) "g"
  }
  [262]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["three"]=>
    string(1) "c"
    ["six"]=>
    string(1) "f"
  }
  [263]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["six"]=>
    string(1) "f"
    ["three"]=>
    string(1) "c"
  }
  [264]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
  }
  [265]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["eight"]=>
    string(1) "h"
    ["six"]=>
    string(1) "f"
  }
  [266]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
    ["three"]=>
    string(1) "c"
  }
  [267]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["three"]=>
    string(1) "c"
    ["eight"]=>
    string(1) "h"
  }
  [268]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["three"]=>
    string(1) "c"
    ["six"]=>
    string(1) "f"
  }
  [269]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["six"]=>
    string(1) "f"
    ["three"]=>
    string(1) "c"
  }
  [270]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
  }
  [271]=>
  array(3) {
    ["three"]=>
    string(1) "c"
    ["eight"]=>
    string(1) "h"
    ["seven"]=>
    string(1) "g"
  }
  [272]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
    ["three"]=>
    string(1) "c"
  }
  [273]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["three"]=>
    string(1) "c"
    ["eight"]=>
    string(1) "h"
  }
  [274]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["three"]=>
    string(1) "c"
    ["seven"]=>
    string(1) "g"
  }
  [275]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["seven"]=>
    string(1) "g"
    ["three"]=>
    string(1) "c"
  }
  [276]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
  }
  [277]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
    ["five"]=>
    string(1) "e"
  }
  [278]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
    ["four"]=>
    string(1) "d"
  }
  [279]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
  }
  [280]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
  }
  [281]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["five"]=>
    string(1) "e"
    ["four"]=>
    string(1) "d"
  }
  [282]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
  }
  [283]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["seven"]=>
    string(1) "g"
    ["five"]=>
    string(1) "e"
  }
  [284]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
    ["four"]=>
    string(1) "d"
  }
  [285]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["four"]=>
    string(1) "d"
    ["seven"]=>
    string(1) "g"
  }
  [286]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
  }
  [287]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["five"]=>
    string(1) "e"
    ["four"]=>
    string(1) "d"
  }
  [288]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
    ["eight"]=>
    string(1) "h"
  }
  [289]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["eight"]=>
    string(1) "h"
    ["five"]=>
    string(1) "e"
  }
  [290]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["eight"]=>
    string(1) "h"
    ["four"]=>
    string(1) "d"
  }
  [291]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["four"]=>
    string(1) "d"
    ["eight"]=>
    string(1) "h"
  }
  [292]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["four"]=>
    string(1) "d"
    ["five"]=>
    string(1) "e"
  }
  [293]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["five"]=>
    string(1) "e"
    ["four"]=>
    string(1) "d"
  }
  [294]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
  }
  [295]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["seven"]=>
    string(1) "g"
    ["six"]=>
    string(1) "f"
  }
  [296]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
    ["four"]=>
    string(1) "d"
  }
  [297]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["four"]=>
    string(1) "d"
    ["seven"]=>
    string(1) "g"
  }
  [298]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
  }
  [299]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["six"]=>
    string(1) "f"
    ["four"]=>
    string(1) "d"
  }
  [300]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
  }
  [301]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["eight"]=>
    string(1) "h"
    ["six"]=>
    string(1) "f"
  }
  [302]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
    ["four"]=>
    string(1) "d"
  }
  [303]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["four"]=>
    string(1) "d"
    ["eight"]=>
    string(1) "h"
  }
  [304]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["four"]=>
    string(1) "d"
    ["six"]=>
    string(1) "f"
  }
  [305]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["six"]=>
    string(1) "f"
    ["four"]=>
    string(1) "d"
  }
  [306]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
  }
  [307]=>
  array(3) {
    ["four"]=>
    string(1) "d"
    ["eight"]=>
    string(1) "h"
    ["seven"]=>
    string(1) "g"
  }
  [308]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
    ["four"]=>
    string(1) "d"
  }
  [309]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["four"]=>
    string(1) "d"
    ["eight"]=>
    string(1) "h"
  }
  [310]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["four"]=>
    string(1) "d"
    ["seven"]=>
    string(1) "g"
  }
  [311]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["seven"]=>
    string(1) "g"
    ["four"]=>
    string(1) "d"
  }
  [312]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
  }
  [313]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
    ["six"]=>
    string(1) "f"
  }
  [314]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
    ["five"]=>
    string(1) "e"
  }
  [315]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
  }
  [316]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
  }
  [317]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["six"]=>
    string(1) "f"
    ["five"]=>
    string(1) "e"
  }
  [318]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
  }
  [319]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["eight"]=>
    string(1) "h"
    ["six"]=>
    string(1) "f"
  }
  [320]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
    ["five"]=>
    string(1) "e"
  }
  [321]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["five"]=>
    string(1) "e"
    ["eight"]=>
    string(1) "h"
  }
  [322]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["five"]=>
    string(1) "e"
    ["six"]=>
    string(1) "f"
  }
  [323]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["six"]=>
    string(1) "f"
    ["five"]=>
    string(1) "e"
  }
  [324]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
  }
  [325]=>
  array(3) {
    ["five"]=>
    string(1) "e"
    ["eight"]=>
    string(1) "h"
    ["seven"]=>
    string(1) "g"
  }
  [326]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
    ["five"]=>
    string(1) "e"
  }
  [327]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["five"]=>
    string(1) "e"
    ["eight"]=>
    string(1) "h"
  }
  [328]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["five"]=>
    string(1) "e"
    ["seven"]=>
    string(1) "g"
  }
  [329]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["seven"]=>
    string(1) "g"
    ["five"]=>
    string(1) "e"
  }
  [330]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
  }
  [331]=>
  array(3) {
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
    ["seven"]=>
    string(1) "g"
  }
  [332]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["eight"]=>
    string(1) "h"
    ["six"]=>
    string(1) "f"
  }
  [333]=>
  array(3) {
    ["seven"]=>
    string(1) "g"
    ["six"]=>
    string(1) "f"
    ["eight"]=>
    string(1) "h"
  }
  [334]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["six"]=>
    string(1) "f"
    ["seven"]=>
    string(1) "g"
  }
  [335]=>
  array(3) {
    ["eight"]=>
    string(1) "h"
    ["seven"]=>
    string(1) "g"
    ["six"]=>
    string(1) "f"
  }
}
