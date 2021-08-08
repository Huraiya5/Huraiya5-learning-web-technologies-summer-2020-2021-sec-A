<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
	<form method="post" action="../controller/login_check.php">
	
	<table border="1" width="40%">
		<tr>
			<td >
				<img src="../asset/book.jpg" align="center" height="80px">
			</td>
		</tr>
		<tr>
		<td colspan="2">
			<table width="60%">
		<fieldset>
			<legend>LOGIN</legend>
		User name:<input type="text" name="username"><br><br>
		Password  :<input type="Password" name="Password">
		<hr><br>
		<input type="submit" name="login" value="Login"><a href="forgot_password.php">Forgot Password?</a><br>
		<p>Do not have any account?</p>
		<a href="registration.php"> SignUp</a>
	    </fieldset>
	    </table>
        </td>
		</tr>
	

	</table>

	</form>
</body>
</html>