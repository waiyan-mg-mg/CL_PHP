<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
    $string = "loremitps doller smit";
    $stringTage = "<div class='container'><span><i>container fluid</i></span></div>";
    echo strlen($string); // get length of string
    echo  "<br/>";
    echo str_word_count($string); //count how many word in a string
    echo  "<br/>";
    echo strrev($string); //reverse string
    echo  "<br/>";
    echo str_shuffle($string); // random shuffle a string
    echo  "<br/>";
    var_dump(strpos("doller", $string)); //check that the custom part of string include in given string
    echo  "<br/>";
    echo substr($string, 10, 6); //return a piece of string.
    echo  "<br/>";
    echo strtoupper($string);
    echo  "<br/>";
    var_dump(strip_tags($stringTage, '<i></i>'));
    echo  "<br/>";
    echo str_replace('doller','smit doller',$stringTage)


    ?> </body>

</html>