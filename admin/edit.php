
<?php 
require '../setup.php';
require 'edit.logic.php'
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagina Wijzigen</title>
</head>
<body>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$row['id']?>">
			<label for="name">Pagina:</label>
			<input type="text" id="page" name="page" value="<?=$row['page']?>">
		</div>
		<div>
			<label for="name">Menu-optie:</label>
			<input type="text" id="menuoption" name="menuoption" value="<?=$row['menuoption']?>">
		</div>
		<div>
			<label for="name">Inhoud:</label>
			<textarea id="content" rows="10" cols="30" name="content"><?=$row['content']?></textarea>
		</div>
			<input type="submit" value="Save">
		</div>
		<div>
		<form>
		  Menu volgorde nummer
		  <input type="number" name="number">

		</div>
	</form>
	<form action="index.php">
	    <input type="submit" value="Ga terug">
	    </form>
</body>
</html>