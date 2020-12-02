<?php
// require('./includes/constant.php');
require('./db/connect.php');
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
                    <input type="submit" class='btn btn-block btn-primary' name='submit'>
                </div> 

            </form>
        </div>
    </div>
</div>


