<?php

require_once 'Math/Combinatorics.php';

$combinatorics = new Math_Combinatorics;
$set = array(
    'one'   => 'a',
    'two'   => 'b',
    'three' => 'c',
    'four'  => 'd',
    'five'  => 'e',
    'six'   => 'f',
    'seven' => 'g',
    'eight' => 'h',
    );

$combinations = $combinatorics->combinations($set, 3);
$permutations = $combinatorics->permutations($set, 3);

?>
