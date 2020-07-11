<?php

//CRUD:

//Reading


$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if ($connection) { 
    echo "we are connected!";
} else {
    die("Dbase connection failed"); 
}

// 'select all from users'
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);


if (!$result) {
    die('Query Failed '. mysqli_error($connection));
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css>
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="col-sm-6">
        <?php 
        

        // while able to fetch row, fetch the result of $query
        while($row = mysqli_fetch_assoc($result)){
            ?>

            <pre>
                <?php 
                    print_r($row);
                ?>
            </pre>
            <?php
        }
        //closing the php tag and putting the print between <pre> html tags outputs the array nicely
        
        ?>




        </div>
    </div>

</body>

</html>