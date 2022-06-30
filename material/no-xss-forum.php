Hello <?= $uname ?>! ... <a href="/logout.php">[logout]</a>
<hr/>

<h2>Post Something</h2>

<form method="post" action="/post.php">
  <textarea name="post" cols="50" rows="10"></textarea>
  <button type="submit">Post</button>
</form>

<hr/>

<h2>Older Posts</h2>

<?php

require_once("database.php");

$sql = "SELECT * FROM posts ORDER BY id DESC";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
?>
    <h3><?= $row['author'] ?> says:</h3>
    <p> <?= nl2br( htmlspecialchars( $row['message'], ENT_QUOTES | ENT_HTML401, 'UTF-8' )) ?> </p>

<?php
}
$conn->close();
?>
