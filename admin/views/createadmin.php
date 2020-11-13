<?php
require_once "../configs/conect_admin.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form xét tuyển</title>
    <!--    bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

</head>
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

<div style="margin-top: 30px;" class="input-group-prepend">
    <!--FORM-->

    <div class="col-md-10">
        <form method="post" name="form_xet_tuyen" >
            <div class="input-group-prepend">
                <div class="col-md-12">
                    <h1 style="text-align:center">ĐĂNG KÝ</h1>
                </div>
            </div>
            <div class="nhap-thong-tin">
                <div style="margin-bottom: 10px;">
                    <div class="col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">fullname</span>
                            <input type="text" name="fullname" placeholder="Nhập tên" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >username</span>
                            <input type="text" name="username" placeholder="Nhập username" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >password</span>
                            <input type="password" name="pass" placeholder="Nhập password" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Email</span>
                            <input type="email" name="email" placeholder="Nhập Email" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >SDT</span>
                            <input type="number" name="SDT" placeholder="Nhập SDT" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group-prepend">

                            <input type="submit" name="create" value="CREATE" class="btn btn-success form-control" >
                        </div>
                    </div>

                </div>

            </div>

        </form>
    </div>
</div>
<?php
require_once "../models/validate.php";
?>
</body>
</html>

