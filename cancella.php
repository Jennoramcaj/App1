<html>
<head>
	<title> Cacellazione Prodotto </title>

</head>

<body>
<?php include "db.php";

	if(isset($_GET["id"])){
		?>
			<form action="cancella.php" method="post">
				Vuoi cancellare davvero questo elemento fighissimo? <br />

					<input type="hidden" value="<?php echo $_GET["id"]; ?>" name="id"> <!-- questo è id2 spiegato sotto. -->
					<input type="submit" value="SI" name="voglio">
					<input TYPE="button" VALUE="NO" onClick="history.go(-1);">

			</form>
		<?php
	}
	?>

	<?php

	if(isset($_POST["id"]) && isset($_POST["voglio"]) ){ //prende il valore del id2 (anche se l'ho chiamata id
		//CANCELLAZIONE DATI
			$cancella="DELETE FROM prodotti WHERE id_prodotto=".$_POST["id"]."";
			$cancellato=mysql_query($cancella);
			if(!$cancellato) echo("Errore cancellazione: ".mysql_error());
			else echo ("Ora sai pure cancellare, incredibile!!");?>

			<a href="index.php">Tora alla schermata principale</a>
	<?php
	}
	?>




</body>

</html>
