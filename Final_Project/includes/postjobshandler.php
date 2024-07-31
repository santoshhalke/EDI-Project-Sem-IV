<?php

require_once 'connection.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_SESSION['user_id'];
    $post = $_POST['postName'];
    $salary = $_POST['salary'];

    $sql = "SELECT CONCAT(firstname, ' ', lastname) as fullName FROM signup WHERE id = $id;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $fullName = $row['fullName'];

    $sql = "SELECT CompanyName FROM recruitercompany WHERE id = $id;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $company = $row["CompanyName"];

    $sql = "INSERT INTO reviewpost(Recruiter, Company, PostName, Salary) VALUES('$fullName', '$company', '$post', $salary)";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Inserted Successfully....')</script>";
    }
}