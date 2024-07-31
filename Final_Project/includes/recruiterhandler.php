<?php

require_once 'connection.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_POST['id'];
    $sql = "DELETE FROM signup WHERE id = $id;";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Updated Successfully..')</script>";
        header("Location: ../managerecruiter.php");
    }
}