<?php
session_start();
unset($_SESSION['uid']);
header("Location: http://" . $_SERVER['HTTP_HOST'] . "/index.php");
die();
?>
