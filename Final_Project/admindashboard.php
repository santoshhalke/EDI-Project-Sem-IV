<?php

require_once "includes/connection.php";

function getName()
{
    global $conn;
    $id = $_SESSION['user_id'];
    $sql = "SELECT CONCAT(firstname , ' ', lastname) as fullName FROM signup WHERE id = $id;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    return $row["fullName"];
}

function getMail()
{
    global $conn;
    $id = $_SESSION["user_id"];
    $sql = "SELECT * FROM signup WHERE id = $id;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    return $row["email"];
}

function getCollege()
{
    global $conn;
    $id = $_SESSION["user_id"];
    $sql = "SELECT * FROM admincollege WHERE id = $id;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    return $row["CollegeName"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="./images/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="css/recruiterdashboard.css">
</head>

<body>
    <header>
        <div class="logo" title="University Management System">
            <img src="./images/logo.png" alt="">
            <h2>Admin Dashboard</h2>
        </div>
        <div class="navbar">
            <a href="reviewpost.php">
                <span class="material-icons-sharp">home</span>
                <h3>Review Post</h3>
            </a>
            <a href="managestudent.php">
                <span class="material-icons-sharp">today</span>
                <h3>Manage Student</h3>
            </a>
            <a href="managerecruiter.php">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Manage Recruiter</h3>
            </a>
            <a href="changepassword.php">
                <span class="material-icons-sharp">password</span>
                <h3>Change Password</h3>
            </a>
            <a href="index.php">
                <span class="material-icons-sharp" onclick="">logout</span>
                <h3>Logout</h3>
            </a>
        </div>
        <div id="profile-btn">
            <span class="material-icons-sharp">person</span>
        </div>
        <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>

    </header>
    <div class="container">
        <aside>
            <div class="profile">
                <div class="top">
                    <!-- <div class="profile-photo">
                        <img src="./images/profile-1.jpg" alt="">
                    </div> -->
                    <!-- <div class="info">
                        <p>Hey, <b>Alex</b> </p>
                        <small class="text-muted">12102030</small>
                    </div> -->
                </div>
                <div class="about">
                    <h5>ID</h5>
                    <p><?php echo $_SESSION['user_id']; ?></p>
                    <h5>Name</h5>
                    <p><?php echo getName(); ?></p>
                    <h5>College</h5>
                    <p><?php echo getCollege(); ?></p>
                    <h5>Email</h5>
                    <p><?php echo getMail(); ?></p>
                    <h5>Address</h5>
                    <p>Ashok nagar, Tathwade, Pune-411033</p>
                </div>
            </div>
        </aside>

        <main>
            <!-- <h1>Attendance</h1>
            <div class="subjects">
                <div class="eg">
                    <span class="material-icons-sharp">architecture</span>
                    <h3>Engineering Graphics</h3>
                    <h2>12/14</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>86%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <div class="mth">
                    <span class="material-icons-sharp">functions</span>
                    <h3>Mathematical Engineering</h3>
                    <h2>27/29</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>93%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <div class="cs">
                    <span class="material-icons-sharp">computer</span>
                    <h3>Computer Architecture</h3>
                    <h2>27/30</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>81%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <div class="cg">
                    <span class="material-icons-sharp">dns</span>
                    <h3>Database Management</h3>
                    <h2>24/25</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>96%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <div class="net">
                    <span class="material-icons-sharp">router</span>
                    <h3>Network Security</h3>
                    <h2>25/27</h2>
                    <div class="progress">
                        <svg><circle cx="38" cy="38" r="36"></circle></svg>
                        <div class="number"><p>92%</p></div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
            </div> -->

            <div class="timetable" id="timetable">
                <div>
                    <h2>Recent Job Posts</h2>
                </div>
                <span class="closeBtn">X</span>
                <table>
                    <thead>
                        <tr>
                            <th>Post ID</th>
                            <th>Recruiter</th>
                            <th>Company</th>
                            <th>Post Name</th>
                            <th>Salary</th>
                            <th>Verify Data</th>
                            <!-- <th>Delete</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM reviewpost;";
                        $result = mysqli_query($conn, $sql);
                        foreach ($result as $row) { ?>
                            <tr>
                                    <td><?php echo $row['postid']; ?></td>
                                    <td><?php echo $row['Recruiter']; ?></td>
                                    <td><?php echo $row['Company']; ?></td>
                                    <td><?php echo $row['PostName']; ?></td>
                                    <td><?php echo $row['Salary']; ?></td>
                                    <!-- <td><input type="submit" value="Take Action" name="Verify"></td> -->
                                    <td><a href="reviewpost.php">action</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>

        <div class="right">
            <!-- <div class="announcements">
                <h2>Announcements</h2>
                <div class="updates">
                    <div class="message">
                        <p> <b>Academic</b> Summer training internship with Live Projects.</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                    <div class="message">
                        <p> <b>Co-curricular</b> Global internship oportunity by Student organization.</p>
                        <small class="text-muted">10 Minutes Ago</small>
                    </div>
                    <div class="message">
                        <p> <b>Examination</b> Instructions for Mid Term Examination.</p>
                        <small class="text-muted">Yesterday</small>
                    </div>
                </div>
            </div> -->

            <div class="leaves">
                <h2>Recent Recruiters</h2>
                <?php
                $sql = "SELECT * FROM signup s NATURAL JOIN recruitercompany r WHERE s.signupas = 'recruiter' and s.id = r.id;";
                $result = mysqli_query($conn, $sql);
                foreach ($result as $row) { ?>
                    <div class="teacher">
                        <div class="profile-photo"><img src="./images/profile-2.jpeg" alt=""></div>
                        <div class="info">
                            <h3><?php echo $row['firstname']; ?></h3>
                            <h4><?php echo $row['CompanyName']; ?></h4>
                            <small><a href="managerecruiter.php">action</a></small>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <!-- <div class="teacher">
                    <div class="profile-photo"><img src="./images/profile-3.jpg" alt=""></div>
                    <div class="info">
                        <h3>Lisa Manobal</h3>
                        <small class="text-muted">Half Day</small>
                    </div>
                </div>
                <div class="teacher">
                    <div class="profile-photo"><img src="./images/profile-4.jpg" alt=""></div>
                    <div class="info">
                        <h3>Himanshu Jindal</h3>
                        <small class="text-muted">Full Day</small>
                    </div>
                </div> -->
            </div>

        </div>
    </div>
    <script src="javascript/recruiterdashboard.js"></script>
</body>

</html>