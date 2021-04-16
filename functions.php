<?php
/**
 * Author: Cesar Escalona
 * Date: 04/15/2021
 * URL: https://cescalona.greenriverdev.com/328/pp2/index.php
 * Pair Program 2
 */

// Print each number from the array of numbers on a separate line
function printArr($numbers)
{
    foreach ($numbers as $number){
        echo "$number <br>";
    }
}

// Print the largest number in the array
function largest($numbers) {
     echo "The largest number in the array is " . (max($numbers). ".");
}

// Remove any duplicate numbers from the array
function removeDups($numbers) {
    $result = (array_unique($numbers));
    echo "After removing duplicate values, the array contains the numbers below.<br>";
    foreach ($result as $number){
        echo "$number <br>";
    }
}

// return an associative array with each value of the original array sorted in order
function distribution($numbers) {
    asort($numbers);
    print_r(array_count_values($numbers));
}