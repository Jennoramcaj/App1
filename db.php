<?php
	$dbhost="localhost";
	$dbname="db_primo";
	$dbuser="root";
	$dbpass="";
$conn=mysql_connect($dbhost, $dbuser, $dbpass) or die ("impossibile connettersi al DB ciao");
	mysql_select_db($dbname, $conn) or die ("impossibile connettersi a $dbname");
	session_start();



	?>
