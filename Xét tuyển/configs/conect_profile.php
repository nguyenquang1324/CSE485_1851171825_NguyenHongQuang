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

function isinsert($fullname,$gender,$birthday,$nation,$religion,$placeofbirth,$graduationyear,$academicpower,$conduct,$CMT,$dayranger,$issuedby,$household,$MaTinh10,$city10,$MaTruong10,$TenTruong10,$MaTinh11,$city11,$MaTruong11,$TenTruong11,$MaTinh12,$city12,$MaTruong12,$TenTruong12,$object,$area,$address,$SDTThiSinh,$SDTPhuHuynh,$method)
{
    $connect=connection();
    $sql_insert="INSERT INTO `profile` (`fullname`,`gender`,`birthday`,`nation`,`religion`,`placeofbirth`
                                        ,`graduationyear`,`academicpower`,`conduct`,`dayranger`,`issuedby`
                                        ,`household`,`MaTinh10`,`city10`,`MaTruong10`,`TenTruong10`
                                        ,`MaTinh11`,`city11`,`MaTruong11`,`TenTruong11`
                                        ,`MaTinh12`,`city12`,`MaTruong12`,`TenTruong12`,`object`
                                        ,`area`,`address`,`SDTThiSinh`,`SDTPhuHuynh`,`method`)
                                        VALUE 
                                       ('$fullname','$gender','$birthday','$nation','$religion','$placeofbirth'
                                       ,'$graduationyear','$academicpower','$conduct','$CMT','$dayranger'
                                       ,'$issuedby','$household','$MaTinh10','$city10','$MaTruong10'
                                       ,'$TenTruong10','$MaTinh11','$city11','$MaTruong11','$TenTruong11'
                                       ,'$MaTinh12','$city12','$MaTruong12','$TenTruong12','$object'
                                       ,'$area','$address','$SDTThiSinh','$SDTPhuHuynh','$method')
                                         ";
    $result=mysqli_query($connect,$sql_insert);
    if ($result)
    {
        $_SESSION['result']="Insert thành công";
//        header("Location: index.php");
    }
    else
    {
        echo "Insert thất bại";
    }
}
