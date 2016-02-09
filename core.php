<?php 
function getContent(){
	global $content;
	return $content;
}

function getMenu() {
	global $conn;
	$sql = "SELECT * FROM pagecontent";

	$result = $conn->query($sql);
	$rows = $result->fetch_all(MYSQLI_ASSOC);
	$menu = "";
	foreach ($rows as $row) {
		$menu =  $menu . "<li><a href=\"?page=" . $row['page'] . "\">" . $row['menuoption'] . "</a></li>";
}
	return $menu;
}

 ?>