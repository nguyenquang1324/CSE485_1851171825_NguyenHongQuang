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

function selectall()
{
    $connect=connection();
    $sqL_select="SELECT * FROM profile";
    $result=mysqli_query($connect,$sqL_select);
    $users=mysqli_fetch_all($result);
    return $users;
}

function selectforid($id)
{
    $connect=connection();
    $sqL_select="SELECT * FROM profile where CMT=$id";
    $result=mysqli_query($connect,$sqL_select);
    $users=mysqli_fetch_assoc($result);
    return $users;
}
function isdelete($id) {
    $connect=connection();
    $sql_delete="DELETE FROM `profile` WHERE CMT='$id'";
    $result=mysqli_query($connect,$sql_delete);
    if ($result)
    {
        $_SESSION['result']="Insert thành công";
        header("Location: ../index.php");
    }
    else
    {
        echo "xóa thất bại";
    }
}
