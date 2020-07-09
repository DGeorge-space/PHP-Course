<!-- This is an external form validation -->

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
    if(strlen($userName)>$maximum){
        echo "Username cannot be longer than 10 characters";
    }

    if(!in_array($userName,$name)){
        echo "Username not recognised";
    }
    else{
        echo "welcome";
    }

}
//When externalForm.php is submitted the verification is passed to formProcess.php where the verification process is isolated to stop the often lengthy verification process taking up our nice php page. 



?>
