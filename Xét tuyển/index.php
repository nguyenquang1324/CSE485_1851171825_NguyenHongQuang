<?php
session_start();
require_once "configs/conect_profile.php";
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
<main class="container">

    <center><div class="row">
            <div class="select">
                <form method="post">
                    MãGV: <input type="text" name="selectmagv">
                    TênGV: <input type="text" name="selecttengv">
                    Môn dạy: <input type="text" name="selectmonday">
                    <input type="submit" name="timkiem" value="TÌM">
                </form>
            </div>
            <div>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Họ tên </th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Năm tốt nghiệp</th>
                        <th scope="col">Học lực</th>
                        <th scope="col">Hạnh kiểm</th>
                        <th scope="col">CMT/CCCD</th>
                        <th scope="col">Hộ khẩu </th>
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
                            <td> <?php echo $user['1'];?> </td>
                            <td> <?php echo $user['2'];?> </td>
                            <td> <?php echo $user['3'];?> </td>
                            <td> <?php echo $user['7'];?> </td>
                            <td> <?php echo $user['8'];?> </td>
                            <td> <?php echo $user['9'];?> </td>
                            <td> <?php echo $user['0'];?> </td>
                            <td> <?php echo $user['12'];?> </td>
                            <td> <?php echo $user['30'];?> </td>
                            <td> <a href="edit.php?id=<?php echo $user['0']?>"><i class="fas fa-edit"></i></a> </td>
                        </tr>
                    <?php }endforeach; ?>
                    </tbody>
                </table>
                <button><a href="create.php">Thêm mới</a></button>

            </div>
        </div></center>
</main>

</body>
</html>
