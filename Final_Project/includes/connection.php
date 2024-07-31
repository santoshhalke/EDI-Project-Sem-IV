<?php
session_start();

$servername = "localhost";
$username = "root";
$dbpass = "";
$dbname = "tpp_database";

$conn = mysqli_connect($servername, $username, $dbpass, $dbname);

function getusername(){
    // require_once "connection.php";
    global $conn;
    $userid = $_SESSION['user_id'];
    
    $sql = "SELECT * FROM signup WHERE id = $userid";

    $result = mysqli_query($conn, $sql);

    // var_dump($result);
    foreach($result as $row){
        echo $row["firstname"];
    }
}

