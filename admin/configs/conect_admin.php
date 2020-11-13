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
    if (mysqli_num_rows($results) > 0) {
        $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
        foreach ($users as $user) {
            if ($username==$user['username'] && $password==$user['pass'])
            {$kiemtra=true;
                break;
            }
        }
    }
    return $kiemtra;
}

function isinsert($fullname,$username,$password,$email,$SDT)
{
    $connect=connection();
    $sql_insert="INSERT INTO `admin` (`fullname`,`username`,`pass`,`email`,`SDT`)
                                        VALUE 
                                       ('$fullname','$username','$password','$email','$SDT')";
    $result=mysqli_query($connect,$sql_insert);
    if ($result)
    {
        $_SESSION['success']="Insert thành công";
    }
    else
    {
        echo " $sql_insert </br>" ;
        echo "Insert thất bại";
    }
}
?>
