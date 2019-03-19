<?php

session_start();

require_once("database.php");

$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users WHERE name='" . $user ."' AND pass='" . $pass ."'";
$_SESSION['sql'] = $sql;

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    $_SESSION['uid'] = $row['id'];
    $_SESSION['uname'] = $row['name'];
}
$conn->close();

header("Location: http://" . $_SERVER['HTTP_HOST'] . "/index.php");
die();
?>
