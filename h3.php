<?php
session_start();
session_destroy();
header("Location: h2.php"); // Redirect to the homepage after logout
exit();
?>
