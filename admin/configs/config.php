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
