<?php

require_once "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $postname = $_POST["search"];

    $sql = "SELECT * FROM activejobs WHERE PostName='$postname';";

    $results = mysqli_query($conn, $sql);

    if(mysqli_num_rows($results) > 0){
        foreach($results as $row){
            echo "<span>Current Vacancies :" . $row["Vacancies"] . "</span><br>";
        }
        echo "<label for='password'>Enter number of Vacancies:</label>
        <input type='number' id='password' name='Vacancies' required>";
    }else{
        echo "<span>No such records</span>";
    }

}else{
    header("Location: ../activejobs.php");
}