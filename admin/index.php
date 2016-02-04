<?php
require '../config.php';


$db = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM pagecontent
		ORDER BY menuorder ASC";
	
$result = $db->query($sql);

$rows = $result->fetch_all(MYSQLI_ASSOC);

require '../setup.php';

?>









<!DOCTYPE html>
<html>
<head>
	<title>doomla-beheer</title>
	<link rel="stylesheet" href="css/admin.css" type="text/css">
</head>
<body>
<a href="create.php">Een pagina toevoegen</a><br>
<?php getAccessUsername() ?>
	<table border="1">
		<tr>
		  <col width="175">
		    <col width="400">
		      <col width="175">
			<th>Pagina</th>
			<th>Inhoud</th>
			<th>Menu-optie</th>
			<th>Menu-volgorde</th>
			<th></th>
			<th></th>
		</tr>
		<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?=$row['page']?></td>
			<td><?=$row['content']?></td>
			<td><?=$row['menuoption']?></td>
			<td><?=$row['menuorder']?></td>
			<td><a href="edit.php?id=<?=$row['id']?>">Wijzigen</a></td>
			<td><a href="delete.php?id=<?=$row['id']?>">Verwijderen</a></td>
			
		</tr>
		<?php } ?>
	</table>
</body>
</html>