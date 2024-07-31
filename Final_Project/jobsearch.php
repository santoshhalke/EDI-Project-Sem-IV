<?php

require_once "includes/connection.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $post = $_POST['searchInput'];
    $sql = "SELECT * FROM applyforjob WHERE company = '$post';";
    $result = mysqli_query($conn, $sql);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job Search</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .job-list {
            list-style-type: none;
            padding: 0;
        }

        .job-item {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f9f9f9;
        }
    </style>
    </head>
    <body>
        <div class="conatiner">
            <ul id="jobList" class="job-list">
                <?php
                    if(empty($result)){ ?>
                         <h3>There are no Posts</h3>
                    <?php 
                    } else {  
                       foreach($result as $row) { 
                    ?>
                        <div class="container">
                        <h1>Job Post</h1>
                        <table>
                            <thead>                                
                                <tr>
                                    <th>Recruiter Name</th>
                                    <th>Company</th>
                                    <th>Post Name</th>
                                    <th>Salary</th>
                                    <th>Apply For Job</th>
                                </tr>
                            </thead>   
                            <tbody>
                               <tr>
                                   <form action="includes/applicationhandler.php" method="post">
                                        <input type="hidden" name="postid" value="<?php echo $row['postid'];?>">
                                        <input type="hidden" name="postName" value="<?php echo $row['postname'] ?>">
                                        <td><?php echo htmlspecialchars($row["recruiter"]); ?></td>
                                        <td><?php echo htmlspecialchars($row["company"]); ?></td>
                                        <td><?php echo htmlspecialchars($row["postname"]); ?></td>
                                        <td><?php echo htmlspecialchars($row["salary"]); ?></td>
                                        <td><button>Apply</button></td>
                                    </form>
                                </tr> 
                            </tbody>
                        </table>
                        </div>
                            <?php
                            }
                        }
                        ?>
            </ul>
        </div>
    </body>
    </html>
    <?php
}
?>