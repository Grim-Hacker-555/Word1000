<?php
$message = $_POST['message'];
$file = fopen('data.txt', 'w');
fwrite($file, $message);
fclose($file);
?>
