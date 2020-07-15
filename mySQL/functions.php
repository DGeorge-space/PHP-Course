<?php
include "db.php";

// a series of functions we are using to query our database

function createRecord()
{
    global $connection;
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];


        //writing a query to a database:
        $query = "INSERT INTO users(username,password)";

        //concatenate our query:
        $query .= "VALUES ('$username', '$password')";

        //the above is a neater way to submitting the query rather than putting all of lines 15-22 inside of mysqli_query()

        $result = mysqli_query($connection, $query);



        if (!$result) {
            die('Query Failed ');
        } else {
            echo "Record Created!";
        }
    }
}

//Retrieve
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

//Update: 

// using the HTML form below we can input a username and password and select and id for the drop down that corresponds to an ID in our database. The ID selected will have the username and password updated as entered in the boxes. 

function updateTable()
{
    if (isset($_POST['submit'])) {
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
        } else {
            echo "Record Updated";
        }
    }
}

//Delete

function deleteRows()
{
    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM users ";

        $query .= "WHERE id = $id";


        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("QUERY FAILED " . mysqli_error($connection));
        } else {
            echo "Record Deleted";
        }
    }
}
