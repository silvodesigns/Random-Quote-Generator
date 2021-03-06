<?php

// PHP - Random Quote Generator
// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quote = array (
    array(
        'source' => 'Junko Kaname',
        'quote'  => 'Just because you keep trying to to the righ thing, doesn\'t mean
        you are garanteed a happy ending.',
        'citation' => 'Puella Magi',
        'category' => 'Morality'
   ),
    array(
        'source' => 'Pain',
        'quote' => 'To understand pain, you must know pain.',
        'citation' => 'Naturo Shippuden',
        'category' => 'Struggle'
    ),
    array(
        'source' => 'Goku',
        'quote' => 'Power comes in a response to a need, not a desire. You have to create that need.',
        'citation' => 'Dragon Ball Z',
        'category' => 'Responsability'
    ),
    array(
        'source' => 'L Lawliet',
        'quote' => 'By trying too hard, we put ourselves at a greater risk.',
        'citation' => 'Death Note',
        'category' => 'Philosophy'
    ),
    array(
        'source' => 'Armin Arlet',
        'quote' => 'A person who cannot give up anything , can change nothing.',
        'citation' => 'Attack on Titans',
        'category' => 'Sacrifice'
    ),
);



// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote($array){
    //this function should take in an array of quotes
    //select a random quote from array and return it
    $random_number = rand(0,4);
    return $array[$random_number];

};

//this is a functions that prints an image along with the quote depending of the generated
//quote from the function printQuote below

function printImage($image){

    if($image['source'] == 'Pain'){
       echo "<img class=\"quote_image\" src=\"img\pain.jpg\">";
    } elseif($image['source'] == 'Goku'){
        echo "<img class=\"quote_image\" src=\"img\goku.jpg\">";
     } elseif($image['source'] == 'Junko Kaname'){
        echo "<img class=\"quote_image\" src=\"img\junko.jpg\">";
     } elseif($image['source'] == 'L Lawliet'){
        echo "<img class=\"quote_image\" src=\"img\lawliet.jpg\">";
     } elseif($image['source'] == 'Armin Arlet'){
        echo "<img class=\"quote_image\" src=\"img\arming.jpg\">";
     } 

};



// Create the printQuote funtion and name it printQuote
function printQuote($array){
    $current_quote = getRandomQuote($array);
    //initialized empty array
    $generated;

    /*
    
    if the array selected randomly contains a citation we
    assign the following HTML to the generated variable, otherwise
    we assign the HTML without the span tag for it

    */
    if($current_quote['citation'] && $current_quote['category'] ){
        $generated = "<p class=\"quote\">" . $current_quote['quote'] . 
        "<br/><span class=\"category\">" .$current_quote['category'] . "</span></p>
        <p class=\"source\"> " . $current_quote['source'] 
         . "- <span class=\"citation\">" . $current_quote['citation'] . "</span>
         </p>";

    } else {
        $generated = "<p class=\"quote\">" . $current_quote['quote'] . "</p>
        <p class=\"source\">" . $current_quote['source'] .
        "</p>";

    }

    //display the results
    echo $generated;
    //displays images I have added to each quote
    printImage($current_quote);
         
         
           
};


?>