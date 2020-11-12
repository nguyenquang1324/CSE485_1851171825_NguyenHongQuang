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

function isinsert($fullname,$gender,$birthday,$nation,$religion,$placeofbirth,$graduationyear,$academicpower,$conduct,$CMT,$dayranger,$issuedby,$household,$MaTinh10,$city10,$MaTruong10,$TenTruong10,$MaTinh11,$city11,$MaTruong11,$TenTruong11,$MaTinh12,$city12,$MaTruong12,$TenTruong12,$object,$area,$address,$SDTThiSinh,$SDTPhuHuynh,$method,$image)
{
    $connect=connection();
    $sql_insert="INSERT INTO `profile` (`fullname`,`gender`,`birthday`,`nation`,`religion`,`placeofbirth`
                                        ,`graduationyear`,`academicpower`,`conduct`,`CMT`,`dayranger`,`issuedby`
                                        ,`household`,`MaTinh10`,`city10`,`MaTruong10`,`TenTruong10`
                                        ,`MaTinh11`,`city11`,`MaTruong11`,`TenTruong11`
                                        ,`MaTinh12`,`city12`,`MaTruong12`,`TenTruong12`,`object`
                                        ,`area`,`address`,`SDTThiSinh`,`SDTPhuHuynh`,`method`,`image`)
                                        VALUE 
                                       ('$fullname','$gender','$birthday','$nation','$religion','$placeofbirth'
                                       ,'$graduationyear','$academicpower','$conduct','$CMT','$dayranger'
                                       ,'$issuedby','$household','$MaTinh10','$city10','$MaTruong10'
                                       ,'$TenTruong10','$MaTinh11','$city11','$MaTruong11','$TenTruong11'
                                       ,'$MaTinh12','$city12','$MaTruong12','$TenTruong12','$object'
                                       ,'$area','$address','$SDTThiSinh','$SDTPhuHuynh','$method','$image')
                                         ";
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


function selectall()
{
    $connect=connection();
    $sqL_select="SELECT * FROM profile";
    $result=mysqli_query($connect,$sqL_select);
    $users=mysqli_fetch_all($result);
    return $users;
}
