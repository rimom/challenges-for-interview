<?php
/**
 * FizBuzz Test
 *
 * show all numbers from 0 to 100 under the rulers:
 * 1 - When the number is divisible by 3, show "Fizz"
 * 2 - When the number is divisible by 5, show "Buzz"
 * 3 - When the number is divisible by 3 and 5, show "FizzBuzz"
 *
 * @Author Rimom costa <rimomcosta@gmail.com>
 *
 * Use php-cli
 *
 */

for ($i = 0; $i <= 100; $i++){
    $result = ($i % 3) == 0 ? 'Fizz' : '';
    $result .= ($i % 5) == 0 ? 'Buzz' : '';
    echo ($result ?: $i) . PHP_EOL;
}
