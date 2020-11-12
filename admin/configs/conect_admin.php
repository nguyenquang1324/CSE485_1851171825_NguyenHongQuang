<?php
const host = "localhost";
const username = "root";
const pass = '';
const dbname = 'CSE485';
const port = '3306';

function connection()
{
    $connect = mysqli_connect(host, username, pass, dbname, port);
    if (!$connect) {
        die("Không thể kết nối");
    }
    return $connect;
}

function sosanh($username,$password)
{
    $kiemtra=false;
    $connection = connection();
    $sql_select = "SELECT * FROM admin";
    $results = mysqli_query($connection, $sql_select);
//kiểm tra xem có bản ghi nào trả về từ câu truy vấn select hay ko
    if (mysqli_num_rows($results) > 0) {
        //lấy ra được dữ liệu mong muốn,
//    cần chú ý phải truyền hằng MYSQLI_ASSOS để có thể trả về 1 mảng
//    kết hợp
        $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
        //lặp và hiển thị ra các thông tin
        foreach ($users as $user) {
            if ($username==$user['username'] && $password==$user['pass'])
            {$kiemtra=true;
                break;
            }
        }
    }
    return $kiemtra;
}


?>
