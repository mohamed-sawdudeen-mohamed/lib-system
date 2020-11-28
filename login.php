<?php
require('./includes/heder.php');
require('./includes/navbar.php');
?>

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


<?php
require('./includes/footer.php');
?>