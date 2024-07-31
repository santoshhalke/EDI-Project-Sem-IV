<?php

require_once "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $userid = $_SESSION['user_id'];
    $postid = $_POST['postid'];
    $post = $_POST['postName'];

    // echo $post;
    $sql = "SELECT CONCAT(firstname , ' ', lastname) as fullName FROM signup WHERE id = $userid";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $fullName = $row["fullName"];
        $sql = "INSERT INTO newapplications(postid,	id,	Name_of_Applicant,	Post) VALUES($postid, $userid, '$fullName', '$post');";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo "<h1>Can't Apply. Try Again..!</h2>";
        }else{
            echo "<script>console.log('Applied Successfully..')</script>";
            header("Location: ../applyforjob.php");
        }
    }else{
        echo "<h1>Can't Apply. Try Again..!</h2>";
    }
}