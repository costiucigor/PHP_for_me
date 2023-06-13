<?php
include "data_types.php";

echo "<br>";
echo "Eu o sa îmi cumpăr un sport car peste un an!";
echo "<br>";
echo date(DATE_RSS);

echo "<br>";
echo "<br>";
echo "Additional functionality:";
echo "<br>";

$targetDate = strtotime("+1 year");
$currentDate = time();
$secondsDiff = $targetDate - $currentDate;
$daysDiff = floor($secondsDiff / (60 * 60 * 24));

echo "Days until I buy a sports car: " . $daysDiff . " days";
?>


