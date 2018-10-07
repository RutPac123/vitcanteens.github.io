<?php
session_start();
$test = $_POST['password'];
echo $test;
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration,login and logout</title>
</head>
<body>
<div class="header">
	<h1>Canteen Management</h1>
</div>
<h1>Home page</h1>
<div>
	<h4>
		Hey  <?php echo $_SESSION['username']; ?> ! How are you today??
	</h4>
	<h2>You can try them anyday,anytime!</h2>
    
</div>
</body>
</html>