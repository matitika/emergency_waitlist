<?php

session_start();
include("include/db.php");

if (isset($_POST["login"])) {
    $username = $_POST["uname"];
    $password = $_POST["pass"];

    $error = array();
    if (empty($username)){
        $error['admin'] = "Enter username";
    } else if (empty($password)) {
        $error["admin"] = "Enter password";
    }

    if (empty($error)) {
        $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connective, $sql);

        if (mysqli_num_rows($result) == 1) {
            echo  "<script>alert('Successfully logged in as an admin')</script>";
            $_SESSION['admin'] = $username;
            header("Location:admin/index.php");
            exit();
        } else {
            echo  "<script>alert('Invalid username or password')</script>";
        }
    }
};

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login Page</title>
    </head>
    <body>
        <?php
            include("include/header.php");
        ?>

        <div style="margin-top: 60px;"></div>
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 jumbotron">
                        <img src="img/admin.svg" class="col-md-12">
                        <form method="post" class="my-4">

                            <div class="alert alert-warning">
                                <?php
                                    if (isset($error['admin'])) {
                                        $display = $error['admin'];
                                        
                                    } else {
                                        $display = '';
                                    }
                                    echo''.$display.'';
                                ?>
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter password">
                            </div>
                            <input type="submit" name="login" class="btn btn-info" value="Login" placeholder="Login">
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </body>
</html>