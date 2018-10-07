<!DOCTYPE html>
<html>
<head>
	<title>Specials</title>
    <link rel="stylesheet" type="text/css" href="v.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <script type="text/javascript">
    function select(){
      alert("1 item added to the cart!");
    }
  </script>
  <style type="text/css">
        @keyframes example{
          from{background-color:#f5fffa; }
              to{background-color: #fffdd0;}
          }
           @keyframes example1{
          from{background-color:#f5fffa; }
              to{background-color: #FFD21C;}
          }
        .navbar{
               background-color: #73C2FB;
            }
          #tab{
             font-family: cursive;
          }
          #data{
            font-size: 18px;
            font-style: bold;
          }
          #row{
            background-color: #FFD21C;
            animation: example1 2s 1;
          }
          body{
            background-color: #fffdd0;
            animation: example 1s 1;
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
#photo{
   border-radius: 40px;
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

<div class="w3-container w3-animate-zoom">
<h2 style="color: blue; padding-left: 50px; padding-top: 50px;"><u>Today's Special</u></h2>
</div>
<img src="special.png" width="100" height="70" align="right" style="padding-right: 40px;">
	<p>
		<?php
    session_start();
     $day = date("l");
    // echo $day;

    $fdb = mysqli_connect("localhost","root","lightvegeta","authentication");
    $query = "SELECT fooditems.name,fooditems.price,foodphotos.photo FROM fooditems,foodphotos WHERE fooditems.name = foodphotos.name AND fooditems.availday = '$day'";
    $data = mysqli_query($fdb,$query);
       
     echo "<table id=\"tab\" border=1 align=\"center\">"; // start a table tag in the HTML
     
	 while($row = mysqli_fetch_array($data)){   //Creates a loop to loop through results
	 echo "<tr id=\"row\"><td id=\"data\"><marquee onmouseover=\"this.stop()\" onmouseout=\"this.start()\">" . $row['name'] . "<td>Rs.</td>"."
   </marquee></td><td>" . $row['price'] . "</td><td><button onclick='select()' class='addbtn button'>Add to cart!</button>"."</td></tr>";  //$row['index'] the index here is a field name
	 
	  echo "<tr>";
              echo "<td>";?><img src="<?php echo $row['photo']?>" height="200" width="400" id="photo">
            <?php echo "</td>";
            echo "<td>";
            // echo $row['name'];
            // echo "</td>";
            echo "</tr>";

	 }
   
	 echo "</table>"; //Close the table in HTML

	 mysqli_close();  					
?>
	</p>
</body>
</html>