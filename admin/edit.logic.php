<?php
checkAccess();
require '../config.php';
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$row = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = mysqli_connect($servername, $username, $password, $dbname);
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT * FROM pagecontent WHERE id=$id";
			$result = $db->query($query);
		
			$row = $result->fetch_assoc();	

		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = mysqli_connect($servername, $username, $password, $dbname);
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$page = $db->escape_string($_POST["page"]);
		$menuoption = $db->escape_string($_POST["menuoption"]);
		$content = $db->escape_string($_POST["content"]);
		$number = $db->escape_string($_POST["number"]);

		
		// Prepare query and execute
		$query = "UPDATE pagecontent SET page='$page', menuoption='$menuoption', content='$content', menuorder='$number' WHERE id=$id";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();

	endif;

?>