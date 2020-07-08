<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php 

function saySomething(){ // creates function 
	echo "hi Dan!";
	echo "<br>";

}
function calculate(){
	echo 3 + 14;
}

saySomething(); // calls function
calculate();

/* Passing parameters to functions 
===================================

*/

function greeting($name){
	echo"<br>";
	echo "Hi ".$name;

	echo"<br>";
}

greeting("Arthur");

function addition($num1, $num2){
	echo $num1 + $num2;
}

addition(33,5);

/* Returning vales from functions
==================================
*/
echo "<br><br><br>";
function add($num1, $num2){
	return $num1 + $num2;
}

$num1 = 5;
$num2 = 12;

echo "Example of function returns: ". "<br>" ;
echo $num1 . " + " . $num2 . " = " . add($num1,$num2);

/* Local & Global Scope
=======================*/

$inOrOut = "outside";



function goIn(){
	global $inOrOut; // We are declaring that x is wrt the global variable x not the local

	$inOrOut = "inside";
}

echo $inOrOut; // "outside"
echo "<br>";
goIn();
echo $inOrOut; // "inside" 
echo "<br>";echo "<br>";echo "<br>";



// Because we have delcred $inOrOut as a global vriable inside the function 

/*Constants
==========*/

define("NAME", "Dan");
//Here we are defining the variable NAME to be called Dan. It cannot be modified after this definition.

echo NAME;

echo "<br>";echo "<br>";echo "<br>";echo "<br>";


// More Modern Ways of defining const:

    // Works as of PHP 5.3.0
     
    const CONSTANT = 'Hello World';
     
     
    echo CONSTANT;
     
     
    // Works as of PHP 5.6.0
	echo "<br>";
    const ANOTHER_CONST = CONSTANT.'; Goodbye World';
	echo "<br>";
    echo ANOTHER_CONST;
	echo "<br>";
     
    const ANIMALS = array('dog', 'cat', 'bird');
	echo "<br>";
    echo ANIMALS[1]; // outputs "cat"
     
     
    // Works as of PHP 7
     
    define('ANIMALS2', array(
     
    'dog',
     
    'cat',
     
    'bird'
     
    ));
     
    echo ANIMALS[1]; // outputs "cat"

?>



	
</body>
</html>