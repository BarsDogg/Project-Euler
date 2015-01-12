<?php

$j = 999;
$i = 999;
$bigProd=12; //something not palindrome, and not 0


for (;;) {
    if (NumberReverse($bigProd) == $bigProd) {
        echo "The biggest palindrome product is: " . $bigProd . "\r\n";
        echo "\$j value = " . $j . "\$i value = " . $i . "\r\n" . "\r\n";
        break;
    } else if ($j < 800) {
        echo "Number \$j fell under 800!" . "\r\n";
        $j=999;
        $i--;
    } else {
        $bigProd = $i * $j;
        echo "the product value is: ".$bigProd."\r\n";
        $j--;
        echo "\$j value = " . $j . ", and \$i value = " . $i . "\r\n";
    }
}

function NumberReverse($num) {
    $revNum = 0;
    do {
        $revNum = ($revNum * 10) + ($num % 10);
        $num = (int)($num / 10);
    } while ($num > 0);
    return $revNum;
}