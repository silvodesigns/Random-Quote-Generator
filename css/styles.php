<?php
header("Content-type: text/css; charset: UTF-8");

//this are the possible color values for the random background
$red = "#eb1d6b";
$blue = "#3b5dcc";
$orange = "#b8714a";
$yellow = "#d4cf3e";
$green = "#36b55c";

//store the value on an array to pull a random value using the rand() fx
$colors = array($red, $blue, $orange, $yellow, $green);

?>


/* Random Quote Generator Styles */

body {
  background-color: <?php echo $colors[rand(0,4)] ; ?>;
  color: black;
  font-family: 'Playfair Display', serif;
}

body, html {
  height: 100%;
}

#quote-box {
  width: 80%;
  line-height: .5;
  margin:0 auto;
}

.quote {
  font-size: 4rem;
  font-weight: 400;
  line-height: 1.1;
}

.source {
  font-size: 1.25rem;;
  letter-spacing: 0.05em;
  line-height: 1.1;
}


.citation {
  font-style: italic;
}



#loadQuote {
  width: 12em;
  display: inline-block;
  border-radius: 4px;
  border: 2px solid #fff;
  color: white;
  background-color: black;
  padding: 15px 0;

}


#loadQuote:focus {
  outline: none;
}


#display-quote {
  height:100%;;
}

.quote_image{
  width:500px;
}

.category {
  font-size:1rem;
  border: 2px solid black;
  border-radius:25%;
  padding:20px;
}



