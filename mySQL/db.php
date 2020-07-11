
<?php

//db.php is now the connection for our database!

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if (!$connection) { 
    die("Dbase connection failed :'("); 
}

?>