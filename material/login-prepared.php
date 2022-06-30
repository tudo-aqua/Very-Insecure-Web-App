<?php

session_start();

require_once("database.php");

$user = $_POST['user'];
$pass = $_POST['pass'];


$stmt = $conn->prepare("SELECT * FROM users WHERE name=? AND pass=?");
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();

$_SESSION['sql'] = $stmt;

$result = $stmt->get_result();
if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    $_SESSION['uid'] = $row['id'];
    $_SESSION['uname'] = $row['name'];
}
$stmt->close();
$conn->close();

header("Location: http://" . $_SERVER['HTTP_HOST'] . "/index.php");
die();
?>
