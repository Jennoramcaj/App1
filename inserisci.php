<html>
<head>
	<title> Inserimento Prodotto</title>
</head>

<body>

	<?php
		include "db.php";
	
	
	//I DATI PASSATI DALL'ALTRA PAGINA
	$NomeProdotto=$_POST["NomeProdotto"];
	$PrezzoProdotto=$_POST["PrezzoProdotto"];
	$DescrizioneProdotto=$_POST["DescrizioneProdotto"];
	
	//INSERIMENTO NELLA TABELLA
	$inserimento="INSERT INTO prodotti (nome, prezzo, descrizione) VALUES ('$NomeProdotto','$PrezzoProdotto','$DescrizioneProdotto')";
	$ress=mysql_query($inserimento);
			if(!$ress) die ("Errore inserimento: ".mysql_error());
			else echo "INSERIMENTO DATI RIUSCITO.";
	
	?>
	
	<a href="index.php">Inserisci altri prodotti </a>
	
	


</body>

</html>