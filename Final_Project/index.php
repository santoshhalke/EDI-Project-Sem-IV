<?php
//  logout();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training and Placement Panel</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>
    <nav>
        <img src="images/logo.jpeg">
        <div class="navigation">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!--HOME -->
    <section id="home">
        <h2>Enhance Your Placement Preparation</h2>
        <p>An ecosystem where you can prepare for placements,enhance your skills,build connections with different companies and apply for your dream job</p>
        <div class="btn">
            <a class="blue" href="#">Learn More</a>
            <a class="yellow" href="#">Visit Courses</a>
        </div>
    </section>

    <!-- features-->
    <section id="features">
        <h1>Awesome Features</h1>
        <p>Below are amazing features of our website</p>
        <div class="fea-base">
            <div class="fea-box">
                <i class="fas fa-graduation-cap"></i>
                <h3>Training Facility</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="fea-box">
                <i class="fas fa-file-certificate"></i>
                <h3>Online Certification</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="fea-box">
                <i class="fas fa-award"></i>
                <h3>Job Opportunities</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </section>

    <!--Login-->


    <section id="registration">
        <div class="reminder">
            <h1>Please login here</h1>
            <h3><strong>Don't have an account?</strong><a href="./signup.php"><span>Sign Up</span></a></h3>
        </div>
        <div class="form">
            <h3>LOGIN</h3>
            <form class="sign-in" action="includes/login.php" method="POST">
                <label for="uname">Username</label>
                <input type="text" id="uname" placeholder="Enter Username" name="email"><br><br>
                <label for="pass">password</label>
                <input type="text" id="pass" placeholder="Enter password" name="pass"><br><br>
                <input type="submit" value="submit" class="su" name="submit">
            </form>
        </div>
    </section>

    <!-- Recruiters Profile-->
    <section id="experts">
        <h1>TOP RECRUITERS</h1>
        <p>These are the companies with highest placement offers</p>
        <div class="expert-box">
            <div class="profile">
                <img src="images/google.jpeg" alt="">
                <h6>Google</h6>
                <p>Lorem ipsum dolor sit.</p>
                <div class="pro-links">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
            <div class="profile">
                <img src="images/amazonlogo.jpeg" alt="">
                <h6>Amazon</h6>
                <p>Lorem ipsum dolor sit.</p>
                <div class="pro-links">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
            <div class="profile">
                <img src="images/logo4.jpeg" alt="">
                <h6>Microsoft</h6>
                <p>Lorem ipsum dolor sit.</p>
                <div class="pro-links">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
            <div class="profile">
                <img src="images/logo3.jpeg" alt="">
                <h6>Oracle</h6>
                <p>Lorem ipsum dolor sit.</p>
                <div class="pro-links">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer>
        <div class="footer-col">
            <h3>Top Products</h3>
            <li>Manage Reputation</li>
            <li>Power Tools</li>
            <li>Managed Website</li>
            <li>Marketing Service</li>
        </div>
        <div class="footer-col">
            <h3>Top Products</h3>
            <li>Manage Reputation</li>
            <li>Power Tools</li>
            <li>Managed Website</li>
            <li>Marketing Service</li>
        </div>
        <div class="footer-col">
            <h3>Top Products</h3>
            <li>Manage Reputation</li>
            <li>Power Tools</li>
            <li>Managed Website</li>
            <li>Marketing Service</li>
        </div>
        <div class="footer-col">
            <h3>Top Products</h3>
            <li>Manage Reputation</li>
            <li>Power Tools</li>
            <li>Managed Website</li>
            <li>Marketing Service</li>
        </div>
        <div class="footer-col">
            <h3>News Letter</h3>
            <p>You can trust us,we only send promo offers</p>
            <div class="subscribe">
                <input type="text" placeholder="Your Email address">
                <a href="#" class="yellow">SUBSCRIBE</a>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright @2024 All rights reserved</p>
            <div class="pro-links">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin-in"></i>
            </div>
        </div>
    </footer>
    <script>
    // Navaigation Bar
    </script>
</body>
</html>