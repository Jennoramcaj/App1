<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form name="login" action="login.php" method="post">
		<div id='shakeBox'>
			<fieldset> <!-- serve a creare una linea di contorno -->
				<legend>Login:</legend>

					<label>
						Username: <input type="text" name="username" maxlength="30" /> <input type="submit" value="login" name="loginSubmit" />
					</label>
				<br />
					<label>
						Password: <input type="password" name="password" maxlength="20" />
					</label>
			</fieldset>
		</div>
	</form>
</body>
</html>
