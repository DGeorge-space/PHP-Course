<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //else if 
    if(33<10){
        echo " Three is less than ten"." ";
        
    }elseif(5>2){
        echo " 5 is bigger than 10";
        echo "<br>";

    }

    // comparison and logical operators
    //=================================
    /*
    equal ==
    identical ===
    compare > < >= <= <>
    not equal !=
    not identical !==

    Logical Operators:

    And && 
    Or ||
    not !

    */
    //Switch statements in PHP:
    //======================== 

    $number = 4;
    switch($number){
        case $number <10:
            echo "4 is less than 10"; //outputs the first valid case only
             break;
        case $number >0:
            echo "4 is bigger than zero";
            break;
        case $number /2 ==2:
            echo "4/2 =2";
            break;

        default:
         echo "default case";
        break;
        
    }

    //Looping:
    //=======

    $number = 0;

    while($number <10){
        echo "Hello ". $number."<br>";
        $number++;
    }

    echo "<br>";

    for($counter =0; $counter < 10; $counter ++){
        echo "Hello ". $counter. "<br>". "<br>";
        //very similar to c++
    }

    // For each loop- iterates through array

    $myArray = [1,2,3,4,5,6,7,8,9];

    foreach($myArray as $arrayVal){
        echo $arrayVal.".". " Hello" . "<br>";
    }
    //we use the as keyword which calls the array members one by one as a variable




?>
    
</body>
</html>