<?php
require_once "includes/connection.php";
require_once "includes/getinfo.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Resume Documents</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Applicant Resume Documents</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Resume Document</th>
                    <th>Schedule Interview</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $company = getCompany();
                $sql = "SELECT Name_of_Applicant FROM newapplications n NATURAL JOIN applyforjob a WHERE n.postid = a.postid and a.company = '$company';";
                $results = mysqli_query($conn, $sql);
                if (!empty($results)) {
                    foreach ($results as $row) { ?>
                        <tr>
                            <form action="scheduleinterview.php" method="post">
                                <!-- <input type="hidden" name="NameofApplicant" value="<?php
                                //echo htmlspecialchars($row["Name_of_Applicant"]); ?>">
                        <input type="hidden" name="document" value="NULL"> -->
                                <td><?php echo htmlspecialchars($row["Name_of_Applicant"]); ?></td>
                                <td>NULL</td>
                                <td><input type="submit" value="Schedule"></td>
                            </form>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>