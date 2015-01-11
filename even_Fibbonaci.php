<?php

$bigArr = array (1,2,3,5);
$sum_of_even=2;
for($x = 3; $x < 40; $x++) {

    echo "the value of \$x is: ".$x."\r\n";
    $Val_one_before = $bigArr[$x-1];
    $Val_two_before = $bigArr[$x-2];
    echo "one before: ".$Val_one_before."\r\n";
    echo "two before: ".$Val_two_before."\r\n";
    $sum_of_previous = $Val_two_before+$Val_one_before;
    if ($sum_of_previous < 4000000) {
        $bigArr[$x] = $sum_of_previous;
        if ($bigArr[$x]%2==0){
            $sum_of_even += $bigArr[$x];
            echo "val on index ".$x." is even!, added to the sum"."\r\n"."\r\n";
        }
    } else if ($sum_of_previous > 4000000) {
        echo "ends on index: " . $x;
        break;
    }
}
echo "\r\n"."the sum of even Fibonacci numbers is: ".$sum_of_even;