<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <?php 
      
      //can do maths as normal 
      echo 55+33;
      echo "<br>";
      echo 55-33;
      echo "<br>";
      echo 55*33;
      echo "<br>";
      echo 55/33;
      echo "<br>";

      //parentheses govern order of operation 

      //Arrays:

      echo "<br>";
      echo "<h1> Arrays </h1>";

      $myArray = array(5.0, 69, "Dan", true);
      // alternatively $myArray=[];

      echo $myArray[0];
      echo "<br>";
      echo $myArray[1];
      echo "<br>";
      echo $myArray[2];
      echo "<br>";
      echo $myArray[3];
      echo "<br>";

      //me guessing how to for loop 
      for($i = 0; $i<4; $i++){
        echo "<br>";
        echo $myArray[$i];
        echo "<br>";
      }

      //outputs the precise structure of the array 
      print_r($myArray);
      echo "<br>";
      
      //gives the size of the array:
      echo sizeof($myArray);


      // Associative arrays: 
      //====================
      echo "<br>";
      echo "<h1> Associative arrays </h1>";
      $number = array();

      // think dictionary (python) or hashmap (c)

      $numberAssoc = array("first_name" => 'Dan', "last_name" => 'George');
      //"first_name" is key, 'Dan' is the value. => is assignment operator
      print_r($numberAssoc);
      echo "<br>";
      echo $numberAssoc['first_name'];
      echo "<br>";
      echo $numberAssoc['last_name'];
      ?>  


</body>
</html>