<?php
session_start();
require_once "configs/conect_profile.php";
if(!isset($_SESSION['success']))
{
    header("location: views/login.php");
    exit();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--    <link rel="stylesheet" href="isset/bootstrap.min.css">;-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
<header class="header">
    <center>
        <div class="container">
            <div class="header__logo">
                <h1><a href="#"><img src="images/logo.jpg" width="547" height="82"></a></h1>
            </div>
        </div>
        <center
</header>
<main class="container">

    <center><div class="row">

            <div>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Họ tên </th>
                        <th scope="col">Năm tốt nghiệp</th>
                        <th scope="col">Học lực</th>
                        <th scope="col">Hạnh kiểm</th>
                        <th scope="col">CMT/CCCD</th>
                        <th scope="col">Hồ sơ</th>
                        <th scope="col">Hình thức xét</th>
                        <th scope="col">Chi tiết </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $users = selectall();
                    foreach ($users as $user):{
                        ?>
                        <tr>
                           </td>
                            <td scope="row"> <?php echo $user['0'];?> </td>
                            <td> <?php echo $user['7'];?> </td>
                            <td> <?php echo $user['8'];?> </td>
                            <td> <?php echo $user['9'];?> </td>
                            <td> <?php echo $user['0'];?> </td>
                            <td> <img src="../Xét%20tuyển/model/uploads/<?php echo $user['31']?>"></td>
                            <td> <?php echo $user['30'];?> </td>
                            <td> <a href="views/chitiet.php?id=<?php echo $user['0']?>"><i class="fas fa-edit"></i></a> </td>
                        </tr>
                    <?php }endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div></center>
</main>

</body>
</html>
