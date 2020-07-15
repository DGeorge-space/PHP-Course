<?php
include 'db.php';

//CRUD:

//CREATING

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    

            //writing a query to a database:
            $query = "INSERT INTO users(username,password)";

            //concatenate our query:
            $query .= "VALUES ('$username', '$password')";
            
            //the above is a neater way to submitting the query rather than putting all of lines 15-22 inside of mysqli_query()

            $result = mysqli_query($connection, $query);

            if(!$result){
                die('Query Failed ');
            }


}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Create </title>
</head>

<body>

    <div class="container">
        <div class="col-sm-6">
            <form action="creatingDatabaseRecords.php" method="POST">
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