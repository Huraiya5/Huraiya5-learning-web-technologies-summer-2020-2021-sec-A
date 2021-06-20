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
				<li><a href="edit_profile.php">Edit Profile</a></li>
				<li><a href="">Change Profile Picture</a></li>
				<li><a href="">Change Password</a></li>
				<li><a href="">Logout</a></li></ul></td>
				<td rowspan="6">
					
					<fieldset>
						<table  width="100%">
						<legend>Profile</legend>
						<tr>
							<td>
								<?php echo 'Name '?>
						
							</td>
							<td >
								<?php echo':'.$_SESSION['user'] ['name'];?>
						
							</td>
							<td rowspan="3" align="right"><img src=""><a href="">Change</a></td>
						</tr>
						<tr>
							<td>
								
						<?php echo 'Email '?>
							</td>
							<td>
								
						<?php echo':'.$_SESSION['user'] ['email'];?>
							</td>
						</tr>
						<tr>
							<td>
						
						<?php echo 'Gender'?>
							</td>
							<td>
						<?php echo ':'.$_SESSION['user'] ['name'];?></td>

						</tr>
						<tr>
							<td><a href="edit_profile.php">Edit Profile</a></td>
						</tr>


						</table>
					</fieldset>
				    

				 </td>
		</tr>
		<tr><td colspan="2" align="center">Copy right 2017</td></tr>
	</table>

	
</body>
</html>
