<?php

if (isset($_POST['submit_profile']))
{
    $fullname=$_POST['fullname'];
    $gender=$_POST['gender'];
    $birthday=$_POST['birthday'];
    $nation=$_POST['nation'];
    $religion=$_POST['religion'];
    $placeofbirth=$_POST['placeofbirth'];
    $graduationyear=$_POST['graduationyear'];
    $academicpower=$_POST['academicpower'];
    $conduct=$_POST['conduct'];
    $CMT=$_POST['CMT'];
    $dayranger=$_POST['dayranger'];
    $issuedby=$_POST['issuedby'];
    $household=$_POST['household'];
    $MaTinh10=$_POST['MaTinh10'];
    $city10=$_POST['city10'];
    $MaTruong10=$_POST['MaTruong10'];
    $TenTruong10=$_POST['TenTruong10'];
    $MaTinh11=$_POST['MaTinh11'];
    $city11=$_POST['city11'];
    $MaTruong11=$_POST['MaTruong11'];
    $TenTruong11=$_POST['TenTruong11'];
    $MaTinh12=$_POST['MaTinh12'];
    $city12=$_POST['city12'];
    $MaTruong12=$_POST['MaTruong12'];
    $TenTruong12=$_POST['TenTruong12'];
    $object=$_POST['object'];
    $area=$_POST['area'];
    $address=$_POST['address'];
    $SDTThiSinh=$_POST['SDTThiSinh'];
    $SDTPhuHuynh=$_POST['SDTPhuHuynh'];
    $method=$_POST['admission'];



    $avatar_arr = $_FILES['image'];
    if ($avatar_arr['error'] != 0) {
        $error = 'Không thể upload file vì lỗi gì đó';
    } else {
        $extension = pathinfo($avatar_arr['name'], PATHINFO_EXTENSION);
        $size = $avatar_arr['size'] / 1024 / 1024; //Mb
        $arr_extension = ['png', 'jpg', 'jpeg', 'gif'];
        if (in_array($extension, $arr_extension) == FALSE) {
            $error = "Cần upload file dạng ảnh";
        } else if ($size > 0.01) {
            $error = "Chỉ có thể upload file dung lượng  <= 2Mb";
        } else {
            $dir_uploads = __DIR__ . "/uploads";
            if (file_exists($dir_uploads) == FALSE) {
                mkdir($dir_uploads);
            }
            $file_name = time() . $avatar_arr['name'];
            $tmp_name = $avatar_arr['tmp_name'];
            $destination = $dir_uploads . '/' . $file_name;
            $is_upload = move_uploaded_file($tmp_name, $destination);
            if ($is_upload) {
                $result = "Upload file thành công";
            } else {
                $error = "Không thể upload file vì lí do gì đó";
            }
        }
    }



//    if($fullname=='')
//    {
//
//    }

//    echo $file_name;

    isinsert($fullname,$gender,$birthday,$nation,$religion,$placeofbirth,$graduationyear,$academicpower,$conduct,$CMT,$dayranger,$issuedby,$household,$MaTinh10,$city10,$MaTruong10,$MaTinh10,$MaTinh11,$city11,$MaTruong11,$MaTinh11,$MaTinh12,$city12,$MaTruong12,$MaTinh12,$object,$area,$address,$SDTThiSinh,$SDTPhuHuynh,$method,$file_name);


//    echo "$fullname,$gender,$birthday,$nation,$religion,$placeofbirth,$graduationyear,$academicpower,$conduct,$CMT,$dayranger,$issuedby,$household,$MaTinh10,$city10,$MaTruong10,$MaTinh10,$MaTinh11,$city11,$MaTruong11,$MaTinh11,$MaTinh12,$city12,$MaTruong12,$MaTinh12,$object,$area,$address,$SDTThiSinh,$SDTPhuHuynh,$method";
}

