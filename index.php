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
        "<h2> PHP Array Practice</h2>",
        "<h3>2. Define an Array of numbers </h3>",
        // call my functions
        "<p>" . printArr($numbers) . "</p>",
        "<p>" . largest($numbers) . "</p>",
        "<p>" . removeDups($numbers) . "</p>",
        "<p>" . distribution($numbers) . "</p>";
    ?>
</body>
</html>