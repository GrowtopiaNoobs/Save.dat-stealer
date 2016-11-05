<?php
if(isset($_GET["password"]) && strcmp($_GET["password"], file_get_contents("data/password.txt"))==0)
{
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="save.dat"');
	echo(base64_decode(readfile($_GET["fileToDecode"])));
} else {
	echo "GO AWAY!";
}
?>
