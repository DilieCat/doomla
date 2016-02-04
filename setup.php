<?php

function getContent() {
	global $content;
    return $content;
}

function getMenu() {
	global $conn;
	$sql = "SELECT * FROM pagecontent
			ORDER BY menuorder ASC";
			if($conn == null){
				die("no connection");	
			}
	$result = $conn->query($sql);

	$rows = $result->fetch_all(MYSQLI_ASSOC);
	$menu = "";
	foreach ($rows as $row) {
		$menu =  $menu . "<li><a href=\"?page=$row[page]\">$row[menuoption]</a></li>";
	}
	return $menu;
}

function getTitle() {
	global $row;
	return $row['menuoption'];
}

function setAccess($username1) {



$token = rand(1, 9999999);
$expiry = time() + (+600);
setcookie("token", $token, $expiry, "/");
setcookie("username", $username1, $expiry, "/");

echo $token;
echo $expiry;
echo $username1;

require 'config.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "UPDATE user SET token='$token', expiry=$expiry WHERE name='$username1'";
$result = $conn->query($sql);

mysqli_close($conn);
return $username1;
}


function getAccessUsername(){

	$username1 = $_COOKIE['username'];
	$token = $_COOKIE['token'];

	require 'config.php';

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql = "SELECT * FROM user WHERE name='$username1' AND token=$token";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	$now = time();

	if(isset($_COOKIE['username']) && isset($_COOKIE['token'])  && $now < $row['expiry'])
	{
	    echo "Je bent ingelogd als: <b>$username1</b>";
	    return $username1;
	}
	else
	{
		return false;
	}
}

	function checkAccess(){
			$username1 = getAccessUsername();

			if ($username1) {
				setAccess($username1);
			}else{
				//header('Location: index.php');
			}
		}

	
?>