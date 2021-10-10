<?php

include './connection.php';

$id = $_GET['id'];

$sql = "
    delete from student
    where id = '". $id ."';
    ";

    $result = mysqli_query($conn, $sql);
    if($result) {
        header('Location: index.php');
    } else {
        printf('failed delete student: ' . mysqli_error($conn));
        exit();
    }
