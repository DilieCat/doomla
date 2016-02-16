<!DOCTYPE html>
<html>
<head>
	<title>doomla toevoegen</title>
</head>
<body>
<h1>Voeg een pagina toe</h1>
<br>
	<form method="post">
		<div>
			<label for="name">Pagina:</label>
			<input type="text" id="page" name="page">
		</div>
	<br>
		 <div>
			<label for="name">Menu-Optie:</label>
			<input type="text" id="menu" name="menu">
		</div>
	<br>
		 <div>
			<label for="name">Content:</label>
			<textarea id="content" name="content" rows="10" cols="30">
			</textarea>
		</div>
		<div>
		<form>
		  Menu volgorde nummer
		  <input type="number" name="number">

		</div>
		<br>

		<input type="submit" value="Save">
		</form>

		<form action="index.php">
	    <input type="submit" value="Ga terug">
	    </form>
	</form>
</body>
</html>