<!DOCTYPE html>
<html>
<head>
	<title>doomla</title>
	<link rel="stylesheet" href="templates/template.php">
</head>
<body>
	<section>
		<article>
		<nav>
			<ul> <?php echo getMenu(); ?> </ul>
		</nav>
			<?php echo getContent(); ?>
		</article>
	</section>
</body>
</html>