<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
    // Array function from code lab
    $data = [
        [
            "name" => "Odessa Hood",
            "list" => "17",
            "email" => "lobortis.mauris.suspendisse@protonmail.couk"
        ],
        [
            "name" => "Venus Bolton",
            "list" => "13",
            "email" => "ornare.sagittis@protonmail.edu"
        ],
        [
            "name" => "Deacon Valencia",
            "list" => "5",
            "email" => "tincidunt.dui@aol.org"
        ],
        [
            "name" => "Jaden Foreman",
            "list" => "7",
            "email" => "rutrum@hotmail.net"
        ],
        [
            "name" => "Bradley Mcclain",
            "list" => "5",
            "email" => "justo.sit@aol.couk"
        ]
    ]; // each array contain name , list ,email
    echo "<pre></pre>";
    var_dump(array_values($data));
    echo  "<br/>";
    sort($data);
    var_dump(array_values($data));
    echo  "<br/>";
    echo in_array(17, $data[0], false);
    echo  "<br/>";
    print_r(range(0, 20));
    echo count(range(0, 20));
    echo  "<br/>";
    echo "======================================================================<br>";
    // string extra learning
    $string = "loremitps doller smit";
    $stringTage = "<div class='container'><span><i>container fluid</i></span></div>";
    echo  "<br/>";
    echo chr('65');
    echo  "<br/>";
    echo chop($string, "smit");
    echo  "<br/>";
    echo bin2hex($string);
    echo  "<br/>";
    echo "======================================================================<br>";
    // useful string test from code lab
    // $string = "loremitps doller smit";
    // $stringTage = "<div class='container'><span><i>container fluid</i></span></div>";
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
    echo str_replace('doller', 'smit doller', $stringTage)


    ?> </body>

</html>