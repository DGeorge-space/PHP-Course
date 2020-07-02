<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //Defining custom functions
    function myFunction(int $myVar)
    {
        echo "Welcome to my function" . "<br>";
        echo $myVar;
    }

    myFunction(7);

    //can call functions from within functions, it is common to do this and call several functions within an init() function 
    ?>

</body>

</html>