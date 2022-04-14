<?php
$servername = "localhost";
$username = "root";          //<- эти параметры можно менять
$password = "";
$database = "x-db";

$conn =  new mysqli($servername,$username,$password,$database); //Установка соединения с базой данных

if(!$conn) //<- Проверка установки соединения
{
    die("no connect". mysqli_connect_error()); 
}


