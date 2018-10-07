<html>
<title>DBMS PROJECT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="v.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
@keyframes fadeAndScale{
    from{
      opacity: 0;
      transform: scale(.5,.5);
    }
    to{
      opacity: 1;
      transform: scale(1,1);
    }
  }
body {
  font-family: cursive;
 
  background-image: url("back3.jpg");
}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
}

.welcome{
          text-align: center; 
          font-size: 40px;
          transform-origin: 50% 100%;
          text-shadow: 2px 2px 2px #333;
          animation-duration: .3s;
          animation-name: fadeAndScale;
          color: #ffdf00;
          animation-timing-function: cubic-bezier(.71,.55,.62,1.57);
          padding-top: 150px;
        }
.navbar{
  background-color: #73C2FB;
}
.des{
  padding-top: 100px;
  color: white;
}

</style>
<body>
<marquee class="des"><i>Select from our wide range of products!</i></marquee>
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

<header>

<div class="w3-container w3-center w3-animate-top">
  <h3><a href="specials.php" style="color: orange;">Have you tried our special today?</a></h3>
</div>
<h2 class="welcome">
Welcome <?php 
// session_start();
echo $_POST['username'];
?>!
</h2>
<h2 class="welcome" >What would you like to eat today?</h2>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

    </div>
</body>
</html>
