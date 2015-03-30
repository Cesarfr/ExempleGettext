<?php
	if ($_GET['l']=="") {
		$language = "es_MX";
	} else {
		switch ($_GET['l']) {
			case 'es': $language = "es_MX"; break;
			case 'fr': $language = "fr_FR.utf8"; break;	
			case 'en': $language = "en_US.utf8"; break;			
			default: $language = "es_MX"; break;
		}
	}
	putenv("LC_ALL=$language");
	setlocale(LC_ALL, $language);
	bindtextdomain("messages", "./locale");
	textdomain("messages");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Example Gettext</title>
</head>
<body>
	<?= "<h1>"._("Esta página está en español")."</h1>" ?>
	<a href="<?= $_SERVER['PHP_SELF'].'?l=en' ?>">English</a> -
  	<a href="<?= $_SERVER['PHP_SELF'].'?l=es' ?>">Español</a> -
  	<a href="<?= $_SERVER['PHP_SELF'].'?l=fr' ?>">Français</a>
</body>
</html>