<?php
require_once "includes/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Post</title>
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
        <table>
            <thead>
                <tr>
                    <th>Post ID</th>
                    <th>Recruiter</th>
                    <th>Company</th>
                    <th>Post Name</th>
                    <th>Salary</th>
                    <th>Verify Data</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM reviewpost;";
                    $result = mysqli_query($conn, $sql);
                    foreach($result as $row) {?>
                        <tr>
                            <form action="includes/reviewposthandler.php" method="post">
                                <input type="hidden" name="postid" value="<?php echo htmlspecialchars($row["postid"]); ?>">
                                <td><?php echo $row['postid'];?></td>
                                <td><?php echo $row['Recruiter'];?></td>
                                <td><?php echo $row['Company'];?></td>
                                <td><?php echo $row['PostName'];?></td>
                                <td><?php echo $row['Salary'];?></td>
                                <td><input type="submit" value="Verify Data" name="Verify"></td>
                                <td><a href="includes/reviewposthandler.php">Delete Data</a></td>
                            </form>
                        </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function(){
            $(".btn-get-data").click(function(){
                var id = $(this).data("id");
                // console.log("Clicked ID:", id);
                $.ajax({
                    url: "includes/reviewposthandler.php",
                    method: "POST",
                    data: {'id': id},
                    success: function(response){
                        $("#data-container").html(response);
                    }
                });
            });
        });
    </script>

</body>
</html>