<?php

require_once "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $post = $_POST["PostName"];

    $sql = "DELETE FROM activejobs WHERE PostName='$post';";

    $results = mysqli_query($conn, $sql);

    header("Location: ../activejobs.php");
}else{
    header("Location: ../activejobs.php");
}