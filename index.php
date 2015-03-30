<?php
	$language = "fr_FR.utf8";
	putenv("LC_ALL=$language");
	setlocale(LC_ALL, $language);
	bindtextdomain("messages", "./locale");
	textdomain("messages");

	print "<p>" . utf8_decode(_("Esta página está en español")) . "</p>\n";
?>