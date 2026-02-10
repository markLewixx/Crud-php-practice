<?php
include 'config.php';
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

   //save record to database
   $sql = "INSERT INTO users (firstname, lastname, email, password, gender) VALUES ('$firstname', '$lastname', '$email', '$password',  '$gender')";
   $result = $conn->query($sql);
   if($result === TRUE){
    echo "New record created successfully";
   }else{
    echo "Error: ". $sql . "<br>" . $conn->error;
   }
   $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body style="background-color: #f0f0f0; margin:28px;">
    <h1>Create Record</h1>
    <form action="" method="post">
        <label for="firstname">First Name:</label> 
        <input type="text" class="form-control" name="firstname" id="firstname"> <br>
        <label for="lastname">Last Name:</label>
        <input type="text" class="form-control" name="lastname" id="lastname"> <br>
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email"> <br>
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password"> <br>
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" id="gender" value="male"> Male
        <input type="radio" name="gender" id="gender" value="female"> Female <br>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
</body>
</html>