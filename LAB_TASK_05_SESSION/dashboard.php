<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LoGGED IN DASHBOARD</title>

</head>
<body>
	<form method="post" action=""></form>
	<table border="1" width="50%">
		<tr>
			<td width="50%" >
				Company
			</td>
			<td align="right"> login as <a href=""><?php echo $_SESSION['user'] ['name'];?></a>
			|<a href="">Logout</a>  </td>

		</tr>
		<tr>
			<td>Account</td>
			<td colspan="2" valign="top"><h3> Welcome To xCompany</h3></td>
		</tr>
		<tr>
			<td><ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profile.php">View Profile</a></li>
				<li><a href="">Edit Profile</a></li>
				<li><a href="">Change Profile Picture</a></li>
				<li><a href="">Change Password</a></li>
				<li><a href="">Logout</a></li></ul></td>
				<td rowspan="6"><?php echo ' WELCOME '.$_SESSION['user'] ['name'];?> </td>
		</tr>
		<tr><td colspan="2" align="center">Copy right 2017</td></tr>
	</table>

	
</body>
</html>
