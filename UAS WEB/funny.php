<?php 
require 'functions.php';
session_start();

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>UTS Web Kelompok 2</title>
    <link href="quotes.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Noto+Serif:ital@1&display=swap" rel="stylesheet">
</head>

<body>
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
 
    <div class="judul">
      <p>Funny Quotes</p>
    </div>
    <div>
        <button id="ButtonE" class="button4" >Add a Quote</button>
    </div>
    <div class="teks">
     <?php
     $result = mysqli_query($conn, "SELECT * FROM funny");
            while ($row = mysqli_fetch_assoc($result)) {
                echo
                "<tr>
            <td>{$row['funny_quote']}</td>
            <br>
            <br>
            <br>
             </tr>";
             }
              ?>
    </div>

   
</body>
<script src="../funny.js"></script>
<script src="script.js"></script>

</html>