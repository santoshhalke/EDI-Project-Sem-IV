<?php
require_once 'connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $score = $_POST['search'];
    $id = $_SESSION['user_id'];
    if(true){
        $sql = "INSERT INTO testresults(student_id, score) values($id, $score);";
        $result = mysqli_query($conn, $sql);
    }
}