<?php

function my_swap(&$a, &$b)
{

    $temp = $a;
    $a = $b;
    $b = $temp;
    
}
/* $a = 3;
$b = 12;
my_swap ($a, $b);

echo $a;
*/
