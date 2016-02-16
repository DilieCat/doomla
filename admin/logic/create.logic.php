<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		require "../config/config.php";

		$db = mysqli_connect($servername, $username, $password, $dbname);
		// Prepare data for insertion
		$page = $_POST["page"];
		$content = $_POST["content"];
		$menu = $_POST["menu"];
		
		// Prepare query and execute
		$query = "INSERT INTO pagecontent (page, content, menuoption) VALUES ('$page','$content','$menu')";
		$result = $db->query($query);

    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
    endif;
    ?>