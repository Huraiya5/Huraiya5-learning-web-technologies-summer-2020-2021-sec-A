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
				<li><a href="edid_profile.php">Edit Profile</a></li>
				<li><a href="profilepic.php">Change Profile Picture</a></li>
				<li><a href="">Change Password</a></li>
				<li><a href="">Logout</a></li></ul></td>
				<td rowspan="6">
					
					<fieldset >
						<table  width="100%" height"8px">
						<legend >EDIT PROFILE</legend>
						<tr>
							<td>Name</td>
							<td><input type="text" name="name"></td>
						</tr>
						<tr>
							<td>
								Email
							</td>
							<td><input type="email" name="email"></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><input type="radio" name="Male">Male
								<input type="radio" name="Male">Female
								<input type="radio" name="Male">Others
							</td>
						</tr>
						<tr>
							<td>Date of Birth</td>
							<td><input type="date" name="date of birth"></td>
						</tr>
						<tr>
							<td><input type="submit" name="" value="submit"></td>
						</tr>
						
							


						</table>
					</fieldset>
				    

				 </td>
		</tr>
		<tr><td colspan="2" align="left">Copy right 2017</td></tr>
	</table>

	
</body>
</html>
