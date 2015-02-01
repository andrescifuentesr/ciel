<?php
	# Session activation
	session_start();

	// Connexion BDD
	mysql_connect('localhost', 'root', 'root'); // Local
	mysql_select_db('ciel');

	// mysql_connect('tonciel.db.11812777.hostedresource.com', 'tonciel', 'e3g2P4cD!'); // Live	
	// mysql_select_db('tonciel');
	
	mysql_query("SET NAMES 'utf8'");
?>