<?php
include 'db.php';
include 'functions.php';

createRecord();

include "includes/header.php";
?>


<!-- Below is the HTML CODE for this page:

The header for the file is in header.php -->


    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Create</h1>
            <form action="create.php" method="POST">
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

<?php include "includes/footer.php" ?>