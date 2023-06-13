<?php
include "data_types.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Countdown to Sports Car</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #FF0000;
        }

        .countdown {
            font-size: 24px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<h1>Countdown to Sports Car</h1>

<?php
echo "<br>";
echo "Eu o sa îmi cumpăr un sport car peste un an!";
echo "<br>";
echo date(DATE_RSS);

echo "<br>";
echo "<br>";
echo "<h2>Additional functionality:</h2>";

$targetDate = strtotime("+1 year");
$currentDate = time();
$secondsDiff = $targetDate - $currentDate;
$daysDiff = floor($secondsDiff / (60 * 60 * 24));
?>

<div class="countdown">
    Days until I buy a sports car: <?php echo $daysDiff; ?> days
</div>
</body>
</html>