<?php
/**
 * Created by PhpStorm.
 * User: misha
 * Date: 02.02.18
 * Time: 20:16
 * @param $var
 */

function printer($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    exit();
}

function swap(&$a, &$b) {
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}

/*

[4,2,3,1,6]; // 5

insertion_sort($arr, 5);

// Первый проход

$j = 1;

$j больше 0 и $s[$j] меньше $s[$j - 1] ?

// Значение на цикле
$s[$j = 1] = 2;

$s[$j - 1] // 0 = 4;

Да $s[$j] меньше чем $s[$j - 1]; True

// Действия в функции

$s[$j] меняем значение массива

со значением $s[$j - 1];

В $j пишем значение на 1 меньше

После если допустим у нас был ключ 2

мы отнимаем и получаем 1

и далее смотрим что предедущие значение

массива $s меньше чем то которое мы
установили? Если да то меняем текущее
значение сново местами

иначе выходим из цикла while.

*/

function insertion_sort(array $s, int $n) {

    $i = null;
    $j = null;

    for ($i = 1; $i<$n; $i++) {

        $j = $i;

        while ( ($j > 0) && ($s[$j]
                <
                $s[$j - 1])) {
            swap($s[$j], $s[$j - 1]);

            $j = $j - 1;

        }
    }
    return $s;
}

$a = [4,2,5,1,3,8,2];

printer(insertion_sort($a, 7));