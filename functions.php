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