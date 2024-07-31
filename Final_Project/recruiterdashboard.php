<?php

require_once "includes/connection.php";
require_once "includes/getinfo.php";
require_once "includes/logout.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="shortcut icon" href="./images/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="css/recruiterdashboard.css">
</head>
<body>
    <header>
        <div class="logo" title="University Management System">
            <!-- <img src="./images/logo.png" alt=""> -->
            <h2>T<span class="danger">P</span>P</h2>
        </div>
        <div class="navbar">
            <a href="newapplicant.php">
                <span class="material-icons-sharp">home</span>
                <h3>New Applicants</h3>
            </a>
            <a href="activejobs.php">
                <span class="material-icons-sharp">today</span>
                <h3>Active Jobs</h3>
            </a> 
            <a href="postjobs.php">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Post a job</h3>
            </a>
            <a href="changepassword.php">
                <span class="material-icons-sharp">password</span>
                <h3>Change Password</h3>
            </a>
            <a href="./index.php">
                <span class="material-icons-sharp">logout</span>
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
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg" alt="">
                    </div>
                    <div class="info">
                        <p>Hey, <b><? getusername(); ?></b> </p>
                        <small class="text-muted">100001</small>
                    </div>
                </div>
                <div class="about">
                    <h5>Company</h5>
                    <p><?php echo getCompany(); ?></p>
                    <h5>Recruiter ID</h5>
                    <p><?php echo $_SESSION['user_id']; ?></p>
                    <h5>Recruiter Name</h5>
                    <p><?php getRecruiterName(); ?></p>
                    <h5>Email</h5>
                    <p><?php getemail();?></p>
                    <h5>Address</h5>
                    <p>Ghost town Road, New York, America</p>
                </div>
            </div>
        </aside>

        <main>
            <h1>Dashboard</h1>
            <!-- <div class="subjects">
                <div class="eg">
                    <h3>Post a Job</h3>
                    <h2><button>Post</button></h2>
                </div>
                <div class="eg">
                    <h3>New Applicants</h3>
                    <h2><button>View Details</button></h2>
                </div>
                <div class="eg">
                    <h3>Active Jobs</h3>
                    <h2><button>View Deatils</button></h2>
                </div>
                <div class="eg">
                    <h3>Schedule Interview</h3>
                    <h2><button>View Deatils</button></h2>
                </div>
                <div class="eg">
                    <h3>Post a Job</h3>
                    <h2><button>View Deatils</button></h2>
                </div>
            </div> -->
              <!--  <div class="mth">
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
                    <span id="prevDay">&lt;</span>
                    <h2>Interviews Today</h2>
                    <span id="nextDay">&gt;</span>
                </div>
                <span class="closeBtn" onclick="timeTableAll()">X</span>
                <table>
                    <thead>
                        <tr>
                            <th>Name of Applicant</th>
                            <th>Resume</th>
                            <th>Post</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </main>

        <!-- <div class="right">
            <div class="announcements">
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

            <!-- <div class="leaves">
                <h2>Teachers on leave</h2>
                <div class="teacher">
                    <div class="profile-photo"><img src="./images/profile-2.jpeg" alt=""></div>
                    <div class="info">
                        <h3>The Professor</h3>
                        <small class="text-muted">Full Day</small>
                    </div>
                </div>
                <div class="teacher">
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
                </div>
            </div> -->

        </div>
    </div>
    <!-- <script src="timeTable.js"></script> -->
    <script src="javascript/recruiterdashboard.js"></script>
</body>
</html>