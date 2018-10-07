<?php

session_start();
	$_SESSION=array();
	session_destroy();
	require('login.php');
?>
<style type="text/css">
	a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: hotpink;
}
</style>
<h1 style="margin-left: 450px;">You have been logged out!</h1>