<?php

require_once "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $postname = $_POST["PostName"];
    $vacancy = $_POST["Vacancies"];

    $sql = "UPDATE activejobs SET Vacancies=$vacancy WHERE PostName='$postname';";

    $results = mysqli_query($conn, $sql);

    header("Location: ../activejobs.php");
}
