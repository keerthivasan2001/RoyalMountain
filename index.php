<!DOCTYPE html>
<html lang="en">

<head>
	<title>GFG- Store Data</title>
</head>
<style>
	body{
		background-image : url("bike14.png");
		background-position : 100%;
		margin-top: 70px;
		margin-left:30px;
	}
	label{
		color:black;
		font-size:21px;
		font-family:heluetica;
	}
</style>

<body>
	<center>
		<h1>REGISTER</h1>

		<form action="insert.php" method="post">
			
			
<p>
				<label for="firstName">First Name :</label>
				<input type="text" name="first_name" id="firstName">
			</p>



			
			
<p>
				<label for="lastName">Last Name :</label>
				<input type="text" name="last_name" id="lastName">
			</p>



			
			
<p>
				<label for="Gender">  Gender :</label>
				<input type="text" name="gender" id="Gender">
			</p>


			
			
			
<p>
				<label for="Address">Address :</label>
				<input type="text" name="address" id="Address">
			</p>


			
			
			
<p>
				<label for="emailAddress">Email Id :</label>
				<input type="text" name="email" id="emailAddress">
			</p>


			
			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
