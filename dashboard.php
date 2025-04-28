<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<h2>Welcome to your Dashboard, <?php echo htmlspecialchars($username); ?>!</h2>
<p>This is a protected area accessible only to logged-in users.</p>
<p><a href="logout.php">Logout</a></p>
</body>
</html>
