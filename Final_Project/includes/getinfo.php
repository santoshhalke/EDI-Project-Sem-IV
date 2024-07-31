<?php
require_once "connection.php";

function getRecruiterName(){
    global $conn;
    $id = $_SESSION['user_id'];

    $sql = "SELECT CONCAT(firstname , ' ',lastname) as FullName FROM signup WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo $row["FullName"];
}

function getCompany(){
    global $conn;
    $id = $_SESSION['user_id'];

    $sql = "SELECT CompanyName FROM recruitercompany WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    return $row["CompanyName"];
}
function getemail(){
    global $conn;
    $id = $_SESSION['user_id'];

    $sql = "SELECT email FROM signup WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo $row["email"];
}

function getnumberoftests(){
    global $conn;
    $id = $_SESSION["user_id"];
    $sql = "SELECT COUNT(test_id) as tests FROM testresults WHERE student_id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    return $row["tests"];
}

function getAvgScore(){
    global $conn;
    $id = $_SESSION["user_id"];
    $sql = "SELECT AVG(SCORE) as avgscore FROM testresults WHERE student_id=$id;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    return $row["avgscore"];
}

function getNumberOfJobs(){
    global $conn;
    $id = $_SESSION["user_id"];
    $sql = "SELECT COUNT(id) as totalpost FROM newapplications WHERE id = $id;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    return $row["totalpost"];
}