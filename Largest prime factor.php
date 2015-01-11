<?php
$theNum = 600851475143;
$doneArray = array();

/*знаходим перший дільник нашого числа
якщо дільник підходить виводим його в консоль,
і запускаємо функцію рекурсивно на нове число
*/

function FactorFinder($yourNum) {
    for ($i = 2; $i < $yourNum; $i++) {
        if ($yourNum % $i == 0) {
            echo "дане значення \$i: ".$i."\r\n";
            echo "дане значення заданого числа: ".$yourNum."\r\n";
            $yourNum = $yourNum / $i;
            echo "новий дільник: " . $i . "\r\n";
            echo "new value of the number is: " . $yourNum . "\r\n" . "\r\n";
            FactorFinder($yourNum);
            //виходимо з функції після рекурсії
            break;
        }
    }
}

FactorFinder($theNum);