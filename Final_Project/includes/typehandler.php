<?php

require_once "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $type = $_POST["type"];
    $id = $_SESSION["user_id"]; 
    $sql = "SELECT id,signupas from signup WHERE id=$id;";
    $result = mysqli_query($conn, $sql);
    foreach($result as $row)
        $role = $row["signupas"];
    if($role == "recruiter"){
        foreach($result as $row){
            $number = $row['id'];
            $sql = "INSERT INTO recruitercompany VALUES($number, '$type');";
            $final = mysqli_query($conn, $sql);
        } 
    }else if($role == "admin"){
        foreach($result as $row){
            $number = $row['id'];
            $sql = "INSERT INTO admincollege VALUES($number, '$type');";
            $final = mysqli_query($conn, $sql);
        } 
    }else{
        foreach($result as $row){
            $number = $row['id'];
            $sql = "INSERT INTO studentcollege VALUES($number, '$type');";
            $final = mysqli_query($conn, $sql);
        } 
    }
    header("Location: ../index.php");
}else{
    header("Location: signup.php");
}