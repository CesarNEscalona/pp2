<?php
/**
 * Author: Cesar Escalona
 * Date: 04/15/2021
 * URL: https://cescalona.greenriverdev.com/328/pp2/index.php
 * Pair Program 2
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 2</title>
</head>
<body>
<?php
// Include the functions page
include('functions.php');
?>
  <h1>Pair Program 2</h1>
    <?php
    // original array of numbers
    $numbers = array("7", "9", "8", "9", "8", "8", "6");
    echo
        "<h3>1. PHP Array Practice</h3>",
        "<h3>2. Define an Array of numbers </h3>",
        // call my functions
        "<p>" . printArr($numbers) . "</p>",
        "<h3>3. Move the print function to an include page: Complete &#x2713; </h3>",
        "<h3>4. Return the largest value in the array </h3>",
        "<p>" . largest($numbers) . "</p>",
        "<h3>5. Remove any duplicates from the array </h3>",
        "<p>" . removeDups($numbers) . "</p>",
        "<h3>6. Return a sorted associative array that also shows how many
                times the value occurs in the original array</h3>",
        "<p>" . distribution($numbers) . "</p>";
    ?>
</body>
</html>