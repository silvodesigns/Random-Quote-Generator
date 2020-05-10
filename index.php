<?php 
include 'inc/functions.php' ;

//displays erros to me on screen in case of any

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.php">
</head>
<body>
  <div class="container">
  <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
      <div id="display-quote">
        <div id="quote-box">
          <?php 
            printQuote($quote); 

          ?>
     
     </div>
    </div>
  </div>
</body>
</html>