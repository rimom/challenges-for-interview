<?php
/**
 * Find a missing element from an array
 * 
 * Write a PHP script to generate a random array of 500 integers (values of 1 – 500 inclusive).
 * Randomly remove and discard an arbitary element from this newly generated array.
 * Write the code to efficiently determine the value of the missing element.
 * Explain your reasoning with comments.
 *
 *
 * @Author Rimom costa <rimomcosta@gmail.com>
 *
 * Use php-cli
 *
 */



/**
 * Option 1 - If input is an array with random values (Array with random values until 500 integers)
 */
echo 'Option 1 - If input is an array with random values:' . PHP_EOL;
 //input
 $array = [];
for ($i = 0; $i < 500; $i++) {
    $array[] = random_int(1,500);
}

//sum all array ellements
$allElementsSum = array_sum($array); //Efficiency cost O(n)

//select a random element to remove
$removeIndex = random_int(0,499);
echo 'Random element selected to be removed: '. $array[$removeIndex]. PHP_EOL;
//remove the selected element from array
unset($array[$removeIndex]);

//sum all the element left on array
$leftElementSum = array_sum($array); //Efficiency cost O(n)

echo 'Missing element found by the Algo: ' . ($allElementsSum - $leftElementSum) . PHP_EOL;
echo PHP_EOL;
//Total Efficiency cost: O(2n)



/**
 * Option 2 - If input is a sequential sorted array (random array of 500 integers)
 */
echo 'Option 2 - If input is a sequential sorted array:' . PHP_EOL;
 //input
 $array = [];
for ($i = 0; $i < 500; $i++) {
    $array[] = $i;
}

//select a random element to remove
$removeIndex = random_int(0,499);
echo 'Random element selected to be removed: '. $array[$removeIndex]. PHP_EOL;
//remove the selected element from array
unset($array[$removeIndex]);

for ($i=0; $i<500; $i++){
    if (!isset($array[$i])){
        $elementMissing = $array[$i-1]+1;
        break;
    }
}

echo 'Missing element found by the Algo: ' . $elementMissing . PHP_EOL;
echo PHP_EOL;
//Total Efficiency cost: O(n)



/**
 * Another way would be using array_diff() and
 * get the missing elements between two arrays
 * I guess the cost of it would be O(2n) or O(nˆ2), 
 * to confirm it I have to install the php extension "vld" in order to
 * see the iterations in low-level and do the proper comparison
 * 
 */
