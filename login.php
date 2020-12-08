<?php
require('./includes/constants.php');
require('./db/connect.php');

$is_login_error = false;


if(isset($_POST['submit'])) {
    
    $username = '';
    $password = '';

    if(isset($_POST['username'])) {
        $username = $_POST['username'];
    }

    if(isset($_POST['password'])) {
        $password = $_POST['password'];
    }

    $get_login_user_query = "SELECT * FROM `user` WHERE `username`='$username'";

    $res = mysqli_query($conn, $get_login_user_query);

    $data = mysqli_fetch_assoc($res);

    if(!$data) {
        $is_login_error = true;
    } else {
        if($data['password'] === $password) {
            $_SESSION['user_id'] = $data['id'];
            $_SESSION['user_full_name'] = $data['first_name'].' '.$data['last_name'];
            $_SESSION['user_role'] = $data['role'];
            switch($data['role']) {
                case ROLE_BASE['admin']:
                    header('Location: '.BASE_URL.'/admin/home.php');
                    break;
                case ROLE_BASE['teacher']:
                    header('Location: '.BASE_URL.'/teacher/home.php');
                    break;
                case ROLE_BASE['student']:
                    header('Location: '.BASE_URL.'/student/home.php');
                    break;
                
            }
        } else {
            $is_login_error = true;
        }
    }
 
} else {
    session_destroy();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
<body>
    


<div class="container-fluid pt-5">
    <div class="row">
        <div class="col-md-4 offset-md-4 border rounded p-5">
            <h1><b>Welcome</b></h1>

            <hr>

            <?php if($is_login_error) { ?>
            <div class="alert alert-danger">
                <p>Incorrect username or password</p>
            </div>
            <?php } ?>

            <form action="" method='post'>
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" class='form-control' name='username'>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class='form-control' name='password'>
                </div>

                <div class='form-group'>
                    <a href="#">Forgot Password</a>
                </div>

                <div class="form-group">
                    <input type="submit" class='btn btn-block btn-primary' name='submit' value="Login">
                </div> 

            </form>
        </div>
    </div>
</div>


