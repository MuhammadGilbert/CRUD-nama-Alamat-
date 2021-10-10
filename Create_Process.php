<?php

include './connection.php';

$name = $_POST["name"];
$address = $_POST["address"];

$sql = "
        insert into student (name, address)
        values ('". $name ."','". $address ."');
        ";

$result = mysqli_query($conn, $sql);
if($result) {
    header('Location: index.php');
} else {
    printf('failed create student: ' . mysqli_error($conn));
    exit();
}
