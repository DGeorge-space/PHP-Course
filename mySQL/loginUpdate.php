<?php include "db.php" ?>
<?php include "functions.php" ?>

<?php
if (isset($_POST['submit'])) {

    updateTable();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Update Records</title>
</head>

<body>

    <div class="container">
        <div class="col-sm-6">

            <form action="loginUpdate.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="username">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">

                    <select name="id" id="">
                        <?php
                        showAllData();
                        ?>



                    </select>
                </div> <!-- form group -->

                <input class="btn btn-primary" type="submit" name="submit" value="Update">



            </form>





        </div>
    </div>

</body>

</html>