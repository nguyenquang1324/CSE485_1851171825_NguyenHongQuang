<?php
session_start();
require_once "../configs/conect_admin.php";
$error='';
if (isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    if (sosanh($username,$password)==true)
    {
        $_SESSION['success']='thành công';
        header("Location: ../index.php");
        exit();
    }
    else
    {
        $error='Tên tài khoản hoặc mật khẩu không hợp lệ;';
    }

}
?>
<body>
<header class="header">
    <center>
        <div class="container">
            <div class="header__logo">
                <h1><a href="../../Trang%20chủ%20TLU/index.html"><img src="../images/logo.jpg" width="547" height="82"></a></h1>
            </div>
        </div>
        <center
</header>
<center>
<div style="background-color: #0033FF;max-width: 30%;" >
    <form action="" method="post" >
        <div style="background: none;text-align: center" ><h1>ĐĂNG NHẬP</h1></div>

        <div style="background:LightGray ;text-align: center;">
            Tên đang nhập:
            <br>
            <input type="text" name="username" value="" style="background: white;border-radius: 7px">
            <br>
            Mật khẩu:
            <br>
            <input type="password" name="password" value="" style="background: white;border-radius: 7px">
            <br>
            <input type="checkbox" name="remember" value="remember"> Ghi nhớ đăng nhập
            <br>
            <input type="submit" name="login" value="Đăng nhập">
            <br>
            <br>
            <a href="#" style="text-decoration: none; color: dodgerblue" >Quên mật khẩu</a>
            <br>

    </form>
    <div style="color: red">
        <?php

        echo "$error";
        ?>
    </div>
</div>
</center>

