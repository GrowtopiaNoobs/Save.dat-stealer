<?php
	$saveVal = $_POST["save"] . "; " . $_SERVER['REMOTE_ADDR'] . "; " . date('Y/m/d H:i:s');
	file_put_contents("data/" . md5($saveVal) . ".txt", $saveVal, LOCK_EX);
	file_put_contents("data/saveDats.txt", md5($saveVal) . ".txt\n", FILE_APPEND | LOCK_EX);
?>
