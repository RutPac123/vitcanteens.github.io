<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<html>
    <head>
        <title>VITCanteens</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
        <style type="text/css">
        body {
            margin:10px;
            background-image:url("backcan.png");
            font-family:verdana,helvetica,sans-serif;
        }

        .tutorial-name {
            display:block;
            font-weight:bold;
            margin-left:400px;
            margin-top:50px;
        }

        .tutorial-url {
            display:block;
            color:#636363;
            font-size:small;
            font-style:italic;
            margin-left:500px;

        }
        #head{
        color:#FFB6C1; 
        font-size:60px;
        margin-left:350px;
        margin-top:200px;

        }
        #desc{
        margin-left:480px;
        color:black;
        font-size:20px;
        }
        #reg{
            margin-left:400px;
        }
    
        #log{
         padding-left:80px;
    
        }
         a:hover{
          background-color:#D3D3D3;
        }
        </style>
    </head>
    <body>
        <div class="w3-container w3-center w3-animate-right">
        <h2 id="head">Welcome Foodies!</h2>
    </div>
    <div class="w3-container w3-center w3-animate-left">
        <p  id="desc">Hey, check out our best products!</p>
    </div>
        <hr/>
        <div class="w3-container w3-center w3-animate-bottom">
        <a href="register.php" id="reg">Register!</a>
         <a href="login.php" id="log">Log in!</a>
         </div>
        <div id="divide">
          <xsl:apply-templates/>
      </div>
    </body>
</html>
</xsl:template>

<xsl:template match="tutorial">
    <span class="tutorial-name"><xsl:value-of select="name"/></span>
    <span class="tutorial-url"><xsl:value-of select="url"/></span>
</xsl:template>

</xsl:stylesheet>