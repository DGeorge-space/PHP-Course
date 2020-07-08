<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

/* maths Functions
================*/

echo pow(2,7)."<br>"; //raises 2 to the power of 7

echo rand(1,10000); // delivers a random int between param 1 and param 2

echo sqrt(100); //sqrt of param 

echo "<br>";

echo ceil(4.6);  // nearest lower int

echo "<br>";

echo floor(4.6); // nearest higher int
echo "<br>";
echo round(4.578); // actualy rounds


/*String Functions 
=================*/
echo "<br>";
$string = "What is your name";
echo "Length of string is: ".strlen($string);
echo "<br>";
echo strtoupper($string);  // to uppser case 



echo "<br>";echo "<br>";echo "<br>";

/*Array Functions
================*/

$list = [34,34434,44,35,3,3,4,4,34,3,44334];

echo max($list);

echo "<br>";

echo min($list);

echo "<br>";

print_r($list);

sort($list);
echo "<br>";
print_r($list);

?>

</body>
</html>