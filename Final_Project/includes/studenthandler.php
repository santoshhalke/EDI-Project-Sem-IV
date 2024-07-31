<?php

require_once 'connection.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $sql = "DELETE FROM signup WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: ../managestudent.php");
    }else{
        echo "<h1>Can't Remove Student. Try again..!</h1>";
    }
}else{
    header("Location: ../managestudent.php");
}