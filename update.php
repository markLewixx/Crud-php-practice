<?php
include 'config.php';
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $sql = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', email = '$email', password = '$password', gender = '$gender' WHERE id = $id";
    $result = $conn->query($sql);
    if($result === TRUE){
        echo "Record updated successfully";
    }else{
        echo "Error: ". $sql . "<br>" . $conn->error;
    }
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
   if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $password = $row['password'];
    $gender = $row['gender'];
    $id = $row['id'];
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Update Form</h2>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>">
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $email; ?>">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" value="<?php echo $password; ?>">
    </div>
    </body>
    </html>