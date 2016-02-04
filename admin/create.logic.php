<?php
checkAccess();
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		require "../config.php";

		$db = mysqli_connect($servername, $username, $password, $dbname);
		// Prepare data for insertion
		$page = $_POST["page"];
		$content = $_POST["content"];
		$menu = $_POST["menu"];
		$number = $_POST["number"];
		
		// Prepare query and execute
		$query = "INSERT INTO pagecontent (page, content, menuoption, menuorder) VALUES ('$page','$content','$menu', '$number')";
		$result = $db->query($query);

    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
    endif;
    ?>