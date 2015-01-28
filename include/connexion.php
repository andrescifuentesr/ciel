<?php
	# Session activation
	session_start();

	// Connexion BDD
	mysql_connect('localhost', 'root', 'root'); // Local CocciNet
	mysql_select_db('ciel');
	mysql_query("SET NAMES 'utf8'");
?>