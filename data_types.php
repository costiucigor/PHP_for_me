<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz Dashboard</title>
</head>
<body>
<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
<h2>Quiz Categories:</h2>
<ul>
    <li><a href="quiz.php?category=science">Science</a></li>
    <li><a href="quiz.php?category=history">History</a></li>
    <li><a href="quiz.php?category=geography">Geography</a></li>
</ul>
<a href="logout.php">Logout</a>
</body>
</html>

