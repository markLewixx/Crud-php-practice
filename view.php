<?php
include 'config.php';
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$conn->close();
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 </head>
 <body>
    <div class="container">
        <h2>user</h2>
        <table class="table">
            <thread>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thread>
            <tbody>
                <?php   
                while($row = $result->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["firstname"]; ?></td>
                        <td><?php echo $row["lastname"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["gender"]; ?></td>
                        <td>
                        <a href='update.php?id=<?php echo $row["id"]; ?>' class='btn btn-primary'>Edit</a> 
                        <a href='delete.php?id=<?php echo $row["id"]; ?>' class='btn btn-danger'>Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

    </div>
 </body>
 </html>