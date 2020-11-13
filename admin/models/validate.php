<?php
if (isset($_POST['create'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $SDT = $_POST['SDT'];

    echo $fullname,$username,$password,$email,$SDT;
    isinsert($fullname,$username,$password,$email,$SDT);
}

