<?php
include "db.php";

// a series of functions we are using to query our database

function createRecord()
{
    global $connection;
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // this function escapes any character that could cause interference!
        $username = mysqli_real_escape_string($connection,$username);
        $password = mysqli_real_escape_string($connection,$password);
        
        $hashFormat = "$2y$10$"; //number after the second $ tells the crypt function to run 10 times, $2y$ is the preferred security as it stands
        
        $salt = "iusesomecrazystrings22";//this is seed for the encryption must be 22 chars long 

        $hashF_and_salt = $hashFormat.$salt;

        //combine the hash format with the salt 


        $password = crypt($password,$hashF_and_salt);

        // encrypt and replace or value


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

function read()
{
    global $connection;
    // 'select all from users'
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);


    if (!$result) {
        die('Query Failed ' . mysqli_error($connection));
    }
    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
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
