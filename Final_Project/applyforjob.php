<?php
require_once 'includes/connection.php';
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

        .search-bar {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
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

        th,
        td {
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

        button {}
    </style>
</head>

<body>


    <div class="container">
        <h1>Job Search</h1>
        <form action="jobsearch.php" method="post">
            <input type="text" name="searchInput" class="search-bar" placeholder="Enter Company Name">
            <button>Search</button>
        </form>
    </div>

    <div class="conatiner">
        <?php
        $sql = "SELECT * FROM applyforjob;";
        $results = mysqli_query($conn, $sql);
        ?>
        <ul id="jobList" class="job-list">
            <?php
            if (empty($results)) { ?>
                <h3>There are no Posts</h3>
            <?php
            } else {
                foreach ($results as $row) {
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
                                        <input type="hidden" name="postid" value="<?php echo $row['postid']; ?>">
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

    <script>
        // Function to add a job opportunity
        function addJob() {
            var jobInput = document.getElementById("jobInput");
            var jobTitle = jobInput.value.trim();

            if (jobTitle !== "") {
                var jobList = document.getElementById("jobList");
                var listItem = document.createElement("li");
                listItem.className = "job-item";
                listItem.textContent = jobTitle;
                jobList.appendChild(listItem);
                jobInput.value = ""; // Clear input field after adding job
            }
        }

        // Function to filter job list based on search input
        document.getElementById("searchInput").addEventListener("input", function () {
            var searchInput = this.value.toLowerCase();
            var jobItems = document.querySelectorAll(".job-item");

            jobItems.forEach(function (item) {
                var jobTitle = item.textContent.toLowerCase();
                if (jobTitle.includes(searchInput)) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        });
    </script>
</body>

</html>