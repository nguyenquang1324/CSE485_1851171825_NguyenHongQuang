<?php
session_start();
if (isset($_SESSION['success']))
{
    echo "Thành công";
    unset($_SESSION['success']);
}
else
{
    echo "Vui lòng nhập lại thông tin";
}


?>

<button><a href='../form_xet_tuyen.php'>Quay lại trang đăng ký</a>/button>

