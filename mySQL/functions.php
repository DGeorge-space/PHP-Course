<?php
include "db.php";

// a series of functions we are using to query our database


function showAllData()
{
    global $connection;

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);


    if (!$result) {
        die('Query Failed ' . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];


        echo "<option value='$id'>$id</option>";
    }
}
//CRUD:

//Update: 

// using the HTML form below we can input a username and password and select and id for the drop down that corresponds to an ID in our database. The ID selected will have the username and password updated as entered in the boxes. 

function updateTable()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";


    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("QUERY FAILED " . mysqli_error($connection));
    }
}
