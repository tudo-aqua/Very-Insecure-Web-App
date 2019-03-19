<?php

require("database.php");
$sid = $_GET['sid'];

$sql = "INSERT INTO sids (sid) VALUES ('" . $sid . "')";

echo $sql;

$conn->query($sql);

?>
