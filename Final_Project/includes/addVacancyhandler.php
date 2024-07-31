<?php

require_once "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $postname = $_POST["PostName"];
    $vacancies = $_POST["Vacancies"];
    
    $sql = "INSERT INTO activejobs VALUES('$postname', $vacancies)";

    $result = mysqli_query($conn, $sql);

    // if($result){
    //     echo "Inseted Succesfully..";
    // }else{
    //     echo "Insertion Failed";
    // }

    header("Location: ../activejobs.php");
}else{
    header("Location: ../activejobs.php");
}