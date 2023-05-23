<?php
session_start();
session_destroy();
echo file_get_contents("header.html");
echo'"<h1>Byl jsi Odhlášen</h1>"';
 echo file_get_contents("footer.html");
header("Location: index.php");
return;

?>
