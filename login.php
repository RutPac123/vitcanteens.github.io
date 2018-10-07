<?php
session_start();
$conn=mysqli_connect("localhost","root","lightvegeta","authentication");
if(isset($_POST['login_btn'])){
	$username= $_POST['user'];
	$password= $_POST['pass'];
	$password = md5($password);
	if(empty($username) || empty($password)){
		echo "Empty credentials!";
	}

//to prevent injection
$username = stripcslashes($username);
$password = stripcslashes($password);



//query
$result = mysqli_query($conn,"SELECT * from dbusers where username='$username' and password ='$password'");
$row = mysqli_fetch_array($result);

 if ($row['username'] == $username && $row['password'] == $password){
	echo "Login Sucessfull ! Welcome " . $row['username'];
	header("Location: main.php");
}else{
	echo "Failed to login!";
}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
	<style type="text/css">
	a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;

}

a{
	margin-left: 540px;
}
a:hover, a:active {
    background-color: hotpink;
}
	</style>
</head>
<body>
	<h2 style="text-align: center;">Login Page</h2>
	<hr>
<div id="frm">
	<form method="post" action="login.php">
		<p>
			<label>Username :</label>
			<input type="text" id="user" name="user">
		</p>
		<p>
			<label>Password :</label>
			<input type="password" id="pass" name="pass">
		</p>
		<p>
			<input type="submit" id="btn" value="Login" name="login_btn">
		</p>
	</form>
</div>
<hr>
<a href="start.xml">HomePage</a>
</body>
</html>     