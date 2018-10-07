<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" href="v.css">
	<style type="text/css">
		.navbar{
  			background-color: #73C2FB;
		}
    @keyframes example{
          from{background-color:#f5fffa; }
              to{background-color: #71eeb8;}
          }

     body{
            background-color: #71eeb8;
            animation: example 1s 1;
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
 <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1 style="font-family: cursive;">Contact Us</h1><br>
    <hr>
    <p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>Cafeteria VIT , Wadala -400022</b></p>
    <p>You can also contact us by phone 00553123-2323 or email vit.edu.com, or you can send us a message here:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="number" placeholder="How many people" required name="People"></p>
      <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required name="date" value="2018-08-1T20:00"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>
<hr>
</body>
</html>