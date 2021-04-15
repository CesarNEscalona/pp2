<?php
function printArr($numbers)
{
    foreach ($numbers as $number){
        echo "$number <br>";
    }
}

function largest($numbers) {
     echo "The largest number in the array is " . (max($numbers). ".");
}

function removeDups($numbers) {
    $result = (array_unique($numbers));
    echo "After removing duplicate values, the array contains the numbers below.<br>";
    foreach ($result as $number){
        echo "$number <br>";
    }
}