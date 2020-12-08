<?php

session_start();

$db_local_host='127.0.0.1';
$db_username='root';
$db_password='';
$db_name='lib-system';

$conn = mysqli_connect($db_local_host, $db_username, $db_password, $db_name, 3306);


?>