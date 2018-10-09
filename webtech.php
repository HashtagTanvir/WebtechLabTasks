<?php
	
	if(isset($_GET['submit'])){
		echo $_GET['name']."<br/>";
		
		echo $_GET['email']."<br/>";
		echo $_GET['gender']."<br/>";
		echo $_GET['dob']."<br/>";
		echo $_GET['BloodGroup']."<br/>";
		$degree=$_GET['degree'];

		foreach ($degree as $value) {
			echo $value."<br/>";
		}
	}
	else {
		echo "invalid request";
	}
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Information</title>
</head>
<body>
	<form method="get">
			<table style="width: 70%; border-style: double;">
			<tr>
				<td style="text-align: center; border-style: double;" colspan="3"><h3>Person Profile</h3></td>
				
			</tr>
			<tr>
				<td style="border-style: double; width: 15%;">
				Name: </td>
				<td  style="border-style: double;width: 30%;">
					<input type="text" name="name">
				</td>
				<td style="border-style: double;width: 10%;"></td>
			</tr>
			<tr>
				<td style="border-style: double; width: 15%;">
				Email: </td>
				<td  style="border-style: double;width: 30%;">
					<input type="text" name="email">
				</td>
				<td style="border-style: double;width: 10%;"></td>
			</tr>
			<tr>
				<td style="border-style: double; width: 15%;">
				Gender: </td>
				<td  style="border-style: double;width: 30%;">
		
						<input type="radio" name="gender" value="Male">Male
						<input type="radio" name="gender" value="Female">Female
						<input type="radio" name="gender" value="Other">Other

					
				</td>
				<td style="border-style: double;width: 10%;"></td>
			</tr>
			<tr>
				<td style="border-style: double;">
					DOB: 
				</td>
				<td style="border-style: double;">
					<input type="number" name="dob" style="width: 15%" >/
					<input type="number" name="dob" style="width: 15%">/
					<input type="number" name="dob" style="width: 15%"><i>(mm/dd/y)</i>
				</td>
				<td style="width: 10%; border-style: double;">
					
				</td>
			</tr>
			<tr>
				<td style="border-style: double; width: 15%;">
				Blood Group: </td>
				<td  style="border-style: double;width: 30%;">
					<select name="BloodGroup">
						<option value="A+">A+</option>
						<option value="B+">B+</option>
						<option value="B">B</option>
					</select>
				</td>
				<td style="border-style: double;width: 10%;"></td>
			</tr>
			<tr>
				<td style="border-style: double; width: 15%;">
				Degree: </td>
				<td  style="border-style: double;width: 30%;">
					<input type="checkbox" name="degree[]" value="SSC" >SSC
					<input type="checkbox" name="degree[]" value="HHC">HHC
					<input type="checkbox" name="degree[]" value="BSC">BSC
					<input type="checkbox" name="degree[]" value="MSC">MSC
				</td>
				<td style="border-style: double;width: 10%;"></td>
			</tr>
			<tr>
				<td style="border-style: double; width: 15%;">
				Photo: </td>
				<td  style="border-style: double;width: 30%;">
					<input type="file" name="photo">
				</td>
				<td style="border-style: double;width: 10%;"></td>
			</tr>
			<tr height="30px">
				<td colspan="3" style="border-style: double;"></td>
				
				
			</tr>
			<tr>
				<td style="border-style: double; text-align: right;" colspan="3">
					<input type="submit" name="submit">
					<input type="reset" name="reset">
				</td>
			</tr>
			
		</table>
	</form>
</body>
</html>