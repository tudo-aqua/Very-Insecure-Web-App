<?php

// we use sessions for storing info on logged-in users
session_start();
$logged_in = isset($_SESSION['uid']);
$uname = $_SESSION['uname'] ?? null;

?>
<html>
  <head>
    <title>My little web forum and file host</title>
  </head>
  <body>
    <h1>My Little Web Forum and File Host</h1>
    <hr/>
    <?php
       if ($logged_in) {
        include("forum.php");
        include("filehost.php");
       } else {
         include("login-form.php");
       }
     ?>

     <br/><br/><br/><hr/>
     <h3>DEBUG</h3> 
     Last SQL: <pre><?= $_SESSION['sql'] ?? "<em>none</em>" ?></pre>
  </body>
</html>
