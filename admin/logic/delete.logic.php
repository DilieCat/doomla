<?php
require '../config/config.php';
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$patient = NULL;
		if (isset($_GET['id'])):
		
			$db = mysqli_connect($servername, $username, $password, $dbname);
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT * FROM pagecontent WHERE id=$id";
			$result = $db->query($query);
		
			$row = $result->fetch_assoc();		
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		if (isset($_POST['confirmed'])):
			$db = mysqli_connect($servername, $username, $password, $dbname);
		
			// Prepare data for delete
			$id = $db->escape_string($_POST["id"]);
	
			// Prepare query and execute
			$query = "DELETE FROM pagecontent WHERE id=$id";
			$result = $db->query($query);
		endif;
		
		// Tell the browser to go back to the index page.
		header("Location: ./");
		exit();
	endif;

?>
