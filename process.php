<?php
// db connection
$conn=mysqli_connect("localhost","root","lightvegeta","authentication");
// get the required values from the form in login.php
$username = $_POST['user'];
$password = $_POST['pass'];
$password = md5($password);
//to prevent injection
// $username = stripcslashes($username);
// $password = stripcslashes($password);



//query
$result = mysqli_query($conn,"SELECT * from dbusers where username='$username' and password ='$password'");
$row = mysqli_fetch_array($result);
// if(empty($username) || empty($password)){
// 	echo "Empty credentials!";
// }
 if ($row['username'] == $username && $row['password'] == $password){
	echo "Login Sucessfull ! Welcome " . $row['username'];
}else{
	echo "Failed to login!";
}


?>