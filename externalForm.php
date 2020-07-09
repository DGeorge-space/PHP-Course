


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Php was built to access form data. Data is collected using a super variable which is global --> 

    <form action="formProcess.php" method="post">
        <input type="text" placeholder="Enter Username: " name="username">
        <input type="password" placeholder="Password: " name="password"><br>
        <input type = "submit" name= "submit">
    </form>

    <!-- The data contained in the above form is processed in form .php (action) and the method used was post

    We first need to check that the form data was recieved.-->



</body>
</html>