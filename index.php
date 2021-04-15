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
include('functions.php');
?>
  <h1>Pair Program 2</h1>
    <?php
    $numbers = array("7", "9", "8", "9", "8", "8", "6");
    echo
    "<h2> PHP Array Practice</h2>",
    "<h3>2. Define an Array of numbers </h3>",
    "<p>" . printArr($numbers) . "</p>";


    ?>
</body>
</html>