<?php
    include '../database/database.php';

    if(isset($_POST['signUp'])){
        $username = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
    }

?>