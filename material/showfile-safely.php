<?php

$file= escapeshellarg($_GET["file"]);
$out = shell_exec("less $file");

?>
<pre><?= $out ?></pre>
