<?php
    session_start();
    //connecting to the database
    $db = mysqli_connect("localhost","root","lightvegeta","authentication");

    if(isset($_POST['register_btn'])){
    	$username =$_POST['username'];
    	$email = $_POST['email'];
  		$password =$_POST['password'];
    	$password2 =$_POST['password2'];
        
    	if(empty($username) || empty($email) || empty($password) || empty($password2)){
    		echo "Empty fileds!!";
    	}
    	else if($password == $password2){
    		//create the user
    		$password = md5($password); //hash password for the security reasons
    		$sql = "INSERT INTO dbusers (username,email,password) VALUES ('$username','$email','$password')";
    		mysqli_query($db,$sql);
    		echo "Your account has been registered!";
    		$_SESSION['username'] = $username;
    		header("Location: main.php"); //redirecting to the homepage.

    	}else{
    		//failed
    		echo "Passwords do not match! Please try again....";
    	}
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration,login and logout</title>
	<hr>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
			a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin-left: 500px;
}


a:hover, a:active {
    background-color: hotpink;
}
	</style>
</head>
<body>
<div class="header">
	<h1>User Registration,login and logout</h1>
</div>
<form method="POST" action="register.php">
	<table>
		<tr>
			<td>
				Username :
			</td>
			<td>
				<input type="text" name="username" class="textInput">
			</td>
		</tr>
		<tr>
			<td>
				Email :
			</td>
			<td>
				<input type="email" name="email" class="textInput">
			</td>
		</tr>
		<tr>
			<td>
				Password :
			</td>
			<td>
				<input type="password" name="password" class="textInput">
			</td>
		</tr>
		<tr>
			<td>
				Password again :
			</td>
			<td>
				<input type="password" name="password2" class="textInput">
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
				<input type="submit" name="register_btn" value="Register">
			</td>
		</tr>
	</table>
</form>
<hr>
<a href="start.xml">HomePage</a>
</body>
</html>