<?php

require_once "includes/connection.php";
require_once "includes/getinfo.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/studentdashboard.css">
    <title>Student section</title>
</head>

<body>

    <div class="container">

        <aside class="left-section">
            <div class="logo">
                <button class="menu-btn" id="menu-close">
                    <i class='bx bx-log-out-circle'></i>
                </button>
                <img src="images/tpplogo.png">
                <a href="contact.html">TPP</a>
            </div>

            <div class="sidebar">
                <div class="item" id="active">
                    <i class='bx bx-home-alt-2'></i>
                    <a href="#">Overview</a>
                </div>
                <div class="item">
                    <i class='bx bx-grid-alt'></i>
                    <a href="subject.php">Take a Test</a>
                </div>
                <div class="item">
                    <i class='bx bx-folder'></i>
                    <a href="#">Resources</a>
                </div>
                <div class="item">
                    <i class='bx bx-message-square-dots'></i>
                    <a href="applyforjob.php">Apply for a Job</a>
                </div>
                <div class="item">
                    <i class='bx bx-cog'></i>
                    <a href="resumebuilder.php">Resume Builder</a>
                </div>
            </div>

            <div class="pic">
                <img src="images/tpplogo.png">
            </div>

            <!-- <div class="upgrade">
                <h5>Upgrade Your Plan</h5>
                <div class="link">
                    <a href="#">Go to <b>PRO</b></a>
                    <i class='bx bxs-chevron-right'></i>
                </div>
            </div> -->

        </aside>

        
        <main class="content" id="defaultContent1">
            <header>
                <button class="menu-btn" id="menu-open">
                    <i class='bx bx-menu'></i>
                </button>
                <h5>Hello <b><?php getusername(); ?></b>, welcome back!</h5>
            </header>

            <div class="separator">
                <div class="info">
                    <h3>My Progress</h3>
                    <a href="#">View All</a>
                </div>
                <div class="search">
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="Search...">
                </div>
            </div>

            <div class="analytics">
                <div class="item">
                    <div class="progress">
                        <div class="info">
                            <h5>Test Attempted</h5>
                            <p>No of test Attempted are</p>
                            <h5><?php echo getnumberoftests();?></h5>
                        </div>
                    </div>
                    <!-- <i class='bx bx-map-pin'></i> -->
                </div>
                <div class="item">
                    <div class="progress">
                        <div class="info">
                            <h5>Scorecard</h5>
                            <p>Average Score</p>
                            <h5><?php echo getAvgScore(); ?></h5>
                        </div>
                    </div>
                    <!-- <i class='bx bx-user-voice'></i> -->
                </div>
                <div class="item">
                    <div class="progress">
                        <div class="info">
                            <h5>Job Applied</h5>
                            <p>No of jobs applied are</p>
                            <h5><?php echo getNumberOfJobs(); ?></h5>
                        </div>
                    </div>
                    <!-- <i class='bx bxs-plane-land'></i> -->
                </div>
                <div class="item">
                    <div class="progress">
                        <div class="info">
                            <h5>Total Students Placed</h5>
                            <p>20 Lessons</p>
                        </div>
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                    <!-- <i class='bx bxs-castle'></i> -->
                </div>
            </div>

            <div class="separator">
                <div class="info">
                    <h3>Planning</h3>
                    <a href="#">View All</a>
                </div>
                <input type="date" value="2023-10-15">
            </div>

            <div class="planning">
                <div class="item">
                    <div class="left">
                        <div class="icon">
                            <i class='bx bx-book-alt'></i>
                        </div>
                        <div class="details">
                            <h5>Reading - Topic 1</h5>
                            <p>8:00 - 10:00</p>
                        </div>
                    </div>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="icon">
                            <i class='bx bx-edit-alt'></i>
                        </div>
                        <div class="details">
                            <h5>Writing - Topic 2</h5>
                            <p>13:00 - 14:00</p>
                        </div>
                    </div>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="icon">
                            <i class='bx bx-headphone'></i>
                        </div>
                        <div class="details">
                            <h5>Listening - Topic 1</h5>
                            <p>15:00 - 16:00</p>
                        </div>
                    </div>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </div>
                <div class="item">
                    <div class="left">
                        <div class="icon">
                            <i class='bx bx-volume-low'></i>
                        </div>
                        <div class="details">
                            <h5>Listening - Topic 2</h5>
                            <p>19:00 - 20:00</p>
                        </div>
                    </div>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </div>
            </div>
        </main>

        <main class="content" id="defaultContent">
            <aside class="right-section">
                <!-- <div class="top">
                    <i class='bx bx-bell'></i>
                    <div class="profile">
                        <div class="left">
                            <img src="assets/profile.jpg">
                            <div class="user">
                                <h5>Pankaj Chingunde</h5>
                                <a href="#">Basic Plan</a>
                            </div>
                        </div>
                        <i class='bx bxs-chevron-right'></i>
                    </div>
                </div> -->

                <div class="separator" id="first">
                    <h4>Statistics</h4>
                </div>

                <div class="stats">
                    <div class="item">
                        <div class="top">
                            <p>Courses</p>
                            <p>Completed</p>
                        </div>
                        <div class="bottom">
                            <div class="line"></div>
                            <h3>02</h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="top">
                            <p>Total Points</p>
                            <p>Gained</p>
                        </div>
                        <div class="bottom">
                            <div class="line"></div>
                            <h3>250</h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="top">
                            <p>Courses</p>
                            <p>In Progress</p>
                        </div>
                        <div class="bottom">
                            <div class="line"></div>
                            <h3>03</h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="top">
                            <p>Tasks</p>
                            <p>Finished</p>
                        </div>
                        <div class="bottom">
                            <div class="line"></div>
                            <h3>250</h3>
                        </div>
                    </div>
                </div>

                <div class="separator">
                    <h4>Weekly Work</h4>
                </div>

                <div class="weekly">
                    <div class="title">
                        <div class="line"></div>
                        <h5>Tasks This Week</h5>
                    </div>
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100">
                    </div>
                </div>

            </aside>
        </main>
    </div>

    <script src="javascript/studentdashboard.js"></script>

</body>

</html>