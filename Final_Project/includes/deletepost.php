<?php

require_once 'connection.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $postid = $_POST['postid'];
    // echo $postid;
    $sql = "DELETE FROM reviewpost WHERE postid = $postid;";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "Can't delete the post. Try again...!";
    }else{
        header("Location: ../reviewpost.php");
    }
}