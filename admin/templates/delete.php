<!DOCTYPE html>
<html>
<head>
	<title>Pagina verwijderen</title>
</head>
<body>
<h1>Pagina verwijderen</h1>
Weet u zeker dat u de onderstaande pagina wil verwijderen?
<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$row['id']?>">
			<label for="name">Pagina:</label>
			<span><?=$row['page']?></span>
		</div>
		<div>
			<label for="name">Menu-optie:</label>
			<span><?=$row['menuoption']?></span>
		</div>
		<div>
			<label for="name">Inhoud:</label><br>
			<span><?=$row['content']?></span>
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Ja">
			<input type="submit" name="canceled" value="Nee">
		</div>
	</form>
</body>
</html>