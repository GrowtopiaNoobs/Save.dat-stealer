<?php
	$myfile = fopen("save.txt", "w");
	fwrite($myfile, $_POST["save"]);
	fclose($myfile);
?>
