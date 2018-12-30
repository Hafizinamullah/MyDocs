<!DOCTYPE html>
<?php 
ob_start();
session_start(); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname="batch4";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";





?>



<html>
<head>
	<title>My phone Book login</title>
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	

	 <div class="container">
        <div class="col-lg-6 m-auto">
	
		<form action="login_pro.php" method="POST">
<div class="card">
        <div class="card-header bg-dark">
            <h1 class="text-white text-center">Phone Book Login</h1>
        </div>
        <br><label for="username">Username</label>
<input type="text" name="user_name"><br>

        <label for="Password">Password</label>
<input type="Passwoed" name="pass"><br>
     
<input class="btn btn-primary" type="submit" name="submit" placeholder="Login">
    
    </div>
</form>
</div>
</div>

</body>
</html>