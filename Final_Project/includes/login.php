<?php
require_once "connection.php";

if(isset($_POST["submit"])){
    $emailid = $_POST["email"];
    $password = $_POST["pass"];
    $selectquery = "SELECT * FROM signup";

    $query = mysqli_query($conn, $selectquery);
    // $row = mysqli_fetch_array($query);
    
    if(mysqli_num_rows($query) > 0){
        foreach($query as $row){
            // var_dump($row);
            if($row["email"] == $emailid and $row['Pass'] == $password){
                if(mysqli_num_rows($query) > 0){
                    $_SESSION['user_id'] = $row['id'];
                    // echo $row['signupas'];
                    // echo $_SESSION['user_id'];
                    if($row['signupas'] == 'recruiter'){
                        header('Location: ../recruiterdashboard.php');
                    }else if($row['signupas'] == 'student'){
                        header('Location: ../studentdashboard.php');
                    }else if($row['signupas'] == 'admin'){
                        header('Location: ../admindashboard.php');
                    }else{
                        echo '<h1>You are not a current User Please Sign up</h1>';
                    }
                }
            }
        }  
        echo 'Wrong password or email';
        echo '<br>';
    }else{  
        echo 'Data fetching failed ';
    }
    
}

 /*   if($query){
          while($res=mysqli_fetch_array($query)){

            if($res["email"]== "$emailid" and $res["password"]=="$password"){
                $otp=rand(1000,9999);
                $to_email = $emailid;
                $to="pankaj";
                $subject = "Verification Code";
                $body = "Hi  ".$to.",".$otp." is your otp for login";
                $headers = "From: pankajchingunde10@gmail.com";

                if (mail($to_email, $subject, $body, $headers)) {
                    echo "Email successfully sent to $to_email..."."<br>";
                }else{
                    echo "Email sending  failed...";
                } 
                echo '<script>';
                echo 'var otpp = "' . $otp . '";';

                echo 'function checkOTP() {';
                echo '  var check = prompt("Enter the OTP:");';
                
                echo '  if (check === otpp) {';
                echo '    alert("Login Successful");';
                echo '    window.location.href="main.html";';
                echo '  } else {';
                echo '    alert("Invalid OTP");';
                echo '  }';
                echo '}';
                echo 'checkOTP();';
                echo '</script>';
            }

            if($res["email"]== "$email" and $res["password"]=="$password" and $res["use1"]=="recruiter"){
                $otp=rand(1000,9999);
                $to_email = $res["email"];
                $to=$res["firstname"];
                $subject = "Verification Code";
                $body = "Hi  ".$to.",".$otp." is your otp for login";
                $headers = "From: pankajchingunde10@gmail.com";

                if (mail($to_email, $subject, $body, $headers)) {
                    echo "Email successfully sent to $to_email..."."<br>";
                } else {
                    echo "Email sending  failed...";
                } 
                echo '<script>';
                echo 'var otpp = "' . $otp . '";';

                echo 'function checkOTP() {';
                echo '  var check = prompt("Enter the OTP:");';
                
                echo '  if (check === otpp) {';
                echo '    alert("Login Successful");';
                echo '    window.location.href="recruiter.html";';
                echo '  } else {';
                echo '    alert("Invalid OTP");';
                echo '  }';
                echo '}';
                echo 'checkOTP();';
                echo '</script>';
            }
            
            if($res["email"]== "$email" and $res["password"]=="$password" and $res["use1"]=="admin"){
                $otp=rand(1000,9999);
                $to_email = $res["email"];
                $to=$res["firstname"];
                $subject = "Verification Code";
                $body = "Hi  ".$to.",".$otp." is your otp for login";
                $headers = "From: pankajchingunde10@gmail.com";

                if (mail($to_email, $subject, $body, $headers)) {
                    echo "Email successfully sent to $to_email..."."<br>";
                } else {
                    echo "Email sending  failed...";
                } 
                echo '<script>';
                echo 'var otpp = "' . $otp . '";';

                echo 'function checkOTP() {';
                echo '  var check = prompt("Enter the OTP:");';
                
                echo '  if (check === otpp) {';
                echo '    alert("Login Successful");';
                echo '    window.location.href="admin.html";';
                echo '  } else {';
                echo '    alert("Invalid OTP");';
                echo '  }';
                echo '}';
                echo 'checkOTP();';
                echo '</script>';
            }
        }
    }
}
*/
