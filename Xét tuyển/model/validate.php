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
    $addresh=$_POST['addresh'];
    $SDTThiSinh=$_POST['SDTThiSinh'];
    $SDTPhuHuynh=$_POST['SDTPhuHuynh'];
    $method=$_POST['admission[]'];

    echo "$fullname,$gender,$birthday,$nation,$religion,$placeofbirth,$graduationyear,$academicpower";
    echo ",$conduct,$CMT,$dayranger,$issuedby,$household,$MaTinh10,$city10,$MaTruong10,$MaTinh10";
    echo ",$MaTinh11,$city11,$MaTruong11,$MaTinh11,$MaTinh12,$city12,$MaTruong12,$MaTinh12";
    echo ",$object,$area,$addresh,$SDTThiSinh,$SDTPhuHuynh,$method";


}

