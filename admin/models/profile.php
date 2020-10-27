<?php
require_once "../configs/config.php";

function getlist()
{
    $connect=connection();
    $sqL_select="SELECT * FROM profile";
    $result=mysqli_query($connect,$sqL_select);
    $users=mysqli_fetch_all($result);
    return $users;
}

?>
