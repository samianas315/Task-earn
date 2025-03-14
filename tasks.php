<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "Please login first.";
    exit();
}
echo "<h1>Earn Money by Completing Tasks</h1>";
echo "<ul><li>Watch Video - Earn 10 Coins</li><li>Complete Survey - Earn 20 Coins</li></ul>";
?>
<a href="logout.php">Logout</a>
