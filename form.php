<?php
if(isset($_POST['submit'])){
    
    $name = ["Daniel", "Arthur","Simsy", "Mum", "Dad","Tom"];
    $minimum = 5;
    $maximum = 10;

    $userName = $_POST['username']; 
    $password = $_POST['password'];

    if(strlen($userName)<$minimum){
        echo "Username has to be longer than 5 characters";
    }
    if(strlen($userName>$maximum)){
        echo "Username cannot be longer than 10 characters";
    }

    if(!in_array($userName,$name)){
        echo "Username not recognised";
    }
    else{
        echo "welcome";
    }
    /* Example using the values 
    echo "Hello ".$userName;
    echo "<br>";
    echo "Your password: ".$password;
    */

}
//_POST becomes an associative array which is filled with all of the elements in _POST with the specified name, in this case 'submit'.

// isset() runs only if submit is clicked

// if the submit button is set, then collect the following name parameters 



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Php was built to access form data. Data is collected using a super variable which is global --> 

    <form action="form.php" method="post">
        <input type="text" placeholder="Enter Username: " name="username">
        <input type="password" placeholder="Password: " name="password"><br>
        <input type = "submit" name= "submit">
    </form>

    <!-- The data contained in the above form is processed in form .php (action) and the method used was post

    We first need to check that the form data was recieved.-->



</body>
</html>