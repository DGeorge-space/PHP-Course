<?php

if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $password=$_POST['password'];

        // if($username && $password){ //if the username & password exist
        //     echo $username."<br>";
        //     echo $password;
        // }
        // else{
        //     echo "This feld cannot be blank";
        // }


            //connecting to database:

    //mysqli_connect([name of server], [host username], [host pwd], [name of the dbase])
    $connection = mysqli_connect('localhost','root','', 'loginapp');

            if($connection){ //if connection successful 
                echo "we are connected!";
            }
            else{
                die("Dbase connection failed"); //die() kills the program and gives an error
            }




}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="col-sm-6">
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name= "username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="username">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Submit">

            </form>

        </div>
    </div>

</body>

</html>