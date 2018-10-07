<!DOCTYPE html>
<html>
<head>
	<title>Sweets</title>
	<link rel="stylesheet" type="text/css" href="v.css">
  <script type="text/javascript">
    function select(){
      alert("1 item added to the cart!");
    }
  </script>
	<style type="text/css">
		.navbar{
        			 background-color: #73C2FB;
            }
             
            .swt{
            	padding-top: 35px;
            	padding-left: 500px;
              
            }
            body{
              background-image: url("sweets.jpg");
            }
            #tab{
                  background-color: pink;
            }
            #data{
              font-family: cursive;
              font-size: 18px;
              font-style: bold;
            }
                 .button {
    background-color: #87CEFA;
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

        #addbtn{
              color: black;
              background-color: white;
              border-radius: 20px; 
              border: 2px solid #4CAF50;
            }
            .addbtn:hover {
            background-color: #4CAF50;
            color: #87CEFA;
          }
          #mid{
            border-radius: 40px;
            border-color: black;
          }
	</style>
</head>
<body >
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
<div class="swt">
<?php
session_start();
$fdb = mysqli_connect("localhost","root","lightvegeta","authentication");
    $myquery = "SELECT * FROM regular WHERE id>10 AND id<14";
     $mdata = mysqli_query($fdb,$myquery);

         echo "<table id=\"tab\" border=1>"; // start a table tag in the HTML
     
	 while($row = mysqli_fetch_array($mdata)){   //Creates a loop to loop through results
	 echo "<tr><td id=\"data\"> <marquee onmouseover=\"this.stop()\" onmouseout=\"this.start()\">" . $row['name'] . "</td><td>" . $row['price'] . "</td><td><button onclick='select()' class='addbtn button'>Add to cart!</button>"."</td></tr>";  //$row['index'] the index here is a field name

            echo "<tr>";
              echo "<td>";?><img src="<?php echo $row['photo']?>" height="300" width="400" id="mid">
            <?php echo "</td>";
         
            echo "</tr>";

	 }
   
	 echo "</table>"; //Close the table in HTML
?>
</div>
</body>
</html>