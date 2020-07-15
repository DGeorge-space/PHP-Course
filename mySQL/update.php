<?php include "db.php" ?>
<?php include "functions.php" ?>
<?php include "includes/header.php"?>

<?php
updateTable();

?>

<!-- Below is the HTML CODE for this page: -->


<body>

    <div class="container">
        <div class="col-sm-6">
            <h1> Update </h1>

            <form action="update.php" method="POST">
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

    <?php include "includes/footer.php" ?>