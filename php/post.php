<?php

session_start();

require_once("database.php");

$post = $_POST['post'];
$user = $_SESSION['uname'];

$sql = "INSERT INTO posts (author, message) VALUES ('". $user . "','" . $post . "')";
$_SESSION['sql'] = $sql;

$conn->query($sql);
$conn->close();

header("Location: http://" . $_SERVER['HTTP_HOST'] . "/index.php");
die();
?>
