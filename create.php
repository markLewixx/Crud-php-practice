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
</head>
<body>
    <h1>Create Record</h1>
    <form action="" method="post">
        <label for="firstname">First Name:</label> 
        <input type="text" name="firstname" id="firstname"> <br>
        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname"> <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"> <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"> <br>
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" id="gender" value="male"> Male
        <input type="radio" name="gender" id="gender" value="female"> Female <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>