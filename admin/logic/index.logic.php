<?php
require '../config/config.php';


$db = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM pagecontent";
	
$result = $db->query($sql);

$rows = $result->fetch_all(MYSQLI_ASSOC);

require '../core.php';

?>
