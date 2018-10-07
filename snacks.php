<!DOCTYPE html>
<html>
<head>
	<title>Snacks</title>
  <script type="text/javascript">
    function select(){
      var a=0;
      a=a+1;
      alert("<?php echo "ok";?>"+" item added to the cart!");
    }
  </script>
	<link rel="stylesheet" type="text/css" href="v.css">
	<style type="text/css">
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
.amount{
   border-radius: 40px;
}
		.navbar{
        			 background-color: #73C2FB;
            }
             
            .snk{
            	padding-top: 35px;
            	padding-left: 40px;
            }
             @keyframes example{
          from{background-color:#f5fffa; }
              to{background-color: #fffbb0;}
          }
            body{
            background-color:  #fffbb0;
              animation: example 1s 1;
          }
          #tab{
            background-color: white;
            font-family: cursive;
          }
          #data{
               font-size: 18px;
            font-style: bold;
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
<div class="snk">
<?php
session_start();
$fdb = mysqli_connect("localhost","root","lightvegeta","authentication");
    $myquery = "SELECT * FROM regular WHERE id>13";
     $mdata = mysqli_query($fdb,$myquery);
         echo "<table id=\"tab\" align=\"center\" border>"; // start a table tag in the HTML
     
	 while($row = mysqli_fetch_array($mdata)){   //Creates a loop to loop through results
	 echo "<tr><td id=\"data\"> <marquee onmouseover=\"this.stop()\" onmouseout=\"this.start()\">" . $row['name'] ."<td>Rs.</td>". "</td><td>" . $row['price'] . "</td><td> <button onclick='select()' class='addbtn button'>Add to cart!</button>"."</td></tr>";  //$row['index'] the index here is a field name

            echo "<tr>";
              echo "<td>";?><img src="<?php echo $row['photo']?>" height="200" width="400" class="amount">
            <?php echo "</td>";
         
            echo "</tr>";

	 }
   
	 echo "</table>"; //Close the table in HTML
?>
</div>
</body>
</html>