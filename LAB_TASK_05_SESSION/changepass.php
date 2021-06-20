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
	<table border="1" width="70%">
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
				<li><a href="edid_profile.php">Edit Profile</a></li>
				<li><a href="">Change Profile Picture</a></li>
				<li><a href="">Change Password</a></li>
				<li><a href="">Logout</a></li></ul></td>
				<td rowspan="6">
					
					<fieldset >
					
						<legend>CHANGE PASSWORD</legend>
						<table>
							<tr>
								<td>
						Current Password:<input type="password" name="cpass"></td></tr>
						<tr><td>
						New password:<input type="password" name="npass">
					</td></tr>
					<tr><td>
						Retype New Password:<input type="password" name="rnpass"></td></tr>
						<tr>
							<td><input type="submit" name="submit" value="Submit"></td>
						</tr>
					</table>
					</fieldset>
				    

				 </td>
		</tr>
		<tr><td colspan="2" align="left">Copy right 2017</td></tr>
	</table>

	
</body>
</html>
