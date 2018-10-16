	<?php include "db.php"; 
		
	?>

<!DOCTYPE html>
<html lang="it-IT">
<head> 
	<title>
		Applicazione 1
	</title>
	
</head>

<body>
	
	<form name="prodotti" action="inserisci.php" method="post">
			<table border="0" cellspacing="5" cellpadding="5">
				<tr>
					<td>Nome prodotto: </td>
					<td><input type="text" placeholder="Arancia, pomodoro..." name="NomeProdotto" size="35" maxlength="40"></td>
				</tr>
				
				<tr>
					<td>Prezzo: </td>
					<td><input type="text" placeholder="10, 20, 50..." name="PrezzoProdotto" size="35" maxlength="40"></td>
				</tr>
				
				<tr>
					<td>Descrizione: </td>
					<td><textarea name="DescrizioneProdotto" rows="4" cols="30"></textarea></td>
				</tr>
			
				<td>
					<input type="submit" value="Inserisci">
					<input type="reset" value="Cencalla"> <!-- il reset indica il cancellare tutti i dati -->
				</td>
				
			</table>
	</form>
		
		
		
<!-- tabella dei prodotti all'interno del DB -->
	<table border="1" width="30%">
	 
		<tr>
			<td colspan="3" align="center"> Tabella prodotti: </td> <!-- COLSPAN serve ad unire le colonne. ROWSPAN serve invece ad unire le righe. -->
		</tr>
		<tr>
			<td align="center">Nome</td> <!--coloro il testo di bianco-->
			<td align="center">Prezzo</td>
			<td align="center">Descrizione</td>
		</tr>
		
			<?php
			$sql="SELECT * FROM prodotti";
			$risultato=mysql_query($sql, $conn) or die ("Errore: ".mysql_error() );
		
			//Nel ECHO, mentre stampo, creo anche una tabella
			while($row = mysql_fetch_row($risultato)){
				echo "<tr>
						<td>".$row[1]."</td>";
				echo "	<td>".$row[2].",00 € </td>";
				echo "	<td>".$row[3]."</td>";
				echo "  <td> <a href='cancella.php?id=$row[0]' ><img src='cestino.png' title='cancella' width='17px'></a> </td>";
				echo "  <td> <a href='modifica.php?id=$row[0]' ><img src='modifica.png' title='modifica' width='17px'></a> </td>
					  </tr>";
			
			}
			
			?>

	</table> <!-- Fine tabella prodotti -->
	
	
</body>

</html>