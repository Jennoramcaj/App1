 <?php
	include "db.php";
 ?>
<html>
	<?php
		//Recupero i dati inseriti precedentemente
		$username_inserito=$_POST['username'];
		$password_inserito=$_POST['password'];
		//Controllo sul DB se sono presenti questi valori e quindi se l'utente esiste o meno
		$sql="SELECT * FROM utenti WHERE username='".$username_inserito."' AND password='".$password_inserito."'";
		$rows=mysql_query($sql);		
		$row=mysql_fetch_row($rows);
		if($row>0){
			$_SESSION['loggato']=1;
			$_SESSION['username']=$row[3];	
			header("Location:index.php");
		}
		else{
			echo "Username o Password errati.";
			echo "<br />Hai inserito come username: ".$username_inserito." e come password: ".$password_inserito."";
		}
	
		
	?>

</html>