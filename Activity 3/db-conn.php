<?php
    $host="localhost";
    $username="root";
    $password="";
    $db="user-reg";

    $strconn = new mysqli ($host, $username, $password, $db);

if($strconn -> connect_error){
    die("Connection Failed: " . $strconn -> connect_error);
}
?>