<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" href="v.css">
	<style type="text/css">
			.navbar{
        			 background-color: #73C2FB;
            }
            
            .head{
            	padding-top: 35px;
            	padding-left: 40px;
            }
            @keyframes example{
				  from{background-color:#f5fffa; }
		          to{background-color: #71eeb8;}
	        }
	        body{
	        	background-color:  #71eeb8;
	            animation: example 1s 1;
	        }
              @keyframes example1{
          from{background-color:#71eeb8; }
              to{background-color: #white;}
          }
             @keyframes example2{
          from{background-color:#71eeb8; }
              to{background-color: #pink;}
          }
             @keyframes example3{
          from{background-color:#71eeb8; }
              to{background-color: #yellow;}
          }
	        .a:hover{
               background-color: white;
               animation: example1 2s 1;
           }
           .b:hover{
           	  background-color: pink;
              animation: example2 2s 1;
           }
            .c:hover{
           	  background-color: yellow;
              animation: example3 2s 1;
           }
       		.d:hover{
       			background-color: pink;
            animation: example1 2s 1;
       		}
           .a{
	               margin-top: 30px;
	               margin-left: 30px;
                 border-radius: 40px;
           }
           .b{	
           		position: absolute;
           		right: 0px;
           		top: 330px;
           		margin-right: 200px;
           }
           .c{

	               margin-top: 50px;
	               margin-left: 450px;
                  border-radius: 40px;
           }
           .d{
           		position: absolute;
           		right: 0px;
           		top: 130px;
              border-radius: 40px;
           		margin-right: 100px;
           }
	</style>
</head>
<body>
	<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="navbar" style="letter-spacing:4px;">
    <a href="main.php" class="w3-bar-item w3-button">Vidyalankar Canteen Services </a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="about.html" class="w3-bar-item w3-button">About</a>
      <a href="menu.php" class="w3-bar-item w3-button">Menu</a>
      <a href="contact.php" class="w3-bar-item w3-button">Contact</a>
       <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
    </div>
  </div>
</div>
<h2 class="head">........travel a tasty journey with our wide range of products!</h2>
<hr>
<a href="refresh.php"><img src="refreshments.png" height="200" width="400" class="a"></a>
<h3 class="a"><u>Get refreshed with the refreshments!</u></h3>
<a href="sweet.php"><img src="sweetness.png" height="200" width="400" class="d"></a>
<h3 class="b"><a href="sweet.php">Want some sweetness in your life?</a></h3>
<a href="snacks.php"><img src="snacks.jpg" height="200" width="400" class="c"></a>
<h3 class="c"><a href="snacks.php">Snaky Snaks :)</a></h3>
<hr>
</body>
</html>