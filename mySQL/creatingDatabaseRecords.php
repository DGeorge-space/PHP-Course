<?php
include 'db.php';
include 'functions.php';

createRecord();
?>


<!-- Below is the HTML CODE for this page: -->
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
            <h1 class="text-center">Create</h1>
            <form action="creatingDatabaseRecords.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name= "username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="username">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Create">

            </form>

        </div>
    </div>

</body>

</html>