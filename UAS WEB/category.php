<?php 
session_start();

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>


<!DOCtype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>UTS Web Kelompok 2</title>
    <!--<link href="style.css" rel="stylesheet" type="text/css" />-->
    <link rel="stylesheet" href="quotes.css">
    <link rel="stylesheet" href="index.html">
    <link href="category.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Noto+Serif:ital@1&display=swap" rel="stylesheet">
 
</head>
<body>
  <div class="container">
    <div class="nav" id="satu">
      <div class="logo">
          <h4> Quotes</h4>
      </div>
          <ul>
            <li><a href="utama.php">Home</a></li>
            <li><a href="category.php">Category</a></li>
            <li><a href="utama.php#tiga">About</a></li>
            <li><a href="utama.php#empat">Contact</a></li>
            <li><a href="upload.php">Upload</a></li>
            <li><a href="logout.php">Logout</a></li>

          </ul>
    </div>
    

      <div class="container2">
        
        <button id="ButtonF" class="button1" >Funny</button>

        <button id="ButtonSL" class="button2" >Self Love</button>

        <button id="ButtonPUL" class="button3" >Pick Up Lines</button>


      </div>
  </div>
  
  </body>
  <script src="category.js"></script>
  <script src="script.js"></script>
</html>
