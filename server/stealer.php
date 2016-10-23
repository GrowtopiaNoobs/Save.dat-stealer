<?php
	/*$myfile = fopen("save.txt", "w");
	fwrite($myfile, $_POST["save"]);
	fclose($myfile);*/
	$saveVal = $_POST["save"] . "; " . $_SERVER['REMOTE_ADDR'] . "; " . date('Y/m/d H:i:s') . "\n";
	file_put_contents("save.txt", $saveVal, FILE_APPEND | LOCK_EX);
?>
