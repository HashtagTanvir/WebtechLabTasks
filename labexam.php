<?php

	if(isset($_POST["register"])){
		$id=trim($_POST["id"]);
		$password=trim($_POST["pass"]);
		$cpassword=trim($_POST["cpass"]);
		$name=trim($_POST["name"]);
		$email=trim($_POST["email"]);
		

		$myfile = fopen("t.txt", "w") or die("Unable to open file!");
		fwrite($myfile, $id);
		fwrite($myfile, $password);
		fwrite($myfile, $cpassword);
		fwrite($myfile, $name);
		fwrite($myfile, $email);
	}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
</head>
<body>
		<fieldset style="width: 300px;">
			<legend>Registration</legend>
			<form method="post">
				<table style=" width: 300px;border: none;">
					<tr>
						<td style="border: none;width: 125px;">
							ID :
						</td>
						<td style="border: none;width: 100;">
							<input type="text" name="id"><br>
						</td>
					</tr>
					<tr>
						<td style="border: none;width: 125px;">
							Password :
						</td>
						<td style="border: none;width: 100px;">
							<input type="text" name="pass"><br>
						</td>
					</tr>
					<tr>
						<td style="border: none;width: 125px;">
							Confirm Password :
						</td>
						<td style="border: none;width: 100px;">
							<input type="text" name="cpass"><br>
						</td>
					</tr>
					<tr>
						<td style="border: none;width: 125px;">
							Name :
						</td>
						<td style="border: none;width: 100px;">
							<input type="text" name="name"><br>
						</td>
					</tr>
					<tr>
						<td style="border: none;width: 125px;">
							Email :
						</td>
						<td style="border: none;width: 100px;">
							<input type="text" name="email"><br>
						</td>
					</tr>
					<tr>
						<td style="border: none;width: 125px;">
							UserType : <br/>
						</td>
						<td style="border: none;width: 100px;">
							<select name="selectedType">
								<option value="user">user</option>
								<option value="admin">Admin</option>
							</select>
						</td>
					</tr>
					<tr>
						<td style="border: none;width: 125px;">
							<input type="submit" name="register" value="Register"> <a href="login.php"><u style="color: blue;">Login</u></a>
						</td>
						
					</tr>
					
				</table>
			</form>
		</fieldset>
</body>
</html>
