<?php
   
$mult_of_3 = 0;
$mult_of_5 = 0;
$common_mult = 0;
$i=0;
$j=0;
$k=0;

for ($i=0;$i<1000;$i+=3) {
    $mult_of_3 += $i;
    echo $mult_of_3." ".$i;
    echo "\r\n";
}
echo "cool line break\r\n";
for ($j=0;$j<1000;$j+=5) {
    $mult_of_5 += $j;
    echo $mult_of_5." ".$j;
    echo "\r\n";
}
echo "cool line break\r\n";
for ($k=0;$k<1000;$k+=15) {
    $common_mult += $k;
    echo $common_mult." ".$k;
    echo "\r\n";
}
echo "mult of 3 has value: ".$mult_of_3."\r\n";
echo "mult of 5 has value: ".$mult_of_5."\r\n";
echo "mult of 5 and 3 has value: ".$common_mult."\r\n";
$answer = $mult_of_3+$mult_of_5-$common_mult;
echo "and the answer would be: ".$answer;