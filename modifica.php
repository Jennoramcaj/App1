<!DOCTYPE html>
<html lang="it-IT">
<head> 
	<title>
		Cancella
	</title>
	
	<?php include "db.php";?>
	
</head>



<body>
	<?php if (isset($_GET["id"])){ 
			$sql="SELECT * FROM prodotti WHERE id_prodotto='".$_GET['id']."'";
			$risultato=mysql_query($sql, $conn) or die ("Errore: ".mysql_error() );
			$row = mysql_fetch_row($risultato); ?>
			
	<form name="modificaForm" action="modifica.php" method="post">
			<table border="0" cellspacing="5" cellpadding="5">
				<tr>
					<td>Nome prodotto: </td>
					<td><input type="text" value="<?php echo "".$row[1]; ?>" placeholder="Arancia, pomodoro..." name="NomeProdotto" size="35" maxlength="40"></td>
				</tr>
				
				<tr>
					<td>Prezzo: </td>
					<td><input type="text" value="<?php echo "".$row[2]; ?>" placeholder="10, 20, 50..." name="PrezzoProdotto" size="35" maxlength="40"></td>
				</tr>
				
				<tr>
					<td>Descrizione: </td>
					<td><textarea name="DescrizioneProdotto" rows="4" cols="30"><?php echo "".$row[3]; ?></textarea></td>
				</tr>
			
				<td>
					<!-- mi creo il mio id "nascosto" in modo da passarglielo con il post una volta cliccato su aggiorna -->
					<input type="hidden" value="<?php echo $_GET["id"]; ?>" name="idprova">
					<input type="submit" value="Aggiorna" name="modificaOK">
					<input type="reset" value="Cencalla"> <!-- il reset indica il cancellare tutti i dati -->
					<input TYPE="button" VALUE="Indietro" onClick="history.go(-1);"> 
				</td>
				
			</table>
	</form>
		
	<?php } ?>
	
	
	<?php
	
				//Qui gli passo il mio "idprova" che precedentemente ho nascosto.
		if(isset($_POST["idprova"]) && isset($_POST["modificaOK"])){
		//MODIFICA DATI NELLA TABELLA AGENDA
			$modifica="UPDATE prodotti SET nome='".$_POST['NomeProdotto']."', prezzo='".$_POST['PrezzoProdotto']."', descrizione='".$_POST['DescrizioneProdotto']."'
			WHERE id_prodotto='".$_POST['idprova']."'";
			$modificato=mysql_query($modifica);
			if(!$modificato){
				echo ("Errore modifica: ".mysql_error());}
			else{
				echo ("ma che braaavo");
			} ?>
			<a href="index.php">Tora alla schermata principale</a>
		<?php
		}
		?>
	
	
</body>


</html>